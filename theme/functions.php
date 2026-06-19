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
    // ClickUp display fonts + Cormorant Garamond for editorial italic accents (boutique warmth)
    wp_enqueue_style('vai-google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;650;700&family=Inter:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&display=swap', array(), null);
    wp_enqueue_style('vai-theme', get_stylesheet_uri(), array('vai-google-fonts'), '5.1');
    wp_enqueue_script('vai-theme', get_theme_file_uri('assets/vai.js'), array(), '5.1', true);
    if (is_page('contact-us')) {
        wp_enqueue_script('vai-contact', get_theme_file_uri('assets/contact.js'), array(), '5.1', true);
        wp_localize_script('vai-contact', 'VAI_CONTACT', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('vai_contact'),
        ));
    }
}

// Force theme assets to load relative-to-host. WP enqueue uses home_url()
// which points to the live domain (vai.168-144-37-19.sslip.io) but the page
// may be served from localhost:8091 in dev — without this filter the browser
// blocks the cross-origin script load (mixed content + CORS).
function vai_force_relative_asset_url($src) {
    if (empty($src)) return $src;
    if (strpos($src, '/wp-content/themes/vai-theme/') === false) return $src;
    $req_host = isset($_SERVER['HTTP_HOST']) ? strtolower($_SERVER['HTTP_HOST']) : '';
    $url_host = parse_url($src, PHP_URL_HOST);
    if ($req_host && $url_host && strtolower($url_host) !== $req_host) {
        $path  = parse_url($src, PHP_URL_PATH);
        $query = parse_url($src, PHP_URL_QUERY);
        return $path . ($query ? '?' . $query : '');
    }
    return $src;
}
add_filter('style_loader_src',  'vai_force_relative_asset_url', 999);
add_filter('script_loader_src', 'vai_force_relative_asset_url', 999);
add_action('wp_enqueue_scripts', 'vai_enqueue_assets');

// ACF: setup, field groups, helpers
require_once get_stylesheet_directory() . '/inc/acf-setup.php';

/* URL ADAPT — make home_url/site_url return current request host
 * --------------------------------------------------------------
 * Production canonical: https://vai.168-144-37-19.sslip.io (set in wp-config)
 * Local dev:           http://localhost:8091
 *
 * When the user accesses via SSLIP domain, every home_url() / site_url() call
 * must return the SSLIP URL. When accessed via localhost:8091, return that.
 * This filter overrides the canonical config based on the actual request host.
 */
if ( ! function_exists( 'vai_adapt_url_to_request' ) ) {
    function vai_adapt_url_to_request( $url, $path = '', $scheme = null ) {
        if ( empty( $_SERVER['HTTP_HOST'] ) ) return $url;
        $req_host = strtolower( $_SERVER['HTTP_HOST'] );
        $url_host = strtolower( (string) parse_url( $url, PHP_URL_HOST ) );
        if ( $url_host === $req_host ) return $url;
        // Detect scheme from current request — keep HTTPS if request was https
        $proto = ( ! empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' ) ? 'https' : 'http';
        return $proto . '://' . $req_host . '/' . ltrim( (string) $path, '/' );
    }
}
add_filter( 'home_url',  'vai_adapt_url_to_request', 10, 2 );
add_filter( 'site_url',  'vai_adapt_url_to_request', 10, 2 );

// Helper: get ACF field with fallback. Returns $default if field empty/missing.
// Use in templates: echo vai_f('home_hero_title', 'Your trusted assistant.');
if ( ! function_exists( 'vai_f' ) ) {
    function vai_f( $name, $default = '' ) {
        if ( ! function_exists( 'get_field' ) ) return $default;
        $v = get_field( $name );
        if ( $v === false || $v === null || $v === '' ) return $default;
        return $v;
    }
}

// Helper: build a 3-part title (pre + <em>italic</em> + post) from ACF fields.
// Usage: echo vai_title('home_hero', ['Your trusted', 'assistant', 'in the next room.']);
if ( ! function_exists( 'vai_title' ) ) {
    function vai_title( $prefix, $defaults = ['', '', ''] ) {
        $pre  = vai_f( $prefix . '_pre',  $defaults[0] ?? '' );
        $em   = vai_f( $prefix . '_em',   $defaults[1] ?? '' );
        $post = vai_f( $prefix . '_post', $defaults[2] ?? '' );
        $out  = trim( $pre );
        if ( $em !== '' )   $out .= ' <em>' . esc_html( $em ) . '</em>';
        if ( $post !== '' ) $out .= ' ' . trim( $post );
        // Allow safe inline HTML in pre/post (e.g. <br>) so users can shape the layout.
        return wp_kses_post( $out );
    }
}

// Helper: render an array field as <li> items, one per line. Returns li elements (no <ul>).
if ( ! function_exists( 'vai_list' ) ) {
    function vai_list( $value, $default = '' ) {
        $raw = ( $value === '' || $value === null ) ? $default : $value;
        $lines = preg_split( "/\r\n|\r|\n/", trim( (string) $raw ) );
        $out = '';
        foreach ( $lines as $l ) {
            $l = trim( $l );
            if ( $l === '' ) continue;
            $out .= '<li>' . wp_kses_post( $l ) . '</li>';
        }
        return $out;
    }
}

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

// Helper: theme asset URL — strip host when accessed via different origin (local dev)
// so CSS/JS load from the same origin the page is served on.
function vai_relative_uri($url) {
    if (empty($url)) return $url;
    $req_host = isset($_SERVER['HTTP_HOST']) ? preg_replace('/:\d+$/', '', strtolower($_SERVER['HTTP_HOST'])) : '';
    $url_host = parse_url($url, PHP_URL_HOST);
    $url_host_norm = $url_host ? preg_replace('/:\d+$/', '', strtolower($url_host)) : '';
    if ($req_host && $url_host_norm && $req_host !== $url_host_norm) {
        $path = parse_url($url, PHP_URL_PATH);
        $query = parse_url($url, PHP_URL_QUERY);
        return $path . ($query ? '?' . $query : '');
    }
    return $url;
}

// Helper: theme asset URL
function vai_asset($path) {
    return esc_url(vai_relative_uri(get_theme_file_uri('assets/' . $path)));
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
