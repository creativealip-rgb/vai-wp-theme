<?php
/* Template Name: VAI Homepage */
get_header();

/* --- ACF field reads (with fallback to current copy) --- */
$hero_pre = vai_f('home_hero_title_pre', 'Your trusted');
$hero_em  = vai_f('home_hero_em', 'assistant');
$hero_post = vai_f('home_hero_title_post', 'in the next room.');
$hero_sub = vai_f('home_hero_sub', 'Personal, executive, and operational support for entrepreneurs, expatriates, and business owners. 14 years strong, 99% client satisfaction, named-personal service led by <strong>Mbak Mimi</strong>.');

$hero_cta_p_label = vai_f('home_hero_cta_primary', 'Hire a Virtual Assistant');
$hero_cta_p_url   = vai_f('home_hero_cta_primary_url', '#contact');
$hero_cta_s_label = vai_f('home_hero_cta_secondary', 'View Rates');
$hero_cta_s_url   = vai_f('home_hero_cta_secondary_url', '#rates');

$hero_img = vai_f('home_hero_image', vai_asset('photos/mimi-new.jpg'));
$hero_stat = function($n) {
  $num = vai_f('home_hero_stat_'.$n.'_num', '');
  $lbl = vai_f('home_hero_stat_'.$n.'_lbl', '');
  return ['num' => $num, 'lbl' => $lbl];
};

$founder_eyebrow = vai_f('home_founder_eyebrow', 'Meet the founder');
$founder_pre = vai_f('home_founder_title_pre', 'Built with');
$founder_em  = vai_f('home_founder_em', 'executive-level');
$founder_post = vai_f('home_founder_title_post', 'discipline.');
$founder_p1 = vai_f('home_founder_p1', 'Before founding VAI in 2011, Mimi served as Senior Executive Secretary to a President Director at a major telecommunications company in Jakarta for nine years. That depth of experience shapes every engagement we run today.');
$founder_p2 = vai_f('home_founder_p2', 'VAI now supports entrepreneurs, expatriates, and business owners across Indonesia and overseas. From quick personal errands to full operational support for growing teams.');
$founder_quote = vai_f('home_founder_quote', 'Think of us as a regular assistant sitting in the next room, except the next room is in another country.');
$founder_img = vai_f('home_founder_image', vai_asset('photos/mimi-new.jpg'));
$founder_card = function($n) {
  return [
    'num' => vai_f('home_founder_card_'.$n.'_num', ''),
    'lbl' => vai_f('home_founder_card_'.$n.'_lbl', ''),
  ];
};

$svc_eyebrow = vai_f('home_services_eyebrow', 'Services');
$svc_pre = vai_f('home_services_title_pre', 'Three ways we');
$svc_em  = vai_f('home_services_em', 'support');
$svc_post = vai_f('home_services_title_post', 'your day.');
$svc_sub = vai_f('home_services_sub', "From daily life to executive operations to business growth. Pick a category and we'll match you with the right VA.");
$svc_cta  = vai_f('home_services_cta', 'View all services');

/* 3 service category cards */
$svc_groups = [];
for ( $i = 1; $i <= 3; $i++ ) {
  $svc_groups[] = [
    'name' => vai_f('home_svc_'.$i.'_cat_name', ''),
    'tag'  => vai_f('home_svc_'.$i.'_cat_tag', ''),
    'desc' => vai_f('home_svc_'.$i.'_cat_desc', ''),
    'icon' => vai_f('home_svc_'.$i.'_cat_icon', ''),
    'items' => [], // filled below
  ];
}
/* 9 service items (3 per category) */
for ( $i = 1; $i <= 9; $i++ ) {
  $cat_idx = (int) ceil($i / 3) - 1; // 1-3 -> 0, 4-6 -> 1, 7-9 -> 2
  if ( isset($svc_groups[$cat_idx]) ) {
    $svc_groups[$cat_idx]['items'][] = [
      'name' => vai_f('home_svc_'.$i.'_item_name', ''),
      'desc' => vai_f('home_svc_'.$i.'_item_desc', ''),
    ];
  }
}

