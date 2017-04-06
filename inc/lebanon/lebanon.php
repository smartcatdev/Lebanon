<?php

/**
 * 
 * Lebanon WordPress Theme
 * 
 * This file contains most of the work done by Lebanon
 * It's pretty straight forward, feel free to edit if you're comfortable with basic PHP
 * 
 * If you got here, thank you for using this theme ! Hack away at it as you see fit.
 * Please take a minute to leave us a review on WordPress.org
 * 
 * 
 */


function lebanon_scripts() {

    wp_enqueue_style('lebanon-style', get_stylesheet_uri());

    wp_enqueue_script('lebanon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('lebanon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
    $fonts = lebanon_fonts();
    
    if( array_key_exists ( get_theme_mod('header_font', 'Montserrat, sans-serif'), $fonts ) ) :
        wp_enqueue_style('lebanon-font-header', '//fonts.googleapis.com/css?family=' . $fonts[get_theme_mod('header_font', 'Montserrat, sans-serif')], array(), LEBANON_VERSION );
    endif;
    
    if( array_key_exists ( get_theme_mod('theme_font', 'Lato, sans-serif'), $fonts ) ) :
        wp_enqueue_style('lebanon-font-general', '//fonts.googleapis.com/css?family=' . $fonts[get_theme_mod('theme_font', 'Lato, sans-serif')], array(), LEBANON_VERSION );
    endif;
    

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.css', array(), LEBANON_VERSION);
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/inc/css/bootstrap-theme.min.css', array(), LEBANON_VERSION);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/inc/css/font-awesome.css', array(), LEBANON_VERSION);
    wp_enqueue_style('lebanon-main-style', get_template_directory_uri() . '/inc/css/style.css', array(), LEBANON_VERSION);
    wp_enqueue_style('lebanon-animations', get_template_directory_uri() . '/inc/css/animate.css', array(), LEBANON_VERSION);
    wp_enqueue_style('lebanon-slicknav', get_template_directory_uri() . '/inc/css/slicknav.min.css', array(), LEBANON_VERSION);
    wp_enqueue_style('lebanon-template', get_template_directory_uri() . '/inc/css/temps/' . esc_attr(get_theme_mod('theme_color', 'pink')) . '.css', array(), LEBANON_VERSION);
    wp_enqueue_script('lebanon-easing', get_template_directory_uri() . '/inc/js/easing.js', array('jquery'), LEBANON_VERSION, true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/inc/js/slicknav.min.js', array('jquery'), LEBANON_VERSION, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/inc/js/wow.js', array('jquery'), LEBANON_VERSION, true);

    wp_enqueue_script('lebanon-script', get_template_directory_uri() . '/inc/js/script.js', array('jquery', 'jquery-ui-core', 'jquery-masonry'), LEBANON_VERSION);
}

add_action('wp_enqueue_scripts', 'lebanon_scripts');

