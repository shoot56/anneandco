(function($){
	$(document).ready(function(){
		fixHeaderInit();
		toUpInit();
		typeWritterInit();
		$(window).scroll(function(){
			fixHeaderInit();
			toUpInit();
		});

		// if ($('.process-svg').length) {
		// 	var processAnimateSvgStatus = true;
		// 	$(window).scroll(function(){
		// 		var wS = $(window).scrollTop();
		// 		var sectionTop = $('.service-how-section').offset().top;
		// 		var vH = $(window).height();
		// 		var sectionHeight = $('.service-how-section').height();
		// 		if ( (wS >= sectionTop - vH) && (wS <= sectionTop + sectionHeight) ){
		// 			if (processAnimateSvgStatus) {
		// 				processAnimateSvg();
		// 				processAnimateSvgStatus = false;
		// 			}
		// 		}
		// 	});
		// }
		processAnimateSvg();

		$(".nav-opener").click(function(e) {
			e.preventDefault();
			$('body').toggleClass('nav-active');
		});
		
		$('.logo-slider').owlCarousel({
			loop:true,
			margin:64,
			nav:false,
			autoplay: true,
			autoplayTimeout: 5000,
			responsive:{
				0:{
					items:2,
					margin:12,
				},
				576:{
					items:3,
					margin:16,
				},
				768:{
					items:4,
					margin:64,
				},
				1000:{
					items:5,
					margin:64,
				}
			}
		});

		$('.work-list-related').owlCarousel({
			loop:true,
			margin:24,
			nav:true,
			responsive:{
				0:{
					margin:16,
					items:1
				},
				576:{
					margin:16,
					items:2
				},
				768:{
					margin:24,
					items:3
				}
			}
		});


		$('.testimonial-slider').owlCarousel({
			loop:true,
			items:1,
			nav:true,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout: 5000,
		});

		$('.reviews-slider').owlCarousel({
			loop:true,
			items:1,
			nav:true,
			lazyLoad:true,
			autoHeight: false,
			animateOut: 'fadeOut',
			autoplay: true,
			autoplayTimeout: 4000,
		});

		var offerTablsSlider = $('.offer-tabs__slider');
		offerTablsSlider.owlCarousel({
			loop:true,
			items:1,
			nav:false,
			autoHeight: false,
			animateOut: 'fadeOut',
			// animateIn: 'fadeIn',
			mouseDrag: false,
			touchDrag: false,
			autoplay: true,
			autoplayTimeout: 7000,
		});
		offerTablsSlider.on('changed.owl.carousel', function(event) {
			$('.offer-tabs__control-item').removeClass('active');
			$('.offer-tabs__control-item[data-slide="'+event.page.index+'"]').addClass('active');
		})
		$('.offer-tabs__control-item').on('click', function(event) {
			event.preventDefault();
			var slideEq = $(this).data('slide');
			offerTablsSlider.trigger('to.owl.carousel', [slideEq]);
		});
		


		// pricing modal form
		Fancybox.bind("[data-fancybox]", {
			on: {
				done: (fancybox, slide) => {
					$('[name="pricing-plan"]').val(slide.pricingPlan);
				},
				closing: (event, fancybox, slide) => {
					
				},
			},
		});
		
		

		function processCarousel() {
			var checkWidth = $(window).width();
			var owlPost = $(".process-slider");
			if (window.matchMedia("(min-width: 576px)").matches) {
				if (typeof owlPost.data('owl.carousel') != 'undefined') {
					owlPost.data('owl.carousel').destroy();
				}
				owlPost.removeClass('owl-carousel');
			} else if (window.matchMedia("(max-width: 575px)").matches) {
				owlPost.addClass('owl-carousel');
				owlPost.owlCarousel({
					autoWidth: true,
					margin: 24,
					nav:false,
					autoplay:false,
					autoplayTimeout:4000,
					loop: false
				});
				if (owlPost.length) {
					$(window).scroll(function(){
						var wS = $(window).scrollTop();
						var sectionTop = $('.process-section').offset().top;
						var vH = $(window).height();


						if ( wS > sectionTop - vH/2){
							owlPost.trigger('play.owl.autoplay',[4000]);
						}
					});
				}
			}
		}

		processCarousel();
		$(window).resize(processCarousel);


		function lastPostCarousel() {
			let checkWidth = $(window).width();
			let owlPost = $(".last-blog-section__content");
			if (window.matchMedia("(min-width: 576px)").matches) {
				if (typeof owlPost.data('owl.carousel') != 'undefined') {
					owlPost.data('owl.carousel').destroy();
				}
				owlPost.removeClass('owl-carousel');
			} else if (window.matchMedia("(max-width: 575px)").matches) {
				owlPost.addClass('owl-carousel');
				owlPost.owlCarousel({
					// autoWidth: true,
					loop:true,
					items:1,
					margin: 24,
					nav:true,
					autoplay:false,
					autoplayTimeout:4000,
					loop: false
				});
				// if (owlPost.length) {
				// 	$(window).scroll(function(){
				// 		let wS = $(window).scrollTop();
				// 		let sectionTop = $('.process-section').offset().top;
				// 		let vH = $(window).height();


				// 		if ( wS > sectionTop - vH/2){
				// 			owlPost.trigger('play.owl.autoplay',[4000]);
				// 		}
				// 	});
				// }
			}
		}

		lastPostCarousel();
		$(window).resize(lastPostCarousel);


		$('.full-slider').owlCarousel({
			loop:true,
			items:1,
			nav:true,
			autoplay: true,
			autoplayTimeout: 6000,
			smartSpeed: 500
		});

		$(".tabset__opener").click(function(e) {
			e.preventDefault();
			$(this).closest('.tabset__switcher').toggleClass('active');
		});
		$(document).click(function(event) {
			if ($(event.target).closest('.tabset__switcher').length) return;
			$('.tabset__switcher').removeClass('active');
			event.stopPropagation();
		});

		$('.accordion__heading').click(function(e){
			var item=$(this).closest('.accordion__item');
			if(item.hasClass('active')){
				item.find('.accordion__expanded').slideToggle(function(){
					item.toggleClass('active');
				});
			}else{
				item.parent().find('.accordion__item.active .accordion__expanded').slideToggle(function(){
					$(this).parent().toggleClass('active');
				});
				item.find('.accordion__expanded').slideToggle(function(){
					item.toggleClass('active');
				});
			}
			e.preventDefault();
		});




		$('.tab-opener').click(function(event){
			$(".tabset__opener").text($(this).text());
			$('.tabset__switcher').removeClass('active');
			event.preventDefault();
			if (!$(this).hasClass('active')){
				var aim = $(this).parents('.tab-control').find('.tab-opener').removeClass('active').index(this);
				$(this).addClass('active');
				$(this).parents('.tabset').find('.tab-item').removeClass('active').eq(aim).addClass('active');
				$(this).parents('.tabset').find('.tab-item').eq(aim).find('.select-all').trigger('click');
			}
		});
		if ($('.gsap-sections').length) {
			initArticleSticky();
		}

		document.addEventListener( 'wpcf7mailsent', function( event ) {
			if ( '131' == event.detail.contactFormId ) {
				var $form = $('#' + event.detail.unitTag);
				$('.contact-form-wrap').addClass('form-sent');
				$form.find('.wpcf7-response-output').hide();
				$form.append('<span class="form-sended"><span class="form-sended__wrap"><span class="form-sended__visual"><svg width="64" height="38" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.066 2.467c0-1.178.956-2.133 2.134-2.133h42.666C63.044.334 64 1.289 64 2.467v16a2.133 2.133 0 1 1-4.267 0V4.601h-38.4v27.733h19.2a2.133 2.133 0 1 1 0 4.266H19.2a2.133 2.133 0 0 1-2.134-2.133v-32ZM63.2 23.201c.92.736 1.07 2.078.333 2.998L55 36.867A2.133 2.133 0 0 1 52 37.2l-5.333-4.266a2.133 2.133 0 1 1 2.665-3.332l3.668 2.934 7.2-9A2.133 2.133 0 0 1 63.2 23.2ZM12.8 6.734H7.604c-1.394 0-2.535 1.152-2.535 2.56 0 1.408 1.14 2.56 2.535 2.56h5.07v-3.84c0-.32.04-.625.082-.937l.044-.343Zm0 25.6-.044-.342a6.97 6.97 0 0 1-.083-.938v-3.84H2.535c-1.4 0-2.535 1.152-2.535 2.56 0 1.408 1.136 2.56 2.535 2.56H12.8Zm-10.265-12.8c0-1.408 1.14-2.56 2.534-2.56h7.604v5.12H5.07c-1.394 0-2.534-1.152-2.534-2.56Z" fill="#215FE5"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.493 1.187A2.133 2.133 0 0 1 20.48.761L40.533 15.8 60.586.76a2.133 2.133 0 1 1 2.56 3.413l-21.333 16a2.133 2.133 0 0 1-2.56 0l-21.333-16a2.133 2.133 0 0 1-.427-2.987Z" fill="#215FE5"/></svg></span><span class="form-sended__title">Success!</span><span class="form-sended__text">Thank you for your message. We will be in contact very soon.</span></span></span>');
				
			} 
			if ( '1635' == event.detail.contactFormId ) {
				var $form = $('#' + event.detail.unitTag);
				$form.find('.wpcf7-response-output').hide();
				$form.append('<span class="form-sended"><span class="form-sended__wrap"><span class="form-sended__visual"><svg width="64" height="38" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.066 2.467c0-1.178.956-2.133 2.134-2.133h42.666C63.044.334 64 1.289 64 2.467v16a2.133 2.133 0 1 1-4.267 0V4.601h-38.4v27.733h19.2a2.133 2.133 0 1 1 0 4.266H19.2a2.133 2.133 0 0 1-2.134-2.133v-32ZM63.2 23.201c.92.736 1.07 2.078.333 2.998L55 36.867A2.133 2.133 0 0 1 52 37.2l-5.333-4.266a2.133 2.133 0 1 1 2.665-3.332l3.668 2.934 7.2-9A2.133 2.133 0 0 1 63.2 23.2ZM12.8 6.734H7.604c-1.394 0-2.535 1.152-2.535 2.56 0 1.408 1.14 2.56 2.535 2.56h5.07v-3.84c0-.32.04-.625.082-.937l.044-.343Zm0 25.6-.044-.342a6.97 6.97 0 0 1-.083-.938v-3.84H2.535c-1.4 0-2.535 1.152-2.535 2.56 0 1.408 1.136 2.56 2.535 2.56H12.8Zm-10.265-12.8c0-1.408 1.14-2.56 2.534-2.56h7.604v5.12H5.07c-1.394 0-2.534-1.152-2.534-2.56Z" fill="#215FE5"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.493 1.187A2.133 2.133 0 0 1 20.48.761L40.533 15.8 60.586.76a2.133 2.133 0 1 1 2.56 3.413l-21.333 16a2.133 2.133 0 0 1-2.56 0l-21.333-16a2.133 2.133 0 0 1-.427-2.987Z" fill="#215FE5"/></svg></span><span class="form-sended__title">Success!</span><span class="form-sended__text">Thank you for your message. We will be in contact very soon.</span></span></span>');
				
			} 
			if ( '11' == event.detail.contactFormId ) {
				var $form = $('#' + event.detail.unitTag);
				// $('.contact-form-wrap').addClass('form-sent');
				$form.find('.wpcf7-response-output').hide();
				$form.append('<span class="subsctibe-form-sended"><span class="subsctibe-form-sended__visual"><svg width="64" height="38" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17.066 2.467c0-1.178.956-2.133 2.134-2.133h42.666C63.044.334 64 1.289 64 2.467v16a2.133 2.133 0 1 1-4.267 0V4.601h-38.4v27.733h19.2a2.133 2.133 0 1 1 0 4.266H19.2a2.133 2.133 0 0 1-2.134-2.133v-32ZM63.2 23.201c.92.736 1.07 2.078.333 2.998L55 36.867A2.133 2.133 0 0 1 52 37.2l-5.333-4.266a2.133 2.133 0 1 1 2.665-3.332l3.668 2.934 7.2-9A2.133 2.133 0 0 1 63.2 23.2ZM12.8 6.734H7.604c-1.394 0-2.535 1.152-2.535 2.56 0 1.408 1.14 2.56 2.535 2.56h5.07v-3.84c0-.32.04-.625.082-.937l.044-.343Zm0 25.6-.044-.342a6.97 6.97 0 0 1-.083-.938v-3.84H2.535c-1.4 0-2.535 1.152-2.535 2.56 0 1.408 1.136 2.56 2.535 2.56H12.8Zm-10.265-12.8c0-1.408 1.14-2.56 2.534-2.56h7.604v5.12H5.07c-1.394 0-2.534-1.152-2.534-2.56Z" fill="#215FE5"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.493 1.187A2.133 2.133 0 0 1 20.48.761L40.533 15.8 60.586.76a2.133 2.133 0 1 1 2.56 3.413l-21.333 16a2.133 2.133 0 0 1-2.56 0l-21.333-16a2.133 2.133 0 0 1-.427-2.987Z" fill="#215FE5"/></svg></span><span class="subsctibe-form-sended__wrap"><span class="subsctibe-form-sended__title">Thanks for subscribing!</span><span class="subsctibe-form-sended__text">Watch out for future updates.</span></span></span>');
				
			}
			if ( '1283' == event.detail.contactFormId ) {
				var $form = $('#' + event.detail.unitTag);
				location = '/surprise-success/';
			}
		}, false );

		if ($('.category-seo').length) {
			if (window.matchMedia("(max-width: 576px)").matches) {
				seotext();
			}
		}

	});
	// end document.ready




	function fixHeaderInit() {
		var wS = $(window).scrollTop();
		if (wS>160){
			$('.site-header--stick').addClass('fixed');
		} else {
			$('.site-header--stick').removeClass('fixed');
		}
	}

	function initArticleSticky() {
		var sections = [];
		$('.gsap-sections__image').each(function() {
			sections.push($(this).attr('data-id'));
		});
		var lastScrollTop = 0;
		$(window).on('load resize scroll', function() {
			var activeId = 0;
			var windowScrollTop = $(this).scrollTop();
			if (windowScrollTop > lastScrollTop){
				$('body').addClass('scroll-top').removeClass('scroll-bottom');
			} else {
				$('body').addClass('scroll-bottom').removeClass('scroll-top');
			}
			lastScrollTop = windowScrollTop;
			for(var i = sections.length; i >= 0; i--){
				var $section = $('[data-anchor-id="' + sections[i] + '"]');
				if($section.length){
					var sectionHeightSemi = $section.innerHeight()/2;
					if($(window).scrollTop() + $('.site-header--stick').innerHeight() + 35 + sectionHeightSemi > $section.offset().top){
						activeId = sections[i];
						break;
					}
				}
			}
			if(!$('.gsap-sections__image[data-id="' + activeId + '"]').hasClass('active')){
				$('.gsap-sections__image').removeClass('active');
				$('.gsap-sections__image[data-id="' + activeId + '"]').addClass('active');
			}

			// add
			var sectionTop = $('.gsap-sections').offset().top;
			var vH = $(window).height();
			var sectionHeight = $('.gsap-sections').height();
			var indent = $('.site-header--stick').innerHeight();
			if ( (windowScrollTop >= sectionTop - indent) && (windowScrollTop <= sectionTop + sectionHeight - vH) ){
				// magic
				var result = windowScrollTop + indent - sectionTop;
				var progressValue = Math.round(((result )/(sectionHeight - indent - vH))*100);
				$(".gsap-sections__progress").css({
					"width": progressValue + "%"
				});

			} else {
				$(".gsap-sections__progress").css({
					"width": 0 + "%"
				});
			}
		});

	}
	function typeWritterInit() {
		var words = $('#index-head-title-dynamic').data('words');
		if (words) {
			var wordsArray = words.split(';');
			var app = document.getElementById('index-head-title-dynamic');
			if (app) {
				var typewriter = new Typewriter(app, {
					loop: true,
					delay: 75,
					strings: wordsArray,
					autoStart: true
				});
			}
		}
		var servicesWords = $('#services-head-title-dynamic').data('words');
		if (servicesWords) {
			var wordsArray = servicesWords.split(';');
			var app = document.getElementById('services-head-title-dynamic');
			if (app) {
				var typewriter = new Typewriter(app, {
					loop: true,
					delay: 75,
					strings: wordsArray,
					autoStart: true
				});
			}
		}
	}

	$('.jump-to').on('click', function(event) {
		event.preventDefault();
		var target = $(this).data('target');
		var indent = $('.site-header--stick').height();
		$.scrollTo(target, -indent);
	});
	$('.to-up').click(function(e){
		$('body,html').animate({'scrollTop':0}, 500);
		e.preventDefault();
	});
	function toUpInit() {
		var wS = $(window).scrollTop();
		if (wS>600){
			$('.to-up').addClass('active');
		} else {
			$('.to-up').removeClass('active');
		}
	}


	function processAnimateSvg() {
		if ($('.process-svg').length) {
			var counter = 0;
			var delay = 7000;
			var $svgItem = $('.process-svg .group');
			var $stepItem = $('.process-steps__item');
			var interval;
			var totalItems = $stepItem.length;

			var processAnimateSvgStatus = true;
			$(window).scroll(function(){
				var wS = $(window).scrollTop();
				var sectionTop = $('.service-how-section').offset().top;
				var vH = $(window).height();
				var sectionHeight = $('.service-how-section').height();
				if ( (wS >= sectionTop - vH) && (wS <= sectionTop + sectionHeight) ){
					if (processAnimateSvgStatus) {
						doStuff();
						interval = setInterval(doStuff, delay);
						processAnimateSvgStatus = false;
					}
				} else {
					processAnimateSvgStatus = true;
					clearInterval(interval);
				}
			});


			function doStuff() {
				$svgItem.removeClass('active');
				$('.process-svg .group[data-eid="'+counter+'"]').addClass('active');

				$stepItem.removeClass('active');
				$stepItem.find('.process-steps__text').slideUp(300);

				$stepItem.eq(counter).addClass('active');
				$stepItem.eq(counter).find('.process-steps__text').slideDown(300);
				animate();
				
				var animated = false;

				function animate() {
					$('.process-steps__item.active .process-steps__progress').animate({
						width: '100%',
					}, delay - 100);

					$('.process-steps__progress').css("width", "");
					animated = true;
				}
				$('.process-steps__progress').css('width', 0);

				counter = counter+1;
				if (counter >= totalItems) {
					counter = 0;
					// clearInterval(interval);
				}

			}
			document.addEventListener('visibilitychange', function() {
				if(document.hidden) {
					clearInterval(interval);
				}
				else {
					doStuff();
					interval = setInterval(doStuff, delay);
				}
			});
			// on click
			$('.process-steps__item').on('click', function(event) {
				clearInterval(interval);
				var _eq = $(this).index();
				$('.process-steps__item.active .process-steps__progress').stop();
				$('.process-steps__progress').css("width", "");

				$svgItem.removeClass('active');
				$svgItem.eq(_eq).addClass('active');

				var item=$(this);
				$('.process-steps__text').stop().slideUp(function(){
					$(this).closest('.process-steps__item').removeClass('active');
				});
				item.find('.process-steps__text').slideToggle(function(){
					item.toggleClass('active');
				});
				
			});

		}
	}
	

	jQuery.scrollTo = function (target, offset, speed, container) {
		if (isNaN(target)) {
			if (!(target instanceof jQuery))
				target = $(target);
			target = parseInt(target.offset().top);
		}
		container = container || "html, body";
		if (!(container instanceof jQuery))
			container = $(container);
		speed = speed || 500;
		offset = offset || 0;
		container.animate({
			scrollTop: target + offset
		}, speed);
	};


	if ($('.acf-map').length) {
		function initMap( $el ) {

		    // Find marker elements within map.
		    var $markers = $el.find('.marker');

		    // Create gerenic map.
		    var mapArgs = {
		        zoom        : $el.data('zoom') || 16,
		        mapTypeId   : google.maps.MapTypeId.ROADMAP
		    };
		    var map = new google.maps.Map( $el[0], mapArgs );

		    // Add markers.
		    map.markers = [];
		    $markers.each(function(){
		        initMarker( $(this), map );
		    });

		    // Center map based on markers.
		    centerMap( map );

		    // Return map instance.
		    return map;
		}

		function initMarker( $marker, map ) {

		    // Get position from marker.
		    var lat = $marker.data('lat');
		    var lng = $marker.data('lng');
		    var latLng = {
		        lat: parseFloat( lat ),
		        lng: parseFloat( lng )
		    };

		    // Create marker instance.
		    var marker = new google.maps.Marker({
		        position : latLng,
		        map: map
		    });

		    // Append to reference for later use.
		    map.markers.push( marker );

		    // If marker contains HTML, add it to an infoWindow.
		    if( $marker.html() ){

		        // Create info window.
		        var infowindow = new google.maps.InfoWindow({
		            content: $marker.html()
		        });

		        // Show info window when marker is clicked.
		        google.maps.event.addListener(marker, 'click', function() {
		            infowindow.open( map, marker );
		        });
		    }
		}

		function centerMap( map ) {

		    // Create map boundaries from all map markers.
		    var bounds = new google.maps.LatLngBounds();
		    map.markers.forEach(function( marker ){
		        bounds.extend({
		            lat: marker.position.lat(),
		            lng: marker.position.lng()
		        });
		    });

		    // Case: Single marker.
		    if( map.markers.length == 1 ){
		        map.setCenter( bounds.getCenter() );

		    // Case: Multiple markers.
		    } else{
		        map.fitBounds( bounds );
		    }
		}

		// Render maps on page load.
		$(document).ready(function(){
		    $('.acf-map').each(function(){
		        var map = initMap( $(this) );
		    });
		});
	}


	function seotext() {
		$('.category-seo').not('[data-init="true"]').each(function(){
			var $this = $(this);
			var $container = $('.category-seo__wrap', $this);
			var name_show = $this.attr('data-name-show');
			var name_hide = $this.attr('data-name-hide');

			if($container.height() >= $this.height())
			{
				var $action = $(
					'<div class="category-seo__action">' +
					'<a href="#" data-name-show="'+(name_show !== undefined ? name_show:'Read more')+'" data-name-hide="'+(name_hide !== undefined ? name_hide:'Read less')+'"></a>' +
					'</div>'
				).appendTo($this);

				var hideText = function () {
					var offsetFirstHeading;
					// var firstHeading = $container.find('.more-mark');
					// var thirdP       = $($container.find('p')[1]);
					// if (firstHeading.length !== 0) {
					// 	offsetFirstHeading = firstHeading.position().top;
					// }
					// if (!offsetFirstHeading && thirdP.length !== 0) {
					// 	offsetFirstHeading = thirdP.position().top;
					// }
					if (!offsetFirstHeading) {
						offsetFirstHeading = 145;
					}
					$container.css('max-height', offsetFirstHeading);
				};
				hideText();
				$(window).resize(hideText);

				$action.click(function(){
					$this.toggleClass('active');
					return false;
				});

				$this.attr('data-init', true);
			}
		})
	}





}(jQuery));




