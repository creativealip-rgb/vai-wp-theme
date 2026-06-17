<?php
/* Template Name: VAI Achievement / Press */
get_header();
?>
<style>
/* Achievement page — local styles */
.press-featured {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 24px 32px;
  max-width: 980px;
  margin: 0 auto;
  padding: 36px 40px;
  background: var(--white);
  border: 1px solid var(--line);
  border-radius: 18px;
  align-items: center;
  justify-items: center;
}
.press-featured img {
  max-height: 36px; max-width: 140px; object-fit: contain;
  filter: grayscale(1) opacity(.55);
  transition: filter .25s ease;
}
.press-featured img:hover { filter: grayscale(0) opacity(1); }
@media (max-width: 720px) {
  .press-featured { grid-template-columns: repeat(2, 1fr); gap: 20px; padding: 24px 20px; }
  .press-featured img { max-height: 30px; }
}
.press-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}
.press-card {
  display: flex; flex-direction: column;
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 14px;
  overflow: hidden;
  transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
  text-decoration: none; color: inherit;
}
.press-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(16,46,62,.10); border-color: var(--teal); }
.press-card-img {
  height: 130px;
  display: flex; align-items: center; justify-content: center;
  padding: 24px;
  background: var(--cream);
  border-bottom: 1px solid var(--line);
}
.press-card-img img { max-height: 80px; max-width: 180px; object-fit: contain; filter: grayscale(0.2); }
.press-card:hover .press-card-img img { filter: grayscale(0); }
.press-card-body { padding: 20px 22px 24px; flex: 1; display: flex; flex-direction: column; }
.press-card-outlet {
  font-family: var(--sans);
  font-size: 11px; font-weight: 700;
  letter-spacing: .14em; text-transform: uppercase;
  color: var(--teal);
  margin-bottom: 10px;
  display: flex; align-items: center; gap: 6px;
}
.press-card-outlet::before {
  content: ''; width: 14px; height: 2px; background: var(--teal);
}
.press-card-title {
  font-family: var(--serif);
  font-size: 17px; line-height: 1.4;
  color: var(--navy);
  flex: 1;
}
.press-card-cta {
  margin-top: 16px;
  font-size: 12px; font-weight: 600;
  color: var(--teal);
  display: inline-flex; align-items: center; gap: 4px;
  text-transform: uppercase; letter-spacing: .08em;
}
.press-card:hover .press-card-cta { gap: 8px; }
.press-card-cta svg { width: 12px; height: 12px; }
@media (max-width: 980px) { .press-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 720px) { .press-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 480px) { .press-grid { grid-template-columns: 1fr; } }

.recognition-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  max-width: 980px;
  margin: 0 auto;
  border: 1px solid var(--line);
  border-radius: 18px;
  overflow: hidden;
  background: var(--white);
}
.recognition-cell {
  padding: 32px 20px;
  text-align: center;
  border-right: 1px solid var(--line);
}
.recognition-cell:last-child { border-right: 0; }
.recognition-cell b {
  display: block;
  font-family: var(--serif);
  font-size: 44px; font-weight: 600;
  color: var(--navy);
  line-height: 1;
  margin-bottom: 8px;
}
.recognition-cell b small { font-size: 24px; color: var(--teal); }
.recognition-cell span {
  display: block;
  font-size: 13px;
  color: var(--ink-soft);
  font-weight: 500;
}
@media (max-width: 720px) {
  .recognition-grid { grid-template-columns: repeat(2, 1fr); }
  .recognition-cell:nth-child(2) { border-right: 0; }
  .recognition-cell:nth-child(1), .recognition-cell:nth-child(2) { border-bottom: 1px solid var(--line); }
  .recognition-cell b { font-size: 36px; }
}
</style>

<!-- HERO -->
<section class="hero" style="min-height:36vh; padding:80px 0 50px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow">Achievement &amp; Press</span>
    <h1>Featured in <em>12+ outlets</em><br>across Indonesia and beyond.</h1>
    <p class="hero-sub" style="max-width:680px; margin:18px auto 0;">
      Twelve years of named-personal service, recognized by regional and global media, business directories, and industry awards.
    </p>
    <div class="svc-hero-stats" style="margin-top:40px;">
      <div class="svc-hero-stat"><b>22</b><span>articles</span></div>
      <div class="svc-hero-stat"><b>12+</b><span>outlets</span></div>
      <div class="svc-hero-stat"><b>6</b><span>industries</span></div>
      <div class="svc-hero-stat"><b>14+</b><span>years</span></div>
    </div>
  </div>
</section>

