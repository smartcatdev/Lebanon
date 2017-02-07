<?php

$wp_customize->add_section( 'lebanon_header_headerbar', array (
    'title'                 => __( 'Header bar', 'lebanon' ),
    'priority' => 2
) );

    $wp_customize->add_setting( 'lebanon_preheader', array (
        'default'               => 'off',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_preheader', array(
        'label'         => __( 'Display the header bar ?', 'lebanon' ),
        'description'   => __( 'This is the slim bar containing phone #, account login etc..', 'lebanon' ),
        'section' => 'lebanon_header_headerbar',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'On', 'lebanon' ),
            'off'    => __( 'Off', 'lebanon' )
        )
    ));

    $wp_customize->add_setting( 'lebanon_headerbar_bg_color', array (
        'default'               => '#ffffff',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'lebanon_headerbar_bg_color', array(
            'label'      => __( 'Background color', 'lebanon' ),
            'section'    => 'lebanon_header_headerbar',
            'settings'   => 'lebanon_headerbar_bg_color',
        ) ) 
    );

    $wp_customize->add_setting( 'lebanon_headerbar_text_color', array (
        'default'               => '#101010',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( $wp_customize, 'lebanon_headerbar_text_color', array(
            'label'      => __( 'Menu link color', 'lebanon' ),
            'section'    => 'lebanon_header_headerbar',
            'settings'   => 'lebanon_headerbar_text_color',
        ) ) 
    );


    $wp_customize->add_setting( 'lebanon_phone_num', array (
        'default'               => __( '800.232.3388', 'lebanon' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_text',
    ) );
    $wp_customize->add_control( 'lebanon_phone_num', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Phone number', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_email_address', array (
        'default'               => __( 'support@domain.com', 'lebanon' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_text',
    ) );
    $wp_customize->add_control( 'lebanon_email_address', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Email address', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_link1', array (
        'default'               => __( 'My account', 'lebanon' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_text',
    ) );
    $wp_customize->add_control( 'lebanon_link1', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Link #1 text', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_link1_url', array (
        'default'               => home_url('/'),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'lebanon_link1_url', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Link #1 URL', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_link2', array (
        'default'               => __( 'About us', 'lebanon' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_text',
    ) );
    $wp_customize->add_control( 'lebanon_link2', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Link #2 text', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_link2_url', array (
        'default'               => home_url('/'),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'lebanon_link2_url', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Link #2 URL', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_link3', array (
        'default'               => __( 'Products', 'lebanon' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_text',
    ) );
    $wp_customize->add_control( 'lebanon_link3', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Link #3 text', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_link3_url', array (
        'default'               => home_url('/'),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'lebanon_link3_url', array(
        'type'                  => 'text',
        'section'               => 'lebanon_header_headerbar',
        'label'                 => __( 'Link #3 URL', 'lebanon' ),
    ) );