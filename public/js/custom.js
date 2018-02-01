// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// by SatriaThemes
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

(function($) {

// start function mobile navigation
mobile_nav = function(){
    var mb;
    $('#menu-btn').on( "click", function() {
        var iteration = $(this).data('iteration') || 1;
        switch (iteration) {
            case 1:
                mb = 1;
				var h = $('#mainmenu').css("height");
				$('header').stop().animate({
					"height" : h
				}, 400);
                break;

            case 2:
                $('header').stop().animate({
					"height" : "80px"
				}, 400);
                mb = 0;
                break;
        }
        iteration++;
        if (iteration > 2) iteration = 1;
        $(this).data('iteration', iteration);
    });
}
// close function mobile navigation

// start function init
init = function() {
    // - - - - - - - - - -
    $('.fx .item').each(function() {
        $(this).find("img").css("width", "100%");
        $(this).find("img").css("height", "auto");
        $(this).find("img").on('load', function() {
            w = $(this).css("width");
            h = $(this).css("height");
            //nh = (h.substring(0, h.length - 2)/2)-48;
        }).each(function() {
            if (this.complete) $(this).load();
        });
    });
    // - - - - - - - - - -
    $('#gallery-isotope .item').each(function() {
        $(this).find(".overlay").fadeTo(1, 0);
        $(this).find("img").css("width", "100%");
        $(this).find("img").css("height", "auto");
        $(this).find("img").on('load', function() {
            w = $(this).css("width");
            h = $(this).css("height");
            $(this).parent().find(
                ".overlay").css("width", w);
            $(this).parent().find(
                ".overlay").css("height", h);
        }).each(function() {
            if (this.complete) $(this).load();
        });
    });
    // - - - - - - - - - -
    $("#gallery-isotope .item").on("mouseenter", function() {
        $(this).find(".overlay").stop().fadeTo(300,
            .5);
    }).on("mouseleave", function() {
        $(this).find(".overlay").stop().fadeTo(300,
            0);
    })
    // - - - - - - - - - -
    $('#gallery-isotope').isotope('reLayout');
    // - - - - - - - - - -
    $('.f_box').each(function() {
        $(this).find("img").on('load', function() {
            w = parseInt($(this).css(
                "width"));
            h = parseInt($(this).css(
                "height"));
            w_box = parseInt($(this).parent()
                .parent().css("width"));
            wx = w_box - w;
            f = $(this).parent().parent();
            t = $(this).parent().parent().find(
                ".text");
            t.css("margin-top", h / 2 - (t.height() /
                2));
            t.css("width", wx);
            if (f.hasClass("f_left")) {
                t.css("left", wx / 2 - (t.width() /
                    2));
            } else {
                t.css("right", wx / 2 - (t.width() /
                    2));
            }
        }).each(function() {
            if (this.complete) $(this).load();
        });
    });
    $('.custom-col-2').each(function() {
        $(this).find("img").css("width", "100%");
        $(this).find("img").css("height", "auto");
        $(this).find("img").fadeTo(0, .5);
        $(this).find("img").on('load', function() {
            w = $(this).css("width");
            h = $(this).css("height");
            $(this).parent().find(
                ".overlay").css("width", w);
            n = $(this).parent().find(
                ".centered");
            hn = (parseInt(h) - parseInt(n.css(
                'height'))) / 2;
            wn = (parseInt(w) - parseInt(n.css(
                'width')) / 2) / 2;
            n.css("top", hn);
            n.css("left", wn);
            //nh = (h.substring(0, h.length - 2)/2)-48;
        }).each(function() {
            if (this.complete) $(this).load();
        });
    });
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $('.event-list li').each(function() {
        $(this).find("img").on('load', function() {
            //$(this).fadeTo(100,.4);
            w = parseInt($(this).css(
                "width"));
            h = parseInt($(this).css(
                "height"));
            t = $(this).parent().parent().find(
                ".text");
            s = $(this).parent().parent().find(
                ".date");
            t.css("margin-top", h / 2 - (t.height() /
                2));
            s.css("margin-top", h / 2 - (s.height() /
                2));
            s.css("margin-left", w / 2 - (s.width() /
                2));
        }).each(function() {
            if (this.complete) $(this).load();
        });
    });
    $(".event-list li").hover(function() {
        $(this).find("img").stop(true).fadeTo(200,
            1);
        $(this).find(".date").stop(true).fadeTo(
            200, 0);
    }, function() {
        //$(this).find("img").stop(true).fadeTo(200,.4);
        $(this).find(".date").stop(true).fadeTo(
            200, 1);
    })
}
// close function init

// start function anim
anim = function() {
    $('.animated').each(function() {
        var imagePos = $(this).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 500) {
            $(this).fadeTo(1, 500);
            var $anim = $(this).attr('data-animation')
            $(this).addClass($anim);
        }
    });
}
// close function anim

$(function() {
	'use strict'; // use strict mode

	// hide preloader
    $('#preloader').delay(500).fadeOut(500);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data : {
            "_token" : $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#defaultCountdown').countdown({
        until: new Date(2019, 8-1, 10, 8) // year, month, date, hour
    });

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // touch and swipe owl carousel
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $("#testi-carousel").owlCarousel({
        singleItem: true,
        lazyLoad: true,
        navigation: false
    });
    $(".custom-carousel-1").owlCarousel({
        items: 3,
        navigation: false,
        pagination: false,
    });
    $(".custom-carousel-2").owlCarousel({
        items: 3,
        navigation: false,
        pagination: false,
    });
	// wow $
	new WOW().init();
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // fit video
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $(".container").fitVids();
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // filtering gallery
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    var $container = $('#gallery-isotope');
    $container.isotope({
        itemSelector: '.item',
        filter: '*',
    });
    $('#filters a').click(function() {
        var $this = $(this);
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents();
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
        });
        return false;
    });
    $('.animated').fadeTo(0, 0);

    anim();
    // - - - - - - - - - -
    function equalHeight(group) {
        var tallest = 0;
        group.each(function() {
            var thisHeight = $(this).parent().height();
            if (thisHeight > tallest) {
                tallest = thisHeight;
            }
        });
        group.height(tallest);
    }

	// equal height
	equalHeight($(".item-blog"));

    $('.small-pic').each(function() {
        var w = $(this).parent().css("width");
        var wd = (parseInt(w) - 40) / 4;
        $(this).css("width", wd);
        $(this).css("height", wd);
    });
    $('.wide-pic').each(function() {
        var w = $(this).parent().css("width");
        var wd = (parseInt(w) - 40) / 2;
        $(this).css("width", wd + 10);
        $(this).css("height", wd / 2);
    });
    $('.long-pic').each(function() {
        var w = $(this).parent().css("width");
        var wd = (parseInt(w) - 40) / 4;
        $(this).css("width", wd);
        $(this).css("height", wd * 2 + 10);
    });


    init();
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // paralax background
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    var $window = $(window);
    $('section[data-type="background"]').each(function() {
        var $bgobj = $(this); // assigning the object
        $(window).scroll(function() {
            anim();
            var yPos = -($window.scrollTop() / $bgobj.data(
                'speed'));
            var coords = '50% ' + yPos + 'px';
            $bgobj.css({
                backgroundPosition: coords
            });
        });
    });
    document.createElement("article");
    document.createElement("section");
    // --------------------------------------------------
    // portfolio hover
    // --------------------------------------------------
    $(".fx .desc").fadeTo(0, 0);
    $(".fx .item").on("mouseenter", function() {
            var speed = 700;
            $(this).find(".desc").stop(true).animate({
                'height': "120px",
                'margin-top': "20px",
                "opacity": "100"
            }, speed, 'easeOutCubic');
            $(this).find(".overlay").stop(true).animate({
                'height': "100%",
                'margin-top': "20px"
            }, speed, 'easeOutCubic');
            $(this).parent().parent().find(".item").not(this).stop(
                true).fadeTo(speed, .5);
        }).on("mouseleave", function() {
			var speed = 700;
            $(this).find(".desc").stop(true).animate({
                'height': "0px",
                'margin-top': "0px",
                "opacity": "0"
            }, speed, 'easeOutCubic');
            $(this).find(".overlay").stop(true).animate({
                'height': "84px",
                'margin-top': "20px"
            }, speed, 'easeOutCubic');
            $(this).parent().parent().find(".item").not(this).stop(
                true).fadeTo(speed, 1);
        })
        // --------------------------------------------------
        // revolution slider
        // --------------------------------------------------
    var revapi;
    revapi = $('#revolution-slider').revolution({
        delay: 15000,
        startwidth: 1170,
        startheight: 500,
        hideThumbs: 10,
        fullWidth: "off",
        fullScreen: "on",
        fullScreenOffsetContainer: "",
        touchenabled: "on",
        navigationType: "none",
    });
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // prettyPhoto function
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $("area[data-gal^='prettyPhoto']").prettyPhoto();
    $("body:first a[data-gal^='prettyPhoto']").prettyPhoto({
        animation_speed: 'fast',
        theme: 'light_square',
        slideshow: 3000,
        autoplay_slideshow: false
    });
    $("body:gt(0) a[data-gal^='prettyPhoto']").prettyPhoto({
        animation_speed: 'fast',
        slideshow: 10000,
        hideflash: true
    });
    $("#custom_content a[data-gal^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function() {
            initialize();
        }
    });
    $("#custom_content a[data-gal^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function() {
            _bsap.exec();
        }
    });
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // scroll to top
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $().UItoTop({
        easingType: 'easeInOutExpo'
    });
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // gallery hover
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $('.gallery .item').hover(function() {
        $(this).stop().animate({
            opacity: .5
        }, 100);
    }, function() {
        $(this).stop().animate({
            opacity: 1
        });
    }, 100);
    $('.img-hover').hover(function() {
        $(this).stop().animate({
            opacity: .5
        }, 100);
    }, function() {
        $(this).stop().animate({
            opacity: 1
        });
    }, 100);

	/* --------------------------------------------------
	 * plugin | magnificPopup
	 * --------------------------------------------------*/
	function load_magnificPopup() {
		$('.simple-ajax-popup-align-top').magnificPopup({
			type: 'ajax',
			alignTop: true,
			overflowY: 'scroll'
		});
		$('.simple-ajax-popup').magnificPopup({
			type: 'ajax'
		});
		// zoom gallery
		$('.zoom-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title');
					//return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
				}
			},
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
				opener: function(element) {
					return element.find('img');
				}
			}
		});
		// popup youtube, video, gmaps
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
		// image popup
		$('.image-popup').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			}
		});
		$('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			}
		});
		$('.image-popup-fit-width').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			image: {
				verticalFit: false
			}
		});
		$('.image-popup-no-margins').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			fixedContentPos: true,
			mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
			image: {
				verticalFit: true
			},
			zoom: {
				enabled: true,
				duration: 300 // don't foget to change the duration also in CSS
			}
		});
		$('.image-popup-gallery').magnificPopup({
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title');
					//return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
				}
			},
			gallery: {
				enabled: true
			}
		});
	}

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // resize
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    window.onresize = function(event) {
        init();
        equalHeight($(".item-blog"));

    };
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // show / hide slider navigation
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $('.callbacks_nav').hide();
    $('#slider').hover(function() {
        $('.callbacks_nav').stop().animate({
            opacity: 1
        }, 100);
    }, function() {
        $('.callbacks_nav').stop().animate({
            opacity: 0
        });
    }, 100);
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    // image hover effect
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    $(".pic-hover .hover").hide();
    $(".pic-hover").hover(function() {
        $(this).find(".hover").width($(this).find(
            "img").css("width"));
        $(this).find(".hover").height($(this).find(
            "img").css("height"));
        $(this).find(".hover").fadeTo(150, .9);
        picheight = $(this).find("img").css("height");
        newheight = (picheight.substring(0, picheight.length -
            2) / 2);
        //alert(newheight);
        $(this).find(".btn-view-details").css({
            'margin-top': newheight
        }, 'fast');
    }, function() {
        $(this).find(".hover").fadeTo(150, 0);
    })
    $(function() {
        // Slideshow 4
        $(".pic_slider").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append(
                    "<li>before event fired.</li>"
                );
            },
            after: function() {
                $('.events').append(
                    "<li>after event fired.</li>"
                );
            }
        });
    });
    // --------------------------------------------------
    // tabs
    // --------------------------------------------------
    $('.lt_tab').find('.lt_tab_content div').hide();
    $('.lt_tab').find('.lt_tab_content div:first').show();
    $('.lt_nav li').click(function() {
        $(this).parent().find('li span').removeClass(
            "active");
        $(this).find('span').addClass("active");
        $(this).parent().parent().find(
            '.lt_tab_content div').hide();
        var indexer = $(this).index(); //gets the current index of (this) which is #nav li
        $(this).parent().parent().find(
            '.lt_tab_content div:eq(' + indexer + ')').fadeIn(); //uses whatever index the link has to open the corresponding box
    });


	// lazyload
	var $header = $("header"),
        $clone = $header.before($header.clone().addClass("clone"));
    $(window).on("scroll", function() {
        var fromTop = $(window).scrollTop();
        $("body").toggleClass("down", (fromTop > 240));
        anim();
    });

	mobile_nav();

});

})($);