function lebanon_widgets_init() {

    register_sidebar(array(
        'name' => esc_html__('Right Sidebar', 'lebanon'),
        'id' => 'sidebar-right',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Left Sidebar', 'lebanon'),
        'id' => 'sidebar-left',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Shop Sidebar ( WooCommerce )', 'lebanon'),
        'id' => 'sidebar-shop',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => esc_html__('Footer', 'lebanon'),
        'id' => 'sidebar-footer',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-4 animated reveal fadeIn">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Frontpage Overlay', 'lebanon'),
        'id' => 'sidebar-overlay',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-12">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Top B - Homepage widget', 'lebanon'),
        'id' => 'sidebar-homepage',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-12">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'lebanon_widgets_init');



function lebanon_do_left_sidebar( $args ) {
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'none' ) :
        return;
    endif;
    
    if( $args[0] == 'frontpage' && get_theme_mod('home_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'page' && get_theme_mod('page_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'single' && get_theme_mod('single_sidebar') == 'off' )
        return;
    
    
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'left' ) :
        
        echo '<div class="col-sm-4" id="lebanon-sidebar">' .
        get_sidebar() . '</div>';
        
    endif;
    
    
}
add_action('lebanon-sidebar-left', 'lebanon_do_left_sidebar');

function lebanon_do_right_sidebar( $args ) {
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'none' ) :
        return;
    endif;
    
    if( $args[0] == 'frontpage' && get_theme_mod('home_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'page' && get_theme_mod('page_sidebar') == 'off' )
        return;
    
    if( $args[0] == 'single' && get_theme_mod('single_sidebar') == 'off' )
        return;
    
    
    
    if( get_theme_mod( 'sidebar_location', 'right' ) == 'right' ) :
        
        echo '<div class="col-sm-4" id="lebanon-sidebar">';
    
        get_sidebar();
        
        echo '</div>';
        
    endif;
    
    
}
add_action('lebanon-sidebar-right', 'lebanon_do_right_sidebar');

function lebanon_main_width(){
    
    $width = 12;
    
    if( is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right') ) :
        
        $width = 6;
        
    elseif( is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right') ) :
        $width = 9;
    else:
        $width = 12;
    endif;
    
    
    return $width;
}


function lebanon_get_image() {

    echo wp_get_attachment_url($POST['id']);

    exit();
}

add_action('wp_ajax_lebanon_get_image', 'lebanon_get_image');

function lebanon_customize_nav( $items, $args ) {

    if( $args->theme_location != 'primary' ) :
        return $items;
    endif;
    
    if( get_theme_mod('header_search_bool', 'on' ) == 'on' ) :
        $items .= '<li class="menu-item"><a class="lebanon-search" href="#search" role="button" data-toggle="modal"><span class="fa fa-search"></span></a></li>';
    endif;
    
    if( class_exists( 'WooCommerce' ) && get_theme_mod('header_cart_bool', 'on' ) == 'on' ) :
        $items .= '<li><a class="lebanon-cart" href="' . esc_url( WC()->cart->get_cart_url() ) . '"><span class="fa fa-shopping-cart"></span> ' . WC()->cart->get_cart_total() . '</a></li>';
    endif;
    
    
    
    return $items;
}

add_filter('wp_nav_menu_items', 'lebanon_customize_nav', 10, 2);


function lebanon_custom_css() {
    
    $theme_color = esc_attr( get_theme_mod('lebanon_theme_color', '#65bbc0' ) );
    $theme_color_rgba = lebanon_hex2rgb( $theme_color );
    $hover_color = esc_attr( get_theme_mod('lebanon_theme_color_hover', '#4cb9bf' ) );
    $hover_color_rgba = lebanon_hex2rgb( $hover_color );
    
    ?>
    <style type="text/css">


        body{
            font-size: <?php echo esc_attr( get_theme_mod( 'theme_font_size', '16px') ); ?>;
            font-family: <?php echo esc_attr( get_theme_mod( 'theme_font', 'Montserrat, sans-serif' ) ); ?>;

        }
        h1,h2,h3,h4,h5,h6,.slide2-header,.slide1-header,.lebanon-title, .widget-title,.entry-title, .product_title{
            font-family: <?php echo esc_attr( get_theme_mod('header_font', 'Montserrat, sans-serif' ) ); ?>;
        }
        
        ul.lebanon-nav > li.menu-item a{
            font-size: <?php echo esc_attr( get_theme_mod('menu_font_size', '14px' ) ); ?>;
        }
        
        #lebanon-overlay-trigger{
            background: <?php echo esc_attr( get_theme_mod('homepage_widget_color', '#f13638' ) ); ?>;
        }
        
        #lebanon-featured-post #slide1{
            height: <?php echo esc_attr( get_theme_mod('lebanon_jumbotron_height', 450 ) ); ?>px;
        }
        
        #masthead.site-header,
        #lebanon-header .header-inner{
            background-color: <?php echo esc_attr( get_theme_mod('lebanon_header_bg_color', '#65bbc0' ) ); ?>;
        }
        
        #lebanon-header .header-inner a,
        .main-navigation .lebanon-cart,
        .lebanon-mobile-cart .lebanon-cart,
        #lebanon-header .site-description{
            color: <?php echo esc_attr( get_theme_mod('lebanon_header_text_color', '#ffffff' ) ); ?> !important;
        }
        
        a,a:visited,
        ul.lebanon-nav > li > ul li.current-menu-item > a,
        .woocommerce .woocommerce-message:before,
        #authica-social a{
            color: <?php echo $theme_color; ?>;
        }

        a:hover,
        a:focus,
        .site-info a:hover,
        ul.lebanon-nav ul li a:hover,
        #authica-social a:hover{
            color: <?php echo $hover_color; ?>;
        }

        ul.lebanon-nav > li.menu-item.current-menu-item a,
        ul.lebanon-nav > li.menu-item.current-menu-parent a,
        ul.lebanon-nav > li.menu-item a:hover{

            border-bottom: 2px solid <?php echo $hover_color; ?>;

        }

        .lebanon-button.primary,
        button, 
        input[type="button"], 
        input[type="submit"],
        .woocommerce button.button.alt, 
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt, 
        .woocommerce a.button.alt,
        .woocommerce ul.products li.product .button,
        .button.wc-backward{
            background-color: <?php echo $theme_color; ?> !important;
            color: #fff !important;
            background: <?php echo $theme_color; ?>;
            color: #fff;
        }

        button:hover, 
        input[type="button"]:hover, 
        input[type="submit"]:hover,
        .lebanon-button.primary:hover,
        .button.wc-backward:hover,
        .woocommerce ul.products li.product .button:hover,
        .woocommerce button.button.alt:hover, 
        .woocommerce input.button.alt:hover,
        .woocommerce #respond input#submit.alt:hover, 
        .woocommerce a.button.alt:hover{
            background: <?php echo $hover_color; ?> !important;
        }

        .entry-meta .fa,
        .lebanon-blog-post,
        #lebanon-featured,
        .woocommerce span.onsale{
            background: <?php echo $theme_color; ?>;
        }

        .woocommerce .woocommerce-message{
            border-top-color: <?php echo $theme_color; ?>;
        }


        .main-navigation .lebanon-cart,
        .lebanon-mobile-cart .lebanon-cart{
            transition: 0.25s all ease-in-out;
            -moz-transition: 0.25s all ease-in-out;
            -webkit-transition: 0.25s all ease-in-out;
            top: -5px;
        }


        #lebanon-featured,
        .woocommerce span.onsale{
            color: #fff;
        }
        #lebanon-featured .fa{
            color: #fff;
        }

        .scroll-top:hover,
        #lebanon-overlay-trigger:hover{
            background: <?php echo $hover_color; ?>;
        }
        
        .woocommerce ul.products li.product a img{
            border-bottom: 7px solid <?php echo $theme_color; ?>;
        }
        <?php if( get_theme_mod( 'lebanon_the_featured_post_highlight', false ) ) : ?>
        #lebanon-featured-post #slide1 span.header-inner {
            padding: 15px;
            background: rgba( <?php echo $theme_color_rgba[0]; ?>,<?php echo $theme_color_rgba[1]; ?>,<?php echo $theme_color_rgba[2]; ?>, 0.8 ); 
        }
        <?php endif; ?>
        
        .woocommerce a.remove {
            color: <?php echo $theme_color; ?> !important;
        }
        
        .woocommerce a.remove:hover {
            background: <?php echo $theme_color; ?> !important;
            color: #fff !important;
        }
        
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
            background-color: <?php echo $theme_color; ?> !important;
        }
        
        #lebanon-featured-post .lebanon-button.primary {
            background: rgba( <?php echo $hover_color_rgba[0]; ?>,<?php echo $hover_color_rgba[1]; ?>,<?php echo $hover_color_rgba[2]; ?>, 0.8 ) !important;
        }
        
        #pre-header{
            background-color: <?php echo esc_attr( get_theme_mod( 'lebanon_headerbar_bg_color', '#ffffff' ) ); ?>;
            color: <?php echo esc_attr( get_theme_mod( 'lebanon_headerbar_text_color', '#101010' ) ); ?>;
        }
        
        #pre-header a{
            color: <?php echo esc_attr( get_theme_mod( 'lebanon_headerbar_text_color', '#101010' ) ); ?>;
        }
        
        <?php if( get_theme_mod( 'lebanon_the_featured_post_typewriter', true ) ) : ?>
        #lebanon-featured-post #slide1 span.header-inner:after {
            content: "|";
        }
        <?php endif; ?>
        
    </style>
    
    <?php if( get_theme_mod( 'lebanon_the_featured_post_typewriter', true ) ) : ?>
    <script>
    
    jQuery(document).ready(function ($) {
        // Typewriter
        function typeWriter(text, n) {
            if (n < (text.length)) {
                $('h2.header-text .header-inner').html(text.substring(0, n + 1));
                n++;
                setTimeout(function () {
                    typeWriter(text, n)
                }, 125 );
            }else {
                $('#lebanon-featured-post #slide1 span.header-inner').addClass('typewriter-done')
            }
        }

        var typeText = $( 'h2.header-text .header-inner' ).text();
        typeWriter( typeText, 0 );

    });
    
    </script>
    <?php
    endif;
}

