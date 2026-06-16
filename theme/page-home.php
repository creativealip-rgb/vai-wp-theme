<?php
/* Template Name: VAI Homepage */
get_header();
?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-grid">
    <div>
      <span class="hero-eyebrow">Since 2011 · Jakarta, Indonesia</span>
      <h1>Your trusted <em>assistant</em><br>in the next room.</h1>
      <p class="hero-sub">Personal, executive, and operational support for entrepreneurs, expatriates, and business owners — 14 years strong, 99% client satisfaction, named-personal service led by <strong>Mbak Mimi</strong>.</p>
      <div class="hero-cta">
        <a href="#contact" class="btn btn--primary btn--lg">Hire a Virtual Assistant
          <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="#rates" class="btn btn--ghost btn--lg">View Rates</a>
      </div>
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="num">14<small>+</small></div>
          <div class="lbl">Years experience</div>
        </div>
        <div class="hero-stat">
          <div class="num">99<small>%</small></div>
          <div class="lbl">Satisfaction</div>
        </div>
        <div class="hero-stat">
          <div class="num">6<small>+</small></div>
          <div class="lbl">Countries served</div>
        </div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-floating-tag">
        <span class="dot"></span>
        <span><strong>Available now</strong> · Replies in &lt; 2h</span>
      </div>
      <div class="hero-img-frame">
        <img src="<?php echo vai_asset('photos/mimi-new.jpg'); ?>" alt="Mimi Amilia, Founder of Virtual Assistant Indonesia" loading="eager">
        <div class="hero-card">
          <div class="avatar">M</div>
          <div>
            <div class="name">Mimi Amilia</div>
            <div class="role">Founder & CEO</div>
          </div>
          <div class="hero-rating">
            <div class="stars">★★★★★</div>
            <div class="reviews">100+ clients</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PRESS -->
<div class="press">
  <div class="container press-row">
    <div class="press-label">As featured in</div>
    <div class="press-logos">
      <?php
      $logos = array(
        array('featured-by-1.png','Outsource Accelerator','https://www.outsourceaccelerator.com/'),
        array('featured-by-2.png','GoodFirms','https://www.goodfirms.co/'),
        array('featured-by-3.png','DesignRush','https://www.designrush.com/'),
        array('featured-by-4.png','BestStartup Asia','https://beststartup.asia/'),
        array('featured-by-5.png','PR Expert','https://prexpert.id/'),
        array('featured-by-6.jpg','Business World','https://businessworld.in/'),
        array('featured-by-7.jpg','ASEAN','https://aseanbusiness.org/'),
        array('featured-by-9.png','Asia Magazine','https://www.theasiamag.com/'),
      );
      for ($i=0; $i<count($logos); $i++):
      ?>
      <a href="<?php echo $logos[$i][2]; ?>" target="_blank" rel="noopener" aria-label="<?php echo $logos[$i][1]; ?>">
        <img src="<?php echo vai_asset('media-logos/'.$logos[$i][0]); ?>" alt="<?php echo $logos[$i][1]; ?>" loading="lazy">
      </a>
      <?php endfor; ?>
    </div>
  </div>
</div>

<!-- ABOUT FOUNDER -->
<section class="section fade-up" id="about">
  <div class="container">
    <div class="founder-grid">
      <div class="founder-img">
        <img src="<?php echo vai_asset('photos/mimi-new.jpg'); ?>" alt="Mimi Amilia at work" loading="lazy">
      </div>
      <div class="founder-content">
        <span class="eyebrow">Meet the founder</span>
        <h2>Built on <em>9 years</em> of executive experience.</h2>
        <p>Before founding VAI in 2011, Mimi served as Senior Executive Secretary to a President Director at a major telecommunications company in Jakarta for nine years. That depth of experience shapes every engagement we run today.</p>
        <p>VAI now supports entrepreneurs, expatriates, and business owners across Indonesia and overseas — from quick personal errands to full operational support for growing teams.</p>
        <div class="founder-quote">"Think of us as a regular assistant sitting in the next room — except the next room is in another country."</div>
        <div class="founder-credentials">
          <div class="founder-cred">
            <div class="num">9 yrs</div>
            <div class="lbl">Executive Secretary background</div>
          </div>
          <div class="founder-cred">
            <div class="num">100+</div>
            <div class="lbl">Clients served globally</div>
          </div>
          <div class="founder-cred">
            <div class="num">12</div>
            <div class="lbl">Industry awards & features</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS BAND -->
