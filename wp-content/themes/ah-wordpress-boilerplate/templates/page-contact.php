<?php /* Template Name: AH-Wordpress-ContactPage */ ?>

<?php
get_header();
?>

<!-- Owl Carousel Small -->
<?php $short = '[owl_carousel_small]'; ?>
<?php echo do_shortcode($short); ?>
<!-- End Owl Carousel Small -->


<!-- Page Builder -->
<?php include(locate_template('./template-parts/page-builder.php')); ?>
<!-- End Page Builder -->


    


<?php
//get_sidebar();
get_footer();
