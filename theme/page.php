<?php
get_header();
echo "<!-- DEFAULT PAGE TEMPLATE -->";
?>
<div class="section"><div class="container">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</div></div>
<?php get_footer(); ?>
