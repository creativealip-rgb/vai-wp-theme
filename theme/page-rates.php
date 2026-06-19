<?php
/* Template Name: VAI Rates */
get_header();

/* ACF reads with fallbacks */
$rates_hero_eyebrow = vai_f('rates_hero_eyebrow', 'Rates & packages');
$rates_hero_pre = vai_f('rates_hero_title_pre', 'Pick the plan that<br>fits your');
$rates_hero_em  = vai_f('rates_hero_em', 'workload');
$rates_hero_post = vai_f('rates_hero_title_post', '.');
$rates_hero_sub = vai_f('rates_hero_sub', "On Demand for small tasks and ad-hoc work. Dedicated for ongoing operations. Need more? Let's talk.");
$rates_hero_stats = [
  ['b' => vai_f('rates_hero_stat_1_num', '6'),   'lbl' => vai_f('rates_hero_stat_1_lbl', 'plans')],
  ['b' => vai_f('rates_hero_stat_2_num', '2'),   'lbl' => vai_f('rates_hero_stat_2_lbl', 'categories')],
  ['b' => vai_f('rates_hero_stat_3_num', '20%'), 'lbl' => vai_f('rates_hero_stat_3_lbl', 'save annual')],
  ['b' => vai_f('rates_hero_stat_4_num', '30d'), 'lbl' => vai_f('rates_hero_stat_4_lbl', 'cancel anytime')],
];
$rates_compare_pre = vai_f('rates_compare_title_pre', 'Choose what');
$rates_compare_em  = vai_f('rates_compare_em', 'fits');
$rates_compare_post = vai_f('rates_compare_title_post', '.');
$rates_tier_od = vai_f('rates_tier_ondemand_label', 'On Demand');
$rates_tier_de = vai_f('rates_tier_dedicated_label', 'Dedicated');
$rates_custom = vai_f('rates_custom_line', 'Need more time or custom scope? <a href="/contact-us/" style="font-weight:600;">Discuss with us →</a>');

$rates_includes_title = vai_f('rates_includes_title', 'Every plan, <em>standard</em>.');
$rates_includes_sub = vai_f('rates_includes_sub', '');

$rates_inc = [];
for ( $i = 1; $i <= 5; $i++ ) {
  $rates_inc[] = [
    'name' => vai_f('rates_inc_'.$i.'_inc_name', ''),
    'desc' => vai_f('rates_inc_'.$i.'_inc_desc', ''),
  ];
}

$rates_faq = [];
for ( $i = 1; $i <= 5; $i++ ) {
  $rates_faq[] = [
    'q' => vai_f('rates_faq_'.$i.'_faq_q', ''),
    'a' => vai_f('rates_faq_'.$i.'_faq_a', ''),
  ];
}

$rates_plans = [];
for ( $i = 1; $i <= 5; $i++ ) {
  $feats_raw = vai_f('rates_plan_'.$i.'_plan_feats', '');
  $feats = array_filter(array_map('trim', preg_split("/\r\n|\r|\n/", $feats_raw)));
  $rates_plans[] = [
    'name'    => vai_f('rates_plan_'.$i.'_plan_name', ''),
    'hours'   => vai_f('rates_plan_'.$i.'_plan_hours', ''),
    'monthly' => vai_f('rates_plan_'.$i.'_plan_monthly', ''),
    'annual'  => vai_f('rates_plan_'.$i.'_plan_annual', ''),
    'badge'   => vai_f('rates_plan_'.$i.'_plan_badge', ''),
    'feats'   => $feats,
  ];
}

$rates_cta_pre = vai_f('rates_cta_title_pre', 'Not sure which');
$rates_cta_em  = vai_f('rates_cta_em', 'plan');
$rates_cta_post = vai_f('rates_cta_title_post', ' fits?');
$rates_cta_sub = vai_f('rates_cta_sub', "Book a free 30-minute consultation. We'll review your workload and recommend the right plan, no pressure.");
$rates_cta_button = vai_f('rates_cta_button', 'Request Free Consultation');
$rates_cta_url = vai_f('rates_cta_url', 'https://form.jotform.com/202773574256057');
?>

