<?php

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	remove_action( 'wp_head', 'rsd_link' );

	remove_action( 'wp_head', 'wlwmanifest_link' );

	remove_action( 'wp_head', 'wp_generator' );

	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	add_action( 'init', function() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	} );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	add_action( 'init', 'remove_query_strings' );

	function remove_query_strings() {
		add_filter( 'script_loader_src', 'remove_query_strings_splitter', 15);
		add_filter( 'style_loader_src', 'remove_query_strings_splitter', 15);
	}

	function remove_query_strings_splitter( $src ){
	   $output = preg_split( "/(&ver|\?ver)/", $src );
	   return $output[0];
	}

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
