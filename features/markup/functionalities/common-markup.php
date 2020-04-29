<?php

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

 	//  https://kinsta.com/knowledgebase/disable-embeds-wordpress/#disable-embeds-code

     add_action( 'init', function() {

		// Disable oEmbed auto discovery
		add_filter( 'embed_oembed_discover', '__return_false' );

		// Remove oEmbed REST API endpoint
		remove_action( 'rest_api_init', 'wp_oembed_register_route' );

		// Remove oEmbed discovery links
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

		// Disable filtering of oEmbed results
		remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

		// Remove oEmbed-specific JavaScript (admin + public)
		remove_action( 'wp_head', 'wp_oembed_add_host_js' );
		add_filter( 'tiny_mce_plugins', 'disable_tiny_mce_plugins_for_embeds' );

		// Remove all embeds rewrite rules
		add_filter( 'rewrite_rules_array', 'disable_rewrite_rules_for_embeds' );
	   
		// Remove filter of the oEmbed result before any HTTP requests are made
		remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );

	}, 9999 );

	function disable_tiny_mce_plugins_for_embeds($plugins) {
		return array_diff($plugins, array('wpembed'));
	}
	
	function disable_rewrite_rules_for_embeds($rules) {
		foreach($rules as $rule => $rewrite) {
			if(false !== strpos($rewrite, 'embed=true')) {
				unset($rules[$rule]);
			}
		}
		return $rules;
	}

	add_action( 'wp_enqueue_scripts', function() {
		wp_deregister_script( 'wp-embed' );
	});

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