<section class="hero" style="min-height:36vh; padding:80px 0 50px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow"><?php echo esc_html($rates_hero_eyebrow); ?></span>
    <h1><?php echo $rates_hero_pre; ?> <em><?php echo esc_html($rates_hero_em); ?></em><?php echo $rates_hero_post; ?></h1>
    <p class="hero-sub" style="max-width:640px; margin:18px auto 0;">
      <?php echo esc_html($rates_hero_sub); ?>
    </p>
    <div class="svc-hero-stats" style="margin-top:40px;">
      <?php foreach ( $rates_hero_stats as $s ) : ?>
      <div class="svc-hero-stat"><b><?php echo esc_html($s['b']); ?></b><span><?php echo esc_html($s['lbl']); ?></span></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="text-align:center;">
    <div class="svc-detail-head" data-num="01" style="margin-bottom:32px;">
      <span class="svc-detail-tag" style="margin:0;">Compare plans</span>
      <h2><?php echo esc_html($rates_compare_pre); ?> <em><?php echo esc_html($rates_compare_em); ?></em><?php echo esc_html($rates_compare_post); ?></h2>
    </div>
    <div class="billing-toggle-wrap">
      <div class="billing-toggle" aria-label="Billing period">
        <button class="is-active" data-billing="monthly">Monthly</button>
        <button data-billing="annual">Annual <span class="billing-save">save 20%</span></button>
      </div>
    </div>
    <div class="pricing-toggle" aria-label="Plan type">
      <button class="is-active" data-plan="ondemand"><?php echo esc_html($rates_tier_od); ?></button>
      <button data-plan="dedicated"><?php echo esc_html($rates_tier_de); ?></button>
    </div>

    <!-- On Demand -->
    <div class="pricing-grid" data-grid="ondemand">
      <?php
      /* Plans 1-3 = On Demand. Show 3 cards. */
      $plan_defaults = [
        1 => ['Starter',  '5<small>hrs</small>',  'Rp 1.500.000 / month', 'Rp 14.400.000 / year',  '',  ['Small errands & quick tasks','Personal projects','Email & WhatsApp support','Same-day reply window']],
        2 => ['Executive','12<small>hrs</small>', 'Rp 2.600.000 / month', 'Rp 24.960.000 / year',  'Best Option', ['Executive support tasks','Time-consuming workflows','Priority response (< 2h)','Weekly status report']],
        3 => ['Operator', '24<small>hrs</small>', 'Rp 4.200.000 / month', 'Rp 40.320.000 / year',  '',  ['Day-to-day operations','High-demand workloads','Dedicated VA matching','Daily updates included']],
        4 => ['Team',     '40<small>hrs</small>', 'Rp 6.000.000 / month', 'Rp 57.600.000 / year',  '',  ['Project assistance','Beyond inbox & scheduling','Streamlined project mgmt','On-time delivery focus','Up to 3 team members']],
        5 => ['Growth',   '60<small>hrs</small>', 'Rp 6.800.000 / month', 'Rp 65.280.000 / year',  'Most Popular', ['Delegate full workload','Expert-level assistance','Strategy execution support','Bi-weekly review calls','Up to 6 team members']],
      ];
      $featured_idx = [2];
      for ( $i = 1; $i <= 3; $i++ ) :
        $p = $rates_plans[$i-1];
        $d = $plan_defaults[$i];
        $name    = $p['name']    !== '' ? $p['name']    : $d[0];
        $hours   = $p['hours']   !== '' ? $p['hours']   : $d[1];
        $monthly = $p['monthly'] !== '' ? $p['monthly'] : $d[2];
        $annual  = $p['annual']  !== '' ? $p['annual']  : $d[3];
        $badge   = $p['badge']   !== '' ? $p['badge']   : $d[4];
        $feats   = !empty($p['feats']) ? $p['feats'] : $d[5];
        $is_featured = in_array($i, $featured_idx, true);
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
      <?php endfor; ?>
    </div>

    <!-- Dedicated -->
    <div class="pricing-grid" data-grid="dedicated" style="display:none;">
      <?php
      $featured_idx2 = [2]; // 3rd card in this grid = plan 5
      for ( $i = 1; $i <= 2; $i++ ) :
        $p_idx = $i + 3; // plans 4 and 5
        $p = $rates_plans[$p_idx-1];
        $d = $plan_defaults[$p_idx];
        $name    = $p['name']    !== '' ? $p['name']    : $d[0];
        $hours   = $p['hours']   !== '' ? $p['hours']   : $d[1];
        $monthly = $p['monthly'] !== '' ? $p['monthly'] : $d[2];
        $annual  = $p['annual']  !== '' ? $p['annual']  : $d[3];
        $badge   = $p['badge']   !== '' ? $p['badge']   : $d[4];
        $feats   = !empty($p['feats']) ? $p['feats'] : $d[5];
        $is_featured = in_array($i, $featured_idx2, true);
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
      <?php endfor; ?>
      <?php
      /* 6th plan (Enterprise) — show as 3rd card in Dedicated grid. */
      $p_extra_defaults = ['Enterprise','100<small>hrs</small>','Rp 12.500.000 / month','Rp 120.000.000 / year','',['Premium ongoing service','Larger team coverage','Comprehensive support','Dedicated account manager','1 division or department']];
      ?>
      <div class="price-card">
        <h3><?php echo esc_html($p_extra_defaults[0]); ?></h3>
        <div class="price"><?php echo $p_extra_defaults[1]; ?></div>
        <div class="price-meta" data-monthly="<?php echo esc_attr($p_extra_defaults[2]); ?>" data-annual="<?php echo esc_attr($p_extra_defaults[3]); ?>"><?php echo esc_html($p_extra_defaults[2]); ?></div>
        <ul class="price-features">
          <?php foreach ( $p_extra_defaults[5] as $f ) : ?>
          <li><?php echo esc_html($f); ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
    </div>

    <p style="margin-top:48px; font-size:14px; color:var(--ink-soft);">
      <?php echo $rates_custom; ?>
    </p>
  </div>