$how_eyebrow = vai_f('home_how_eyebrow', 'How it works');
$how_pre = vai_f('home_how_title_pre', 'From');
$how_em  = vai_f('home_how_em', 'inquiry');
$how_post = vai_f('home_how_title_post', 'to results in 4 steps.');
$how_sub = vai_f('home_how_sub', 'Simple, structured, and built to get you working with the right VA from day one.');
$how_steps = [];
for ( $i = 1; $i <= 4; $i++ ) {
  $how_steps[] = [
    'title' => vai_f('home_how_'.$i.'_step_title', ''),
    'desc'  => vai_f('home_how_'.$i.'_step_desc', ''),
  ];
}

$testi_eyebrow = vai_f('home_testi_eyebrow', 'Client stories');
$testi_pre = vai_f('home_testi_title_pre', 'Real clients,');
$testi_em  = vai_f('home_testi_em', 'real relief');
$testi_post = vai_f('home_testi_title_post', '.');
$testi_sub = vai_f('home_testi_sub', 'A short preview of what clients say after handing the right work to VAI. Read the full set on the testimonials page.');
$testi_feat = [
  'quote' => vai_f('home_testi_quote', "Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don't need to explain too many details. She already understands everything. Outstanding!"),
  'name'  => vai_f('home_testi_name', 'James LC'),
  'role'  => vai_f('home_testi_role', 'Businessman'),
  'cc'    => vai_f('home_testi_cc', 'DEU'),
  'init'  => vai_f('home_testi_init', 'JL'),
];
$testi_supp = [];
for ( $i = 1; $i <= 2; $i++ ) {
  $testi_supp[] = [
    'quote' => vai_f('home_testi_'.$i.'_sup_quote', ''),
    'name'  => vai_f('home_testi_'.$i.'_sup_name', ''),
    'role'  => vai_f('home_testi_'.$i.'_sup_role', ''),
    'cc'    => vai_f('home_testi_'.$i.'_sup_cc', ''),
    'init'  => vai_f('home_testi_'.$i.'_sup_init', ''),
  ];
}
$testi_cta = vai_f('home_testi_cta', 'Read all stories');

$rates_eyebrow = vai_f('home_rates_eyebrow', 'Rates & packages');
$rates_pre = vai_f('home_rates_title_pre', 'Pick the plan that fits your');
$rates_em  = vai_f('home_rates_em', 'workload');
$rates_post = vai_f('home_rates_title_post', '.');
$rates_sub = vai_f('home_rates_sub', "On Demand for small tasks. Dedicated for ongoing operations. Need more? Let's talk.");
$rates_tier_od = vai_f('home_rates_tier_ondemand_label', 'On Demand');
$rates_tier_de = vai_f('home_rates_tier_dedicated_label', 'Dedicated');
$rates_custom = vai_f('home_rates_custom', 'Need more time or custom scope? Discuss with us →');
$rates_plans = [];
for ( $i = 1; $i <= 6; $i++ ) {
  $feats_raw = vai_f('home_plan_'.$i.'_plan_feats', '');
  $feats = array_filter(array_map('trim', preg_split("/\r\n|\r|\n/", $feats_raw)));
  $rates_plans[] = [
    'name'    => vai_f('home_plan_'.$i.'_plan_name', ''),
    'hours'   => vai_f('home_plan_'.$i.'_plan_hours', ''),
    'monthly' => vai_f('home_plan_'.$i.'_plan_monthly', ''),
    'annual'  => vai_f('home_plan_'.$i.'_plan_annual', ''),
    'badge'   => vai_f('home_plan_'.$i.'_plan_badge', ''),
    'feats'   => $feats,
  ];
}