(function ($) {
  "use strict";

  $(function () {
    var viewers = document.querySelectorAll(".image-compare-viewer");

    var globalConfig = {
    	controlColor: "#1E293A",
    	controlShadow: true,
    	addCircle: true,
    	addCircleBlur: false,

		showLabels: false,
		labelOptions: {
			before: 'Before',
			after: 'After',
			onHover: false
		},
		hoverStart: false,
		verticalMode: false,
		startingPoint: 50,
		fluidMode: false
    };

    var datasetDictionary = {
      shadow: "controlShadow",
      theme: "addCircle",
      color: "controlColor",
      startingpoint: "startingPoint",
      hoverstart: "hoverStart",
      smoothing: "smoothing",
      smoothingamount: "smoothingAmount",
    };

    for (var i = 0; i <= viewers.length - 1; i++) {
      var view = viewers[i].dataset;

      var config = {
        controlShadow: getData(view, "shadow") === "false" ? false : true,
        addCircle:
          getData(view, "theme") === "circle" || getData(view, "theme") === true
            ? true
            : false,
        controlColor: getData(view, "color"),
        startingPoint: parseInt(getData(view, "startingpoint")),
        hoverStart: getData(view, "hoverstart") === "true" ? true : false,
        smoothing: getData(view, "smoothing") === "false" ? false : true,
        smoothingAmount: parseInt(getData(view, "smoothingamount")),
      };

      new ImageCompare(viewers[i], config).mount();
    }

    function getData(view, datasetName) {
      return view.hasOwnProperty(datasetName)
        ? view[datasetName]
        : globalConfig[datasetDictionary[datasetName]];
    }
  });
})(jQuery);


// AOS.init({
//     once: true,
// });