add_action('wp_head', 'lebanon_custom_css');



function lebanon_featured_post() { ?>
    
    <div id="lebanon-featured-post">
        <div id="lebanon-slider" class="hero">
            <?php $post_id = get_theme_mod( 'lebanon_the_featured_post', 1 ); ?>
            
            <?php if( $post_id ) : ?>
            
                <?php if( get_theme_mod( 'lebanon_the_featured_post_image_toggle', 'off' ) == 'on' ) : ?>
                    <div id="slide1" style="background-image: url( '<?php echo get_theme_mod( 'lebanon_the_featured_post_image', get_template_directory_uri() . '/inc/images/jumbotron.jpg' ) ?>');">
                <?php else : ?>
                    <div id="slide1" style="<?php echo has_post_thumbnail( $post_id) ? 'background-image: url(' . esc_url(lebanon_get_post_thumb( $post_id ) ) . ')' : ''; ?>">
                <?php endif; ?>
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 slide-details">

                                <a href="<?php echo get_the_permalink( $post_id ) ? esc_url( get_the_permalink( $post_id ) ) : null; ?>">
                                    <h2 class="header-text slide1-header">
                                        <span class="header-inner"><?php echo ( get_the_title( $post_id ) ? esc_attr( get_the_title( $post_id ) ) : '' ); ?></span>
                                    </h2>
                                </a>

                                <a href="<?php echo get_the_permalink( $post_id ) ? esc_url( get_the_permalink( $post_id ) ) : null; ?>" 
                                   class="animated fadeInUp delay3 lebanon-button primary">
                                    <?php echo esc_attr( get_theme_mod( 'lebanon_the_featured_post_button', __( 'Continue reading', 'lebanon' )  ) ); ?>
                                </a>


                            </div>

                        </div>
                    </div>

                    <div class="slider-bottom">
                        <div>
                            <span class="fa fa-chevron-down scroll-down animated slideInUp delay-long"></span>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
            
        </div>
    </div>


    <div class="clear"></div>
    
<?php }