</section>

<section class="section section--cream">
  <div class="container">
    <div class="section-head" style="text-align:center;">
      <span class="eyebrow" style="justify-content:center;">What's included</span>
      <h2><?php echo $rates_includes_title; ?></h2>
    </div>
    <div class="rates-includes">
      <?php
      $inc_defaults = [
        ['NDA before kickoff','Yes, signed before any work begins.'],
        ['Named personal service','You work with the same person, not a rotating pool.'],
        ['Reply window','Configurable per plan; default 1 business day.'],
        ['Weekly status report','Included on Executive and above.'],
        ['Tooling stack','Google Workspace, Slack, WhatsApp, Zoom, project tools.'],
      ];
      foreach ( $rates_inc as $idx => $row ) :
        $i = $idx + 1;
        $d = $inc_defaults[$i-1] ?? ['',''];
        $name = $row['name'] !== '' ? $row['name'] : $d[0];
        $desc = $row['desc'] !== '' ? $row['desc'] : $d[1];
      ?>
      <div class="rates-include-row">
        <div class="rates-include-title"><?php echo esc_html($name); ?></div>
        <div class="rates-include-desc"><?php echo esc_html($desc); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head" style="text-align:center;">
      <span class="eyebrow" style="justify-content:center;">FAQ</span>
      <h2>Common <em>questions</em>.</h2>
    </div>
    <div class="rates-faq">
      <?php
      $faq_defaults = [
        ['Are these IDR prices fixed?','Yes, all listed rates are in Indonesian Rupiah. For overseas clients we can invoice in USD/SGD, talk to us about the conversion on your engagement.'],
        ['What if I exceed my hours?','Additional hours are billed at Rp 250,000/hour for On Demand, with a 20% discount on Dedicated overflow. We will always flag the trend before it hits your bill.'],
        ['Can I switch plans later?','Anytime. Plan changes take effect on the next billing cycle, and we re-onboard you to the new structure at no extra cost.'],
        ['Is there a setup fee?','No setup fee for On Demand and Executive tiers. For Dedicated and above we include a paid onboarding week to fully understand your workflow.'],
        ['What about taxes?','Indonesian clients: PPN 11% applies. Overseas clients: invoiced without PPN; consult your local tax advisor on deductibility.'],
      ];
      foreach ( $rates_faq as $idx => $qa ) :
        $i = $idx + 1;
        $d = $faq_defaults[$i-1] ?? ['',''];
        $q = $qa['q'] !== '' ? $qa['q'] : $d[0];
        $a = $qa['a'] !== '' ? $qa['a'] : $d[1];
      ?>
      <details class="rates-faq-item">
        <summary><?php echo esc_html($q); ?></summary>
        <p><?php echo esc_html($a); ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2><?php echo esc_html($rates_cta_pre); ?> <em><?php echo esc_html($rates_cta_em); ?></em><?php echo esc_html($rates_cta_post); ?></h2>
    <p style="margin:18px auto 32px;"><?php echo esc_html($rates_cta_sub); ?></p>
    <a href="<?php echo esc_url($rates_cta_url); ?>" target="_blank" rel="noopener" class="btn btn--cream btn--lg"><?php echo esc_html($rates_cta_button); ?>
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<style>
/* Rates page — local styles */
.rates-includes { max-width: 880px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 18px 40px; }
.rates-include-row { padding: 18px 0; border-bottom: 1px solid var(--line); }
.rates-include-title { font-family: var(--sans); font-size: 14px; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
.rates-include-desc { font-size: 14px; color: var(--ink-soft); line-height: 1.55; }

.rates-faq { max-width: 780px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px; }
.rates-faq-item { background: #fff; border: 1px solid var(--line); border-radius: 12px; padding: 18px 22px; transition: border-color .2s ease; }
.rates-faq-item[open] { border-color: var(--teal); }
.rates-faq-item summary { font-family: var(--sans); font-size: 15px; font-weight: 600; color: var(--navy); cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center; }
.rates-faq-item summary::-webkit-details-marker { display: none; }
.rates-faq-item summary::after { content: '+'; font-size: 22px; color: var(--teal); font-weight: 400; line-height: 1; transition: transform .2s ease; }
.rates-faq-item[open] summary::after { content: '−'; }
.rates-faq-item p { margin-top: 12px; font-size: 14px; color: var(--ink-soft); line-height: 1.65; }

@media (max-width: 720px) { .rates-includes { grid-template-columns: 1fr; } }
</style>

<?php get_footer(); ?>
