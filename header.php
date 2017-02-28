<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lebanon
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        
        <div class="overlay-widget">
            <div class="container">
                <div class="row">
                    <?php get_sidebar( 'overlay' ); ?>
                </div>
            </div>
        </div>
        
        <div id="lebanon-search" class="noshow">
            
            <div class="container">
                <div class="row">

                    <span class="fa fa-search"></span>

                    <?php get_search_form( ); ?>

                    <span class="fa fa-close"></span>

                </div>
            </div>
            
        </div>
        
        <div id="page" class="hfeed site <?php echo has_post_thumbnail() ? 'has-thumb' : ''; ?>">

            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'lebanon'); ?></a>
            
            <?php if( get_theme_mod( 'lebanon_preheader', 'off' ) == 'on' ) : ?>
            <div id="pre-header">
                <div class="container">
                    <div class="row">
                        <div class="contact-info col-sm-6">

                            <?php if( get_theme_mod( 'lebanon_phone_num', '613.698.9864' ) ) : ?>
                            <i class="fa fa-phone-square"></i> <?php echo get_theme_mod( 'lebanon_phone_num', '613.698.9864' ); ?> |
                            <?php endif; ?>

                            <?php if( get_theme_mod( 'lebanon_email_address', 'support@domain.com' ) ) : ?>
                            <i class="fa fa-envelope"></i> <?php echo get_theme_mod( 'lebanon_email_address', 'support@domain.com' ); ?>
                            <?php endif; ?>

                        </div>
                        <div class="links-login col-sm-6 text-right">

                            <?php if( get_theme_mod( 'lebanon_link1', __('My account', 'lebanon' ) ) ) : ?>

                                <a href="<?php esc_url( get_theme_mod( 'lebanon_link1_url', '#' ) ); ?>">
                                    <?php echo get_theme_mod( 'lebanon_link1', __('My account', 'lebanon' )  ); ?>
                                </a> |

                            <?php endif; ?>


                            <?php if( get_theme_mod( 'lebanon_link2', __('About us', 'lebanon' ) ) ) : ?>

                                <a href="<?php esc_url( get_theme_mod( 'lebanon_link2_url', '#' ) ); ?>">
                                    <?php echo get_theme_mod( 'lebanon_link2', __('About us', 'lebanon' ) ); ?>
                                </a> |

                            <?php endif; ?>

                            <?php if( get_theme_mod( 'lebanon_link3', __('Products', 'lebanon' ) ) ) : ?>

                                <a href="<?php esc_url( get_theme_mod( 'lebanon_link3_url', '#' ) ); ?>">
                                    <?php echo get_theme_mod( 'lebanon_link3', __('Products', 'lebanon' ) ); ?>
                                </a>

                            <?php endif; ?>



                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <header id="masthead" class="site-header" role="banner">

                <div id="lebanon-header" class="<?php echo is_front_page() ? 'frontpage' : ''; ?>">

                    <div class="header-inner">
                        
                        <div class="container">
                            <div class="row">

                                <div class="lebanon-branding">

                                    <div class="site-branding">

                                        <div id="lebanon-logo" class="<?php echo has_custom_logo() ? 'show' : 'hidden'; ?>">

                                            <?php the_custom_logo(); ?>

                                        </div>
                                            <h1 class="site-title <?php echo ! has_custom_logo() ? 'show' : 'hidden'; ?>">
                                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                            </h1>

                                            <p class="site-description <?php echo ! has_custom_logo() ? 'show' : 'hidden'; ?>">
                                                <?php bloginfo('description'); ?>
                                            </p>

                                        <?php //endif; ?>

                                    </div><!-- .site-branding -->

                                </div>

                                <div class="lebanon-header-menu">

                                    <?php if( class_exists( 'WooCommerce' ) ) : ?>

                                        <div class="lebanon-mobile-cart">

                                            <a class="lebanon-cart" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>"><span class="fa fa-shopping-cart"></span> <?php echo WC()->cart->get_cart_total(); ?></a>

                                        </div>

                                    <?php endif; ?>


                                    <nav id="site-navigation" class="main-navigation" role="navigation">

                                        <?php

                                        if( has_nav_menu( 'primary' ) ) :

                                            $menu = wp_nav_menu(array(
                                                'theme_location' => 'primary',
                                                'menu_id' => 'primary-menu',
                                                'menu_class' => 'lebanon-nav',
                                            ));
                                        else :

                                            if( current_user_can( 'edit_theme_options' ) ) :
                                                echo '<div id="lebanon-add-menu"><a class="lebanon-cart" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . __( 'Add a Primary Menu', 'lebanon' ) . '</a></div>';
                                            endif;
                                        endif;


                                        ?>


                                    </nav><!-- #site-navigation -->


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </header><!-- #masthead -->

            <div id="content" class="site-content">