function lebanon_render_homepage() { 
    
    lebanon_jumbotron_init();
    
    ?>
    
    <?php $post_id = get_theme_mod( 'lebanon_the_featured_post2', 1 ); ?>
    <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
    <?php if( $the_post && get_theme_mod('lebanon_the_featured_post2_toggle', 'on' ) == 'on' ) : ?>
    <div id="lebanon-topa">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 reveal animated fadeInUp">

                    <h3 class="heading"><?php echo esc_attr( $the_post->post_title ); ?></h3>

                    <p class="description">
                        <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                    </p>

                </div>            
            </div>
        </div>
        <div class="container">        
            <div class="row text-center">
                <div class="col-sm-12">
                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>"><?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?></a>
                </div>
            </div>        
        </div>        

    </div>
    
    <div class="clear"></div>
    <?php endif; ?>
    
    <?php if( get_theme_mod('homepage_widget_bool', 'on' ) == 'on' ) : ?>
        <div id="lebanon-topb">
            <?php get_sidebar('homepage'); ?>
        </div>
    <?php endif; ?>
    
    <?php if( get_theme_mod('homepage_topc_toggle', 'on' ) == 'on' ) : ?>
    
    <div id="lebanon-topc">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    <?php $post_id = get_theme_mod( 'lebanon_the_featured_post3', 1 ); ?>
                    <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
                    <?php $post_icon = get_theme_mod( 'homepage_topc_icon_toggle', false ) == 'on' ? true : false; ?>
                    <?php if( $the_post ) : ?>

                        <div class="row text-center">
                            <div class="col-sm-12 reveal animated fadeInLeft">

                                <h3 class="heading"><?php echo esc_attr( $the_post->post_title ); ?></h3>

                                <?php if( $post_icon ) : ?>
                                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <span class="<?php echo get_theme_mod( 'lebanon_the_featured_post3_icon', 'fa fa-paint-brush' ); ?>"></span>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <?php echo get_the_post_thumbnail( $post_id ); ?>
                                    </a>                                
                                <?php endif; ?>
                                
                                <p class="description">
                                    <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                                </p>
                                
                                <?php if( get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'lebanon' ) ) ) : ?>
                                <div class="center">
                                    <a class="animated fadeInUp delay3 lebanon-button primary" href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <?php echo get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'lebanon' ) ); ?>
                                    </a>
                                </div>
                                <?php endif; ?>

                            </div>            
                        </div>

                    <?php endif; ?>

                </div>
                <div class="col-sm-4">

                    <?php $post_id = get_theme_mod( 'lebanon_the_featured_post4', 1 ); ?>
                    <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
                    <?php $post_icon = get_theme_mod( 'homepage_topc_icon_toggle', false ) == 'on' ? true : false; ?>
                    <?php if( $the_post ) : ?>

                        <div class="row text-center ">
                            <div class="col-sm-12 reveal animated fadeInUp">

                                <h3 class="heading"><?php echo esc_attr( $the_post->post_title ); ?></h3>

                                <?php if( $post_icon ) : ?>
                                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <span class="<?php echo get_theme_mod( 'lebanon_the_featured_post4_icon', 'fa fa-desktop' ); ?>"></span>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <?php echo get_the_post_thumbnail( $post_id ); ?>
                                    </a>                                
                                <?php endif; ?>
                                
                                <p class="description">
                                    <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                                </p>
                                
                                <?php if( get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'lebanon' ) ) ) : ?>
                                <div class="center">
                                    <a class="animated fadeInUp delay3 lebanon-button primary" href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <?php echo get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'lebanon' ) ); ?>
                                    </a>
                                </div>
                                <?php endif; ?>

                            </div>            
                        </div>

                    <?php endif; ?>

                </div>
                <div class="col-sm-4">

                    <?php $post_id = get_theme_mod( 'lebanon_the_featured_post5', 1 ); ?>
                    <?php $the_post = $post_id ? get_post( $post_id ) : null; ?>
                    <?php $post_icon = get_theme_mod( 'homepage_topc_icon_toggle', false ) == 'on' ? true : false; ?>
                    <?php if( $the_post ) : ?>

                        <div class="row text-center">
                            <div class="col-sm-12 reveal animated fadeInRight">

                                <h3 class="heading"><?php echo esc_attr( $the_post->post_title ); ?></h3>

                                <?php if( $post_icon ) : ?>
                                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <span class="<?php echo get_theme_mod( 'lebanon_the_featured_post5_icon', 'fa fa-bar-chart' ); ?>"></span>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <?php echo get_the_post_thumbnail( $post_id ); ?>
                                    </a>                                
                                <?php endif; ?>
                                
                                <p class="description">
                                    <?php echo esc_html( wp_trim_words( $the_post->post_content, 40 ) ); ?>
                                </p>
                                
                                <?php if( get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'lebanon' ) ) ) : ?>
                                <div class="center">
                                    <a class="animated fadeInUp delay3 lebanon-button primary" href="<?php echo esc_url( get_the_permalink( $post_id ) ); ?>">
                                        <?php echo get_theme_mod( 'homepage_topc_button', __( 'Learn more', 'lebanon' ) ); ?>
                                    </a>
                                </div>
                                <?php endif; ?>

                            </div>            
                        </div>

                    <?php endif; ?>
                    
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
    </div>
    
    <?php endif; ?>
    
    <div class="clear"></div>
    
    <?php do_action( 'lebanon_top_widgets' ); ?>
    

    
    <?php
}

