<?php

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	$this_theme = wp_get_theme();

    $child_version = $this_theme->get( 'Version' );
    $parent_theme  = $this_theme->get( 'Template' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    switch ( $parent_theme ) {

        case 'astra':

            // Styles that are declared in code are loaded from main style.css by default
            add_action( 'wp_enqueue_scripts', function() use ( $child_version ) {
                wp_enqueue_style( 'astra-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'astra-theme-css' ), $child_version, 'all' );
            }, 15 );

            break;

        case 'bb-theme':

            // Defines
            define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
            define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

            // Classe(s)
            final class FLChildTheme {
                static public function enqueue_scripts()
                {
                    wp_enqueue_style( 'beaver-builder-child-style', FL_CHILD_THEME_URL . '/style.css' );
                }
            }

            // Action(s)
            add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

            break;

        case 'buddyboss-theme':

            // Translation
            add_action( 'after_setup_theme', function() {
                load_theme_textdomain( 'buddyboss-theme', get_stylesheet_directory() . '/languages' );
            } );

            // Scripts and styles that are declared in code are loaded from root script.js and main style.css by default
            add_action( 'wp_enqueue_scripts', function() use ( $child_version ) {
                wp_enqueue_style( 'buddyboss-child-style', get_stylesheet_directory_uri() . '/style.css', null, $child_version, 'all' );
                wp_enqueue_script( 'buddyboss-child-script', get_stylesheet_directory_uri() . '/script.js', null, $child_version, true );
            }, 9999 );

            break;

            case 'twentynineteen':
            case 'twentysixteen':

            // Parent styles
            add_action( 'wp_enqueue_scripts', function() use ( $child_version ) {
                wp_enqueue_style( 'twenty-nineteen', get_template_directory_uri() . '/style.css', null, $child_version, 'all' );
            } );

            break;

    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	if ( is_admin() ) {

		require_once( dirname( __FILE__ ) . '/features/markup/functionalities/admin-markup.php' );

		require_once( dirname( __FILE__ ) . '/hookables/admin-filters.php' );

	} else {

		require_once( dirname( __FILE__ ) . '/hookables/public-actions.php' );
		require_once( dirname( __FILE__ ) . '/hookables/public-filters.php' );

	}

    require_once( dirname( __FILE__ ) . '/features/branding/functionalities/gutenberg.php' );
    require_once( dirname( __FILE__ ) . '/features/markup/functionalities/common-markup.php' );
    require_once( dirname( __FILE__ ) . '/hookables/common-actions.php' );
    require_once( dirname( __FILE__ ) . '/hookables/common-filters.php' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
