<?php

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    //  https://wordpress.stackexchange.com/questions/12863/check-if-wp-login-is-current-page

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    function is_login() {

        $ABSPATH_MY = str_replace( array( '\\','/' ), DIRECTORY_SEPARATOR, ABSPATH );

        return (

            ( in_array( $ABSPATH_MY . 'wp-login.php', get_included_files() ) || in_array( $ABSPATH_MY . 'wp-register.php', get_included_files() ) )

            || ( isset( $_GLOBALS['pagenow'] ) && $GLOBALS['pagenow'] === 'wp-login.php' )

            || $_SERVER['PHP_SELF'] == '/wp-login.php'

        );

    }

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
