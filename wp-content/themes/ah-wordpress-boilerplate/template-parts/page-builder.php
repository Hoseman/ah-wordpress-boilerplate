<?php if (have_rows('page_builder')) : ?>
    <?php while (have_rows('page_builder')) : the_row(); ?>
    
        <?php if( get_row_layout() == '1_column' ){ ?>

            <?php $padding_top = get_sub_field('one_column_padding_top'); ?>
            <?php $padding_bottom = get_sub_field('one_column_padding_bottom'); ?>
            <?php $padding_left = get_sub_field('one_column_padding_left'); ?>
            <?php $padding_right = get_sub_field('one_column_padding_right'); ?>

            <section class="container text-center" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>vw; padding-right: <?php echo $padding_right; ?>vw;">
                
                <?php if(!empty(get_sub_field('one_column_heading'))){ ?>
                    <h2 class="contact__heading"><?php the_sub_field('one_column_heading'); ?></h2>
                <?php } ?> 

                <?php if(!empty(get_sub_field('one_column_content'))){ ?>
                    <?php the_sub_field('one_column_content'); ?>
                <?php } ?>    
                
                <?php if(!empty(get_sub_field('one_column_button'))){ ?>
                    <a class="button contact__btn" href="<?php the_sub_field('one_column_button_link'); ?>"><?php the_sub_field('one_column_button'); ?></a>
                <?php } ?>

                <?php  //$columns = get_sub_field('columns'); ?>

            </section>

       <?php } elseif(get_row_layout() == 'underline') { ?>
            <div class="container">
                <hr style="margin-top:<?php the_sub_field('margin_top'); ?>px; margin-bottom:<?php the_sub_field('margin_bottom'); ?>px;" class="underline">
            </div>
       <?php } elseif(get_row_layout() == '2_column'){ ?>

            <?php $padding_top = get_sub_field('two_column_padding_top'); ?>
            <?php $padding_bottom = get_sub_field('two_column_padding_bottom'); ?>
            <?php $padding_left = get_sub_field('two_column_padding_left'); ?>
            <?php $padding_right = get_sub_field('two_column_padding_right'); ?>

            <section class="container text-center" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
                <div class="column two-column grid-gap-4">
                    <div class="column__col">

                        <?php if(get_sub_field('two_column_icon_left') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('two_column_icon_left'); ?>"></i>
                        <?php } ?>
                        
                        <?php if(!empty(get_sub_field('two_column_heading_left'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('two_column_heading_left'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('two_column_content_left'))){ ?>
                            <p class="column__content"><?php the_sub_field('two_column_content_left'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('two_column_button_left'))){ ?>
                            <a href="<?php the_sub_field('two_column_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('two_column_button_left'); ?></a>
                        <?php } ?>    
                        
                        
                    </div>
                    <div class="column__col">
        
                        <?php if(get_sub_field('two_column_icon_right') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('two_column_icon_right'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('two_column_heading_right'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('two_column_heading_right'); ?></h3>
                        <?php } ?>    
                        

                        <?php if(!empty(get_sub_field('two_column_content_right'))){ ?>
                            <p class="column__content"><?php the_sub_field('two_column_content_right'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('two_column_button_right'))){ ?>
                            <a href="<?php the_sub_field('two_column_button_link_right'); ?>" class="button column__btn"><?php the_sub_field('two_column_button_right'); ?></a>
                        <?php } ?>

                        
                    </div>
                </div>
            </section>
       <?php } elseif(get_row_layout() == '3_column'){ ?>

        <?php $padding_top = get_sub_field('three_column_padding_top'); ?>
        <?php $padding_bottom = get_sub_field('three_column_padding_bottom'); ?>
        <?php $padding_left = get_sub_field('three_column_padding_left'); ?>
        <?php $padding_right = get_sub_field('three_column_padding_right'); ?>

        <section class="container text-center" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
            <div class="column three-column grid-gap-4">
                <div class="column__col">

                        <?php if(get_sub_field('three_column_icon_left') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('three_column_icon_left'); ?>"></i>
                        <?php } ?>
                        
                        <?php if(!empty(get_sub_field('three_column_heading_left'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('three_column_heading_left'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('three_column_content_left'))){ ?>
                            <p class="column__content"><?php the_sub_field('three_column_content_left'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_button_left'))){ ?>
                            <a href="<?php the_sub_field('three_column_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_left'); ?></a>
                        <?php } ?>  

                </div>

                <div class="column__col">

                        <?php if(get_sub_field('three_column_icon_middle') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('three_column_icon_middle'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_heading_middle'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('three_column_heading_middle'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('three_column_content_middle'))){ ?>
                            <p class="column__content"><?php the_sub_field('three_column_content_middle'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_button_middle'))){ ?>
                            <a href="<?php the_sub_field('three_column_button_link_middle'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_middle'); ?></a>
                        <?php } ?>  

                </div>
                <div class="column__col">

                        <?php if(get_sub_field('three_column_icon_right') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('three_column_icon_right'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_heading_right'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('three_column_heading_right'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('three_column_content_right'))){ ?>
                            <p class="column__content"><?php the_sub_field('three_column_content_right'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_button_right'))){ ?>
                            <a href="<?php the_sub_field('three_column_button_link_right'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_right'); ?></a>
                        <?php } ?>  

                </div>
            </div>
        </section>
       <?php } elseif(get_row_layout() == '2_column_featured_right'){ ?>

            <?php $padding_top = get_sub_field('two_column_featured_padding_top');  ?>
            <?php $padding_bottom = get_sub_field('two_column_featured_padding_bottom');  ?>
            <?php $panel_background_color = get_sub_field('two_column_featured_panel_background_colour'); ?>
            <?php $section_background_color = get_sub_field('two_column_featured_section_background_colour'); ?>

            <section class="text-center" style="background: <?php echo $section_background_color; ?>; padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px">
                <div class="column two-column-featured container">

                    <div style="background: <?php echo $panel_background_color ?>;" class="column__col two-column-featured__col">

                        <?php if(!empty(get_sub_field('two_column_featured_heading_left'))){ ?>   
                                <h3 class="column__heading two-column-featured__heading"><?php the_sub_field('two_column_featured_heading_left'); ?></h3>
                            <?php } ?>    

                            <?php if(!empty(get_sub_field('two_column_featured_content_left'))){ ?>
                                <p class="column__content"><?php the_sub_field('two_column_featured_content_left'); ?></p>
                            <?php } ?>

                            <?php if(!empty(get_sub_field('two_column_featured_button_left'))){ ?>
                                <a href="<?php the_sub_field('two_column_featured_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('two_column_featured_button_left'); ?></a>
                            <?php } ?>  


                    </div>
                    <div class="column__col">
                                <?php $image_height = get_sub_field('two_column_featured_panel_height'); ?>
                                <?php $two_column_featured_image_right = get_sub_field('two_column_featured_image_right'); ?>
                                <img style="height: <?php echo $image_height; ?>px;" class="column__img" src="<?php echo $two_column_featured_image_right['url']; ?>" alt="<?php echo $two_column_featured_image_right['alt']; ?>">
                    </div>

                </div>
            </section>    
       <?php } elseif(get_row_layout() == '2_column_featured_contact'){ ?>
            <section class="two-column-featured-contact featured-contact text-center xxx">
                <div class="column two-column-featured-contact__wrapper container">

                    <div class="column__col two-column-featured-contact__col">

                        <?php if(!empty(get_sub_field('two_column_featured_contact_heading_left'))){ ?>    
                                <h3 class="column__heading two-column-featured-contact__heading"><?php the_sub_field('two_column_featured_contact_heading_left'); ?></h3>
                            <?php } ?>    

                            <!-- <?php //if(!empty(get_sub_field('two_column_featured_contact_content_left'))){ ?>
                                <p class="column__content"><?php //the_sub_field('two_column_featured_contact_content_left'); ?></p>
                            <?php //} ?> -->

                            <div class="two-column-featured-contact__telephone">    
                                <?php if( get_theme_mod( 'ah_telephone_handle' ) ){ ?>
                               
                                        <?php $tel_link = str_replace(' ', '', get_theme_mod( 'ah_telephone_handle' )); ?>
                                        <a class="two-column-featured-contact__tel" href="tel:<?php echo $tel_link; ?>"><i class="two-column-featured-contact__icon fas fa-phone-volume"></i> <?php echo get_theme_mod( 'ah_telephone_handle' ) ?></a>
                              
                                <?php } ?>

                                <?php if( get_theme_mod( 'ah_mobile_handle' ) ){ ?>
                                    <span class="column__content">
                                        <?php $mob_link = str_replace(' ', '', get_theme_mod( 'ah_mobile_handle' )); ?>
                                    <a class="two-column-featured-contact__tel" href="tel:<?php echo $mob_link; ?>"><i class="two-column-featured-contact__icon fas fa-mobile-alt"></i> <?php echo get_theme_mod( 'ah_mobile_handle' ) ?></a>
                                    </span>
                                <?php } ?>
                            </div>    

                            <?php if( get_theme_mod( 'ah_email_handle' ) ){ ?>
                                <span class="two-column-featured-contact__email">
                                    <a href="mailto:<?php echo get_theme_mod( 'ah_email_handle' ) ?>"><i class="two-column-featured-contact__icon fas fa-envelope"></i> <?php echo get_theme_mod( 'ah_email_handle' ) ?></a>
                                </span>
                            <?php } ?>

                            <?php if( get_theme_mod( 'ah_address_handle' ) ){ ?>
                                <span class="two-column-featured-contact__content">
							        <?php echo get_theme_mod( 'ah_address_handle' ) ?>
                                </span>
						    <?php } ?>

                            <?php $short = get_sub_field('two_column_featured_contact_shortcode'); ?>
                            <?php echo do_shortcode($short); ?>

                    </div>
                    <div class="column__col">
                                <?php $two_column_featured_image_right = get_sub_field('two_column_featured_contact_image_right'); ?>
                                <img class="column__img" src="<?php echo $two_column_featured_image_right['url']; ?>" alt="<?php echo $two_column_featured_image_right['alt']; ?>">
                    </div>

                </div>
            </section>   
       <?php } elseif(get_row_layout() == 'banner'){ ?>

            <section class="banner text-center">

                <div class="banner__card">
                    <div class="banner__content">

                        <?php if(!empty(get_sub_field('banner_title'))){ ?>
                            <h3 class="banner__title"><?php the_sub_field('banner_title'); ?></h3>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('banner_subtitle'))){ ?>
                            <p class="banner__subtitle"><?php the_sub_field('banner_subtitle'); ?></p>
                        <?php } ?>


                        <?php if(!empty(get_sub_field('banner_button'))){ ?>
                            <a href="<?php the_sub_field('banner_butto_link'); ?>" class="button banner__btn"><?php the_sub_field('banner_button'); ?></a>
                        <?php } ?>
                        
                    </div>
                </div>

                <?php $banner_image = get_sub_field('banner_image'); ?> 

                <?php if(!empty(get_sub_field('banner_image'))){ ?>
                    <img class="banner__img" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                <?php } else { ?>

                <?php } ?>

            </section>

       <?php } elseif(get_row_layout() == 'news_block'){ ?>

            <?php
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'ID',
            'order' => 'ASC'
            ); 
            ?>

            <?php $padding_top = get_sub_field('news_section_padding_top');  ?>
            <?php $padding_bottom = get_sub_field('news_section_padding_bottom');  ?>
            <?php $padding_left = get_sub_field('news_section_padding_left');  ?>
            <?php $padding_right = get_sub_field('news_section_padding_right');  ?>
            <?php $section_background_color = get_sub_field('news_section_panel_background_colour'); ?>

            <section class="news-section" style="background: <?php echo $section_background_color; ?>; padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
                <div class="container">
                <div class="news-section__container">
                    <h3 class="news-section__title"><?php the_sub_field('news_section_main_title'); ?></h3>
                    <a href="/news/">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="news-section__content owl-carousel owl-carousel-news owl-theme">

                    <?php $loop = new WP_Query($args); ?>
                    <?php if ($loop->have_posts()) : ?>
                    <?php $count = 0; ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $count++ ?>
                    <?php
                    global $post;
                    $post_slug = $post->post_name;
                    ?>
                            
                            <div class="news-section__card">

                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="news-section__featured-image">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>
                                <?php endif; ?>

                                <h3 class="item news-section__card-title">

                                    <?php $title_string = get_the_title(); ?>
                                    <?php $content_string = get_field('post_excerpt', false, false); ?>
   
                                    <?php
                                    if (strlen($title_string) > 31) {
                                        $stringCut = substr($title_string, 0, 31);
                                        $endPoint = strrpos($stringCut, ' ');
                                        $title_string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $title_string .= '...';
                                    }
                                    echo $title_string;
                                    ?>
                                </h3>
                                <p>
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
                                <a class="button news-section__card-btn" href="<?php the_permalink(); ?>">
                                <?php 
                                    if ($count % 2 == 0) {
                                        echo "See more...";
                                    } else {
                                        echo "Learn more...";
                                    }
                                ?>
                                
                                </a>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                </div>
                </div>                    
            </section>
       <?php } else { ?>
            <?php echo "There was an error!"; ?>
       <?php } ?>

    <?php endwhile; ?>
<?php endif; ?>