<?php

$wp_customize->add_panel( 'homepage', array (
    'title'                 => __( 'Frontpage', 'lebanon' ),
    'description'           => __( 'Customize the appearance of your homepage', 'lebanon' ),
    'priority'              => 10
) );


    $wp_customize->add_section( 'homepage_topa', array (
        'title'                 => __( 'Top A - Featured Page/Post/Product', 'lebanon' ),
        'panel'                 => 'homepage',
    ) );

        $wp_customize->add_setting( 'lebanon_the_featured_post2_toggle', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'lebanon_the_featured_post2_toggle', array(
            'label'         => __( 'Display the featured post Top A section ?', 'lebanon' ),
            'section' => 'homepage_topa',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'lebanon' ),
                'off'    => __( 'No', 'lebanon' )
            )
        ));

        $wp_customize->add_setting( 'lebanon_the_featured_post2', array (
            'default'               => 1,
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_post',
        ) );
        $wp_customize->add_control( 'lebanon_the_featured_post2', array(
            'type'                  => 'select',
            'section'               => 'homepage_topa',
            'label'                 => __( 'Select the Featured Post', 'lebanon' ),
            'choices'               => lebanon_all_posts_array(),
        ) );

    $wp_customize->add_section( 'homepage_widget', array (
        'title'                 => __( 'Top B - Homepage Widget', 'lebanon' ),
        'panel'                 => 'homepage',
    ) );
    

        $wp_customize->add_setting( 'homepage_widget_bool', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'homepage_widget_bool', array(
            'label'         => __( 'Display Homepage Top B Widget ?', 'lebanon' ),
            'description'   => __( 'This widget shows up if you have the Static Front Page set to "A static page" in customizer -> Frontpage -> Static Front Page', 'lebanon' ),
            'section' => 'homepage_widget',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'lebanon' ),
                'off'    => __( 'No', 'lebanon' )
            )
        ));
    
        $wp_customize->add_setting( 'homepage_widget_background', array (
            'default'               => get_template_directory_uri() . '/inc/images/widget.jpg',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'esc_url_raw'
        ) );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control5', array (
            'label' =>              __( 'Widget Background', 'lebanon' ),
            'section'               => 'homepage_widget',
            'mime_type'             => 'image',
            'settings'              => 'homepage_widget_background',
            'description'           => __( 'Select the image file that you would like to use as the background image', 'lebanon' ),        
        ) ) );
    
        
    $wp_customize->add_section( 'homepage_topc', array (
        'title'                 => __( 'Top C - 3-column Page/Post/Product', 'lebanon' ),
        'panel'                 => 'homepage',
    ) );
    
    
        $wp_customize->add_setting( 'homepage_topc_toggle', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'homepage_topc_toggle', array(
            'label'         => __( 'Display Homepage Top C Widget ?', 'lebanon' ),
            'description'   => __( 'This widget shows up if you have the Static Front Page set to "A static page" in customizer -> Frontpage -> Static Front Page', 'lebanon' ),
            'section' => 'homepage_topc',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'lebanon' ),
                'off'    => __( 'No', 'lebanon' )
            )
        ));
    
        $wp_customize->add_setting( 'lebanon_the_featured_post3', array (
            'default'               => 1,
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_post',
        ) );
        $wp_customize->add_control( 'lebanon_the_featured_post3', array(
            'type'                  => 'select',
            'section'               => 'homepage_topc',
            'label'                 => __( 'Select the Featured Post', 'lebanon' ),
            'choices'               => lebanon_all_posts_array(),
        ) );

        $wp_customize->add_setting( 'lebanon_the_featured_post4', array (
            'default'               => 1,
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_post',
        ) );
        $wp_customize->add_control( 'lebanon_the_featured_post4', array(
            'type'                  => 'select',
            'section'               => 'homepage_topc',
            'label'                 => __( 'Select the Featured Post', 'lebanon' ),
            'choices'               => lebanon_all_posts_array(),
        ) );

        $wp_customize->add_setting( 'lebanon_the_featured_post5', array (
            'default'               => 1,
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_post',
        ) );
        $wp_customize->add_control( 'lebanon_the_featured_post5', array(
            'type'                  => 'select',
            'section'               => 'homepage_topc',
            'label'                 => __( 'Select the Featured Post', 'lebanon' ),
            'choices'               => lebanon_all_posts_array(),
        ) );

        $wp_customize->add_setting( 'homepage_topc_button', array (
            'default'               => __( 'Learn more', 'lebanon' ),
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_text',
        ) );
        $wp_customize->add_control( 'homepage_topc_button', array(
            'type'                  => 'text',
            'section'               => 'homepage_topc',
            'label'                 => __( 'Link #1 text', 'lebanon' ),
        ) );


    $wp_customize->add_section( 'homepage_overlay', array (
        'title'                 => __( 'Frontpage Overlay', 'lebanon' ),
        'panel'                 => 'homepage',
    ) );

    $wp_customize->add_section( 'static_front_page', array (
        'title' => __( 'Static Front Page', 'lebanon' ),
        'panel' => 'homepage',
    ) );
    
    $wp_customize->add_section( 'title_tagline', array (
        'title' => __( 'Logo, Title, Tagline & Favicon', 'lebanon' ),
        'panel' => 'logo',
    ) );
    
        $wp_customize->add_setting( 'overlay_bool', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'overlay_bool', array(
            'label'   => __( 'Enable Homepage Overlay Widget', 'lebanon' ),
            'section' => 'homepage_overlay',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Show', 'lebanon' ),
                'off'    => __( 'Hide', 'lebanon' )
            )
        ));

        $wp_customize->add_setting( 'overlay_icon', array (
            'default'               => 'fa fa-question-circle',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_icon'
        ) );

       $wp_customize->add_control( 'overlay_icon', array(
            'label'   => __( 'Overlay Trigger Icon', 'lebanon' ),
            'section' => 'homepage_overlay',
            'type'    => 'select',
            'choices'    => lebanon_icons()
        ));

        $wp_customize->add_setting( 'homepage_widget_color', array (
            'default'               => '#f13638',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'sanitize_hex_color'
        ) );

        $wp_customize->add_control( 
                new WP_Customize_Color_Control( 
                $wp_customize, 
                'homepage_widget_color', 
                array(
                        'label'      => __( 'Overlay Trigger Color', 'lebanon' ),
                        'section'    => 'homepage_overlay',
                        'settings'   => 'homepage_widget_color',
                ) ) 
        );

