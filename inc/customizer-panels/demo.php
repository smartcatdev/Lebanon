<?php

if( ! defined( 'LEBANON_PRO_PATH' ) ) :

$wp_customize->add_section('lebanon_demo', array(
    'title'     => __( 'Upgrade to Lebanon Pro', 'lebanon'),
    'priority'  => 0.5,
));

    $wp_customize->add_setting( 'lebanon_demo_details', array(
        'default'           => false,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control(
        new LebanonCustomizerPanel(
        $wp_customize,
        'lebanon_demo',
            array(
                'label'     => __('Lebanon Demo','lebanon'),
                'section'   => 'lebanon_demo',
                'settings'  => 'lebanon_demo_details',
            )
        )
    );
endif;