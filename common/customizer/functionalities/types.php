<?php

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    add_action( 'customize_register', function( $wp_customize ) {

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

        $wp_customize->add_panel( 'ehven_panel_post_type_settings',
            array(
                'description'     => esc_html__( 'Set addresses, strings, and other settings that apply individual Post Types (rather than sitewide).' ),
                'title'           => __( 'Post Type Settings' ),
            )
        );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    });

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
