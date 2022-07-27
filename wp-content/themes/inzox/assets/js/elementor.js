( function ($, elementor) {
	"use strict";


    var INZOX = {

        init: function () {
            
            var widgets = {
               'inzox-project.default': INZOX.Projects_filter_mixcontent,
               'inzox-testimonial.default': INZOX.Testimonial, 
               'inzox-slider.default': INZOX.Main_Slider,
               'inzox-project.default': INZOX.Projects_Slider,
               'inzox-services.default': INZOX.Service,
               'inzox-clientlogo.default': INZOX.ClientLogo,
               
            };
            $.each(widgets, function (widget, callback) {
                elementor.hooks.addAction('frontend/element_ready/' + widget, callback);
            });
           
      },
      
      /*=============================
         filter tab
      =============================== */
      Projects_filter_mixcontent: function ($scope) {

         var $container = $scope.find('#mixcontent');
         
         $container.mixItUp({
            animation: {
                effects: 'fade translateX(50%)',
                reverseOut: true,
                duration: 1000
            },
            load: {
                filter: 'all'
            }
        });	

        var $container1 = $scope.find('.project-shap');
        if ($container1.length > 0) {
           $container1.each(function () {
              var img = $(this);
              var attributes = img.prop("attributes");
              var imgURL = img.attr("src");
              $.get(imgURL, function (data) {
                  var svg = $(data).find('svg');
                  svg = svg.removeAttr('xmlns:a');
                  $.each(attributes, function () {
                      svg.attr(this.name, this.value);
                  });
                  img.replaceWith(svg);
              });
          });
          
        }


      },

	   /*==========================================================
        Testimonial slider Classic
      ============================================================*/
		Testimonial: function ($scope) {
         var $container = $scope.find('.testimonial-carousel');
         if ($container.length > 0) {
         var controls = null;
         var nav = true;
         var dot = true;
         var auto_play = true;
         var auto_loop = true;
         var item_desktop = 3;
         var item_tablet = 2;
         var item_mobile = 1;

         controls = JSON.parse($container.attr('data-controls'));
         nav       = Boolean(controls.nav=='yes'?true:false);
         dot       = Boolean(controls.dot=='yes'?true:false);
         auto_play = Boolean(controls.auto_play=='yes'?true:false);
         auto_loop = Boolean(controls.auto_loop=='yes'?true:false);
         item_desktop = controls.item_desktop;
         item_tablet = controls.item_tablet;
         item_mobile = controls.item_mobile;

         $container.owlCarousel({

            loop: auto_loop,
            autoplay: auto_play,
            autoplayHoverPause: true,
            nav: nav,
            dots: dot,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 1100,
            navText: ['<i class="icon icon-arrow-right">', '<i class="icon icon-arrow-left">'],
            items: 1,
            responsive: {
               0: {
                  nav: false,
                  items: item_mobile,
               },
               600: {
                  nav: nav,
                  items: item_tablet,
               },
               1000: {
                  nav: nav,
                  items:item_desktop,
               }
            }
         });
        
         }
      																						
		
      },

      /*==========================================================
        Projects slider
      ============================================================*/
		Projects_Slider: function ($scope) {
         var $container = $scope.find('.project-carousel');
         if ($container.length > 0) {
            var controls = null;
            var nav = true;
            var auto_play = true;
            var auto_loop = true;

            controls = JSON.parse($container.attr('data-controls'));
            nav       = Boolean(controls.nav=='yes'?true:false);
            auto_play = Boolean(controls.auto_play=='yes'?true:false);
            auto_loop = Boolean(controls.auto_loop=='yes'?true:false);

            $container.owlCarousel({

               loop: auto_loop,
               autoplay: auto_play,
               autoplayHoverPause: true,
               nav: nav,
               dots: false,
               mouseDrag: true,
               touchDrag: true,
               smartSpeed: 1100,
               navText: ['<i class="fas fa-arrow-left">', '<i class="fas fa-arrow-right">'],
               items: 1,
               responsive: {
                  0: {
                     nav: false,
                  },
                  600: {
                     nav: nav,
                  },
                  1000: {
                     nav: nav,
                  }
               }
            });
        
         }
         
         var $container2 = $scope.find('.project-carousel-style3');
         if ($container2.length > 0) {
            var controls = null;
            var nav = true;
            var auto_play = true;
            var auto_loop = true;

            controls = JSON.parse($container2.attr('data-controls'));
            nav       = Boolean(controls.nav=='yes'?true:false);
            auto_play = Boolean(controls.auto_play=='yes'?true:false);
            auto_loop = Boolean(controls.auto_loop=='yes'?true:false);

            $container2.owlCarousel({
               loop: auto_loop,
               autoplay: auto_play,
               autoplayHoverPause: true,
               nav: nav,
               dots: false,
               mouseDrag: true,
               touchDrag: true,
               smartSpeed: 1100,
               navText: ['<i class="icon icon-arrow-left">', '<i class="icon icon-arrow-right">'],
               items: 2,
               margin: 30,
               responsive: {
                  0: {
                     nav: false,
                  },
                  600: {
                     nav: nav,
                  },
                  1000: {
                     nav: nav,
                  }
               }
            });
        
         }
         
         var $container3 = $scope.find('.project-carousel-style5');
         if ($container3.length > 0) {
            var controls = null;
            var nav = true;
            var auto_play = true;
            var auto_loop = true;
            controls  = JSON.parse($container3.attr('data-controls'));
            nav       = Boolean(controls.nav=='yes'?true:false);
            auto_play = Boolean(controls.auto_play=='yes'?true:false);
            auto_loop = Boolean(controls.auto_loop=='yes'?true:false);

            $container3.owlCarousel({
               left: true,
               items:4,
               loop:true,
               margin:30,
               dots:false,
               nav:true,
               navText: ['<i class="fas fa-arrow-left">', '<i class="fas fa-arrow-right">'],
               responsive: {
                  0: {
                     items: 1,
                  },
                  600: {
                     items: 1,
                  },
                  1000: {
                     items: 2,
                  },
                  1200: {
                     items: 4,
                  }
               }
            });
        
         }
		
      },

      
		// Main Slider
		Main_Slider: function ($scope) {
         
         var $container = $scope.find('.hero-area');

         var controls= JSON.parse($container.attr('data-controls'));
              
         var navShow = Boolean(controls.show_nav?true:false);
         var autoslide = Boolean(controls.auto_nav_slide?true:false);
         var dot_nav = Boolean(controls.dot_nav_show?true:false);
         if ($container.length > 0) {
            $container.owlCarousel({
               items: 1,
               loop: true,
               autoplay: autoslide,
               nav: navShow,
               dots: dot_nav,
               autoplayTimeout: 8000,
               autoplayHoverPause: false,
               mouseDrag: false,
               smartSpeed: 1100,
               navText: ['<i class="icon icon-chevron-left">', '<i class="icon icon-chevron-right">'],
               responsive: {
                  0: {
                     items: 1,
                     nav: false,
                     mouseDrag: false,

                  },
                  600: {
                     items: 1,
                     nav: false,
                     mouseDrag: true,

                  },
                  1000: {
                     nav: navShow,
                     mouseDrag: true,

                  }
               }
         
            });
         }
		
      },
      
      Service: function ($scope) {
         let serviceItem = $scope.find(".service-style-1");
         if (serviceItem.length > 0) {
               serviceItem.on("mouseenter mouseleave", function (event) {
               if (event.type === "mouseenter") {
                  $(this).addClass("featured");
                  serviceItem.not(this).removeClass("featured");
               }
               if (event.type === "mouseleave") {
                  serviceItem.not(this).removeClass("featured");
               }
               });
         }
      },

   /*==========================================================
        Client Logo
      ============================================================*/
		ClientLogo: function ($scope) {
         var $container = $scope.find('.client-logo');
         if ($container.length > 0) {
         var controls = null;
         var nav = true;
         var auto_play = true;
         var auto_loop = true;
         var tablet_items = 3;
         var mobile_items = 1;
         var desktop_items = 4;

         controls = JSON.parse($container.attr('data-controls'));
         nav       = Boolean(controls.show_nav=='yes'?true:false);
         auto_play = Boolean(controls.auto_play=='yes'?true:false);
         tablet_items = controls.tablet_items;
         mobile_items = controls.mobile_items;
         desktop_items = controls.desktop_items;

         $container.owlCarousel({

            loop: auto_loop,
            autoplay: auto_play,
            autoplayHoverPause: true,
            nav: nav,
            dots: false,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 1100,
            navText: ['<i class="fas fa-arrow-left">', '<i class="fas fa-arrow-right">'],
            items: 1,
            responsive: {
               0: {
                  nav: false,
                  items: mobile_items,
               },
               768: {
                  nav: nav,
                  items: tablet_items,
               },
               600: {
                  nav: nav,
                  items: tablet_items,
               },
               1024: {
                  nav: nav,
                  items:desktop_items,
               }
            }
         });
        
         }      																						
		
      },

   };
   $(window).on('elementor/frontend/init', INZOX.init);
}(jQuery, window.elementorFrontend) ); 