$cta_eyebrow = vai_f('home_cta_eyebrow', 'Free consultation');
$cta_pre = vai_f('home_cta_title_pre', "Let's build something");
$cta_em  = vai_f('home_cta_em', 'together');
$cta_post = vai_f('home_cta_title_post', '.');
$cta_sub = vai_f('home_cta_sub', "Book a free consultation. We'll review your workload and recommend the right plan, no strings attached, no obligation.");
$cta_button = vai_f('home_cta_button', 'Request Free Consultation');
$cta_url = vai_f('home_cta_url', 'https://form.jotform.com/202773574256057');
$cta_meta = vai_f('home_cta_meta', 'No credit card required · Reply within 1 business day');
?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-grid">
    <div>
      <h1><?php echo esc_html($hero_pre); ?> <em><?php echo esc_html($hero_em); ?></em><br><?php echo esc_html($hero_post); ?></h1>
      <p class="hero-sub"><?php echo wp_kses_post($hero_sub); ?></p>
      <div class="hero-cta">
        <a href="<?php echo esc_url($hero_cta_p_url); ?>" class="btn btn--primary btn--lg"><?php echo esc_html($hero_cta_p_label); ?>
          <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="<?php echo esc_url($hero_cta_s_url); ?>" class="btn btn--ghost btn--lg"><?php echo esc_html($hero_cta_s_label); ?></a>
      </div>
      <div class="hero-stats">
        <?php
        $hero_stat_defaults = [
          1 => ['14<small>+</small>', 'Years experience'],
          2 => ['99<small>%</small>', 'Satisfaction'],
          3 => ['6<small>+</small>',  'Countries served'],
        ];
        for ( $i = 1; $i <= 3; $i++ ) :
          $s = $hero_stat($i);
          $num = $s['num'] !== '' ? $s['num'] : $hero_stat_defaults[$i][0];
          $lbl = $s['lbl'] !== '' ? $s['lbl'] : $hero_stat_defaults[$i][1];
        ?>
        <div class="hero-stat">
          <div class="num"><?php echo $num; ?></div>
          <div class="lbl"><?php echo esc_html($lbl); ?></div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-img-frame">
        <img src="<?php echo esc_url($hero_img); ?>" alt="Mimi Amilia, Founder of Virtual Assistant Indonesia" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- PRESS — featured & hired by, one cohesive section -->
