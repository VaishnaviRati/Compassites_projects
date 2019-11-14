jQuery(function ($) {
    "use strict";
    /* page loader*/
    $(window).load(function () {
        // Animate loader off screen
        $(".loader").fadeOut("slow");
    });
    //scroll sections
    $(".navbar-nav a,.scroll").click(function (event) {
        var height = $("nav").height() - 25;

        if(typeof this.hash !=="undefined" && $(this.hash).length){
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top - height
			}, 1000);
			event.preventDefault();
		}

    });
    $(".menu-side-menu-container a").click(function (event) {
        var height = $("nav").height() - 25;

        if(typeof this.hash !=="undefined" && $(this.hash).length){
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top - height
			}, 1000);
			event.preventDefault();
		}

    });


    // full screen side nav
    $('.side-menu-button').on('click', function () {
        $('.sidenav').toggleClass("mySideBar");
        $(this).toggleClass("actives");
        $('.side-menu-button > i').toggleClass("fa-bars");
        $('.side-menu-button > i').toggleClass("fa-times");
    });
    $('.sidenav ul >li a').on('click', function () {
        $('.sidenav').removeClass("mySideBar");
        $('.side-menu-button').removeClass("actives");
        $('.side-menu-button > i').toggleClass("fa-bars");
        $('.side-menu-button > i').toggleClass("fa-times");
    });
    //scroll nav colors
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 70) { // Set position from top to add class
            $('.navbar').addClass("shrink");
            if($('.page-2 .navbar-brand').data('logo-scrolled')){
				$('.page-2 .navbar-brand> img').attr('src', $('.page-2 .navbar-brand').data('logo-scrolled'));

			}
        }
        else {
            $('.navbar').removeClass("shrink");
            if($('.page-2 .navbar-brand').data('logo')){
				$('.page-2 .navbar-brand> img').attr('src', $('.page-2 .navbar-brand').data('logo'));

			}
        }
    });

	//revoulution slider
    // $("#slider1").revolution({
    //     sliderType: "standard"
    //     , sliderLayout: "fullscreen"
    //     , delay: 9000
    //     , navigation: {
    //         arrows: {
    //             enable: true
    //         }
    //         , touch: {
    //             touchenabled: "on"
    //             , swipe_threshold: 75
    //             , swipe_min_touches: 1
    //             , swipe_direction: "horizontal"
    //             , drag_block_vertical: false
    //         }
    //     }
    //     ,responsiveLevels:[2048,1024,778,680]
    //     , gridwidth: 1170
    //     , gridheight: 720
    // });
    //what-we-do mobile slider

    $(window).load(function(){
		$("#mobile-slider").owlCarousel({
			slideSpeed: 300
			, singleItem: true
			, pagination: false
			, navigation: false, // Show next and prev buttons
			autoPlay: 3000
		});
		//slider for the blog
		$("#blog-slider").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items: 3
			, itemsDesktop: [1199, 3]
			, itemsDesktopSmall: [992, 2]
			, stopOnHover: true
		});
		//owl slider for portfolio section
		$("#owl-demo").owlCarousel({
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			items: 3
			, itemsDesktop: [1199, 3]
			, itemsDesktopSmall: [979, 3]
		});
		//blog text slider
		$("#blog-text-slider").owlCarousel({
			pagination: true
			, slideSpeed: 300
			, paginationSpeed: 400
			, singleItem: true
			, transitionStyle: "fade"
		});
		//Happy Client Slider
		$("#owl-slider").owlCarousel({
			pagination: true
			, slideSpeed: 300
			, paginationSpeed: 400
			, singleItem: true
			, transitionStyle: "fade"
		});
    });

    //wow .js
  if ($(window).width() > 767) {
        new WOW().init();
    }

    //parallax scroll effect
    var $window = $(window);
    $('div[data-type = "background"]').each(function () {
       var $bgobj = $(this);
        $window.scroll(function () {
            //scroll the background at var speed
            //the yPos is a negative value because we're scrolling it up!
            var yPos = - ($window.scrollTop()) / $bgobj.data('speed');
            // put together out final background position
            var coords = '50%' + yPos + 'px';
            // Move the background
            $bgobj.css({backgroundPosition: coords});
        });
    });
    //for our work numbers scroll
    function incrementalNumber() {
        var rt = {
            item: '.incrementalNumber'
            , value: 'data-value'
            , bigNumber: 'big-number'
            , setText: 'set-text'
            , setTime: 'set-time'
        };
        var numberTimers = [];
        var numberStarts = [];
        var autoincrementNumber = function (i, where, number) {
            var numberTime;
            var setTime = where.attr(rt.setTime);
            (setTime != "" && setTime !== undefined) ? numberTime = parseInt(setTime) / number : numberTime = 1000 / number;
            var bigNumber = where.attr(rt.bigNumber);
            (bigNumber != "" && bigNumber !== undefined) ? numberStarts[i] = parseInt(bigNumber) : (typeof bigNumber !== typeof undefined && bigNumber !== false) ? numberStarts[i] = Math.round(number - (number / 10)) : numberStarts[i] = 0;
            var setText = where.attr(rt.setText);
            numberTimers[i] = setInterval(function () {
                numberStarts[i]++;
                (numberStarts[i] <= number) ? where.html((setText !== undefined) ? numberStarts[i] + setText : numberStarts[i]) : clearInterval(numberTimers[i])
            }, numberTime);
        };
        $.each($(rt.item), function (index, value) {
            var data = $(this).attr(rt.value);
            autoincrementNumber(numberTimers.length, $(this), data);
        });
    }

    incrementalNumber();
    //fancy box for portfolio
    $(".fancy-box").fancybox({
        helpers: {
            title: {
                type: 'float'
            }
        }
    });


        //progress bar
        $(".progress-bar").each(function () {
            $(this).appear(function () {
                $(this).children().hide();
                $(this).animate({width: $(this).attr("aria-valuenow") + "%"},2000,function () {
                    $(this).children().fadeIn();
                })
            });
        });

    //Our team resposive tabs
    $('#responsiveTabsDemo').responsiveTabs({
        startCollapsed: 'tabs'
        , animation: 'fade'
    });
    if ($('#map').length) {
        //Contact Map
        var map;
        map = new GMaps({
            el: '#map'
            , lat: -12.043333
            , lng: -77.028333
            , scrollwheel: false
        });
        map.drawOverlay({
            lat: map.getCenter().lat()
            ,
            lng: map.getCenter().lng()
            ,
            layer: 'overlayLayer'
            ,
            content: '<div class="overlay_map"><div class="pin bounce"></div><div class="overlay_arrow above"></div></div>'
            ,
            verticalAlign: 'top'
            ,
            horizontalAlign: 'center'
        });
    }


    if ($(window).width() > 767) {

        $(".r-tabs-nav .r-tabs-tab:nth-of-type(-n+4)").addClass('tab-list-top');

        $(".r-tabs .r-tabs-nav .r-tabs-tab:nth-child(n+5)").click(function () {
            $(".r-tabs-nav .r-tabs-tab:nth-of-type(-n+4)").removeClass('tab-list-top');
            $(".r-tabs .r-tabs-nav .r-tabs-tab:nth-child(n+5)").addClass('tab-list-center');

        });

        $(".r-tabs-nav .r-tabs-tab:nth-of-type(-n+4)").click(function () {
            $(".r-tabs .r-tabs-nav .r-tabs-tab:nth-child(n+5)").removeClass('tab-list-center');
            $(".r-tabs-nav .r-tabs-tab:nth-of-type(-n+4)").addClass('tab-list-top');

        });

        $(".r-tabs .r-tabs-nav .r-tabs-tab:nth-child(n+9)").click(function () {
            $(".r-tabs-nav .r-tabs-tab:nth-of-type(-n+4)").removeClass('tab-list-top');
            $(".r-tabs .r-tabs-nav .r-tabs-tab:nth-child(n+5)").removeClass('tab-list-center');

        });
    }
    

});