<?php

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    add_action( 'wp_enqueue_scripts', function() {

    //  wp_deregister_script('jquery');

    //  wp_enqueue_script( 'ehven-js-jquery',       'https://code.jquery.com/jquery-3.4.1.min.js',                                 array(),                        null, true );
    //  wp_enqueue_script( 'ehven-js-popper',       'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',        array( 'ehven-js-jquery' ),     null, true );
    //  wp_enqueue_script( 'ehven-js-bootstrap',    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',      array( 'ehven-js-popper' ),     null, true );

    //  wp_enqueue_script( 'ehven-js-main-scripts',  get_stylesheet_directory_uri() . '/script.js',                                array( 'ehven-js-bootstrap' ),  null, true );

    //  wp_enqueue_style( 'ehven-css-bootstrap',     'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',   array(),                        null, 'all' );
    //  wp_enqueue_style( 'ehven-css-font-awesome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(),                        null, 'all' );

    //  wp_enqueue_style( 'ehven-css-main-styles',    get_stylesheet_directory_uri() . '/assets/css/public.css',                   array( 'ehven-css-bootstrap' ), null, 'all' );

    });

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