add_action( 'lebanon_homepage', 'lebanon_render_homepage' );


function lebanon_get_post_thumb( $post_id ) {
    
    if( $post_id == 'nopost' ) :
        return get_template_directory_uri() . '/inc/images/lebanon1.jpg';
    endif;
    
    if( has_post_thumbnail( $post_id ) ) :
        $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
        return $img[0];
    endif;
    
}

function lebanon_render_tab_clicker() { ?>
    <?php if( get_theme_mod( 'overlay_bool', 'on' ) == 'on' ) : ?>
        <div id="lebanon-frontpage-overlay">

            <div id="lebanon-overlay-trigger" class="animated slideInLeft delay-long">

                <span class="<?php echo esc_attr( get_theme_mod( 'overlay_icon', 'fa fa-plus' ) ); ?> animated rotateIn delay3"></span>

            </div>

        </div>
    <?php endif; ?>
<?php }
add_action( 'lebanon_tab_clicker', 'lebanon_render_tab_clicker' );

function lebanon_render_footer(){ ?>
    
    <?php if( get_theme_mod( 'footer_background_toggle', 'on' ) == 'on') : ?>
    
    <div class="lebanon-footer" class="parallax-window" data-parallax="scroll" style="background-image: url(<?php echo esc_attr( get_theme_mod('footer_background_image', get_template_directory_uri() . '/inc/images/footer.jpg' ) ); ?>)">
        <div>
            <div class="container">
                <div class="row">
                    <?php get_sidebar('footer'); ?>
                </div>            
            </div>            
        </div>
    </div>
    
    <div class="clear"></div>
    
    <?php endif; ?>
    
    <?php do_action( 'lebanon_pre_footer' ); ?>
    
    <div class="site-info">
        
        <div class="container">
            <div class="row">

                <div class="lebanon-copyright">
                    <?php echo ( get_theme_mod( 'copyright_text' ) ); ?>
                </div>

                <?php do_action( 'lebanon_social_icons' ); ?>


                <?php $menu = wp_nav_menu( array ( 
                    'theme_location'    => 'footer', 
                    'menu_id'           => 'footer-menu', 
                    'menu_class'        => 'lebanon-footer-nav' ,

                    ) ); ?>

                <?php do_action( 'lebanon_payment_icons' ); ?>
                <hr>
                <?php do_action( 'lebanon_designer' ); ?>

            </div>
        </div>
        
        <div class="scroll-top alignright">
            <span class="fa fa-chevron-up"></span>
        </div>
        

        
    </div><!-- .site-info -->
    
    
<?php }
add_action( 'lebanon_footer', 'lebanon_render_footer' );