<section class="section section--cream fade-up" id="press">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Trusted by</span>
    </div>
  </div>
  <div class="marquee marquee--featured">
    <div class="marquee-track">
      <?php
      $featured_logos = array(
        array('media-logos/featured-by-1.png',  'Outsource Accelerator', 'https://www.outsourceaccelerator.com/'),
        array('media-logos/featured-by-2.png',  'GoodFirms',             'https://www.goodfirms.co/'),
        array('media-logos/featured-by-3.png',  'DesignRush',            'https://www.designrush.com/'),
        array('media-logos/featured-by-4.png',  'BestStartup Asia',      'https://beststartup.asia/'),
        array('media-logos/featured-by-5.png',  'PR Expert',             'https://prexpert.id/'),
        array('media-logos/featured-by-6.jpg',  'Business World',        'https://businessworld.in/'),
        array('media-logos/featured-by-7.jpg',  'ASEAN',                 'https://aseanbusiness.org/'),
        array('media-logos/featured-by-8.jpg',  'Featured 8',            '#'),
        array('media-logos/featured-by-9.png',  'Asia Magazine',         'https://www.theasiamag.com/'),
        array('media-logos/featured-by-10.jpg', 'Featured 10',           '#'),
      );
      for ($copy = 0; $copy < 2; $copy++) {
        foreach ($featured_logos as $logo): ?>
        <div class="marquee-item">
          <img src="<?php echo vai_asset($logo[0]); ?>" alt="<?php echo esc_attr($logo[1]); ?>" loading="lazy">
        </div>
        <?php endforeach;
      } ?>
    </div>
  </div>

  <div class="marquee marquee--hired marquee--reverse">
    <div class="marquee-track">
      <?php
      $hired_logos = array(
        array('media-logos/media-1-1.png',     'Client 1',  '#'),
        array('media-logos/sc23-01-1.png',    'Client 2',  '#'),
        array('photos/2023-12-1.png',         'Client 3',  '#'),
        array('media-logos/media-10-1.png',   'Client 10', '#'),
        array('media-logos/media-11-1.png',   'Client 11', '#'),
        array('media-logos/media-12-1.png',   'Client 12', '#'),
        array('media-logos/media-13-1.png',   'Client 13', '#'),
        array('media-logos/media-15-1.png',   'Client 15', '#'),
        array('media-logos/media-18-3.png',   'Client 18', '#'),
        array('media-logos/media-19-2.png',   'Client 19', '#'),
        array('media-logos/media-2-1.png',    'Client 21', '#'),
        array('media-logos/sc22-10-2.png',    'Client 22', '#'),
        array('photos/2023-12-2.png',         'Client 25', '#'),
        array('media-logos/media-20-1.png',   'Client 20', '#'),
        array('media-logos/media-21-2.png',   'Client 211','#'),
        array('media-logos/media-22-2.png',   'Client 22b','#'),
        array('media-logos/media-23-2.png',   'Client 23', '#'),
        array('media-logos/media-24-1.png',   'Client 24', '#'),
        array('media-logos/media-25-1.png',   'Client 25b','#'),
        array('media-logos/media-26-1.png',   'Client 26', '#'),
        array('media-logos/media-27-1.png',   'Client 27', '#'),
        array('media-logos/media-3-1.png',    'Client 3b', '#'),
        array('media-logos/sc22-10-31-1.png', 'Client 31', '#'),
        array('media-logos/sc22-10-32.png',   'Client 32', '#'),
        array('media-logos/sc22-10-33.png',   'Client 33', '#'),
        array('media-logos/sc23-02-36.png',   'Client 36', '#'),
        array('media-logos/sc23-02-37.png',   'Client 37', '#'),
        array('photos/2023-06-39.png',        'Client 39', '#'),
        array('media-logos/sc22-10-4-1.png',  'Client 4',  '#'),
        array('photos/2023-07-40.png',        'Client 40', '#'),
        array('photos/2023-07-41.png',        'Client 41', '#'),
        array('photos/2023-11-42.png',        'Client 42', '#'),
        array('photos/2023-11-43.png',        'Client 43', '#'),
        array('media-logos/media-5-1.png',    'Client 5',  '#'),
        array('media-logos/sc22-10-5.png',    'Client 5b', '#'),
        array('media-logos/media-6-1.png',    'Client 6',  '#'),
        array('media-logos/sc22-10-6.png',    'Client 6b', '#'),
        array('media-logos/media-7-1.png',    'Client 7',  '#'),
        array('media-logos/media-8-1.png',    'Client 8',  '#'),
        array('photos/logo-website-3.png',    'Client W3',  '#'),
        array('photos/logo-website-6.png',    'Client W6',  '#'),
        array('photos/logo-website-8.png',    'Client W8',  '#'),
        array('photos/logo-website-17.png',   'Client W17', '#'),
        array('photos/logo-website-19.png',   'Client W19', '#'),
        array('media-logos/sc23-01-sc-1.png', 'SC 1', '#'),
        array('media-logos/sc22-10-sc-2.png', 'SC 2', '#'),
        array('media-logos/sc23-01-sc-3.png', 'SC 3', '#'),
        array('media-logos/sc23-02-sc-4.png', 'SC 4', '#'),
      );
      for ($copy = 0; $copy < 2; $copy++) {
        foreach ($hired_logos as $logo): ?>
        <div class="marquee-item">
          <img src="<?php echo vai_asset($logo[0]); ?>" alt="<?php echo esc_attr($logo[1]); ?>" loading="lazy">
        </div>
        <?php endforeach;
      } ?>
    </div>
  </div>
</section>