<section class="stats-band">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-cell">
        <div class="num">2011</div>
        <div class="lbl">Founded in Jakarta</div>
      </div>
      <div class="stat-cell">
        <div class="num">100<small>+</small></div>
        <div class="lbl">Clients served</div>
      </div>
      <div class="stat-cell">
        <div class="num">12<small>+</small></div>
        <div class="lbl">Industry awards &amp; features</div>
      </div>
      <div class="stat-cell">
        <div class="num">24<small>/7</small></div>
        <div class="lbl">Timezone coverage</div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section fade-up section--services" id="services">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Services</span>
      <h2>Three ways we <em>support</em> your day.</h2>
      <p>From daily life to executive operations to business growth — pick a category and we'll match you with the right VA.</p>
    </div>
    <?php
    // 3 category cards (Personal / Executive / Business). Each card lists its
    // services inline so visitors can scan the scope before clicking through.
    $service_groups = array(
      'Personal' => array(
        'lead'  => 'icon-personal-assistant.gif',
        'tag'   => 'For busy individuals',
        'desc'  => 'Lifestyle and personal support so your time and headspace go where they matter most.',
        'items' => array(
          'Personal Assistant — daily tasks and lifestyle simplification',
          'Travel Management — trips, hotels, rentals, full itineraries',
        ),
      ),
      'Executive' => array(
        'lead'  => 'icon-executive-admin.gif',
        'tag'   => 'For leadership teams',
        'desc'  => 'Secretarial, research, and operational support that keeps leadership organized and on brand.',
        'items' => array(
          'Executive Administration — admin that runs the company, not just the calendar',
          'Research &amp; Data Entry — clean, accurate, on schedule',
          'Legal Consultant — document review and regulatory guidance',
        ),
      ),
      'Business' => array(
        'lead'  => 'icon-marketing.gif',
        'tag'   => 'For growing companies',
        'desc'  => 'Growth, brand, and event support that turns strategy into measurable awareness and revenue.',
        'items' => array(
          'Marketing &amp; Advertising — campaigns that drive reach and sales',
          'Social Media Management — planned, posted, measured',
          'Event Planner — corporate and private, end to end',
          'Project Support — customised scope: PMO, monitoring, office ops',
        ),
      ),
    );
    ?>
    <div class="svc-cats">
      <?php foreach ($service_groups as $cat => $g): ?>
      <a class="svc-cat" href="<?php echo esc_url(home_url('/services/#'.strtolower($cat))); ?>">
        <div class="svc-cat-head">
          <div class="svc-cat-icon"><img src="<?php echo vai_asset('photos/'.$g['lead']); ?>" alt="" loading="lazy"></div>
          <div class="svc-cat-meta">
            <h3 class="svc-cat-title"><?php echo esc_html($cat); ?></h3>
            <span class="svc-cat-tag"><?php echo esc_html($g['tag']); ?></span>
          </div>
        </div>
        <p class="svc-cat-desc"><?php echo $g['desc']; ?></p>
        <ul class="svc-cat-list">
          <?php foreach ($g['items'] as $item): ?>
            <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>
        <span class="svc-cat-link">Learn more <span aria-hidden="true">→</span></span>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="section-foot">
      <a class="btn btn--ghost" href="<?php echo esc_url(home_url('/services/')); ?>">View all services</a>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section section--cream fade-up" id="how">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">How it works</span>
      <h2>From <em>inquiry</em> to results in 4 steps.</h2>
      <p>Simple, structured, and built to get you working with the right VA from day one.</p>
    </div>
    <div class="how-grid">
      <div class="how-step"><div class="step-num">01</div><h3>Free Consultation</h3><p>Tell us your workload, scope, and goals. We listen first, recommend later.</p></div>
      <div class="how-step"><div class="step-num">02</div><h3>VA Matching</h3><p>We pair you with the right VA from our team based on skills and language fit.</p></div>
      <div class="how-step"><div class="step-num">03</div><h3>Onboarding</h3><p>Tools, schedule, and communication channels set up. SOP shared with you.</p></div>
      <div class="how-step"><div class="step-num">04</div><h3>Get Things Done</h3><p>Daily updates, weekly reports, and continuous support — no babysitting required.</p></div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section testi-section" id="testimonials">
  <div class="container">
    <div class="section-head">
      <span class="eyebrow">Client stories</span>
      <h2>Trusted across <em>6+ countries</em>.</h2>
      <p>Entrepreneurs, business owners, and executives who rely on VAI for the work that actually matters.</p>
    </div>
    <?php
    // Order: featured first (longest, most impactful), then supporting quotes.
    $testis = array(
      // FEATURED — first card, larger treatment
      array('featured','★★★★★','Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don\'t need to explain too many details — she already understands everything. Outstanding!','JL','James LC','Businessman','DEU'),
      // Standard cards
      array('std','★★★★★','Mimi was very proactive, highly reliable, resourceful and always ensured all of taskings were handled professionally and timely. VAI has extensive network and will be an asset to any organisation.','CL','Chris Li','Businessman','MYS'),
      array('std','★★★★★','Mimi from VAI always answers back quickly by WhatsApp and email. She organized many Zoom calls, arranged schedules, and wrote documents very well. Her kindness is 10 out of 10.','ML','Monica Lee','GTG Wellness','KOR'),
      array('std','★★★★★','All the relevant information was there and everything was nicely summarized with clear steps. She has not exceeded the time given and was acting very prompt. I can only recommend the offered services.','WG','William Giger','Entrepreneur','GBR'),
      array('std','★★★★★','Finding a top-notch Virtual Assistant is not easy, yet she excels in management, customer service and other client-centered roles. Creative, punctual, and very good in written and verbal communication.','CL','Catherine Lang','Entrepreneur','CAN'),
      array('std','★★★★★','Baru pertama kali memakai jasa VA dan sangat puas dengan hasilnya. Saya sangat dibantu dan semua pekerjaan dilakukan sesuai dengan waktu dan kesepakatan. Very worth it!','RJ','Rahma Juliani','Start-up Owner','IDN'),
      array('std','★★★★★','Mimi was wonderfully committed to the job. She demonstrated great initiative to solve issues and was responsive to all my business needs. Well done and thank you.','PW','P. Wee','Businessman','MYS'),
    );
    $flags = array('DEU'=>'🇩🇪','MYS'=>'🇲🇾','KOR'=>'🇰🇷','GBR'=>'🇬🇧','CAN'=>'🇨🇦','IDN'=>'🇮🇩');
    $first = true;
    foreach ($testis as $t):
      $cls = $t[0];
      $stars = $t[1]; $quote = $t[2]; $init = $t[3]; $name = $t[4]; $role = $t[5]; $cc = $t[6];
      $flag = isset($flags[$cc]) ? $flags[$cc] : '🌐';
    ?>
    <article class="testi-card testi-card--<?php echo $cls; ?>">
      <span class="testi-quote-mark" aria-hidden="true">"</span>
      <?php if ($cls === 'featured'): ?>
      <div class="testi-featured-body">
        <div class="testi-stars"><?php echo $stars; ?></div>
        <p class="testi-quote"><?php echo $quote; ?></p>
      </div>
      <div class="testi-featured-meta">
        <div class="testi-avatar"><?php echo $init; ?></div>
        <div class="testi-meta-text">
          <div class="testi-name"><?php echo $name; ?></div>
          <div class="testi-role"><?php echo $role; ?></div>
        </div>
        <div class="testi-flag" title="<?php echo $cc; ?>"><?php echo $flag; ?> <span class="testi-cc"><?php echo $cc; ?></span></div>
      </div>
      <?php else: ?>
      <div class="testi-stars"><?php echo $stars; ?></div>
      <p class="testi-quote"><?php echo $quote; ?></p>
      <div class="testi-meta">
        <div class="testi-avatar"><?php echo $init; ?></div>
        <div class="testi-meta-text">
          <div class="testi-name"><?php echo $name; ?></div>
          <div class="testi-role"><?php echo $role; ?></div>
        </div>
        <div class="testi-flag" title="<?php echo $cc; ?>"><?php echo $flag; ?> <span class="testi-cc"><?php echo $cc; ?></span></div>
      </div>
      <?php endif; ?>
    </article>
    <?php endforeach; ?>
    <div class="testi-cta">
      <a href="/testimonials/" class="btn btn--ghost btn--lg">Read all stories
        <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="section" id="rates">
  <div class="container" style="text-align:center;">
    <div class="section-head">
      <span class="eyebrow">Rates & packages</span>
      <h2>Pick the plan that<br>fits your <em>workload</em>.</h2>
      <p>On Demand for small tasks. Dedicated for ongoing operations. Need more? Let's talk.</p>
    </div>
    <div class="billing-toggle-wrap">
      <div class="billing-toggle" role="tablist" aria-label="Billing period">
        <button class="is-active" data-billing="monthly">Monthly</button>
        <button data-billing="annual">Annual <span class="billing-save">save 20%</span></button>
      </div>
    </div>
    <div class="pricing-toggle">
      <button class="is-active" data-plan="ondemand">On Demand</button>
      <button data-plan="dedicated">Dedicated</button>
    </div>
    <div class="pricing-grid" data-grid="ondemand">
      <div class="price-card">
        <h3>Starter</h3><div class="price">5<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 1.500.000 / month" data-annual="Rp 14.400.000 / year">Rp 1.500.000 / month</div>
        <ul class="price-features"><li>Small errands & quick tasks</li><li>Personal projects</li><li>Email & WhatsApp support</li><li>Same-day reply window</li></ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card is-featured">
        <span class="price-badge">Best Option</span>
        <h3>Executive</h3><div class="price">12<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 2.600.000 / month" data-annual="Rp 24.960.000 / year">Rp 2.600.000 / month</div>
        <ul class="price-features"><li>Executive support tasks</li><li>Time-consuming workflows</li><li>Priority response (&lt; 2h)</li><li>Weekly status report</li></ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card">
        <h3>Operator</h3><div class="price">24<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 4.200.000 / month" data-annual="Rp 40.320.000 / year">Rp 4.200.000 / month</div>
        <ul class="price-features"><li>Day-to-day operations</li><li>High-demand workloads</li><li>Dedicated VA matching</li><li>Daily updates included</li></ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
    </div>
    <div class="pricing-grid" data-grid="dedicated" style="display:none;">
      <div class="price-card">
        <h3>Team</h3><div class="price">40<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 6.000.000 / month" data-annual="Rp 57.600.000 / year">Rp 6.000.000 / month</div>
        <ul class="price-features"><li>Project assistance</li><li>Beyond inbox & scheduling</li><li>Streamlined project mgmt</li><li>On-time delivery focus</li><li>Up to 3 team members</li></ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card is-featured">
        <span class="price-badge">Most Popular</span>
        <h3>Growth</h3><div class="price">60<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 6.800.000 / month" data-annual="Rp 65.280.000 / year">Rp 6.800.000 / month</div>
        <ul class="price-features"><li>Delegate full workload</li><li>Expert-level assistance</li><li>Strategy execution support</li><li>Bi-weekly review calls</li><li>Up to 6 team members</li></ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card">
        <h3>Enterprise</h3><div class="price">100<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 12.500.000 / month" data-annual="Rp 120.000.000 / year">Rp 12.500.000 / month</div>
        <ul class="price-features"><li>Premium ongoing service</li><li>Larger team coverage</li><li>Comprehensive support</li><li>Dedicated account manager</li><li>1 division or department</li></ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
    </div>
    <p style="margin-top:48px; font-size:14px; color:var(--ink-soft);">Need more time or custom scope? <a href="#contact" style="font-weight:600;">Discuss with us →</a></p>
  </div>
</section>

<!-- CTA -->
<section class="cta-band" id="contact">
  <div class="container">
    <span class="eyebrow" style="color:var(--teal-3); justify-content:center;">Free consultation</span>
    <h2 style="margin-top:18px;">Let's build something<br><em>together</em>.</h2>
    <p>Book a free consultation. We'll review your workload and recommend the right plan — no strings attached, no obligation.</p>
    <a href="https://form.jotform.com/202773574256057" target="_blank" rel="noopener" class="btn btn--cream btn--lg">Request Free Consultation
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
    <div class="cta-stats">
      <div class="cta-stat"><strong>100+</strong><span>clients served</span></div>
      <div class="cta-stat-divider"></div>
      <div class="cta-stat"><strong>99%</strong><span>satisfaction</span></div>
      <div class="cta-stat-divider"></div>
      <div class="cta-stat"><strong>14+</strong><span>years experience</span></div>
    </div>
    <div class="cta-meta">No credit card required · Reply within 1 business day</div>
  </div>
</section>

<?php get_footer(); ?>
