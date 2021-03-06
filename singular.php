<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link 
 *
 * @package Security Matters
 * @subpackage Security_Matters
 * @since Security Matters
 */

get_header();
?>

<main id="site-content" role="main">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<!-- <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?> -->

<?php get_footer(); ?>