<!-- FEATURED BY -->
<section class="section section--cream">
  <div class="container" style="text-align:center;">
    <span class="eyebrow" style="justify-content:center;">Featured by</span>
    <h2 style="margin:18px 0 36px;">Trusted by <em>leading outlets</em>.</h2>
    <div class="press-featured">
      <?php
      $featured = array('featured-by-1.png','featured-by-2.png','featured-by-3.png','featured-by-4.png','featured-by-5.png','featured-by-6.jpg','featured-by-7.jpg','featured-by-8.jpg','featured-by-9.png','featured-by-10.jpg');
      $alt = array('Outsource Accelerator','GoodFirms','DesignRush','BestStartup Asia','PR Expert','Business World','ASEAN','Asia Magazine','Clutch','TopVA');
      for ($i=0; $i<count($featured); $i++):
      ?>
      <img src="<?php echo vai_asset('media-logos/'.$featured[$i]); ?>" alt="<?php echo $alt[$i]; ?>" loading="lazy" width="140" height="36" decoding="async">
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- PRESS COVERAGE -->
<section class="section">
  <div class="container">
    <div class="svc-detail-head" data-num="01" style="margin-bottom:40px;">
      <span class="svc-detail-tag" style="margin:0;">Press coverage</span>
      <h2>In the <em>media</em>.</h2>
      <p>Articles, features, and industry recognition for our named-personal approach to virtual assistance.</p>
    </div>
    <div class="press-grid">
      <?php
      $press = array(
        array('media-1-1.png','Outsource Accelerator','How VAI built a 14-year virtual assistance practice in Jakarta.','https://www.outsourceaccelerator.com/'),
        array('media-2-1.png','GoodFirms','Named-personal service model: a case study in long-term client trust.','https://www.goodfirms.co/'),
        array('media-3-1.png','DesignRush','Top virtual assistant agencies serving Southeast Asia.','https://www.designrush.com/'),
        array('media-5-1.png','BestStartup Asia','Finalist, Best B2B Service Indonesia 2023.','https://beststartup.asia/'),
        array('media-6-1.png','PR Expert Indonesia','Founder profile: 9 years executive, 14 years entrepreneur.','https://prexpert.id/'),
        array('media-7-1.png','Business World','Why named-personal VA models outperform rotating pools.','https://businessworld.in/'),
        array('media-8-1.png','ASEAN Business','Cross-border VA delivery: Indonesia to the world.','https://aseanbusiness.org/'),
        array('media-10-1.png','Asia Magazine','VAI founder featured in the executive women series.','https://www.theasiamag.com/'),
        array('media-11-1.png','Clutch.co','Top-rated virtual assistant service, 99% satisfaction.','https://clutch.co/'),
        array('media-12-1.png','TopVA Review','In-depth review of VAI\'s executive admin offering.','https://topvareview.com/'),
        array('media-13-1.png','Startup Insight SEA','Hidden gems: VA startups doing it right.','https://startupinsightsea.com/'),
        array('media-15-1.png','B2B Service Hub','How VAI structures onboarding for executive clients.','https://b2bservicehub.io/'),
        array('media-18-3.png','CEO Weekly Asia','Founder interview: scaling a named-personal service.','https://ceoweeklyasia.com/'),
        array('media-19-2.png','Fempreneur Indonesia','Women-led service businesses shaping SEA.','https://fempreneur.id/'),
        array('media-20-1.png','Remote Work Daily','Best practices from 14 years of remote-first ops.','https://remoteworkdaily.com/'),
        array('media-21-2.png','Entrepreneur Asia','Lessons from 100+ client engagements.','https://www.entrepreneur.com/'),
        array('media-22-2.png','Service Business Magazine','Pricing structure breakdown: On Demand vs Dedicated.','https://servicebusinessmag.com/'),
        array('media-23-2.png','HRD Asia','The ROI of a named-personal VA for busy executives.','https://hrd.asia/'),
        array('media-24-1.png','Ops Insider','Document, data, and travel management best practices.','https://opsinsider.com/'),
        array('media-25-1.png','Service Pro Network','Inside the named-personal VA model.','https://servicepronet.com/'),
        array('media-26-1.png','Biz Catalyst','Profile: 14 years, 100+ clients, 99% satisfaction.','https://bizcatalyst.io/'),
        array('media-27-1.png','Industry Voice','How VAI became a reference for VA service in IDN.','https://industryvoice.id/'),
      );
      foreach ($press as $p):
      ?>
      <a class="press-card" href="<?php echo $p[3]; ?>" target="_blank" rel="noopener">
        <div class="press-card-img">
          <img src="<?php echo vai_asset('media-logos/'.$p[0]); ?>" alt="<?php echo $p[1]; ?>" loading="lazy" width="180" height="80" decoding="async">
        </div>
        <div class="press-card-body">
          <div class="press-card-outlet"><?php echo $p[1]; ?></div>
          <div class="press-card-title"><?php echo $p[2]; ?></div>
          <span class="press-card-cta">
            Read article
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- RECOGNITION -->
<section class="section section--cream">
  <div class="container">
    <div class="svc-detail-head" data-num="02" style="margin-bottom:40px;">
      <span class="svc-detail-tag" style="margin:0;">Recognition</span>
      <h2>A track record of <em>named-personal</em> service.</h2>
      <p>Twelve years of measurable results across continents, industries, and engagement sizes.</p>
    </div>
    <div class="recognition-grid">
      <div class="recognition-cell"><b>22</b><span>Press &amp; media features</span></div>
      <div class="recognition-cell"><b>14<small>+</small></b><span>Years in service</span></div>
      <div class="recognition-cell"><b>100<small>+</small></b><span>Clients served</span></div>
      <div class="recognition-cell"><b>99<small>%</small></b><span>Satisfaction rate</span></div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2>Want to be the <em>next success story</em>?</h2>
    <p style="margin:18px auto 32px;">Book a free consultation. We'll review your workload and recommend the right plan — no pressure.</p>
    <a href="https://form.jotform.com/202773574256057" target="_blank" rel="noopener" class="btn btn--cream btn--lg">Request Free Consultation
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<?php get_footer(); ?>
