<?php
/**
 * Template Name: Services
 * URL: /services/
 * Full breakdown of all 9 services grouped by category.
 */
get_header();

/* ACF reads with fallbacks */
$svc_hero_eyebrow = vai_f('svc_hero_eyebrow', 'All Services');
$svc_hero_pre = vai_f('svc_hero_title_pre', 'What our VAs');
$svc_hero_em  = vai_f('svc_hero_em', 'actually do');
$svc_hero_post = vai_f('svc_hero_title_post', '.');
$svc_hero_sub = vai_f('svc_hero_sub', 'Nine services across three categories. Pick what fits, or mix and match for a custom scope.');
$svc_hero_stats = [
  ['b' => vai_f('svc_hero_stat_1_num', '9'),     'lbl' => vai_f('svc_hero_stat_1_lbl', 'services')],
  ['b' => vai_f('svc_hero_stat_2_num', '3'),     'lbl' => vai_f('svc_hero_stat_2_lbl', 'categories')],
  ['b' => vai_f('svc_hero_stat_3_num', '14+'),   'lbl' => vai_f('svc_hero_stat_3_lbl', 'years')],
  ['b' => vai_f('svc_hero_stat_4_num', '5000+'), 'lbl' => vai_f('svc_hero_stat_4_lbl', 'tasks done')],
];

/* 3 service categories with up to 3 items each = 9 items total */
$svc_cats = [];
for ( $i = 1; $i <= 3; $i++ ) {
  $svc_cats[] = [
    'title' => vai_f('svc_cat_'.$i.'_cat_title', ''),
    'intro' => vai_f('svc_cat_'.$i.'_cat_intro', ''),
    'icon'  => vai_f('svc_cat_'.$i.'_cat_icon', ''),
    'items' => [],
  ];
}
for ( $i = 1; $i <= 9; $i++ ) {
  $cat_idx = (int) ceil($i / 3) - 1;
  if ( isset($svc_cats[$cat_idx]) ) {
    $svc_cats[$cat_idx]['items'][] = [
      'name' => vai_f('svc_item_'.$i.'_item_name', ''),
      'desc' => vai_f('svc_item_'.$i.'_item_desc', ''),
    ];
  }
}

$svc_cta_title_pre = vai_f('svc_cta_title_pre', 'Not sure which');
$svc_cta_em        = vai_f('svc_cta_em', 'fits');
$svc_cta_post      = vai_f('svc_cta_title_post', '?');
$svc_cta_sub = vai_f('svc_cta_sub', "Tell us your workload and goals in a free consultation. We'll recommend the right mix, and you only pay for the hours you need.");
$svc_cta_btn = vai_f('svc_cta_button', 'Book a free consultation');
?>

<!-- HERO -->
<section class="section section--hero-narrow fade-up">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow"><?php echo esc_html($svc_hero_eyebrow); ?></span>
      <h1><?php echo esc_html($svc_hero_pre); ?> <em><?php echo esc_html($svc_hero_em); ?></em><?php echo esc_html($svc_hero_post); ?></h1>
      <p><?php echo esc_html($svc_hero_sub); ?></p>
    </div>
    <div class="svc-hero-stats">
      <?php foreach ( $svc_hero_stats as $s ) : ?>
      <div class="svc-hero-stat"><b><?php echo esc_html($s['b']); ?></b><span><?php echo esc_html($s['lbl']); ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
