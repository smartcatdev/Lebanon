<?php

$wp_customize->add_section( 'homepage_jumbotron', array (
    'title'                 => __( 'Jumbotron', 'lebanon' ),
    'priority'              => 1

) );

    $wp_customize->add_setting( 'lebanon_the_featured_post_toggle', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_the_featured_post_toggle', array(
        'label'         => __( 'Display the Jumbotron ?', 'lebanon' ),
        'section' => 'homepage_jumbotron',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));

    $wp_customize->add_setting( 'lebanon_the_featured_post', array (
        'default'               => 1,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_post',
    ) );
    $wp_customize->add_control( 'lebanon_the_featured_post', array(
        'type'                  => 'select',
        'section'               => 'homepage_jumbotron',
        'label'                 => __( 'Select the Featured Post', 'lebanon' ),
        'description'           => __( 'Select a <b>post, page</b> or one of your <b>WooCommerce products</b> to be featured on the homepage and blog', 'lebanon' ),
        'choices'               => lebanon_all_posts_array(),
    ) );

    $wp_customize->add_setting( 'lebanon_jumbotron_height', array (
        'default'               => 650,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_integer',
    ) );
    $wp_customize->add_control( 'lebanon_jumbotron_height', array(
        'type'                  => 'number',
        'section'               => 'homepage_jumbotron',
        'label'                 => __( 'Height of Featured Post section', 'lebanon' ),
        'input_attrs'           => array(
            'min' => 300,
            'max' => 1000,
            'step' => 50,
    ) ) );

    $wp_customize->add_setting( 'lebanon_the_featured_post_button', array (
        'default'               => __( 'Read More', 'lebanon' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_text',
    ) );
    $wp_customize->add_control( 'lebanon_the_featured_post_button', array(
        'type'                  => 'text',
        'section'               => 'homepage_jumbotron',
        'label'                 => __( 'Button Text', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_the_featured_post_highlight', array (
        'default'               => false,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'lebanon_the_featured_post_highlight', array(
        'type'                  => 'checkbox',
        'section'               => 'homepage_jumbotron',
        'label'                 => __( 'Add background color to post title ?', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_the_featured_post_typewriter', array (
        'default'               => true,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'lebanon_the_featured_post_typewriter', array(
        'type'                  => 'checkbox',
        'section'               => 'homepage_jumbotron',
        'label'                 => __( 'Enable typewriter effect ?', 'lebanon' ),
    ) );

    $wp_customize->add_setting( 'lebanon_the_featured_post_image_toggle', array (
        'default'               => 'off',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_the_featured_post_image_toggle', array(
        'label'         => __( 'Use custom image ?', 'lebanon' ),
        'description'   => __( 'If set to NO, the Jumbotron will use the Featured Image of your page/post that you selected above. YES will allow you to upload any image below', 'lebanon' ),
        'section' => 'homepage_jumbotron',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));

    $wp_customize->add_setting( 'lebanon_the_featured_post_image', array (
        'default'               => get_template_directory_uri() . '/inc/images/jumbotron.jpg',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'lebanon_the_featured_post_image', array (
        'label' =>              __( 'Custom Background Image', 'athena' ),
        'section'               => 'homepage_jumbotron',
        'mime_type'             => 'image',
        'settings'              => 'lebanon_the_featured_post_image',
        'description'           => __( 'If you want to use a custom image, upload an image here. Make sure that the Use Custom Image toggle is set to YES', 'athena' ),        
    ) ) );