 
$(document).ready(function() {
    "use strict";
    var defaultComponents = {
        init: function() {

			this.variables.buttonDropdownSelector.on("click", _.bind(this.buttonDropdown, this))
            this.smoothScroll();
            this.slideshow();
		},

		variables : {
			buttonDropdownSelector: $(".button--dropdown"),
			buttonDropdownContent: $(".dropdown-content"),
            $SlideshowTextTrigger: $(".textTrigger"),
            spriteSlideshowSelector: $(".image-top-container"),
			visibleClass : "visible",
			activeClass: "active"
		},

		buttonDropdown: function (event) {
			this.variables.buttonDropdownSelector.toggleClass(this.variables.activeClass);
			this.variables.buttonDropdownContent.toggleClass(this.variables.visibleClass);
// 			event.preventDefault();
		},

		smoothScroll: function() {
			$('a[href*="#"]:not([href="#"]):not([data-toggle="collapse"]').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
					scrollTop: target.offset().top
					}, 1000);
					return false;
				}
				}
			});
		},

        indicatorSlideshow: function() {
            var visibleElement = $(".textTrigger").parent();
            
             $(visibleElement).on("inview", function(event, isInView) {
                 if (isInView) {
                    var currentSlide = $(event.currentTarget).data("slide");
                    var $indicator = $(".btn_carousel:nth-child(" + (parseInt(currentSlide) + 1)+")")
                    var $active = $('.btn_carousel.active');
                    var imageFeatures = $(".image-top"); 

                    $active.removeClass('active');
                    $indicator.addClass('active');
                 }
             });
        },

        slideshowImagePosition: function(currentSlide) {
            var visibleElement = $(".textTrigger").parent();

             $(visibleElement).on("inview", function(event, isInView) {
                 if (isInView) { 
                     var currentSlide = $(event.currentTarget).data("slide");
                     var imageFeatures = $(".image-top"); 

                      if (currentSlide === 1) {
                         imageFeatures.css({
                             "bottom": "-954" + "px"
                            });
                     }

                     if (currentSlide === 2) {
                         imageFeatures.css({
                             "bottom": "-632" + "px"
                            });
                     }

                     if (currentSlide === 3) {
                         imageFeatures.css({
                             "bottom": "-314" + "px"
                            });
                     }

                     if (currentSlide === 4) {
                         imageFeatures.css({
                             "bottom": "8" + "px"
                            });
                     }
                }
             });
        },

       slideshow : function () {
        this.indicatorSlideshow();
        this.slideshowImagePosition();
        
        var controller = new ScrollMagic.Controller();
        this.variables.$SlideshowTextTrigger.each(function() {
        
            var self = $(this);
            var imageFeatures = $(".image-top"); 

            var animateImage = new ScrollMagic.Scene ({
                triggerElement: this,
                offset: "100%",
                reverse: true,
                triggerHook: 1
            })
            .addTo(controller);
        });

        //set device image to fix a position
        var imagePin = new ScrollMagic.Scene ({
            triggerElement: "#imageTrigger", 
            duration: "300%",
            triggerHook: 0
        })
        .setPin("#imageTrigger")
        .setClassToggle(".indicators", "active") // add indicators to scene
        .addTo(controller);
       } 
		}
    defaultComponents.init();
});

	$(window).on('scroll.fadeOnce', function(event) {	
		var scrollTop = $(this).scrollTop();
		$('.revealOnScroll:not(.fade-in)').each(function(index, element) {
			var selectorOffset = $(element).offset();
			if (scrollTop + window.innerHeight - 100 > selectorOffset.top) {
				$(element).addClass("fade-in").velocity('transition.slideUpIn');
			}
		 });
	});	