<?php

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    // Add 'Featured Image' column to lists

    add_filter( 'manage_pages_columns', 'add_featured_image_column' );
    add_filter( 'manage_posts_columns', 'add_featured_image_column' );

    add_filter( 'manage_pages_custom_column', 'populate_featured_image_column', 10, 2 );
    add_filter( 'manage_posts_custom_column', 'populate_featured_image_column', 10, 2 );

    function add_featured_image_column( $columns ) {
        $columns = array_slice( $columns, 0, 1, true ) + array( 'featured-image' => 'Featured Image' ) + array_slice( $columns, 1, count( $columns ) - 1, true );
        return $columns;
    }
    
    function populate_featured_image_column( $column_name, $post_id ) {
        if( $column_name == 'featured-image' ) {
            echo get_the_post_thumbnail( $post_id, array( 43, 43 ), array( 'class' => 'ehven-admin' ) );
        }
        return $column_name;
    }

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
