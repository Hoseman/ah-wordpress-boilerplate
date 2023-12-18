<?php

function ah65_owl_carousel() {
	$output = '<section class="carousel">';
	$output .= '<div class="owl-carousel-main owl-carousel owl-theme">';
	$output .= '<div class="item carousel__card">';
	$output .= '<div class="carousel__content">';
	$output .= '<h1 class="carousel__title">Lorem Ipsum Dolor Sit Amet</h1>';
	$output .= '<p class="carousel__subtitle">Quisque blandit dolor risus, sed dapibus dui facilisis sed. Donec eu porta elit. Aliquam porta sollicitudin ante, ac fermentum orci mattis et.</p>';
	$output .= '<a class="button carousel__btn">Lorem Ipsum Dolor</a>';
	$output .= '</div>';
	$output .= '<img class="carousel__img" alt="Slider 1" src="/wp-content/themes/ah-wordpress-boilerplate/src/img/slider-1.jpg">';
	$output .= '</div>';
	$output .= '<div class="item carousel__card">';
	$output .= '<div class="carousel__content">';
	$output .= '<h1 class="carousel__title">Praesent Interdum Tempor Odio Nec </h1>';
	$output .= '<p class="carousel__subtitle">Quisque blandit dolor risus, sed dapibus dui facilisis sed. Donec eu porta elit. Aliquam porta sollicitudin ante, ac fermentum orci mattis et.</p>';
	$output .= '<a class="button carousel__btn">Lorem Ipsum Dolor</a>';
	$output .= '</div>';
	$output .= '<img class="carousel__img" alt="Slider 1" src="/wp-content/themes/ah-wordpress-boilerplate/src/img/slider-1.jpg">';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</section>';
	return $output;
}
add_shortcode('owl_carousel', 'ah65_owl_carousel');