$(window).load(function() {
  "use strict";
  return {
    init: function() {
      
      //Enquire.js This hides the list on hover in the mobile
      enquire.register("screen and (max-width: 992px,)", {
        match: _.bind(this.showListMobile, this)
      });

      enquire.register("screen and (min-width: 993px)", {
        // Triggered when the media query transitions
        // from *unmatched* to *matched*
        match: _.bind_(this.desktopDropdown, this)                                        
      });
    },

    variables : {
        toggleSelector: "#toggle",
        navigationSelector: "#nav",
        sectionsSelector: ".nav__sections",
        rightNavigationSelector: ".right-buttons",
        logoSelector: ".logo",
        mobileClass: "mobile",
        activeClass: "active",
        mobileBackgroundSelector: ".mobile-bg"
    	}, 

      showListMobile: function() {
          $(this.variables.navigationSelector).addClass(this.variables.mobileClass);

          /** 
          * Mobile fullscreen trigger
          */
          $(this.variables.toggleSelector).click(function(index, element) {
              $(this).toggleClass(this.variables.activeClass);
              $(this.variables.mobileBackgroundSelector).toggleClass(this.variables.activeClass);
              $(this.variables.sectionsSelector).toggleClass(this.variables.activeClass);
              $(this.variables.rightNavigationSelector).toggleClass(this.variables.activeClass);
              $(this.variables.logoSelector).toggleClass("menu-open");           
          });

          $(".nav__section").click(function() {
              $(".nav__links").removeClass(this.variables.activeClass);
              $(".nav__sections-wrapper").removeClass("mobile-active");
              $(".nav__links", this).toggleClass(this.activeClass);
              $(".nav__sections-wrapper").toggleClass("mobile-active");
          });
      },

      desktopDropdown: function() {

          $(".nav__section").on("mouseover", function (event) { 
            
      	var bg = $(this).find(".nav__bg").first();        
              setTimeout(function() {
                  bg.addClass("is-animatable");
              });	
      	
      	var bgWrapper = $(this).find(".nav__bg-wrapper").first(); 
      	var menu = $(this).find(".nav__links").first();

      	bgWrapper.addClass("is-visible");
      	
      	var selectedDropdown = menu,
      	    height = selectedDropdown.innerHeight(),
      	    width = selectedDropdown.innerWidth(),
      	    liWidth = $(this).width(), // The total length of the li content text + padding
      	    aWidth =  $(this).find("a").first().width(), // The total length of the text
      	    half = liWidth - (aWidth/2);	

      	bg.css({
      	    "width": width +"px",
      	    "height": height +"px"
      	});
      	
      	// To set the arrow above the drop down menu in the middle of the link text
      	$("#nav-bg").text(".nav__bg:before, .nav__bg:after { left: "+ half +"px}");
          });
          
          $(".nav__section").on("mouseleave", function () {
      	var bg = $(this).find(".nav__bg").first();        
              setTimeout(function() {
                  bg.removeClass("is-animatable");
              });	
      	
      	var bgWrapper = $(this).find(".nav__bg-wrapper").first();   
      	bgWrapper.removeClass("is-visible");
      	$("#nav-bg").text();
          });
      };
      
      /**
      * Listen to scroll to change header opacity class
      */
      function checkScroll() {      
        var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (bodyScrollTop !== 0) {
  	    $(".nav").addClass("scrolled");
          $(".logo").addClass("scrolled");
  	} else {
  	    $(".nav").removeClass("scrolled");
          $(".logo").removeClass("scrolled");
  	}
      }

      if ($(".nav").length > 0) {
          $(window).on("scroll load resize", function () {
              checkScroll();
          });
      }

    //Bodymovin menu Animation

      var menuAnimation;
      var menuOpened = false;
      
      // Prevent scrolling if menu is opened
      $("html").on("scroll touchmove mousewheel", function(e) {
          if(menuOpened) {
              e.preventDefault();
              e.stopPropagation();
              return false;
          }
      });

      var animContainer = document.querySelectorAll(".container button")[0];
      var params = {
          container: animContainer,
          renderer: "svg",
          loop: false,
          autoplay: false,
          autoloadSegments: true,
          path: templateUrl + "/assets/img/menu/data.json"
      };
      menuAnimation = bodymovin.loadAnimation(params);
      menuAnimation.stop();

      $(".container button").click(function () {
          if(menuOpened) {
              menuAnimation.setDirection(-1);
          } else {
              menuAnimation.setDirection(0);
          }
          menuAnimation.play();
          menuOpened = !menuOpened;
      });

      /**
      * Show Header when scroll in resolution lower then width 800px
      */
      var didScroll;
      var lastScrollTop = 0;
      var delta = 100;
      var navbarHeight = $("#nav").outerHeight();

       $(window).scroll(function(event){
           didScroll = true;
       });

       setInterval(function() {
           if (didScroll) {
               hasScrolled();
               didScroll = false;
           }
       }, 250);

       function hasScrolled() {
           var st = $(this).scrollTop();
          
           // Make sure they scroll more than delta
           if(Math.abs(lastScrollTop - st) <= delta)
               return;
          
           // If they scrolled down and are past the navbar, add class .nav-up.
           // This is necessary so you never see what is "behind" the navbar.
           if (st > lastScrollTop && st > navbarHeight){
               // Scroll Down
               $("#nav").removeClass("nav-down").addClass("nav-up");
           } else {
               // Scroll Up
               if(st + $(window).height() < $(document).height()) {
                   $("#nav").removeClass("nav-up").addClass("nav-down");
               }
           }
          
           lastScrollTop = st;
       }

      // Fade In animation 
      $("#nav").velocity("transition.fadeIn", 1000 );
    };
  }
  init();
});