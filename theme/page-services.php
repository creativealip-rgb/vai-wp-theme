<?php
/**
 * Template Name: Services
 * URL: /services/
 * Full breakdown of all 9 services grouped by category.
 */
get_header();
$vai_service_groups = array(
  'Personal' => array(
    'id'    => 'personal',
    'tag'   => 'For busy individuals',
    'desc'  => 'Lifestyle and personal support so your time and headspace go where they matter most.',
    'items' => array(
      array('icon-personal-assistant.gif','Personal Assistant','Daily tasks, lifestyle simplification. Your right hand for everything non-strategic.', true),
      array('icon-travel.gif','Travel Management','Trip planning, hotels, rentals, and full itineraries. Domestic and international.', false),
    ),
  ),
  'Executive' => array(
    'id'    => 'executive',
    'tag'   => 'For leadership teams',
    'desc'  => 'Secretarial, research, and operational support that keeps leadership organized and on brand.',
    'items' => array(
      array('icon-executive-admin.gif','Executive Administration','Secretarial and admin support that keeps your company organized, on time, and on brand.', true),
      array('icon-research.gif','Research &amp; Data Entry','Collect, analyze, and report. Accurate research and clean data, on schedule.', false),
      array('icon-legal.gif','Legal Consultant','Document review, legal research, and government regulation guidance at fair rates.', false),
    ),
  ),
  'Business' => array(
    'id'    => 'business',
    'tag'   => 'For growing companies',
    'desc'  => 'Growth, brand, and event support that turns strategy into measurable awareness and revenue.',
    'items' => array(
      array('icon-marketing.gif','Marketing &amp; Advertising','Strategies and campaigns to maximize your reach, sales, and brand visibility.', true),
      array('icon-social-media.gif','Social Media Management','Plan, implement, and monitor your social strategy with measurable awareness focus.', false),
      array('icon-event-planner.gif','Event Planner','Prep, oversee, and facilitate all event aspects. Corporate or private occasions.', false),
      array('icon-customise.gif','Project Support','Customised duties tailored to your scope: project control, monitoring, office management.', false),
    ),
  ),
);
?>

<!-- HERO -->
<section class="section section--hero-narrow fade-up">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">All Services</span>
      <h1>What our VAs <em>actually do</em>.</h1>
      <p>Nine services across three categories. Pick what fits, or mix and match for a custom scope.</p>
    </div>
    <div class="svc-hero-stats">
      <div class="svc-hero-stat"><b>9</b><span>services</span></div>
      <div class="svc-hero-stat"><b>3</b><span>categories</span></div>
      <div class="svc-hero-stat"><b>14+</b><span>years</span></div>
      <div class="svc-hero-stat"><b>5000+</b><span>tasks done</span></div>
    </div>
  </div>
</section>

<?php
$cat_index = 0;
foreach ($vai_service_groups as $cat => $g):
  $cat_index++;
  $count = count($g['items']);
  $grid_class = $count === 3 ? 'svc-detail-grid svc-detail-grid--3' : 'svc-detail-grid svc-detail-grid--2';
?>
<section class="section section--alt fade-up svc-cat-section" id="<?php echo esc_attr($g['id']); ?>">
  <div class="container">
    <div class="svc-detail-head" data-num="<?php echo sprintf('%02d', $cat_index); ?>">
      <span class="svc-detail-tag"><?php echo esc_html($g['tag']); ?></span>
      <h2><?php echo esc_html($cat); ?> <em>services</em></h2>
      <p><?php echo $g['desc']; ?></p>
    </div>
    <div class="<?php echo $grid_class; ?>">
      <?php foreach ($g['items'] as $svc): ?>
      <div class="svc-card <?php echo !empty($svc[3]) ? 'svc-card--popular' : ''; ?>">
        <?php if (!empty($svc[3])): ?>
          <span class="svc-popular-badge">★ Most popular</span>
        <?php endif; ?>
        <div class="svc-icon"><img src="<?php echo vai_asset('photos/'.$svc[0]); ?>" alt="" loading="lazy"></div>
        <h3><?php echo $svc[1]; ?></h3>
        <p><?php echo $svc[2]; ?></p>
        <a class="svc-card-link" href="<?php echo esc_url(home_url('/#contact')); ?>">Get started <span aria-hidden="true">→</span></a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- CTA -->
<section class="section section--cream fade-up">
  <div class="container">
    <div class="section-head">
      <h2>Not sure which fits? <em>We'll scope it with you.</em></h2>
      <p>Tell us your workload and goals in a free consultation. We'll recommend the right mix, and you only pay for the hours you need.</p>
      <div class="section-foot">
        <a class="btn btn--primary" href="<?php echo esc_url(home_url('/#contact')); ?>">Book a free consultation</a>
        <a class="btn btn--ghost-dark" href="<?php echo esc_url(home_url('/pricing/')); ?>">See rates</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
