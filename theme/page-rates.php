<?php
/* Template Name: VAI Rates */
get_header();
?>

<section class="hero" style="min-height:36vh; padding:80px 0 50px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow">Rates &amp; packages</span>
    <h1>Pick the plan that<br>fits your <em>workload</em>.</h1>
    <p class="hero-sub" style="max-width:640px; margin:18px auto 0;">
      On Demand for small tasks and ad-hoc work. Dedicated for ongoing operations. Need more? Let's talk.
    </p>
    <div class="svc-hero-stats" style="margin-top:40px;">
      <div class="svc-hero-stat"><b>6</b><span>plans</span></div>
      <div class="svc-hero-stat"><b>2</b><span>categories</span></div>
      <div class="svc-hero-stat"><b>20%</b><span>save annual</span></div>
      <div class="svc-hero-stat"><b>30d</b><span>cancel anytime</span></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="text-align:center;">
    <div class="svc-detail-head" data-num="01" style="margin-bottom:32px;">
      <span class="svc-detail-tag" style="margin:0;">Compare plans</span>
      <h2>Choose what <em>fits</em>.</h2>
    </div>
    <div class="billing-toggle-wrap">
      <div class="billing-toggle" aria-label="Billing period">
        <button class="is-active" data-billing="monthly">Monthly</button>
        <button data-billing="annual">Annual <span class="billing-save">save 20%</span></button>
      </div>
    </div>
    <div class="pricing-toggle" aria-label="Plan type">
      <button class="is-active" data-plan="ondemand">On Demand</button>
      <button data-plan="dedicated">Dedicated</button>
    </div>

    <!-- On Demand -->
    <div class="pricing-grid" data-grid="ondemand">
      <div class="price-card">
        <h3>Starter</h3>
        <div class="price">5<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 1.500.000 / month" data-annual="Rp 14.400.000 / year">Rp 1.500.000 / month</div>
        <ul class="price-features">
          <li>Small errands &amp; quick tasks</li>
          <li>Personal projects</li>
          <li>Email &amp; WhatsApp support</li>
          <li>Same-day reply window</li>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card is-featured">
        <span class="price-badge">Best Option</span>
        <h3>Executive</h3>
        <div class="price">12<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 2.600.000 / month" data-annual="Rp 24.960.000 / year">Rp 2.600.000 / month</div>
        <ul class="price-features">
          <li>Executive support tasks</li>
          <li>Time-consuming workflows</li>
          <li>Priority response (&lt; 2h)</li>
          <li>Weekly status report</li>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card">
        <h3>Operator</h3>
        <div class="price">24<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 4.200.000 / month" data-annual="Rp 40.320.000 / year">Rp 4.200.000 / month</div>
        <ul class="price-features">
          <li>Day-to-day operations</li>
          <li>High-demand workloads</li>
          <li>Dedicated VA matching</li>
          <li>Daily updates included</li>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
    </div>

    <!-- Dedicated -->
    <div class="pricing-grid" data-grid="dedicated" style="display:none;">
      <div class="price-card">
        <h3>Team</h3>
        <div class="price">40<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 6.000.000 / month" data-annual="Rp 57.600.000 / year">Rp 6.000.000 / month</div>
        <ul class="price-features">
          <li>Project assistance</li>
          <li>Beyond inbox &amp; scheduling</li>
          <li>Streamlined project mgmt</li>
          <li>On-time delivery focus</li>
          <li>Up to 3 team members</li>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card is-featured">
        <span class="price-badge">Most Popular</span>
        <h3>Growth</h3>
        <div class="price">60<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 6.800.000 / month" data-annual="Rp 65.280.000 / year">Rp 6.800.000 / month</div>
        <ul class="price-features">
          <li>Delegate full workload</li>
          <li>Expert-level assistance</li>
          <li>Strategy execution support</li>
          <li>Bi-weekly review calls</li>
          <li>Up to 6 team members</li>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
      <div class="price-card">
        <h3>Enterprise</h3>
        <div class="price">100<small>hrs</small></div>
        <div class="price-meta" data-monthly="Rp 12.500.000 / month" data-annual="Rp 120.000.000 / year">Rp 12.500.000 / month</div>
        <ul class="price-features">
          <li>Premium ongoing service</li>
          <li>Larger team coverage</li>
          <li>Comprehensive support</li>
          <li>Dedicated account manager</li>
          <li>1 division or department</li>
        </ul>
        <a href="/contact-us/" class="price-cta">Get Started</a>
      </div>
    </div>

    <p style="margin-top:48px; font-size:14px; color:var(--ink-soft);">
      Need more time or custom scope? <a href="/contact-us/" style="font-weight:600;">Discuss with us →</a>
    </p>
  </div>
</section>

<section class="section section--cream">
  <div class="container">
    <div class="section-head" style="text-align:center;">
      <span class="eyebrow" style="justify-content:center;">What's included</span>
      <h2>Every plan, <em>standard</em>.</h2>
    </div>
    <div class="rates-includes">
      <?php
      $includes = array(
        array('NDA before kickoff','Yes, signed before any work begins.'),
        array('Named personal service','You work with the same person, not a rotating pool.'),
        array('Reply window','Configurable per plan; default 1 business day.'),
        array('Weekly status report','Included on Executive and above.'),
        array('Tooling stack','Google Workspace, Slack, WhatsApp, Zoom, project tools.'),
        array('No long-term contract','Month-to-month. Cancel any time with 30 days notice.'),
      );
      foreach ($includes as $row):
      ?>
      <div class="rates-include-row">
        <div class="rates-include-title"><?php echo $row[0]; ?></div>
        <div class="rates-include-desc"><?php echo $row[1]; ?></div>
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
      <details class="rates-faq-item">
        <summary>Are these IDR prices fixed?</summary>
        <p>Yes, all listed rates are in Indonesian Rupiah. For overseas clients we can invoice in USD/SGD, talk to us about the conversion on your engagement.</p>
      </details>
      <details class="rates-faq-item">
        <summary>What if I exceed my hours?</summary>
        <p>Additional hours are billed at Rp 250,000/hour for On Demand, with a 20% discount on Dedicated overflow. We'll always flag the trend before it hits your bill.</p>
      </details>
      <details class="rates-faq-item">
        <summary>Can I switch plans later?</summary>
        <p>Anytime. Plan changes take effect on the next billing cycle, and we re-onboard you to the new structure at no extra cost.</p>
      </details>
      <details class="rates-faq-item">
        <summary>Is there a setup fee?</summary>
        <p>No setup fee for On Demand and Executive tiers. For Dedicated and above we include a paid onboarding week to fully understand your workflow.</p>
      </details>
      <details class="rates-faq-item">
        <summary>What about taxes?</summary>
        <p>Indonesian clients: PPN 11% applies. Overseas clients: invoiced without PPN; consult your local tax advisor on deductibility.</p>
      </details>
      <details class="rates-faq-item">
        <summary>How do you handle confidentiality?</summary>
        <p>NDA signed before kickoff. Sensitive data is stored in encrypted, access-controlled folders. We never share client information with third parties.</p>
      </details>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2>Not sure which <em>plan</em> fits?</h2>
    <p style="margin:18px auto 32px;">Book a free 30-minute consultation. We'll review your workload and recommend the right plan, no pressure.</p>
    <a href="https://form.jotform.com/202773574256057" target="_blank" rel="noopener" class="btn btn--cream btn--lg">Request Free Consultation
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