/* Default category + item data for fallback */
$svc_cat_defaults = [
  1 => [
    'title' => 'Personal',
    'intro' => 'Lifestyle and personal support so your time and headspace go where they matter most.',
    'icon'  => 'icon-personal-assistant.gif',
    'id'    => 'personal',
  ],
  2 => [
    'title' => 'Executive',
    'intro' => 'Secretarial, research, and operational support that keeps leadership organized and on brand.',
    'icon'  => 'icon-executive-admin.gif',
    'id'    => 'executive',
  ],
  3 => [
    'title' => 'Business',
    'intro' => 'Growth, brand, and event support that turns strategy into measurable awareness and revenue.',
    'icon'  => 'icon-marketing.gif',
    'id'    => 'business',
  ],
];
$svc_item_defaults = [
  1 => ['icon-personal-assistant.gif', 'Personal Assistant',     'Daily tasks, lifestyle simplification. Your right hand for everything non-strategic.', true],
  2 => ['icon-travel.gif',             'Travel Management',      'Trip planning, hotels, rentals, and full itineraries. Domestic and international.', false],
  3 => ['icon-executive-admin.gif',    'Executive Administration','Secretarial and admin support that keeps your company organized, on time, and on brand.', true],
  4 => ['icon-research.gif',           'Research &amp; Data Entry','Collect, analyze, and report. Accurate research and clean data, on schedule.', false],
  5 => ['icon-legal.gif',              'Legal Consultant',       'Document review, legal research, and government regulation guidance at fair rates.', false],
  6 => ['icon-marketing.gif',          'Marketing &amp; Advertising','Strategies and campaigns to maximize your reach, sales, and brand visibility.', true],
  7 => ['icon-social-media.gif',       'Social Media Management','Plan, implement, and monitor your social strategy with measurable awareness focus.', false],
  8 => ['icon-event-planner.gif',      'Event Planner',          'Prep, oversee, and facilitate all event aspects. Corporate or private occasions.', false],
  9 => ['icon-customise.gif',          'Project Support',        'Customised duties tailored to your scope: project control, monitoring, office management.', false],
];

$cat_index = 0;
foreach ( $svc_cats as $cat_data ) :
  $cat_index++;
  $d = $svc_cat_defaults[$cat_index];
  $title = $cat_data['title'] !== '' ? $cat_data['title'] : $d['title'];
  $intro = $cat_data['intro'] !== '' ? $cat_data['intro'] : $d['intro'];
  $id    = strtolower( $title );
  $items = $cat_data['items'];
  $count = count($items);
  $grid_class = $count === 3 ? 'svc-detail-grid svc-detail-grid--3' : 'svc-detail-grid svc-detail-grid--2';
?>
<section class="section section--alt fade-up svc-cat-section" id="<?php echo esc_attr($id); ?>">
  <div class="container">
    <div class="svc-detail-head" data-num="<?php echo sprintf('%02d', $cat_index); ?>">
      <span class="svc-detail-tag"><?php echo esc_html($title); ?></span>
      <h2><?php echo esc_html($title); ?> <em>services</em></h2>
      <p><?php echo esc_html($intro); ?></p>
    </div>
    <div class="<?php echo $grid_class; ?>">
      <?php for ( $j = 0; $j < 3; $j++ ) :
        $item_idx = $cat_index * 3 - 2 + $j;
        $iname = isset($items[$j]['name']) ? $items[$j]['name'] : '';
        $idesc = isset($items[$j]['desc']) ? $items[$j]['desc'] : '';
        if ( $iname === '' ) $iname = $svc_item_defaults[$item_idx][1];
        if ( $idesc === '' ) $idesc = $svc_item_defaults[$item_idx][2];
        $is_popular = ( $j === 0 );
        $icon = $svc_item_defaults[$item_idx][0];
      ?>
      <div class="svc-card <?php echo $is_popular ? 'svc-card--popular' : ''; ?>">
        <?php if ($is_popular): ?>
          <span class="svc-popular-badge">★ Most popular</span>
        <?php endif; ?>
        <div class="svc-icon"><img src="<?php echo vai_asset('photos/'.$icon); ?>" alt="" loading="lazy"></div>
        <h3><?php echo $iname; ?></h3>
        <p><?php echo $idesc; ?></p>
        <a class="svc-card-link" href="<?php echo esc_url(home_url('/#contact')); ?>">Get started <span aria-hidden="true">→</span></a>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- CTA -->
<section class="section section--cream fade-up">
  <div class="container">
    <div class="section-head">
      <h2><?php echo esc_html($svc_cta_title_pre); ?><?php echo $svc_cta_em ? ' <em>'.esc_html($svc_cta_em).'</em>' : ''; ?><?php echo esc_html($svc_cta_post); ?></h2>
      <p><?php echo esc_html($svc_cta_sub); ?></p>
      <div class="section-foot">
        <a class="btn btn--primary" href="<?php echo esc_url(home_url('/#contact')); ?>"><?php echo esc_html($svc_cta_btn); ?></a>
        <a class="btn btn--ghost-dark" href="<?php echo esc_url(home_url('/pricing/')); ?>">See rates</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
