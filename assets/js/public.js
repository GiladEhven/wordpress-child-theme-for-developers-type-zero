//
jQuery( function( $ ) {

    $( document ).ready( function() {

    	'use strict'

        $('[data-toggle="offcanvas"]').on('click', function () {
            $('.offcanvas-collapse').toggleClass('open')
        })

    });

});
