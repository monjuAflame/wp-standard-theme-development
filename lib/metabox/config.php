<?php

add_action( 'cmb2_admin_init', 'post_type_metabox');

function post_type_metabox() {
    
    $box = new_cmb2_box(array(
        'id'            => 'additional-box',
        'object_types'  => array('post'),
        'title'         => __('Additional Field', 'comet')
    ));

    $box->add_field(array(
        'id' => '_for-video',
        'type' => 'text',
        'name' => 'Video URL'
    ));

    $box->add_field(array(
        'id' => '_for-audio',
        'type' => 'text',
        'name' => 'Audio URL'
    ));

    $box->add_field(array(
        'id' => '_for-gallery',
        'type' => 'file_list',
        'name' => 'Upload Images'
    ));

    $sliders = new_cmb2_box(array(
        'title' => 'Additional Field',
        'id' => 'additional-for-slider',
        'object_types' => array('comet-slider')
    ));

    $sliders->add_field(array(
        'name' => 'Subtitle',
        'id' => '_slider-subtitle',
        'type' => 'text',
    ));

    $sliders->add_field(array(
        'name' => 'First Button Text',
        'id' => '_first-button-text',
        'type' => 'text',
    ));

    $sliders->add_field(array(
        'name' => 'First Button Url',
        'id' => '_first-button-url',
        'type' => 'text',
    ));

    $sliders->add_field(array(
        'name' => 'First Button Type',
        'id' => '_first-button-type',
        'type' => 'select',
        'options' => array(
            'red' => 'Red Button',
            'transparent' => 'Transparent Button'
        )
    ));

    $sliders->add_field(array(
        'name' => 'Second Button Text',
        'id' => '_second-button-text',
        'type' => 'text',
    ));

    $sliders->add_field(array(
        'name' => 'Second Button Url',
        'id' => '_second-button-url',
        'type' => 'text',
    ));

    $sliders->add_field(array(
        'name' => 'Second Button Type',
        'id' => '_second-button-type',
        'type' => 'select',
        'options' => array(
            'red' => 'Red Button',
            'transparent' => 'Transparent Button'
        )
    ));




}

?>