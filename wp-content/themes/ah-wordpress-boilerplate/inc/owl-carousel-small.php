<?php

function ah65_owl_carousel_small() {
	$output = '<section class="carousel-small">';
	$output .= '<div class="owl-carousel-small owl-carousel owl-theme">';

    $height = get_field('carousel_height');
    $height_style = "height:".$height."px;";

    if (have_rows('slides_small')) : 
    while (have_rows('slides_small')) : the_row(); 

    $title = get_sub_field('carousel_small_title');
    $subtitle = get_sub_field('carousel_small_subtitle');
    $btn = get_sub_field('carousel_small_btn');
    $link = get_sub_field('carousel_small_btn_link');
    $image = get_sub_field('carousel_small_image');

    $no_image = "/wp-content/themes/ah-wordpress-boilerplate/src/img/slider-1.jpg";
    $no_alt = 'placeholder image';

    if(!empty(get_sub_field('carousel_small_image'))) {
        $image_value = $image['url'];
        $alt_value = $image['alt'];
    } else {
        $image_value = $no_image;
        $alt_value = $no_alt;
    }

	$output .= '<div class="item carousel-small__card">';
	$output .= '<div class="carousel-small__content">';

    if(!empty(get_sub_field('carousel_small_title'))) {
        $output .= '<h1 class="carousel-small__title">'.$title.'</h1>';
    }

    if(!empty(get_sub_field('carousel_small_subtitle'))) {
        $output .= '<p class="carousel-small__subtitle">'.$subtitle.'</p>';
    }

    if(!empty(get_sub_field('carousel_small_btn'))) {
        $output .= '<a href="'.$link.'" class="button carousel-small__btn">'.$btn.'</a>';
    }
	
	$output .= '</div>';
	$output .= '<img style="'.$height_style.'" class="carousel-small__img" alt="Slider 1" alt="'.$alt_value.'" src="'.$image_value.'">';
	$output .= '</div>';


    endwhile;
    endif;


	$output .= '</div>';
	$output .= '</section>';
	return $output;
}
add_shortcode('owl_carousel_small', 'ah65_owl_carousel_small');