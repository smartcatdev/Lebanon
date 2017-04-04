<?php

    $wp_customize->add_section( 'lebanon_blog', array (
        'title'                 => __( 'Blog', 'lebanon' ),
        'priority'              => 10
    ) );
    
    $wp_customize->add_setting('blog_jumbotron', array(
        'default' => 'on',
        'transport' => 'refresh',
        'sanitize_callback' => 'lebanon_radio_sanitize_onoff'
    ));

    $wp_customize->add_control('blog_jumbotron', array(
        'label' => __('Display the Jumbotron on the Posts page ?', 'lebanon'),
        'description' => __('This setting only applies to the Posts page that you set Frontpage - Static Frontpage. This does not apply to Custom Page templates', 'lebanon'),
        'section' => 'lebanon_blog',
        'type' => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));

        $wp_customize->add_setting( 'lebanon_blog_author', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'lebanon_blog_author', array(
            'label'         => __( 'Display the author name on the blog ?', 'lebanon' ),
            'section' => 'lebanon_blog',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'lebanon' ),
                'off'    => __( 'No', 'lebanon' )
            )
        ));

        $wp_customize->add_setting( 'lebanon_blog_date', array (
            'default'               => 'on',
            'transport'             => 'refresh',
            'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
        ) );

       $wp_customize->add_control( 'lebanon_blog_date', array(
            'label'         => __( 'Display the date on the blog ?', 'lebanon' ),
            'section' => 'lebanon_blog',
            'type'    => 'radio',
            'choices'    => array(
                'on'    => __( 'Yes', 'lebanon' ),
                'off'    => __( 'No', 'lebanon' )
            )
        ));