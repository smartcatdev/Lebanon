<?php

$wp_customize->add_panel( 'footer', array (
        'title'                 => __( 'Footer', 'lebanon' ),
        'description'           => __( 'Customize the site footer', 'lebanon' ),
        'priority'              => 10
    ) );
    
        $wp_customize->add_section( 'footer_background', array (
            'title'                 => __( 'Footer Background', 'lebanon' ),
            'panel'                 => 'footer',
        ) );
    
            $wp_customize->add_setting( 'footer_background_toggle', array (
                'default'               => 'on',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
            ) );

           $wp_customize->add_control( 'footer_background_toggle', array(
                'label'         => __( 'Display the footer background ?', 'lebanon' ),
                'section' => 'footer_background',
                'type'    => 'radio',
                'choices'    => array(
                    'on'    => __( 'Yes', 'lebanon' ),
                    'off'    => __( 'No', 'lebanon' )
                )
            )); 
        
        
            $wp_customize->add_setting( 'footer_background_image', array (
                'default'               => get_template_directory_uri() . '/inc/images/footer.jpg',
                'transport'             => 'refresh',
                'sanitize_callback'     => 'esc_url_raw'
            ) );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control3', array (
                'label' =>              __( 'Footer Background Image ( Parallax )', 'lebanon' ),
                'section'               => 'footer_background',
                'mime_type'             => 'image',
                'settings'              => 'footer_background_image',
                'description'           => __( 'Select the image file that you would like to use as the footer background', 'lebanon' ),        
            ) ) );
    
    
    $wp_customize->add_section( 'payment_methods', array (
        'title'                 => __( 'Payment Methods', 'lebanon' ),
        'panel'                 => 'footer',
    ) );
    
        // Payment Icons - Visa
            $wp_customize->add_setting( 'lebanon_include_cc_visa', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'lebanon_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'lebanon_include_cc_visa', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display Visa Icon?', 'lebanon' ),
            ) );

            // Payment Icons - MasterCard
            $wp_customize->add_setting( 'lebanon_include_cc_mastercard', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'lebanon_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'lebanon_include_cc_mastercard', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display MasterCard Icon?', 'lebanon' ),
            ) );

            // Payment Icons - American Express
            $wp_customize->add_setting( 'lebanon_include_cc_amex', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'lebanon_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'lebanon_include_cc_amex', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display American Express Icon?', 'lebanon' ),
            ) );

            // Payment Icons - PayPal
            $wp_customize->add_setting( 'lebanon_include_cc_paypal', array (
                'default'               => true,
                'transport'             => 'refresh',
                'sanitize_callback'     => 'lebanon_sanitize_checkbox',
            ) );
            $wp_customize->add_control( 'lebanon_include_cc_paypal', array(
                'type'                  => 'checkbox',
                'section'               => 'payment_methods',
                'label'                 => __( 'Display PayPal Icon?', 'lebanon' ),
            ) );
    
    $wp_customize->add_section( 'footer_text', array (
        'title'                 => __( 'Copyright Text', 'lebanon' ),
        'panel'                 => 'footer',
    ) );
    
        $wp_customize->add_setting( 'copyright_text', array (
            'default'               => __( 'Copyright Company Name', 'lebanon' ) . date( 'Y' ),
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_sanitize_text'
        ) );

        $wp_customize->add_control( 'copyright_text', array(
            'type'                  => 'text',
            'section'               => 'footer_text',
            'label'                 => __( 'Copyright Text', 'lebanon' )
        ) );
    
    $wp_customize->add_section( 'social_links', array (
        'title'                 => __( 'Social Icons & Links', 'lebanon' ),
        'panel'                 => 'footer',
    ) );
    
    $wp_customize->add_setting( 'facebook_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'facebook_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Facebook URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'gplus_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'gplus_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Google Plus URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'instagram_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'instagram_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Instagram URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'linkedin_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'linkedin_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Linkedin URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'pinterest_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'pinterest_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Pinterest URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'twitter_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'twitter_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Twitter URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'vimeo_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'vimeo_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Vimeo URL', 'lebanon' )
        
    ) );
    
    $wp_customize->add_setting( 'spotify_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'spotify_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Spotify URL', 'lebanon' )
    ) );
    
    $wp_customize->add_setting( 'apple_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'apple_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Apple URL', 'lebanon' )
    ) );
    
    $wp_customize->add_setting( 'github_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'github_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'GitHub URL', 'lebanon' )
    ) );
    
    $wp_customize->add_setting( 'vine_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'vine_url', array(
        'type'                  => 'text',
        'section'               => 'social_links',
        'label'                 => __( 'Vine URL', 'lebanon' )
    ) );
    