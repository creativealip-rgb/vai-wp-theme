<?php
/* Template Name: VAI Testimonials */
get_header();
?>

<section class="hero" style="min-height:34vh; padding:80px 0 60px;">
  <div class="container" style="text-align:center;">
    <span class="hero-eyebrow">Client stories</span>
    <h1>Trusted across <em>6+ countries</em>.</h1>
    <p class="hero-sub" style="max-width:640px; margin:18px auto 0;">
      Entrepreneurs, business owners, and executives from around the world on why they rely on VAI.
    </p>
  </div>
</section>

<section class="section section--cream">
  <div class="container" style="max-width:1000px;">
    <?php
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
        array('James LC','Businessman','DEU','Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don\'t need to explain too many details — she already understands everything! Outstanding! I wish there were more Mimis in every country.'),
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

    foreach ($regions as $region => $testis):
    ?>
    <div style="margin-bottom:64px;">
      <h3 style="font-family:var(--sans);font-size:14px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:var(--teal);margin-bottom:24px;"><?php echo $region; ?></h3>
      <div class="testi-grid">
        <?php foreach ($testis as $t): ?>
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-quote"><?php echo $t[3]; ?></p>
          <div class="testi-meta">
            <div class="testi-avatar"><?php echo strtoupper(substr($t[0],0,2)); ?></div>
            <div>
              <div class="testi-name"><?php echo $t[0]; ?></div>
              <div class="testi-role"><?php echo $t[1]; ?></div>
            </div>
            <div class="testi-flag"><?php echo $t[2]; ?></div>
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
