<?php
/**
 * Template Name: Landing Page
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()):
    the_post(); ?>

    <!---Hero Template Part--->
  <?php get_template_part('/page-modules/home-hero-module/home-hero', 'page') ?>

  <!---About-us Template Part--->
  <?php get_template_part('/page-modules/about-us-module/about-us', 'page') ?>

  <!---Services Template Part--->
  <?php get_template_part('/page-modules/services-module/services', 'page') ?>
  <?php get_template_part( 'page-modules/price_plans-module/price_plans', 'page' );?>
		<?php get_template_part( 'page-modules/partners-module/partners', 'page' );?>
		<?php get_template_part( 'page-modules/facts-module/facts', 'page' );?>
		<?php get_template_part( 'page-modules/faqs-module/faqs', 'page' );?>
		<?php get_template_part( 'page-modules/price-plans/price-plans', 'page' );?>

  <!---Contact Us Template Part--->
  <?php get_template_part('/page-modules/contact-us-module/contact-us', 'page') ?>

  <?php
  // If comments are open or we have at least one comment, load up the comment template.
  if (comments_open() || get_comments_number()):
    comments_template();
  endif;

  endwhile; // End of the loop.
  ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();