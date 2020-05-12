<?php

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    add_action( 'customize_register', function( $wp_customize ) {

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

        $wp_customize->add_panel( 'ehven_panel_sitewide_settings',
            array(
                'description'     => esc_html__( 'Set addresses, strings, and other settings that apply to the site overall (rather than any one page or user).' ),
                'title'           => __( 'Sitewide Settings' ),
            )
        );

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    });

    //  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
