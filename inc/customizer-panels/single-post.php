<?php

$wp_customize->add_section( 'lebanon_post', array (
    'title'                 => __( 'Single Post', 'lebanon' ),
    'priority'              => 10
) );

    $wp_customize->add_setting( 'lebanon_post_author', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_post_author', array(
        'label'         => __( 'Display the author name on the single post ?', 'lebanon' ),
        'section' => 'lebanon_post',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));

    $wp_customize->add_setting( 'lebanon_post_date', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_post_date', array(
        'label'         => __( 'Display the date on the single post ?', 'lebanon' ),
        'section' => 'lebanon_post',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));

    $wp_customize->add_setting( 'lebanon_post_comments', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_post_comments', array(
        'label'         => __( 'Display the number of comments ?', 'lebanon' ),
        'section' => 'lebanon_post',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));

    $wp_customize->add_setting( 'lebanon_post_category', array (
        'default'               => 'on',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'lebanon_radio_sanitize_onoff'
    ) );

   $wp_customize->add_control( 'lebanon_post_category', array(
        'label'         => __( 'Display the category ?', 'lebanon' ),
        'section' => 'lebanon_post',
        'type'    => 'radio',
        'choices'    => array(
            'on'    => __( 'Yes', 'lebanon' ),
            'off'    => __( 'No', 'lebanon' )
        )
    ));
