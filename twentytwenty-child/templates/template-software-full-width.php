<?php
/**
 * Template Name: Full-width Software-Template
 * Template Post Type: post, page
 * Description: Software post template
 */

//acf_form_head();
get_header();
?>

<main id="site-content" role="main">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-software', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
