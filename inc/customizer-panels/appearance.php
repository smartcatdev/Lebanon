<?php

    $wp_customize->add_panel( 'appearance', array (
        'title'                 => __( 'Appearance', 'lebanon' ),
        'description'           => __( 'Customize your site colros, fonts and other appearance settings', 'lebanon' ),
        'priority'              => 10
    ) );
    

    
    $wp_customize->add_section( 'color', array (
        'title'                 => __( 'Skin Color', 'lebanon' ),
        'panel'                 => 'appearance',
    ) );
    
    $wp_customize->add_section( 'font', array (
        'title'                 => __( 'Fonts', 'lebanon' ),
        'panel'                 => 'appearance',
    ) );

    // Logo Bool
    $wp_customize->add_setting( 'logo_bool', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

    $wp_customize->add_control( 'logo_bool', array(
        'type'                  => 'radio',
        'section'               => 'logo',
        'label'                 => __( 'Display Logo', 'lebanon' ),
        'description'           => __( 'If you do not use a logo, the site title will be displayed', 'lebanon' ),  
        'choices'               => array(
            'on'              => __( 'Yes', 'lebanon'),
            'off'             => __( 'No', 'lebanon'),
        )
    ) );
    
    // Logo Image
    $wp_customize->add_setting( 'logo', array (
        'default'               => get_template_directory_uri() . '/inc/images/logo.png',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control4', array (
        'label' =>              __( 'Logo', 'lebanon' ),
        'section'               => 'logo',
        'mime_type'             => 'image',
        'settings'              => 'logo',
        'description'           => __( 'Image for your site', 'lebanon' ),        
    ) ) );
    
    
    $wp_customize->add_setting( 'lebanon_theme_color', array (
        'default'               => '#65bbc0',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'lebanon_theme_color', array(
            'label'      => __( 'Theme primary color', 'lebanon' ),
            'section'    => 'color',
            'settings'   => 'lebanon_theme_color',
        ) ) 
    );
    
    $wp_customize->add_setting( 'lebanon_theme_color_hover', array (
        'default'               => '#4cb9bf',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'lebanon_theme_color_hover', array(
            'label'      => __( 'Hover color', 'lebanon' ),
            'section'    => 'color',
            'settings'   => 'lebanon_theme_color_hover',
        ) ) 
    );
    
    $wp_customize->add_setting( 'header_font', array (
        'default'               => 'Montserrat, sans-serif',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_font'
    ) );
    
    $wp_customize->add_control( 'header_font', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'Headers Font', 'lebanon' ),
        'description'           => __( 'Applies to the slider header, callouts headers, post page & widget titles etc..', 'lebanon' ),
        'choices'               => lebanon_fonts()
        
    ) );
    
    $wp_customize->add_setting( 'theme_font', array (
        'default'               => 'Lato, sans-serif',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_font'
    ) );
    
    $wp_customize->add_control( 'theme_font', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'General font for the site body', 'lebanon' ),
        'choices'               => lebanon_fonts()
        
    ) );
    
    
    $wp_customize->add_setting( 'menu_font_size', array (
        'default'               => '14px',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_font_size'
    ) );
    
    $wp_customize->add_control( 'menu_font_size', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'Menu Font Size', 'lebanon' ),
        'choices'               => lebanon_font_sizes()
        
    ) );
    
    $wp_customize->add_setting( 'theme_font_size', array (
        'default'               => '16px',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_font_size'
    ) );
    
    $wp_customize->add_control( 'theme_font_size', array(
        'type'                  => 'select',
        'section'               => 'font',
        'label'                 => __( 'Content Font Size', 'lebanon' ),
        'choices'               => lebanon_font_sizes()
        
    ) );