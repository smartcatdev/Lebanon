<?php

$wp_customize->add_panel('logo', array(
    'title' => __('Logo & Menu bar', 'lebanon'),
    'description' => __('set the logo image, site title, description and site icon favicon', 'lebanon'),
    'priority' => 10
));

    $wp_customize->add_section('lebanon_header_color_section', array(
        'title' => __('Colors', 'lebanon'),
        'panel' => 'logo',
    ));

        $wp_customize->add_setting('lebanon_header_bg_color', array(
            'default' => '#65bbc0',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control(
                new WP_Customize_Color_Control($wp_customize, 'lebanon_header_bg_color', array(
            'label' => __('Background color', 'lebanon'),
            'section' => 'lebanon_header_color_section',
            'settings' => 'lebanon_header_bg_color',
                ))
        );

        $wp_customize->add_setting('lebanon_header_text_color', array(
            'default' => '#ffffff',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control(
                new WP_Customize_Color_Control($wp_customize, 'lebanon_header_text_color', array(
            'label' => __('Menu link color', 'lebanon'),
            'section' => 'lebanon_header_color_section',
            'settings' => 'lebanon_header_text_color',
                ))
        );

    $wp_customize->add_section('lebanon_header_cart', array(
        'title' => __('Shopping cart', 'lebanon'),
        'Description' => __('This setting works if you have WooCommerce active', 'lebanon'),
        'panel' => 'logo',
    ));

        $wp_customize->add_setting('header_cart_bool', array(
            'default' => 'on',
            'transport' => 'refresh',
            'sanitize_callback' => 'lebanon_radio_sanitize_onoff'
        ));

        $wp_customize->add_control('header_cart_bool', array(
            'label' => __('Display shopping cart ?', 'lebanon'),
            'description' => __('The shopping cart will only show up if you have WooCommerce installed and activated', 'lebanon'),
            'section' => 'lebanon_header_cart',
            'type' => 'radio',
            'choices' => array(
                'on' => __('Yes', 'lebanon'),
                'off' => __('No', 'lebanon')
            )
        ));

        $wp_customize->add_section('lebanon_site_search', array(
            'title' => __('Site Search', 'lebanon'),
            'Description' => __('Do you want to show the search icon in the header ?', 'lebanon'),
            'panel' => 'logo',
        ));

        $wp_customize->add_setting('header_search_bool', array(
            'default' => 'on',
            'transport' => 'refresh',
            'sanitize_callback' => 'lebanon_radio_sanitize_onoff'
        ));

        $wp_customize->add_control('header_search_bool', array(
            'label' => __('Display search icon ?', 'lebanon'),
            'section' => 'lebanon_site_search',
            'type' => 'radio',
            'choices' => array(
                'on' => __('Yes', 'lebanon'),
                'off' => __('No', 'lebanon')
            )
        ));
