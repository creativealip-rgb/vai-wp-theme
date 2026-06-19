<?php
/* Template Name: VAI Testimonials */
get_header();

/**
 * Country ISO-3 → ISO-2 (for flag emoji only, decorative).
 */
function vai_flag_from_iso3($cc3) {
  $iso2 = array(
    'USA' => 'US', 'CAN' => 'CA', 'BRA' => 'BR',
    'IDN' => 'ID', 'MYS' => 'MY', 'SGP' => 'SG',
    'KOR' => 'KR', 'JPN' => 'JP', 'CHN' => 'CN', 'HKG' => 'HK', 'TWN' => 'TW',
    'DEU' => 'DE', 'GBR' => 'GB', 'FRA' => 'FR', 'ITA' => 'IT', 'ESP' => 'ES', 'NLD' => 'NL',
    'AUS' => 'AU', 'NZL' => 'NZ',
  );
  $code = isset($iso2[strtoupper($cc3)]) ? $iso2[strtoupper($cc3)] : '';
  if (strlen($code) !== 2) return '';
  return mb_chr(0x1F1E6 + ord($code[0]) - 65) . mb_chr(0x1F1E6 + ord($code[1]) - 65);
}

/* ACF reads with fallbacks */
$testi_hero_eyebrow = vai_f('testi_hero_eyebrow', 'Client stories');
$testi_hero_pre  = vai_f('testi_hero_title_pre', 'Trusted across');
$testi_hero_em   = vai_f('testi_hero_em', 'countries');
$testi_hero_post = vai_f('testi_hero_title_post', '.');
$testi_hero_sub = vai_f('testi_hero_sub', 'Entrepreneurs, business owners, and executives from around the world on why they rely on VAI.');

$testi_feat = [
  'quote' => vai_f('testi_feat_quote', "Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don't need to explain too many details. She already understands everything. Outstanding!"),
  'name'  => vai_f('testi_feat_name', 'James LC'),
  'role'  => vai_f('testi_feat_role', 'Businessman'),
  'cc'    => vai_f('testi_feat_cc', 'DEU'),
];

/* 16 testimonial cards */
$testi_cards = [];
for ( $i = 1; $i <= 16; $i++ ) {
  $quote = vai_f('testi_card_'.$i.'_card_quote', '');
  $name  = vai_f('testi_card_'.$i.'_card_name', '');
  $role  = vai_f('testi_card_'.$i.'_card_role', '');
  $cc    = vai_f('testi_card_'.$i.'_card_cc', '');
  $init  = vai_f('testi_card_'.$i.'_card_init', '');
  if ( $init === '' && $name !== '' ) $init = strtoupper(substr($name, 0, 2));
  $testi_cards[] = compact('quote', 'name', 'role', 'cc', 'init');
}

/* Default data — used when ACF value is empty */
$testi_card_defaults = [
  ['Derek Crakes', 'Entrepreneur', 'USA', 'Love to work with you again soon, everything was excellent!'],
  ['Hari Yaso', 'Brazilian Soccer Schools', 'IDN', 'Good communication, work on agreed schedule and prompt response. Thank you for your continuous support.'],
  ['Alex', 'Business Owner', 'FRA', 'Happy with the rate offered. Everything ran like clockwork. Would recommend to family and friends. Great hard job.'],
  ['Okki Soebagio', 'Businessman', 'IDN', 'My highest recommendation for you! Thank you Mimi!'],
  ['Rahma Juliani', 'Start-up Business', 'IDN', 'Baru pertama kali memakai jasa VA dan sangat puas dengan hasil pekerjaannya. Saya sangat dibantu dan semua pekerjaan dilakukan sesuai waktu dan kesepakatan. Very worth it!'],
  ['Christian Juanda', 'Business Owner', 'IDN', 'Pekerjaan dilakukan dengan cepat, profesional, dan respon asisten juga baik. Memberikan kesan baik dan bonafide untuk bisnis saya.'],
  ['Wato Kartono', 'Business Owner', 'IDN', 'Mimi is a good and experienced assistant, she is multi tasking and very fast response. Keep up the good work!'],
  ['Hari', 'PT. Prakarsa Indonesia (since 2016)', 'IDN', 'I have been using the VAI service since 2016. VAI is the best way to help me and very helpful in doing the work I really need.'],
  ['Monica Lee', 'GTG Wellness', 'KOR', 'Mimi from VAI always answers back quickly by WhatsApp and email. She organized many Zoom calls, arranged schedules, and wrote documents very well. Her kindness and understanding is 10 out of 10.'],
  ['Catherine Lang', 'Entrepreneur', 'CAN', 'Finding a top-notch Virtual Assistant is not easy, yet she excels in management, customer service and other client-centered roles. Creative, punctual, and very good in written and verbal communication.'],
  ['Patricio Allende', 'Businessman', 'ITA', "Great job! Best VA in the country! I'll contact you again when I'm in town."],
  ['William Giger', 'Entrepreneur', 'GBR', 'I have been giving a task of private nature to Miss Mimi and she has done the work to my full satisfaction. All the relevant information was there and everything was nicely summarized with clear steps.'],
  ['Mikko Rissanen', 'Freelancer', 'MYS', 'Great work done on time and on budget as agreed. Will hire again.'],
  ['Christina Dewi', 'Entrepreneur', 'MYS', 'What I like best from their service is their fast response and kindness. Thank you Mbak Mimi for always being helpful. Dan juga punya banyak koneksi untuk solving masalah saya.'],
  ['Chris Li', 'Businessman', 'MYS', 'Mimi was very proactive, highly reliable, resourceful and always ensure all of taskings were handed professionally and timely. VAI has extensive network and will be an asset to any organisation.'],
  ['P. Wee', 'Businessman', 'MYS', 'Mimi was wonderfully committed to the job. She demonstrated great initiative to solve issues and was also very responsive to all my business needs. I could not have asked for more.'],
];

