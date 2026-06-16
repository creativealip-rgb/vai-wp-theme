<?php
/* Template Name: VAI Achievement / Press */
get_header();
?>

<section class="hero" style="min-height:34vh; padding:80px 0 60px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow">Achievement &amp; Press</span>
    <h1>Featured in <em>12+ outlets</em><br>across Indonesia and beyond.</h1>
    <p class="hero-sub" style="max-width:680px; margin:18px auto 0;">
      Twelve years of named-personal service, recognized by regional and global media, business directories, and industry awards.
    </p>
  </div>
</section>

<section class="section section--cream">
  <div class="container" style="text-align:center;">
    <span class="eyebrow" style="justify-content:center;">Featured by</span>
    <h2 style="margin:18px 0 48px;">Trusted by <em>leading outlets</em>.</h2>
    <div class="press-logos" style="justify-content:center;">
      <?php
      $featured = array('featured-by-1.png','featured-by-2.png','featured-by-3.png','featured-by-4.png','featured-by-5.png','featured-by-6.jpg','featured-by-7.jpg','featured-by-8.jpg','featured-by-9.png','featured-by-10.jpg');
      $alt = array('Outsource Accelerator','GoodFirms','DesignRush','BestStartup Asia','PR Expert','Business World','ASEAN','Asia Magazine','Clutch','TopVA');
      for ($i=0; $i<count($featured); $i++):
      ?>
      <img src="<?php echo vai_asset('media-logos/'.$featured[$i]); ?>" alt="<?php echo $alt[$i]; ?>" loading="lazy">
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head" style="text-align:center;">
      <span class="eyebrow" style="justify-content:center;">Press coverage</span>
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
          <img src="<?php echo vai_asset('media-logos/'.$p[0]); ?>" alt="<?php echo $p[1]; ?>" loading="lazy">
        </div>
        <div class="press-card-body">
          <div class="press-card-outlet"><?php echo $p[1]; ?></div>
          <div class="press-card-title"><?php echo $p[2]; ?></div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--cream">
  <div class="container" style="text-align:center;">
    <span class="eyebrow" style="justify-content:center;">Recognition</span>
    <h2 style="margin:18px 0 48px;">A track record of <em>named-personal</em> service.</h2>
    <div class="stats-grid">
      <div class="stat-cell">
        <div class="num">12<small>+</small></div>
        <div class="lbl">Press &amp; media features</div>
      </div>
      <div class="stat-cell">
        <div class="num">14<small>+</small></div>
        <div class="lbl">Years in service</div>
      </div>
      <div class="stat-cell">
        <div class="num">100<small>+</small></div>
        <div class="lbl">Clients served</div>
      </div>
      <div class="stat-cell">
        <div class="num">99<small>%</small></div>
        <div class="lbl">Satisfaction rate</div>
      </div>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2>Want to be the <em>next success story</em>?</h2>
    <p style="margin:18px auto 32px;">Book a free consultation. We'll review your workload and recommend the right plan — no strings attached.</p>
    <a href="https://form.jotform.com/202773574256057" target="_blank" rel="noopener" class="btn btn--cream btn--lg">Request Free Consultation
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</section>

<style>
/* Achievement page — local styles */
.press-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
.press-card { display: flex; flex-direction: column; background: #fff; border: 1px solid var(--line); border-radius: 14px; overflow: hidden; transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease; }
.press-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px rgba(16,46,62,.10); border-color: var(--teal); }
.press-card-img { height: 130px; display: flex; align-items: center; justify-content: center; padding: 24px; background: var(--cream); }
.press-card-img img { max-height: 80px; max-width: 180px; object-fit: contain; filter: grayscale(0.2); }
.press-card:hover .press-card-img img { filter: grayscale(0); }
.press-card-body { padding: 20px 22px 24px; }
.press-card-outlet { font-family: var(--sans); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: var(--teal); margin-bottom: 8px; }
.press-card-title { font-family: var(--serif); font-size: 17px; line-height: 1.4; color: var(--navy); }
@media (max-width: 720px) { .press-grid { grid-template-columns: 1fr; } }
</style>

<?php get_footer(); ?>