function lebanon_hex2rgb( $hex ) {
    $hex = str_replace( "#", "", $hex );

    if ( strlen( $hex ) == 3 ) {
        $r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
        $g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
        $b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
    } else {
        $r = hexdec( substr( $hex, 0, 2 ) );
        $g = hexdec( substr( $hex, 2, 2 ) );
        $b = hexdec( substr( $hex, 4, 2 ) );
    }
    $rgb = array ( $r, $g, $b );
    //return implode(",", $rgb); // returns the rgb values separated by commas
    return $rgb; // returns an array with the rgb values
}

add_action( 'lebanon_payment_icons', 'lebanon_add_payment_icons');
function lebanon_add_payment_icons() { ?>
    
    <div class="payment-icons">

        <?php if ( get_theme_mod( 'lebanon_include_cc_visa', true ) ) : ?>
            <i class="fa fa-cc-visa"></i>
        <?php endif; ?>

        <?php if ( get_theme_mod( 'lebanon_include_cc_mastercard', true ) ) : ?>
            <i class="fa fa-cc-mastercard"></i>
        <?php endif; ?>

        <?php if ( get_theme_mod( 'lebanon_include_cc_amex', true ) ) : ?>
            <i class="fa fa-cc-amex"></i>
        <?php endif; ?>

        <?php if ( get_theme_mod( 'lebanon_include_cc_paypal', true ) ) : ?>
            <i class="fa fa-cc-paypal"></i>
        <?php endif; ?>

    </div>
    
<?php }