/* Compute stats from final data */
$total_countries = [];
foreach ( $testi_cards as $c ) {
  if ( $c['cc'] !== '' ) $total_countries[ $c['cc'] ] = true;
}
if ( $testi_feat['cc'] !== '' ) $total_countries[ $testi_feat['cc'] ] = true;
$total_cards = 0;
foreach ( $testi_cards as $i => $c ) {
  if ( $c['quote'] === '' ) $c['quote'] = $testi_card_defaults[$i][3] ?? '';
  if ( $c['quote'] !== '' ) $total_cards++;
}
$country_count = count($total_countries);
?>

<!-- HERO -->
<section class="hero" style="min-height:36vh; padding:80px 0 50px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow"><?php echo esc_html($testi_hero_eyebrow); ?></span>
    <h1><?php echo esc_html($testi_hero_pre); ?> <em><?php echo $country_count; ?>+ <?php echo esc_html($testi_hero_em); ?></em><?php echo esc_html($testi_hero_post); ?></h1>
    <p class="hero-sub" style="max-width:640px; margin:18px auto 0;">
      <?php echo esc_html($testi_hero_sub); ?>
    </p>
  </div>
</section>

<!-- STATS STRIP -->
<section class="testi-stats-strip">
  <div class="container">
    <div class="testi-stats">
      <div class="testi-stat"><b><?php echo $total_cards; ?></b><span>client stories</span></div>
      <div class="testi-stat"><b>5</b><span>regions</span></div>
      <div class="testi-stat"><b><?php echo $country_count; ?>+</b><span>countries</span></div>
      <div class="testi-stat"><b>14+</b><span>years</span></div>
    </div>
  </div>
</section>

<!-- FEATURED TESTIMONIAL -->
<section class="section section--cream fade-up">
  <div class="container" style="max-width:1040px;">
    <div class="testi-featured">
      <div class="testi-featured-body">
        <div class="testi-quote-mark-lg" aria-hidden="true">"</div>
        <div class="testi-stars testi-stars--lg" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
        <blockquote class="testi-quote-lg"><?php echo esc_html($testi_feat['quote']); ?></blockquote>
        <div class="testi-meta testi-meta--featured">
          <div class="testi-avatar testi-avatar--lg"><?php echo esc_html(strtoupper(substr($testi_feat['name'], 0, 2))); ?></div>
          <div class="testi-meta-text">
            <div class="testi-name"><?php echo esc_html($testi_feat['name']); ?></div>
            <div class="testi-role"><?php echo esc_html($testi_feat['role']); ?></div>
          </div>
          <div class="testi-flag testi-flag--lg">
            <span class="testi-cc"><?php echo esc_html($testi_feat['cc']); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ALL TESTIMONIAL CARDS -->
<section class="section section--cream fade-up" style="padding-top:0;">
  <div class="container" style="max-width:1040px;">
    <div class="testi-grid">
      <?php
      foreach ( $testi_cards as $i => $t ) :
        $d = $testi_card_defaults[$i] ?? ['', '', '', ''];
        $name  = $t['name']  !== '' ? $t['name']  : $d[0];
        $role  = $t['role']  !== '' ? $t['role']  : $d[1];
        $cc    = $t['cc']    !== '' ? $t['cc']    : $d[2];
        $quote = $t['quote'] !== '' ? $t['quote'] : $d[3];
        $init  = $t['init']  !== '' ? $t['init']  : strtoupper(substr($name, 0, 2));
        if ( $name === '' ) continue;
      ?>
      <div class="testi-card">
        <div class="testi-quote-mark" aria-hidden="true">"</div>
        <div class="testi-stars" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
        <p class="testi-quote"><?php echo esc_html($quote); ?></p>
        <div class="testi-meta">
          <div class="testi-avatar"><?php echo esc_html($init); ?></div>
          <div class="testi-meta-text">
            <div class="testi-name"><?php echo esc_html($name); ?></div>
            <div class="testi-role"><?php echo esc_html($role); ?></div>
          </div>
          <div class="testi-flag">
            <span class="testi-cc"><?php echo esc_html($cc); ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2>Join 100+ <em>satisfied clients</em>.</h2>
    <p style="margin:18px auto 32px;">Experience the VAI difference with a free, no-obligation consultation.</p>
    <a href="https://form.jotform.com/202773574256057" target="_blank" rel="noopener" class="btn btn--cream btn--lg">Start Your Inquiry
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<?php get_footer(); ?>
