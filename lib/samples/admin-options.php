<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'comet';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'theme-option',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'General Options',
  'icon'   => 'fa-solid fa-house',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'logo-light',
      'type'  => 'media',
      'title' => 'Upload Light Logo',
      'preview' => true,
      'preview_size' => 'thumbnail',
      'preview_width' => 120,
      'preview_height' => 120,
      'default' => array(
        'placeholder' => get_template_directory_uri() . '/images/logo_light.png',
      ),
      'url'   => false,
      'library' => 'image',
    ),

    array(
      'id'    => 'logo-dark',
      'type'  => 'media',
      'title' => 'Upload Dark Logo',
      'preview' => true,
      'preview_size' => 'thumbnail',
      'preview_width' => 120,
      'preview_height' => 120,
      'default' => array(
        'placeholder' => get_template_directory_uri() . '/images/logo_dark.png',
      ),
      'url'   => false,
      'library' => 'image',
    ),

    array(
      'id'    => 'blog-title',
      'type'  => 'text',
      'title' => 'Blog Page Title',
      'default' => 'This is our blog',
      'placeholder' => 'Type here...'
    ),
    array(
      'id'    => 'blog-subtitle',
      'type'  => 'text',
      'title' => 'Blog Page Sub Title',
      'default' => 'We have a few tips for you.',
      'placeholder' => 'Type here...'
    ),

    

  )
) );

CSF::createSection( $prefix, array(
  'title'  => __('Footer Options', 'comet'),
  'icon'   => 'fa-solid fa-plane',
  'fields' => array(

    array(
      'id'    => 'footer-copyright',
      'type'  => 'text',
      'title' => 'Footer Copyright Text',
      'default' => '&copy; 2015 Comet Agency.',
      'placeholder' => 'Type here...'
    ),

  )
));

CSF::createSection( $prefix, array(
  'title'  => __('Social Profiles', 'comet'),
  'icon'   => 'fa-solid fa-plane',
  'fields' => array(

    array(
      'id'    => 'social-facebook',
      'type'  => 'text',
      'title' => 'Facebook',
      'default' => 'https://facebook.com',
      'placeholder' => 'Type here...'
    ),
    array(
      'id'    => 'social-twitter',
      'type'  => 'text',
      'title' => 'Twitter',
      'default' => 'https://twitter.com',
      'placeholder' => 'Type here...'
    ),
    array(
      'id'    => 'social-linkedin',
      'type'  => 'text',
      'title' => 'Linkedin',
      'default' => 'https://linkedin.com',
      'placeholder' => 'Type here...'
    ),
    array(
      'id'    => 'social-instagram',
      'type'  => 'text',
      'title' => 'Instagram',
      'default' => 'https://instagram.com',
      'placeholder' => 'Type here...'
    ),
    array(
      'id'    => 'social-dribbble',
      'type'  => 'text',
      'title' => 'Dribbble',
      'default' => 'https://dribbble.com',
      'placeholder' => 'Type here...'
    ),

  )
));