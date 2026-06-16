<?php
/**
 * VAI Theme — functions.php
 */
function vai_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_block_library_style');
}
add_action('after_setup_theme', 'vai_theme_setup');

function vai_enqueue_assets() {
    wp_enqueue_style('vai-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=DM+Sans:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('vai-theme', get_stylesheet_uri(), array('vai-google-fonts'), '1.0');
    wp_enqueue_script('vai-theme', get_theme_file_uri('assets/vai.js'), array(), '1.0', true);
    if (is_page('contact-us')) {
        wp_enqueue_script('vai-contact', get_theme_file_uri('assets/contact.js'), array(), '1.0', true);
        wp_localize_script('vai-contact', 'VAI_CONTACT', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('vai_contact'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'vai_enqueue_assets');

// On theme activation, create homepage page if not exists
function vai_activate() {
    $home = get_page_by_title('Home — VAI');
    if (!$home) {
        wp_insert_post(array(
            'post_title'   => 'Home — VAI',
            'post_content' => '<!-- VAI Homepage — managed via theme template -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'home',
        ));
    }
    update_option('show_on_front', 'page');
    $home = get_page_by_title('Home — VAI');
    if ($home) update_option('page_on_front', $home->ID);
}
add_action('after_switch_theme', 'vai_activate');

// Helper: theme asset URL
function vai_asset($path) {
    return esc_url(get_theme_file_uri('assets/' . $path));
}

// Helper: resolve in-page hash links. On home, use bare hash; on other pages, route to home + hash.
function vai_hash_link($hash) {
    $is_home = is_front_page() || (int) get_queried_object_id() === (int) get_option('page_on_front');
    return $is_home ? $hash : home_url('/' . $hash);
}

add_action("template_include", function($template) {
  if (is_page()) {
  }
  return $template;
}, 999);

// --- Contact form AJAX handler ---
function vai_handle_contact() {
    // 1. Nonce
    if (empty($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'vai_contact')) {
        wp_send_json_error(array('msg' => 'Invalid request token. Please reload the page and try again.'), 403);
    }

    // 2. Honeypot — bots fill the hidden field, humans never see it
    if (!empty($_POST['vai_website'])) {
        wp_send_json_success(array('msg' => 'Thanks! Your inquiry has been received.'));
    }

    // 3. Rate limit per IP: 1/30s, 5/hour
    $ip = isset($_SERVER['REMOTE_ADDR']) ? sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'])) : '0.0.0.0';
    $rate_key = 'vai_contact_rl_' . md5($ip);
    $recent = (int) get_transient($rate_key);
    if ($recent >= 5) {
        wp_send_json_error(array('msg' => 'Too many submissions. Please try again later or message us on WhatsApp.'), 429);
    }
    $cooldown_key = 'vai_contact_cd_' . md5($ip);
    if (get_transient($cooldown_key)) {
        wp_send_json_error(array('msg' => 'Please wait a moment before sending another message.'), 429);
    }

    // 4. Validate fields
    $name    = isset($_POST['name'])    ? sanitize_text_field(wp_unslash($_POST['name']))    : '';
    $email   = isset($_POST['email'])   ? sanitize_email(wp_unslash($_POST['email']))         : '';
    $company = isset($_POST['company']) ? sanitize_text_field(wp_unslash($_POST['company'])) : '';
    $country = isset($_POST['country']) ? sanitize_text_field(wp_unslash($_POST['country'])) : '';
    $need    = isset($_POST['need'])    ? sanitize_text_field(wp_unslash($_POST['need']))    : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';
    $consent = !empty($_POST['consent']);

    $errors = array();
    if (strlen($name) < 2)        { $errors[] = 'Name is required.'; }
    if (!is_email($email))         { $errors[] = 'A valid email is required.'; }
    if (strlen($message) < 10)     { $errors[] = 'Please tell us a bit more about your workload (at least 10 characters).'; }
    if (!$consent)                 { $errors[] = 'Please agree to be contacted.'; }
    if (!empty($errors)) {
        wp_send_json_error(array('msg' => implode(' ', $errors)), 400);
    }

    // 5. Compose email
    $to        = 'hello@virtualassistant.id';
    $subject   = sprintf('[VAI Website] New inquiry from %s', $name);
    $body      = "New inquiry from the VAI website contact form.\n\n"
               . "Name:    {$name}\n"
               . "Email:   {$email}\n"
               . "Company: {$company}\n"
               . "Country: {$country}\n"
               . "Need:    {$need}\n\n"
               . "Message:\n{$message}\n\n"
               . "--\n"
               . "Sent: " . current_time('mysql') . "\n"
               . "IP:   {$ip}\n";
    $headers   = array(
        'Reply-To: ' . $name . ' <' . $email . '>',
        'Content-Type: text/plain; charset=UTF-8',
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    // 6. Bump rate limit
    set_transient($cooldown_key, 1, 30);
    set_transient($rate_key, $recent + 1, HOUR_IN_SECONDS);

    if (!$sent) {
        // Local-dev fallback: write the email to a log so the inquiry is never lost.
        $log_file = WP_CONTENT_DIR . '/vai-mail.log';
        $entry = sprintf(
            "[%s] FAILED wp_mail, captured to log\nTo: %s\nSubject: %s\n%s\n%s\n",
            current_time('mysql'),
            $to,
            $subject,
            implode("\n", $headers),
            $body
        );
        @file_put_contents($log_file, $entry, FILE_APPEND | LOCK_EX);
        wp_send_json_success(array(
            'msg' => 'Thanks ' . $name . '! Your message has been received. We will reply within 1 business day.'
        ));
    }

    wp_send_json_success(array('msg' => 'Thanks ' . $name . '! Your message is on its way. We will reply within 1 business day.'));
}
add_action('wp_ajax_vai_contact', 'vai_handle_contact');
add_action('wp_ajax_nopriv_vai_contact', 'vai_handle_contact');