<!-- ABOUT FOUNDER -->
<section class="section fade-up" id="about">
  <div class="container">
    <div class="founder-grid">
      <div class="founder-img">
        <img src="<?php echo esc_url($founder_img); ?>" alt="Mimi Amilia at work" loading="lazy">
      </div>
      <div class="founder-content">
        <span class="eyebrow"><?php echo esc_html($founder_eyebrow); ?></span>
        <h2><?php echo esc_html($founder_pre); ?> <em><?php echo esc_html($founder_em); ?></em> <?php echo esc_html($founder_post); ?></h2>
        <p><?php echo esc_html($founder_p1); ?></p>
        <p><?php echo esc_html($founder_p2); ?></p>
        <div class="founder-quote">"<?php echo esc_html($founder_quote); ?>"</div>
        <div class="founder-credentials">
          <?php
          $founder_card_defaults = [
            1 => ['14<small>+</small>', 'Years running VAI'],
            2 => ['100+',              'Clients served globally'],
            3 => ['12',                'Industry awards & features'],
          ];
          for ( $i = 1; $i <= 3; $i++ ) :
            $c = $founder_card($i);
            $num = $c['num'] !== '' ? $c['num'] : $founder_card_defaults[$i][0];
            $lbl = $c['lbl'] !== '' ? $c['lbl'] : $founder_card_defaults[$i][1];
          ?>
          <div class="founder-cred">
            <div class="num"><?php echo $num; ?></div>
            <div class="lbl"><?php echo esc_html($lbl); ?></div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section fade-up section--services" id="services">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?php echo esc_html($svc_eyebrow); ?></span>
      <h2><?php echo esc_html($svc_pre); ?> <em><?php echo esc_html($svc_em); ?></em> <?php echo esc_html($svc_post); ?></h2>
      <p><?php echo esc_html($svc_sub); ?></p>
    </div>
    <div class="svc-cats">
      <?php
      $svc_cat_defaults = [
        1 => [
          'name' => 'Personal',
          'tag'  => 'For busy individuals',
          'desc' => 'Lifestyle and personal support so your time and headspace go where they matter most.',
          'icon' => 'icon-personal-assistant.gif',
        ],
        2 => [
          'name' => 'Executive',
          'tag'  => 'For leadership teams',
          'desc' => 'Secretarial, research, and operational support that keeps leadership organized and on brand.',
          'icon' => 'icon-executive-admin.gif',
        ],
        3 => [
          'name' => 'Business',
          'tag'  => 'For growing companies',
          'desc' => 'Growth, brand, and event support that turns strategy into measurable awareness and revenue.',
          'icon' => 'icon-marketing.gif',
        ],
      ];
      $svc_item_defaults = [
        1 => ['Personal Assistant. Daily tasks and lifestyle simplification', ''],
        2 => ['Travel Management. Trips, hotels, rentals, full itineraries', ''],
        3 => ['Executive Administration. Admin that runs the company, not just the calendar', ''],
        4 => ['Research &amp; Data Entry. Clean, accurate, on schedule', ''],
        5 => ['Legal Consultant. Document review and regulatory guidance', ''],
        6 => ['Marketing &amp; Advertising. Campaigns that drive reach and sales', ''],
        7 => ['Social Media Management. Planned, posted, measured', ''],
        8 => ['Event Planner. Corporate and private, end to end', ''],
        9 => ['Project Support. Customised scope: PMO, monitoring, office ops', ''],
      ];
      foreach ( $svc_groups as $idx => $g ) :
        $cat_idx = $idx + 1;
        $d = $svc_cat_defaults[$cat_idx];
        $name = $g['name'] !== '' ? $g['name'] : $d['name'];
        $tag  = $g['tag']  !== '' ? $g['tag']  : $d['tag'];
        $desc = $g['desc'] !== '' ? $g['desc'] : $d['desc'];
        $icon = $g['icon'] !== '' ? $g['icon'] : $d['icon'];
        $items = $g['items'];
      ?>
      <a class="svc-cat" href="<?php echo esc_url(home_url('/services/#'.strtolower($name))); ?>">
        <div class="svc-cat-head">
          <div class="svc-cat-icon"><img src="<?php echo vai_asset('photos/'.$icon); ?>" alt="" loading="lazy"></div>
          <div class="svc-cat-meta">
            <h3 class="svc-cat-title"><?php echo esc_html($name); ?></h3>
            <span class="svc-cat-tag"><?php echo esc_html($tag); ?></span>
          </div>
        </div>
        <p class="svc-cat-desc"><?php echo esc_html($desc); ?></p>
        <ul class="svc-cat-list">
          <?php
          for ( $j = 0; $j < 3; $j++ ) :
            $item_idx = $cat_idx * 3 - 2 + $j; // 1-based
            $iname = isset($items[$j]) ? $items[$j]['name'] : '';
            $idesc = isset($items[$j]) ? $items[$j]['desc'] : '';
            if ( $iname === '' ) $iname = $svc_item_defaults[$item_idx][0];
            if ( $idesc === '' ) $idesc = $svc_item_defaults[$item_idx][1];
          ?>
            <li><?php echo $iname; ?><?php if ( $idesc ) echo ' — ' . esc_html($idesc); ?></li>
          <?php endfor; ?>
        </ul>
        <span class="svc-cat-link">Learn more <span aria-hidden="true">→</span></span>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="section-foot">
      <a class="btn btn--ghost" href="<?php echo esc_url(home_url('/services/')); ?>"><?php echo esc_html($svc_cta); ?></a>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section section--cream fade-up" id="how">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?php echo esc_html($how_eyebrow); ?></span>
      <h2><?php echo esc_html($how_pre); ?> <em><?php echo esc_html($how_em); ?></em> <?php echo esc_html($how_post); ?></h2>
      <p><?php echo esc_html($how_sub); ?></p>
    </div>
    <div class="how-grid">
      <?php
      $how_defaults = [
        1 => ['Free Consultation', 'Tell us your workload, scope, and goals. We listen first, recommend later.'],
        2 => ['VA Matching',       'We pair you with the right VA from our team based on skills and language fit.'],
        3 => ['Onboarding',        'Tools, schedule, and communication channels set up. SOP shared with you.'],
        4 => ['Get Things Done',   'Daily updates, weekly reports, and continuous support. No babysitting required.'],
      ];
      for ( $i = 1; $i <= 4; $i++ ) :
        $t = $how_steps[$i-1]['title'] !== '' ? $how_steps[$i-1]['title'] : $how_defaults[$i][0];
        $d = $how_steps[$i-1]['desc']  !== '' ? $how_steps[$i-1]['desc']  : $how_defaults[$i][1];
      ?>
      <div class="how-step">
        <div class="step-num">0<?php echo $i; ?></div>
        <h3><?php echo esc_html($t); ?></h3>
        <p><?php echo esc_html($d); ?></p>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section testi-section" id="testimonials">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?php echo esc_html($testi_eyebrow); ?></span>
      <h2><?php echo esc_html($testi_pre); ?> <em><?php echo esc_html($testi_em); ?></em><?php echo esc_html($testi_post); ?></h2>
      <p><?php echo esc_html($testi_sub); ?></p>
    </div>
    <div class="testi-preview-grid">
      <article class="testi-card testi-card--featured">
        <span class="testi-quote-mark" aria-hidden="true">"</span>
        <div class="testi-featured-body">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-quote"><?php echo esc_html($testi_feat['quote']); ?></p>
        </div>
        <div class="testi-featured-meta">
          <div class="testi-avatar"><?php echo esc_html($testi_feat['init']); ?></div>
          <div class="testi-meta-text">
            <div class="testi-name"><?php echo esc_html($testi_feat['name']); ?></div>
            <div class="testi-role"><?php echo esc_html($testi_feat['role']); ?></div>
          </div>
          <div class="testi-flag" title="<?php echo esc_attr($testi_feat['cc']); ?>"><span class="testi-cc"><?php echo esc_html($testi_feat['cc']); ?></span></div>
        </div>
      </article>
      <?php
      $testi_supp_defaults = [
        1 => [
          'quote' => 'Mimi was very proactive, highly reliable, resourceful and always ensured all of taskings were handled professionally and timely. VAI has extensive network and will be an asset to any organisation.',
          'name'  => 'Chris Li',
          'role'  => 'Businessman',
          'cc'    => 'MYS',
          'init'  => 'CL',
        ],
        2 => [
          'quote' => 'Mimi from VAI always answers back quickly by WhatsApp and email. She organized many Zoom calls, arranged schedules, and wrote documents very well. Her kindness is 10 out of 10.',
          'name'  => 'Monica Lee',
          'role'  => 'GTG Wellness',
          'cc'    => 'KOR',
          'init'  => 'ML',
        ],
      ];
      foreach ( $testi_supp as $idx => $t ) :
        $i = $idx + 1;
        $d = $testi_supp_defaults[$i];
        $quote = $t['quote'] !== '' ? $t['quote'] : $d['quote'];
        $name  = $t['name']  !== '' ? $t['name']  : $d['name'];
        $role  = $t['role']  !== '' ? $t['role']  : $d['role'];
        $cc    = $t['cc']    !== '' ? $t['cc']    : $d['cc'];
        $init  = $t['init']  !== '' ? $t['init']  : $d['init'];
      ?>
      <article class="testi-card testi-card--std">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-quote"><?php echo esc_html($quote); ?></p>
        <div class="testi-meta">
          <div class="testi-avatar"><?php echo esc_html($init); ?></div>
          <div class="testi-meta-text">
            <div class="testi-name"><?php echo esc_html($name); ?></div>
            <div class="testi-role"><?php echo esc_html($role); ?></div>
          </div>
          <div class="testi-flag" title="<?php echo esc_attr($cc); ?>"><span class="testi-cc"><?php echo esc_html($cc); ?></span></div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="testi-cta">
      <a href="/testimonials/" class="btn btn--ghost btn--lg"><?php echo esc_html($testi_cta); ?>
        <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="section" id="rates">
  <div class="container" style="text-align:center;">
    <div class="section-head">
      <span class="eyebrow"><?php echo esc_html($rates_eyebrow); ?></span>
      <h2><?php echo esc_html($rates_pre); ?> <em><?php echo esc_html($rates_em); ?></em><?php echo esc_html($rates_post); ?></h2>
      <p><?php echo esc_html($rates_sub); ?></p>
    </div>
    <div class="pricing-toggle">
      <button class="is-active" data-plan="ondemand"><?php echo esc_html($rates_tier_od); ?></button>
      <button data-plan="dedicated"><?php echo esc_html($rates_tier_de); ?></button>
    </div>
    <?php
    $plan_meta_defaults = [
      1 => ['Starter',  '5<small>hrs</small>',  'Rp 1.500.000 / month', 'Rp 14.400.000 / year',  '',  ['Small errands & quick tasks','Personal projects','Email & WhatsApp support','Same-day reply window']],
      2 => ['Executive','12<small>hrs</small>', 'Rp 2.600.000 / month', 'Rp 24.960.000 / year',  'Best Option', ['Executive support tasks','Time-consuming workflows','Priority response (< 2h)','Weekly status report']],
      3 => ['Operator', '24<small>hrs</small>', 'Rp 4.200.000 / month', 'Rp 40.320.000 / year',  '',  ['Day-to-day operations','High-demand workloads','Dedicated VA matching','Daily updates included']],
      4 => ['Team',     '40<small>hrs</small>', 'Rp 6.000.000 / month', 'Rp 57.600.000 / year',  '',  ['Project assistance','Beyond inbox & scheduling','Streamlined project mgmt','On-time delivery focus','Up to 3 team members']],
      5 => ['Growth',   '60<small>hrs</small>', 'Rp 6.800.000 / month', 'Rp 65.280.000 / year',  'Most Popular', ['Delegate full workload','Expert-level assistance','Strategy execution support','Bi-weekly review calls','Up to 6 team members']],
      6 => ['Enterprise','100<small>hrs</small>','Rp 12.500.000 / month','Rp 120.000.000 / year','' ,['Premium ongoing service','Larger team coverage','Comprehensive support','Dedicated account manager','1 division or department']],
    ];
    $plan_featured_idx = [2, 5]; // Executive + Growth
    /**
     * Render a single price card. Uses $rates_plans + $plan_meta_defaults in scope.
     */
    $vai_render_price_card = function( $idx ) use ( &$rates_plans, &$plan_meta_defaults, &$plan_featured_idx ) {
      $p = $rates_plans[ $idx - 1 ];
      $d = $plan_meta_defaults[ $idx ];
      $name    = $p['name']    !== '' ? $p['name']    : $d[0];
      $hours   = $p['hours']   !== '' ? $p['hours']   : $d[1];
      $monthly = $p['monthly'] !== '' ? $p['monthly'] : $d[2];
      $annual  = $p['annual']  !== '' ? $p['annual']  : $d[3];
      $badge   = $p['badge']   !== '' ? $p['badge']   : $d[4];
      $feats   = ! empty( $p['feats'] ) ? $p['feats'] : $d[5];
      $is_featured = in_array( $idx, $plan_featured_idx, true );
    ?>
      <div class="price-card <?php echo $is_featured ? 'is-featured' : ''; ?>">
        <?php if ( $badge ) : ?>
        <span class="price-badge"><?php echo esc_html($badge); ?></span>
        <?php endif; ?>
        <h3><?php echo esc_html($name); ?></h3>
        <div class="price"><?php echo $hours; ?></div>
        <div class="price-meta" data-monthly="<?php echo esc_attr($monthly); ?>" data-annual="<?php echo esc_attr($annual); ?>"><?php echo esc_html($monthly); ?></div>
        <ul class="price-features">
          <?php foreach ( $feats as $f ) : ?>
          <li><?php echo esc_html($f); ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
    <?php };
    ?>
    <div class="pricing-grid" data-grid="ondemand">
      <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
        <?php $vai_render_price_card( $i ); ?>
      <?php endfor; ?>
    </div>
    <div class="pricing-grid" data-grid="dedicated" style="display:none;">
      <?php for ( $i = 4; $i <= 6; $i++ ) : ?>
        <?php $vai_render_price_card( $i ); ?>
      <?php endfor; ?>
    </div>
    <p style="margin-top:48px; font-size:14px; color:var(--ink-soft);"><?php echo esc_html($rates_custom); ?></p>
  </div>
</section>

<!-- CTA -->
<section class="cta-band" id="contact">
  <div class="container">
    <span class="eyebrow" style="color:var(--teal-3); justify-content:center;"><?php echo esc_html($cta_eyebrow); ?></span>
    <h2 style="margin-top:18px;"><?php echo esc_html($cta_pre); ?> <em><?php echo esc_html($cta_em); ?></em><?php echo esc_html($cta_post); ?></h2>
    <p><?php echo esc_html($cta_sub); ?></p>
    <a href="<?php echo esc_url($cta_url); ?>" target="_blank" rel="noopener" class="btn btn--cream btn--lg"><?php echo esc_html($cta_button); ?>
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
    <div class="cta-stats">
      <div class="cta-stat"><strong>100+</strong><span>clients served</span></div>
      <div class="cta-stat-divider"></div>
      <div class="cta-stat"><strong>99%</strong><span>satisfaction</span></div>
      <div class="cta-stat-divider"></div>
      <div class="cta-stat"><strong>14+</strong><span>years experience</span></div>
    </div>
    <div class="cta-meta"><?php echo esc_html($cta_meta); ?></div>
  </div>
</section>

<?php get_footer(); ?>