add_action( 'lebanon_social_icons', 'lebanon_add_social_icons');
function lebanon_add_social_icons() { ?>

    <div id="authica-social">

        <?php if( get_theme_mod( 'facebook_url' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'facebook_url' ) ); ?>" target="_BLANK" class="lebanon-facebook">
            <span class="fa fa-facebook"></span>
        </a>
        <?php endif; ?>


        <?php if( get_theme_mod( 'gplus_url' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'gplus_url' ) ); ?>" target="_BLANK" class="lebanon-gplus">
            <span class="fa fa-google-plus"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'instagram_url' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'instagram_url' ) ); ?>" target="_BLANK" class="lebanon-instagram">
            <span class="fa fa-instagram"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'linkedin_url' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'linkedin_url' ) ); ?>" target="_BLANK" class="lebanon-linkedin">
            <span class="fa fa-linkedin"></span>
        </a>
        <?php endif; ?>


        <?php if( get_theme_mod( 'pinterest_url' ) != '' ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'pinterest_url' ) ); ?>" target="_BLANK" class="lebanon-pinterest">
            <span class="fa fa-pinterest"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'twitter_url' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'twitter_url' ) ); ?>" target="_BLANK" class="lebanon-twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'vimeo_url' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'vimeo_url' ) ); ?>" target="_BLANK" class="lebanon-vimeo">
            <span class="fa fa-vimeo"></span>
        </a>    
        <?php endif; ?>

        <?php if( get_theme_mod( 'spotify_url' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'spotify_url' ) ); ?>" target="_BLANK" class="lebanon-spotify">
            <span class="fa fa-spotify"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'apple_url' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'apple_url' ) ); ?>" target="_BLANK" class="lebanon-apple">
            <span class="fa fa-apple"></span>
        </a>
        <?php endif; ?>

        <?php if( get_theme_mod( 'github_url' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'github_url' ) ); ?>" target="_BLANK" class="lebanon-github">
            <span class="fa fa-github"></span>
        </a>
        <?php endif; ?>


        <?php if( get_theme_mod( 'vine_url' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'vine_url' ) ); ?>" target="_BLANK" class="lebanon-vine">
            <span class="fa fa-vine"></span>
        </a>
        <?php endif; ?>

    </div>
    
<?php }


add_action( 'lebanon_designer', 'lebanon_add_designer', 10 );
function lebanon_add_designer() { ?>
    <a href="https://smartcatdesign.net" rel="designer" style="display: block !important" class="rel">
        <?php _e( 'Design by' , 'lebanon' ); echo ' Smart' . 'cat'; ?>
        <img src="<?php echo get_template_directory_uri() . '/inc/images/cat_logo_mini.png'?>"/>
    </a>
<?php }

function lebanon_jumbotron_init() {
    
    if( get_theme_mod( 'lebanon_the_featured_post_toggle', 'on' ) == 'on' ) :
        
        if( get_theme_mod( 'jumbotron_style', 'static' ) == 'static' ) : 
        
            lebanon_featured_post();
            
        elseif( function_exists( 'lebanon_slider' ) ) :
            
            lebanon_slider();
            
        endif;
        
        if( ! is_home() ) :
            do_action( 'lebanon_after_jumbotron' );
        endif;
        
        
    
    endif;
}
