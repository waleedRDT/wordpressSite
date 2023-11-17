jQuery(function ($) {
    "use strict";

    mobileMenu('#mobile__menu', '#mobile__menu--button');

    jQuery(window).scrollTop() > 10 ? 
        jQuery(".site-header").addClass('fixed-header') : 
        jQuery(".site-header").removeClass('fixed-header');

    jQuery(window).scroll(function() {
        jQuery(window).scrollTop() > 10 ? 
        jQuery(".site-header").addClass('fixed-header') : 
        jQuery(".site-header").removeClass('fixed-header');
    });



    // slider JS Here

    //hero-slider
    jQuery('.hero-slider').slick({
        dots: true,
        arrows:false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });

      //partners slider
    jQuery('.partner-logos').slick({
        dots: false,
        arrows:false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        swipeToSlide:true,
        responsive: [
        //   {
        //     breakpoint: 991,
        //     settings: {
        //       slidesToShow: 4,
        //       swipeToSlide:true,
        //       infinite: true,
        //       dots: false
        //     }
        //   },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              swipeToSlide:true,
              infinite: true,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              swipeToSlide:true,
              infinite: true,
            }
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});

function mobileMenu ( menu, button ) {
    jQuery( button ).on( 'click', function() {
        jQuery( button ).stop().toggleClass( 'open' );
        jQuery( menu ).stop().slideToggle( 500 );
        jQuery( 'body, html' ).stop().toggleClass( 'overflow-hidden' );
    } );

    jQuery( menu + ' .menu-item-has-children > a' ).on( 'click', function( e ) {
        e.preventDefault();
        jQuery( this ).parent().toggleClass( 'active' ).find( '.sub-menu' ).stop().slideToggle( 300 );
    } );
}



