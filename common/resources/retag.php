<?php

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    add_filter( 'script_loader_tag', function( $tag, $handle, $src ) {

        $scripts = array( 'ehven-js-bootstrap', 'ehven-js-jquery', 'ehven-js-popper' );

        if ( in_array( $handle, $scripts, true ) ) {

            $integrity = null;

            if ( 'ehven-js-bootstrap' === $handle ) $integrity = 'sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6';
            if ( 'ehven-js-jquery'    === $handle ) $integrity = 'sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=';
            if ( 'ehven-js-popper'    === $handle ) $integrity = 'sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo';

            $tag = '<script crossorigin="anonymous" id="' . $handle . '-js" integrity="' . $integrity . '" src="' . $src . '"></script>' . "\n";

        }

        return $tag;

    }, 10, 3 );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    add_filter( 'style_loader_tag', function( $link, $handle ) {

        $styles = array( 'ehven-css-bootstrap', 'ehven-css-font-awesome' );

        if ( in_array( $handle, $styles, true ) ) {

            $integrity = null;

            if ( 'ehven-css-bootstrap'    === $handle ) $integrity = 'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh';
            if ( 'ehven-css-font-awesome' === $handle ) $integrity = 'sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=';

            $link = str_replace( '/>', ' crossorigin="anonymous" integrity="' . $integrity . '" />', $link );

        }

        return $link;

    }, 10, 2 );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
