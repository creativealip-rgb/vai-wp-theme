<?php
/* Template Name: VAI Testimonials */
get_header();

/**
 * Country ISO-2 → flag emoji + name. Pure Unicode, no external assets.
 */
function vai_flag($cc) {
  $cc = strtoupper(trim($cc));
  if (strlen($cc) !== 3) return array('', $cc);
  $iso2 = array(
    'USA' => 'US', 'CAN' => 'CA', 'BRA' => 'BR',
    'IDN' => 'ID', 'MYS' => 'MY', 'SGP' => 'SG',
    'KOR' => 'KR', 'JPN' => 'JP', 'CHN' => 'CN', 'HKG' => 'HK', 'TWN' => 'TW',
    'DEU' => 'DE', 'GBR' => 'GB', 'FRA' => 'FR', 'ITA' => 'IT', 'ESP' => 'ES', 'NLD' => 'NL',
    'AUS' => 'AU', 'NZL' => 'NZ',
  );
  $names = array(
    'USA'=>'United States','CAN'=>'Canada','BRA'=>'Brazil',
    'IDN'=>'Indonesia','MYS'=>'Malaysia','SGP'=>'Singapore',
    'KOR'=>'South Korea','JPN'=>'Japan','CHN'=>'China','HKG'=>'Hong Kong','TWN'=>'Taiwan',
    'DEU'=>'Germany','GBR'=>'United Kingdom','FRA'=>'France','ITA'=>'Italy','ESP'=>'Spain','NLD'=>'Netherlands',
    'AUS'=>'Australia','NZL'=>'New Zealand',
  );
  $code = isset($iso2[$cc]) ? $iso2[$cc] : $cc;
  $name = isset($names[$cc]) ? $names[$cc] : $cc;
  // Regional Indicator Symbol Letter pair → flag emoji
  $flag = '';
  if (strlen($code) === 2) {
    $flag = mb_chr(0x1F1E6 + ord($code[0]) - 65) . mb_chr(0x1F1E6 + ord($code[1]) - 65);
  }
  return array($flag, $name);
}

// Featured testimonial — pick James LC (long, strong, multinational)
$featured = array('James LC','Businessman','DEU','Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don\'t need to explain too many details — she already understands everything! Outstanding! I wish there were more Mimis in every country.');

$regions = array(
  'Americas' => array(
    array('Derek Crakes','Entrepreneur','USA','Love to work with you again soon, everything was excellent!'),
    array('Hari Yaso','Brazilian Soccer Schools','IDN','Good communication, work on agreed schedule and prompt response. Thank you for your continuous support.'),
    array('Alex','Business Owner','FRA','Happy with the rate offered. Everything ran like clockwork. Would recommend to family and friends. Great hard job.'),
  ),
  'Indonesia' => array(
    array('Okki Soebagio','Businessman','IDN','My highest recommendation for you! Thank you Mimi!'),
    array('Rahma Juliani','Start-up Business','IDN','Baru pertama kali memakai jasa VA dan sangat puas dengan hasil pekerjaannya. Saya sangat dibantu dan semua pekerjaan dilakukan sesuai waktu dan kesepakatan. Very worth it!'),
    array('Christian Juanda','Business Owner','IDN','Pekerjaan dilakukan dengan cepat, profesional, dan respon asisten juga baik. Memberikan kesan baik dan bonafide untuk bisnis saya.'),
    array('Wato Kartono','Business Owner','IDN','Mimi is a good and experienced assistant, she is multi tasking and very fast response. Keep up the good work!'),
    array('Hari','PT. Prakarsa Indonesia (since 2016)','IDN','I have been using the VAI service since 2016. VAI is the best way to help me and very helpful in doing the work I really need.'),
  ),
  'East Asia' => array(
    array('Monica Lee','GTG Wellness','KOR','Mimi from VAI always answers back quickly by WhatsApp and email. She organized many Zoom calls, arranged schedules, and wrote documents very well. Her kindness and understanding is 10 out of 10.'),
    array('Catherine Lang','Entrepreneur','CAN','Finding a top-notch Virtual Assistant is not easy, yet she excels in management, customer service and other client-centered roles. Creative, punctual, and very good in written and verbal communication.'),
  ),
  'Europe' => array(
    array('Patricio Allende','Businessman','ITA','Great job! Best VA in the country! I\'ll contact you again when I\'m in town.'),
    array('William Giger','Entrepreneur','GBR','I have been giving a task of private nature to Miss Mimi and she has done the work to my full satisfaction. All the relevant information was there and everything was nicely summarized with clear steps.'),
  ),
  'Malaysia' => array(
    array('Mikko Rissanen','Freelancer','MYS','Great work done on time and on budget as agreed. Will hire again.'),
    array('Christina Dewi','Entrepreneur','MYS','What I like best from their service is their fast response and kindness. Thank you Mbak Mimi for always being helpful. Dan juga punya banyak koneksi untuk solving masalah saya.'),
    array('Chris Li','Businessman','MYS','Mimi was very proactive, highly reliable, resourceful and always ensure all of taskings were handed professionally and timely. VAI has extensive network and will be an asset to any organisation.'),
    array('P. Wee','Businessman','MYS','Mimi was wonderfully committed to the job. She demonstrated great initiative to solve issues and was also very responsive to all my business needs. I could not have asked for more.'),
  ),
);
$total_testis = 1; foreach ($regions as $r) $total_testis += count($r);
$total_countries = count(array_unique(array_merge(
  array($featured[2]),
  array_map(function($t){ return $t[2]; }, array_merge(...array_values($regions)))
)));
?>

