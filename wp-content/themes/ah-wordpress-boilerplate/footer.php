<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AH_Wordpress_Boilerplate
 */

?>

<footer class="footer">
    <section class="footer__layout container">
        <div class="footer__col">
            <?php
            $display_footer_logo = true; 

            if ($display_footer_logo) {
                $footer_logo = get_theme_mod('footer_logo', '');

                if ($footer_logo) {
                    echo '<div class="footer__logo"><img src="' . esc_url($footer_logo) . '" alt="Footer Logo"></div>';
                }
            }
            ?>
                        <?php if( get_theme_mod( 'ah_telephone_handle' ) ){ ?>
                               
                               <?php $tel_link = str_replace(' ', '', get_theme_mod( 'ah_telephone_handle' )); ?>
                               <a class="footer__tel" href="tel:<?php echo $tel_link; ?>"><i class="two-column-featured-contact__icon fas fa-phone-volume"></i> <?php echo get_theme_mod( 'ah_telephone_handle' ) ?></a>
                     
                       <?php } ?>

                       <?php if( get_theme_mod( 'ah_mobile_handle' ) ){ ?>
                          
                               <?php $mob_link = str_replace(' ', '', get_theme_mod( 'ah_mobile_handle' )); ?>
                           <a class="footer__tel" href="tel:<?php echo $mob_link; ?>"><i class="two-column-featured-contact__icon fas fa-mobile-alt"></i> <?php echo get_theme_mod( 'ah_mobile_handle' ) ?></a>
                           
                       <?php } ?>

                       <?php if( get_theme_mod( 'ah_email_handle' ) ){ ?>
                                
                                <a class="footer__tel" href="mailto:<?php echo get_theme_mod( 'ah_email_handle' ) ?>"><i class="two-column-featured-contact__icon fas fa-envelope"></i> <?php echo get_theme_mod( 'ah_email_handle' ) ?></a>
                                
                        <?php } ?>
        </div>
        <div class="footer__col">
            <?php wp_boilerplate_footer_menu_1(); ?>
        </div>
        <div class="footer__col">
            <?php wp_boilerplate_footer_menu_2(); ?>
        </div>
        <div class="footer__col">
            <?php wp_boilerplate_footer_menu_3(); ?>
        </div>
        <!-- <img class="footer__logo" src="/wp-content/uploads/2023/12/footer-logo-1.png"> -->

        <div class="footer__signoff">
            <div class="footer__signoff-col">
                <p class="footer__signoff-content">© <?php echo date("Y"); ?> • Starter Theme By Andrew Hosegood • All Rights Reserved • Powered By Kryptonite</p>
            </div>
            <div class="footer__signoff-col">
                <?php if( get_theme_mod( 'ah_twitter_handle' ) ){ ?>
                            <a target="_blank" href="<?php echo get_theme_mod( 'ah_twitter_handle' ) ?>"><i class="footer__signoff-icon fa-brands fa-x-twitter"></i></a>
                <?php } ?>
                <?php if( get_theme_mod( 'ah_facebook_handle' ) ){ ?>
                            <a target="_blank" href="<?php echo get_theme_mod( 'ah_facebook_handle' ) ?>"><i class="footer__signoff-icon fab fa-facebook-f"></i></a>
                <?php } ?>
                <?php if( get_theme_mod( 'ah_instagram_handle' ) ){ ?>
                            <a target="_blank" href="<?php echo get_theme_mod( 'ah_instagram_handle' ) ?>"><i class="footer__signoff-icon fab fa-instagram"></i></a>
                <?php } ?>
                <?php if( get_theme_mod( 'ah_youtube_handle' ) ){ ?>
                            <a target="_blank" href="<?php echo get_theme_mod( 'ah_youtube_handle' ) ?>"><i class="footer__signoff-icon fab fa-youtube"></i></a>
                <?php } ?>
                
                
                
            </div>
        </div>
    </section>
</footer>


<?php wp_footer(); ?>

</body>
</html>
