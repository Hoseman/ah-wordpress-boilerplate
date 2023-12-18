<?php
function ah_customize_register( $wp_customize ){

    $wp_customize->add_section('footer_logo_section', array(
        'title'    => __('Footer Logo', 'theme-textdomain'),
        'priority' => 30,
    ));


    $wp_customize->add_setting('footer_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => __('Upload Footer Logo', 'theme-textdomain'),
        'section'  => 'footer_logo_section',
        'settings' => 'footer_logo',
    )));

    $wp_customize->add_setting( 'ah_twitter_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_instagram_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_facebook_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_youtube_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_address_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_telephone_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_mobile_handle', [
        'default'  =>  ''
    ]);

    $wp_customize->add_setting( 'ah_email_handle', [
        'default'  =>  ''
    ]);

    // $wp_customize->add_setting( 'ah_privacy', [
    //     'default'  =>  ''
    // ]);

    // $wp_customize->add_setting( 'ah_privacy_link', [
    //     'default'  =>  ''
    // ]);

    // $wp_customize->add_setting( 'ah_cookie', [
    //     'default'  =>  ''
    // ]);

    // $wp_customize->add_setting( 'ah_cookie_link', [
    //     'default'  =>  ''
    // ]);

    $wp_customize->add_section( 'ah_social_section', [
        'title' =>  __('Themes Social Settings', 'AH_Wordpress_Boilerplate'),
        'priority'  =>  30
    ]);

    $wp_customize->add_section( 'ah_address_section', [
        'title' =>  __('Themes Address', 'AH_Wordpress_Boilerplate'),
        'priority'  =>  33
    ]);

    $wp_customize->add_section( 'ah_strapline_section', [
        'title' =>  __('Themes Header Strapline', 'AH_Wordpress_Boilerplate'),
        'priority'  =>  34
    ]);

    // $wp_customize->add_section( 'ah_footer_links', [
    //     'title' =>  __('Themes Footer Links', 'AH_Wordpress_Boilerplate'),
    //     'priority'  =>  35
    // ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_social_twitter_input',
        array(
            'label' => __('Twitter URL', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_social_section',
            'settings' => 'ah_twitter_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_social_instagram_input',
        array(
            'label' => __('Instagram URL', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_social_section',
            'settings' => 'ah_instagram_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_social_facebook_input',
        array(
            'label' => __('Facebook URL', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_social_section',
            'settings' => 'ah_facebook_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_social_youtube_input',
        array(
            'label' => __('Youtube URL', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_social_section',
            'settings' => 'ah_youtube_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_telephone_input',
        array(
            'label' => __('Company Telephone', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_address_section',
            'settings' => 'ah_telephone_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_mobile_input',
        array(
            'label' => __('Company Mobile', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_address_section',
            'settings' => 'ah_mobile_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_address_input',
        array(
            'label' => __('Company Address', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_address_section',
            'settings' => 'ah_address_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_email_input',
        array(
            'label' => __('Company Email', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_address_section',
            'settings' => 'ah_email_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ah_strapline_input',
        array(
            'label' => __('Header Strapline', 'AH_Wordpress_Boilerplate'),
            'section' => 'ah_strapline_section',
            'settings' => 'ah_strapline_handle'
        )
    ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_privacy',
    //     array(
    //         'label' => __('Footer Privacy Policy', 'AH_Wordpress_Boilerplate'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_privacy'
    //     )
    // ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_privacy_link',
    //     array(
    //         'label' => __('Footer Privacy Policy Link', 'AH_Wordpress_Boilerplate'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_privacy_link'
    //     )
    // ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_cookie',
    //     array(
    //         'label' => __('Footer Cookie Policy', 'AH_Wordpress_Boilerplate'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_cookie'
    //     )
    // ));

    // $wp_customize->add_control(new WP_Customize_Control(
    //     $wp_customize,
    //     'ah_footer_links_bottom_cookie_link',
    //     array(
    //         'label' => __('Footer Cookie Policy Link', 'AH_Wordpress_Boilerplate'),
    //         'section' => 'ah_footer_links',
    //         'settings' => 'ah_cookie_link'
    //     )
    // ));
}



// function theme_customizer_settings($wp_customize) {

//     $wp_customize->add_section('footer_logo_section', array(
//         'title'    => __('Footer Logo', 'theme-textdomain'),
//         'priority' => 30,
//     ));


//     $wp_customize->add_setting('footer_logo', array(
//         'default'   => '',
//         'transport' => 'refresh',
//     ));


//     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
//         'label'    => __('Upload Footer Logo', 'theme-textdomain'),
//         'section'  => 'footer_logo_section',
//         'settings' => 'footer_logo',
//     )));
// }

// add_action('customize_register', 'theme_customizer_settings');

// // Display Footer Logo in the footer
// function display_footer_logo() {
//     $footer_logo = get_theme_mod('footer_logo', '');

//     if ($footer_logo) {
//         echo '<div class="footer-logo"><img src="' . esc_url($footer_logo) . '" alt="Footer Logo"></div>';
//     }
// }

// Hook the function into the footer area
//add_action('wp_footer', 'display_footer_logo');