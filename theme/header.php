<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://wa.me">
<meta name="theme-color" content="#0B2535">
<?php wp_head(); ?>
<meta name="description" content="Virtual Assistant Indonesia — leading VA service since 2011. Personal, executive, and operational support for entrepreneurs, expatriates, and businesses worldwide.">
<link rel="icon" type="image/png" sizes="512x512" href="<?php echo vai_asset('photos/logo-vai-icon.png'); ?>">
<meta property="og:title" content="V.A.I — Virtual Assistant Indonesia">
<meta property="og:description" content="Leading VA service since 2011. Personal, executive, and operational support for entrepreneurs worldwide.">
<meta property="og:image" content="<?php echo vai_asset('photos/mimi-new.jpg'); ?>">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
</head>
<body <?php body_class(); ?>>
<a href="#main" class="skip-link">Skip to main content</a>

<header class="site-header">
  <div class="container header-row">
    <a href="<?php echo home_url('/'); ?>" class="brand">
      <img src="<?php echo vai_asset('photos/logo-vai-icon.png'); ?>" alt="Virtual Assistant Indonesia" class="brand-icon">
      <div class="brand-text">
        <strong>V.A.I</strong>
        <small>VIRTUAL ASSISTANT INDONESIA</small>
      </div>
    </a>
    <nav class="nav">
      <a href="<?php echo vai_hash_link('#about'); ?>">About</a>
      <a href="<?php echo vai_hash_link('#services'); ?>">Services</a>
      <a href="<?php echo vai_hash_link('#testimonials'); ?>">Testimonials</a>
      <a href="<?php echo vai_hash_link('#rates'); ?>">Rates</a>
      <a href="<?php echo vai_hash_link('#how'); ?>">Process</a>
    </nav>
    <a href="<?php echo vai_hash_link('#contact'); ?>" class="btn btn--primary">Hire a VA
      <svg class="arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
    <button class="menu-toggle" aria-label="Menu"><span></span></button>
  </div>
</header>

<main id="main">
