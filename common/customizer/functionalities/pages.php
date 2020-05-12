<?php

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    add_action( 'customize_register', function( $wp_customize ) {

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

        $wp_customize->add_panel( 'ehven_panel_page_specific_settings',
            array(
                'description'     => esc_html__( 'Set addresses, strings, and other settings that apply to specific pages (rather than sitewide).' ),
                'title'           => __( 'Page Specific Settings' ),
            )
        );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    });

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
