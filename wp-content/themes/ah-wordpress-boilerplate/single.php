<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AH_Wordpress_Boilerplate
 */

get_header();
?>

<!-- News Banner -->

<?php $content_string = get_field('post_excerpt', false, false); ?>

<section class="carousel-small">
				
	<div class="carousel-small__post-card">
		<div class="carousel-small__content">
			<p class="carousel-small__date"><?php the_time('F j, Y'); ?></p>
			<h1 class="carousel-small__title"><?php the_title(); ?></h1>
			<p class="carousel-small__subtitle">
			<?php
			if (strlen($content_string) > 140) {
				$stringCut = substr($content_string, 0, 140);
				$endPoint = strrpos($stringCut, ' ');
				$content_string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
				$content_string .= '...';
			}
			echo $content_string;
			?>
			</p>
		</div>
		<?php if(has_post_thumbnail()){
			the_post_thumbnail('large', array('class' => 'carousel-small__post-img'));
		}  ?>
	</div>

</section>

<!-- End News Banner -->



	<section class="news container">

		<div class="news__left">
			<?php get_sidebar(); ?>
		</div>

		<div class="news__right">
			<?php
				while ( have_posts() ) :
					the_post();

					//get_template_part( 'template-parts/content', get_post_type() );
					the_content();

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ah-wordpress-boilerplate' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ah-wordpress-boilerplate' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
		</div>
	</section>

<?php

get_footer();
