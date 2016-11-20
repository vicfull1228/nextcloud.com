$(window).load(function() {
    "use strict";
    var HeaderApp = {
        init: function() {

        //Fade In animation
        $(this.variables.navigationSelector).velocity("transition.fadeIn", 1000 );

        //Enquire.js This hides the list on hover in the mobile
        enquire.register("screen and (max-width: 992px,)", {
            match: _.bind(this.mobileEvent, this)
        });

        enquire.register("screen and (min-width: 993px)", {
            // Triggered when the media query transitions
            // from *unmatched* to *matched*
            match: _.bind(this.desktopDropdownEvent, this)
        });
    },

    variables : {
        toggleSelector: "#toggle",
        navigationSelector: "#nav",
        sectionsSelector: ".nav__sections",
        sectionsContainerSelector: ".nav__sections-wrapper",
        sectionSelector: ".nav__section",
        navBackgroundSelector: ".nav__bg",
        navBackgroundWrapper: ".nav__bg-wrapper",
        rightNavigationSelector: ".right-buttons",
        linksSelector: ".nav__links",
        logoSelector: ".logo",
        mobileClass: "mobile",
        activeClass: "active",
        scrolledClass:"scrolled",
        backgroundAnimationClass: "is-animatable",
        linksVisibleClass: "is-visible",
        mobileBackgroundSelector: ".mobile-bg",
        mobileMenuClass: "menu-open",
        showNavigationClass:"nav-down",
        hideNavigationClass: "nav-up"
    },

    toggleMobileMenu: function(event) {
        $(event.currentTarget).toggleClass(this.variables.activeClass);
        $(this.variables.mobileBackgroundSelector).toggleClass(this.variables.activeClass);
        $(this.variables.sectionsSelector).toggleClass(this.variables.activeClass);
        $(this.variables.rightNavigationSelector).toggleClass(this.variables.activeClass);
        $(this.variables.logoSelector).toggleClass(this.variables.mobileMenuClass);
    },

    showSubMenu: function() {
        $(this.variables.linksSelector).removeClass(this.variables.activeClass);
        $(this.variables.sectionsContainerSelector).removeClass(this.variables.mobileClass);
        $(this.variables.linksSelector, this).toggleClass(this.activeClass);
        $(this.variables.sectionsContainerSelector).toggleClass(this.variables.mobileClass);
    },

    mobileEvent: function() {
        _.bind(this.menuToggledAnimation, this);
        $(this.variables.navigationSelector).addClass(this.variables.mobileClass);
        $(this.variables.toggleSelector).click(_.bind(this.toggleMobileMenu, this));
        $(this.variables.sectionSelector).click(_.bind(this.showSubMenu, this));
    },

    setBackgroundDropdown: function(bg) {
        bg.addClass(this.variables.backgroundAnimationClass);
    },

    backgroundDropdown: function(event) {
        var bg = $(event.currentTarget).find(this.variables.navBackgroundSelector).first(),
            bgWrapper = $(event.currentTarget).find(this.variables.navBackgroundWrapper).first(),
            selectedDropdown = $(event.currentTarget).find(this.variables.linksSelector).first(),
            height = selectedDropdown.innerHeight(),
            width = selectedDropdown.innerWidth();
        
        //console.log(index);
        setTimeout(_.bind(this.setBackgroundDropdown, this, bg));
        bgWrapper.addClass(this.variables.linksVisibleClass);

        bg.css({
            "width": width + "px",
            "height": height + "px"
        });
    },

    desktopDropdownEvent: function() {
        $(this.variables.sectionSelector).on("mouseover", _.bind(this.backgroundDropdown, this));
        $(this.variables.sectionSelector).on("mouseleave", _.bind(this.arrowDropdown, this));
    },

    // To set the arrow above the drop down menu in the middle of the link text
    arrowDropdown: function(event) {
        var liWidth = $(event.currentTarget).width(), // The total length of the li content text + padding
            aWidth = $(event.currentTarget).find("a").first().width(),// The total length of the text
            half = liWidth - (aWidth / 2);

        $("#nav-bg").text(".nav__bg:before, .nav__bg:after { left: "+ half +"px}");
        var bg = $(event.currentTarget).find(this.variables.navBackgroundSelector).first();

        setTimeout(_.bind(function() {
            bg.removeClass(this.variables.backgroundAnimationClass);
        },this));

        var bgWrapper = $(event.currentTarget).find(this.variables.navBackgroundWrapper).first();
        bgWrapper.removeClass(this.variables.linksVisibleClass);
        $("#nav-bg").text();
    },

    //Listen to scroll to change header opacity class
    checkScroll: function() {
        var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;

        if (bodyScrollTop !== 0) {
            $(this.variables.navigationSelector).addClass(this.variables.scrolledClass);
            $(this.variables.logoSelector).addClass(this.variables.scrolledClass);
        }

        else {
            $(this.variables.navigationSelector).removeClass(this.variables.scrolledClass);
            $(this.variables.logoSelector).removeClass(this.variables.scrolledClass);
        }

        if ($(this.variables.navigationSelector).length > 0) {
            $(window).on("scroll load resize", _.bind(this.checkScroll, this)); 
        }
    },

    // Prevent scrolling if menu is opened
    blockScroll: function(e) {
    if(menuOpened) {
        e.preventDefault();
        e.stopPropagation();
        return false;
        }
    },


    //Bodymovin menu Animation
    menuToggledAnimation: function() {
        var menuAnimation,
            menuOpened = false,
            animContainer = document.querySelectorAll(".container button")[0],
            params = {
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
    },


    //Show Header when scroll in resolution lower then width 800px
    showHeaderOnScroll: function () {
        var didScroll = false;
        var lastScrollTop = 0;
        var delta = 100;
        var navbarHeight = $(this.variables.navigationSelector).outerHeight();

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
                $(this.variables.navigationSelector).removeClass(this.variables.showNavigationClass).addClass(this.variables.hideNavigationClass);
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $(this.variables.navigationSelector).removeClass(this.variables.hideNavigationClass).addClass(this.variables.showNavigationClass);
                }
            }

            lastScrollTop = st;
        }
    },
}
    HeaderApp.init();
});