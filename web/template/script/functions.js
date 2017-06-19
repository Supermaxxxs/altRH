jQuery(document).ready(function($) {

	'use strict';
    //***************************
    // Sticky Header Function
    //***************************
	  jQuery(window).scroll(function() {
	      if (jQuery(this).scrollTop() > 170){  
	          jQuery('body').addClass("sportsmagazine-sticky");
	      }
	      else{
	          jQuery('body').removeClass("sportsmagazine-sticky");
	      }
	  });

    //***************************
    // BannerOne Functions
    //***************************
      jQuery('.education-banner-one').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          arrows: false,
          fade: true,
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
    //***************************
    // fixtureSlider Functions
    //***************************
      jQuery('.sportsmagazine-fixture-slider').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });

    //***************************
    // Click to Top Button
    //***************************
    jQuery('.education-back-top').on("click", function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    //***************************
    // Parent AddClass Function
    //***************************
    jQuery(".sportsmagazine-dropdown-menu,.sportsmagazine-megamenu").parent("li").addClass("subdropdown-addicon");

    //***************************
    // Fancybox Function
    //***************************
    jQuery(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
    });
    
    //***************************
    // CartToggle Function
    //***************************
    jQuery('a.sportsmagazine-open-cart').on("click", function(){
          jQuery('.sportsmagazine-cart-box').slideToggle('slow');
          return false;
      });
      jQuery('html').on("click", function() { jQuery(".sportsmagazine-cart-box").fadeOut(); });

    //***************************
    // Progressbar Function
    //***************************
    jQuery('.progressbar1').progressBar({
      percentage : false,
      animation : true,
      backgroundColor : "#ececec",
      barColor : "#ffdc11",
      height : "12",
    });

    //***************************
    // Countdown Function
    //***************************
    jQuery(function() {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, -192);
        jQuery('#education-countdown').countdown({
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    });
    
    //***************************
    // PartnerSlider Functions
    //***************************
      jQuery('.latest-news-slider').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          infinite: true,
          dots: false,
          prevArrow: "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
          nextArrow: "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
          responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
        });
        //***************************
        // Counter Function
        //***************************
        jQuery('#word-count1').jQuerySimpleCounter({
          end:320,
          duration: 9000
        });
        jQuery('#word-count2').jQuerySimpleCounter({
          end:1140,
          duration: 9000
        });
        jQuery('#word-count3').jQuerySimpleCounter({
          end:847,
          duration: 9000
        });
        jQuery('#word-count4').jQuerySimpleCounter({
          end:2150,
          duration: 9000
        });



});

        //***************************
        // map Function
        //***************************
         // When the window has finished loading create our google map below
          google.maps.event.addDomListener(window, 'load', init);

          function init() {
              // Basic options for a simple Google Map
              // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
              var mapOptions = {
                  // How zoomed in you want the map to start at (always required)
                  zoom: 11,

                  // The latitude and longitude to center the map (always required)
                  center: new google.maps.LatLng(40.6700, -73.9400), // New York

                  // How you would like to style the map. 
                  // This is where you would paste any style found on Snazzy Maps.
                  styles: []
              };

              // Get the HTML DOM element that will contain your map 
              // We are using a div with id="map" seen below in the <body>
              var mapElement = document.getElementById('map');

              // Create the Google Map using our element and options defined above
              var map = new google.maps.Map(mapElement, mapOptions);

              // Let's also add a marker while we're at it
              var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(40.6700, -73.9400),
                  map: map,
                  title: 'Snazzy!'
              });
      }