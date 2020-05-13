<?php

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    new Ehven_Consultants_Gateway;

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //

    class Ehven_Consultants_Gateway {

        public function __construct() {
            $this->handle_login_errors();
            $this->modify_ui_strings();
            $this->redirect_to_login();
            $this->style_login_interfaces();
        }

        public function handle_login_errors() {
            add_filter( 'login_errors', function() {
                return 'Oops! Your login attempt has failed. Please try again.';
            });
        }

        public function modify_ui_strings() {
            add_action( 'login_form', function() {
                add_filter( 'gettext', function( $translation, $text ) {
                    if ( 'Log In' == $text ) return 'Enter';
                    if ( 'Lost your password?' == $text ) return 'Get New Password';
                    return $translation;
                }, 10, 2 );
            });
            add_action( 'lostpassword_form', function() {
                add_filter( 'gettext', function( $translation, $text ) {
                    if ( 'Log in' == $text ) return 'Back to Login';
                    return $translation;
                }, 10, 2 );
            });
        }

        public function redirect_to_login() {
            add_action( 'template_redirect', function() {
                if ( ! is_user_logged_in() ) {
                    nocache_headers();
                    wp_safe_redirect( wp_login_url( '/' ) );
                    exit;
                }
            });
        }

        public function style_login_interfaces() {
            add_action( 'login_enqueue_scripts', function() {
                wp_enqueue_style( 'ehven-login-style', get_stylesheet_directory_uri() . '/assets/css/login.css', null, null, 'all' );
            }, 10 );
        }

    }

//  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  //
