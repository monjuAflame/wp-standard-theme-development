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

}

?>