<!-- HERO -->
<section class="hero" style="min-height:36vh; padding:80px 0 50px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow">Client stories</span>
    <h1>Trusted across <em><?php echo $total_countries; ?>+ countries</em>.</h1>
    <p class="hero-sub" style="max-width:640px; margin:18px auto 0;">
      Entrepreneurs, business owners, and executives from around the world on why they rely on VAI.
    </p>
  </div>
</section>

<!-- STATS STRIP -->
<section class="testi-stats-strip">
  <div class="container">
    <div class="testi-stats">
      <div class="testi-stat"><b><?php echo $total_testis; ?></b><span>client stories</span></div>
      <div class="testi-stat"><b><?php echo count($regions); ?></b><span>regions</span></div>
      <div class="testi-stat"><b><?php echo $total_countries; ?>+</b><span>countries</span></div>
      <div class="testi-stat"><b>14+</b><span>years</span></div>
    </div>
  </div>
</section>

<!-- FEATURED TESTIMONIAL -->
<?php list($feat_flag, $feat_cc) = vai_flag($featured[2]); ?>
<section class="section section--cream fade-up">
  <div class="container" style="max-width:1040px;">
    <div class="testi-featured">
      <div class="testi-featured-body">
        <div class="testi-quote-mark-lg" aria-hidden="true">"</div>
        <div class="testi-stars testi-stars--lg" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
        <blockquote class="testi-quote-lg"><?php echo esc_html($featured[3]); ?></blockquote>
        <div class="testi-meta testi-meta--featured">
          <div class="testi-avatar testi-avatar--lg"><?php echo strtoupper(substr($featured[0],0,2)); ?></div>
          <div class="testi-meta-text">
            <div class="testi-name"><?php echo esc_html($featured[0]); ?></div>
            <div class="testi-role"><?php echo esc_html($featured[1]); ?></div>
          </div>
          <div class="testi-flag testi-flag--lg">
            <span class="testi-flag-emoji"><?php echo $feat_flag; ?></span>
            <span class="testi-cc"><?php echo esc_html($feat_cc); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REGIONS -->
<section class="section section--cream fade-up" style="padding-top:0;">
  <div class="container" style="max-width:1040px;">
    <?php foreach ($regions as $region => $testis):
      $region_count = count($testis);
      $region_cc = array_unique(array_map(function($t){ return $t[2]; }, $testis));
    ?>
    <div class="testi-region">
      <div class="testi-region-head">
        <div class="testi-region-bar" aria-hidden="true"></div>
        <h2 class="testi-region-title"><?php echo esc_html($region); ?></h2>
        <div class="testi-region-flags">
          <?php foreach ($region_cc as $cc):
            list($flag, $name) = vai_flag($cc);
            if (!$flag) continue;
          ?>
          <span class="testi-region-flag" title="<?php echo esc_attr($name); ?>"><?php echo $flag; ?></span>
          <?php endforeach; ?>
        </div>
        <span class="testi-region-count"><?php echo $region_count; ?> <?php echo $region_count === 1 ? 'story' : 'stories'; ?></span>
      </div>
      <div class="testi-grid">
        <?php foreach ($testis as $t):
          list($flag, $cc_name) = vai_flag($t[2]);
        ?>
        <div class="testi-card">
          <div class="testi-quote-mark" aria-hidden="true">"</div>
          <div class="testi-stars" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
          <p class="testi-quote"><?php echo esc_html($t[3]); ?></p>
          <div class="testi-meta">
            <div class="testi-avatar"><?php echo strtoupper(substr($t[0],0,2)); ?></div>
            <div class="testi-meta-text">
              <div class="testi-name"><?php echo esc_html($t[0]); ?></div>
              <div class="testi-role"><?php echo esc_html($t[1]); ?></div>
            </div>
            <div class="testi-flag">
              <span class="testi-flag-emoji"><?php echo $flag; ?></span>
              <span class="testi-cc"><?php echo esc_html($cc_name); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
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
