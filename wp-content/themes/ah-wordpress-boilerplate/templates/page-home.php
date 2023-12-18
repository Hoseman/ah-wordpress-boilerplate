<?php /* Template Name: AH-Wordpress-HomePage */ ?>

<?php
get_header();
?>

<!-- Owl Carousel -->
<?php $short = '[owl_carousel]'; ?>
<?php echo do_shortcode($short); ?>
<!-- End Owl Carousel -->

<!-- Page Builder -->
<?php include(locate_template('./template-parts/page-builder.php')); ?>
<!-- End Page Builder -->


<!-- Content -->
	<?php
	// while ( have_posts() ) :
	// 	the_post();

	// 	get_template_part( 'template-parts/content', 'page' );

	// 	if ( comments_open() || get_comments_number() ) :
	// 		comments_template();
	// 	endif;

	// endwhile;
	?>
<!-- End content -->

<?php
//get_sidebar();
get_footer();
