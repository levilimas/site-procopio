(function ($) {
	'use strict';
	// TOP Menu Sticky
	var prevScrollpos = window.pageYOffset;

	window.onscroll = function () {
		var currentScrollPos = window.pageYOffset;

		if (currentScrollPos > 100) {
			$('.header-area').addClass('navbar-dark');
			if (currentScrollPos > 200)
				var height = document.getElementsByClassName('header-area')[0]
					.offsetHeight;
		} else {
			$('.header-area').removeClass('navbar-dark');
		}

		if (prevScrollpos > currentScrollPos) {
			document.getElementsByClassName('header-area')[0].style.top = '0';
		} else {
			document.getElementsByClassName(
				'header-area'
			)[0].style.top = `-${height}px`;
		}

		prevScrollpos = currentScrollPos;
	};

	/**
	 * Funções de manipulação do menu mobile
	 */
	// Abrir
	$('.mobile-header .sidemenu-cta .open').click(function () {
		$('.mobile-sidemenu').css('right', '0%');
	});
	// Fechar
	$('.mobile-sidemenu .sidemenu-cta .close-menu').click(function () {
		$('.mobile-sidemenu').css('right', '100%');
	});

	var TxtType = function (el, toRotate, period) {
		this.toRotate = toRotate;
		this.el = el;
		this.loopNum = 0;
		this.period = parseInt(period, 10) || 2000;
		this.txt = '';
		this.tick();
		this.isDeleting = false;
	};

	TxtType.prototype.tick = function () {
		var i = this.loopNum % this.toRotate.length;
		var fullTxt = this.toRotate[i];

		if (this.isDeleting) {
			this.txt = fullTxt.substring(0, this.txt.length - 1);
		} else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
		}

		this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

		var that = this;
		var delta = 200 - Math.random() * 100;

		if (this.isDeleting) {
			delta /= 2;
		}

		if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
		} else if (this.isDeleting && this.txt === '') {
			this.isDeleting = false;
			this.loopNum++;
			delta = 500;
		}

		setTimeout(function () {
			that.tick();
		}, delta);
	};

	window.onload = function () {
		var elements = document.getElementsByClassName('typewrite');
		for (var i = 0; i < elements.length; i++) {
			var toRotate = elements[i].getAttribute('data-type');
			var period = elements[i].getAttribute('data-period');
			if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}
		// INJECT CSS
		var css = document.createElement('style');
		css.type = 'text/css';
		css.innerHTML = '.typewrite > .wrap { border-right: 0.08em solid #fff}';
		document.body.appendChild(css);
	};

	$(document).ready(function () {
		$('.header-area').css({
			top: '0',
		});
		// mobile_menu
		var menu = $('ul#navigation');
		if (menu.length) {
			menu.slicknav({
				prependTo: '.mobile_menu',
				closedSymbol: '+',
				openedSymbol: '-',
			});
		}
		// blog-menu
		// $('ul#blog-menu').slicknav({
		//   prependTo: ".blog_menu"
		// });

		// review-active
		$('.slider_active').owlCarousel({
			loop: false,
			margin: 0,
			items: 1,
			autoplay: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
				},
				767: {
					items: 1,
				},
				992: {
					items: 1,
				},
			},
		});

		$('.page-sobre').owlCarousel({
			loop: true,
			margin: 0,
			items: 2,
			autoplay: true,
			navText: [
				'<i class="ti-angle-left"></i>',
				'<i class="ti-angle-right"></i>',
			],
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
				},
				767: {
					items: 1,
				},
				992: {
					items: 2,
				},
			},
		});

		// review-active
		$('.prising_slider_active').owlCarousel({
			loop: true,
			margin: 30,
			items: 1,
			autoplay: true,
			navText: [
				'<i class="ti-angle-left"></i>',
				'<i class="ti-angle-right"></i>',
			],
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					nav: false,
				},
				767: {
					items: 1,
					nav: true,
				},
				992: {
					items: 1,
				},
			},
		});

		// about_active
		$('.about_active').owlCarousel({
			loop: true,
			margin: 0,
			items: 1,
			autoplay: true,
			navText: [
				'<i class="ti-angle-left"></i>',
				'<i class="ti-angle-right"></i>',
			],
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					nav: false,
				},
				767: {
					items: 1,
					nav: false,
				},
				992: {
					items: 1,
				},
			},
		});

		// review-active
		$('.testmonial_active').owlCarousel({
			loop: true,
			margin: 0,
			items: 1,
			autoplay: true,
			navText: [
				'<i class="ti-angle-left"></i>',
				'<i class="ti-angle-right"></i>',
			],
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					dots: false,
					nav: false,
				},
				767: {
					items: 1,
					dots: false,
					nav: false,
				},
				992: {
					items: 1,
					nav: false,
				},
				1200: {
					items: 1,
					nav: false,
				},
				1500: {
					items: 1,
				},
			},
		});

		// team-active
		$('.team_active').owlCarousel({
			loop: true,
			margin: 0,
			items: 1,
			autoplay: true,
			navText: [
				'<i class="ti-angle-left"></i>',
				'<i class="ti-angle-right"></i>',
			],
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					dots: false,
					nav: false,
				},
				767: {
					items: 1,
					dots: false,
					nav: false,
				},
				992: {
					items: 2,
					nav: false,
				},
				1200: {
					items: 3,
					nav: false,
				},
			},
		});

		// for filter
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				// use outer width of grid-sizer for columnWidth
				columnWidth: 1,
			},
		});

		// filter items on button click
		$('.portfolio-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
		});

		//for menu active class
		$('.portfolio-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

		// wow js
		new WOW().init();

		// counter
		$('.counter').counterUp({
			delay: 10,
			time: 10000,
		});

		// scrollIt for smoth scroll
		$.scrollIt({
			upKey: 38, // key code to navigate to the next section
			downKey: 40, // key code to navigate to the previous section
			easing: 'linear', // the easing function for animation
			scrollTime: 600, // how long (in ms) the animation takes
			activeClass: 'active', // class given to the active nav element
			onPageChange: null, // function(pageIndex) that is called when page is changed
			topOffset: 0, // offste (in px) for fixed top navigation
		});

		// scrollup bottom to top
		$.scrollUp({
			scrollName: 'scrollUp', // Element ID
			topDistance: '4500', // Distance from top before showing element (px)
			topSpeed: 300, // Speed back to top (ms)
			animation: 'fade', // Fade, slide, none
			animationInSpeed: 200, // Animation in speed (ms)
			animationOutSpeed: 200, // Animation out speed (ms)
			scrollText: '<i class="fa fa-angle-double-up"></i>', // Text for element
			activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		});

		// blog-page

		//brand-active
		$('.brand-active').owlCarousel({
			loop: true,
			margin: 30,
			items: 1,
			autoplay: true,
			nav: false,
			dots: false,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					nav: false,
				},
				767: {
					items: 4,
				},
				992: {
					items: 7,
				},
			},
		});

		// blog-dtails-page

		//project-active
		$('.project-active').owlCarousel({
			loop: true,
			margin: 30,
			items: 1,
			// autoplay:true,
			navText: [
				'<i class="Flaticon flaticon-left-arrow"></i>',
				'<i class="Flaticon flaticon-right-arrow"></i>',
			],
			nav: true,
			dots: false,
			// autoplayHoverPause: true,
			// autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					nav: false,
				},
				767: {
					items: 1,
					nav: false,
				},
				992: {
					items: 2,
					nav: false,
				},
				1200: {
					items: 1,
				},
				1501: {
					items: 2,
				},
			},
		});

		if (document.getElementById('default-select')) {
			$('select').niceSelect();
		}

		//about-pro-active
		$('.details_active').owlCarousel({
			loop: true,
			margin: 0,
			items: 1,
			// autoplay:true,
			navText: [
				'<i class="ti-angle-left"></i>',
				'<i class="ti-angle-right"></i>',
			],
			nav: true,
			dots: false,
			// autoplayHoverPause: true,
			// autoplaySpeed: 800,
			responsive: {
				0: {
					items: 1,
					nav: false,
				},
				767: {
					items: 1,
					nav: false,
				},
				992: {
					items: 1,
					nav: false,
				},
				1200: {
					items: 1,
				},
			},
		});
	});

	//------- Mailchimp js --------//
	function mailChimp() {
		$('#mc_embed_signup').find('form').ajaxChimp();
	}
	mailChimp();

	// Search Toggle
	$('#search_input_box').hide();
	$('#search').on('click', function () {
		$('#search_input_box').slideToggle();
		$('#search_input').focus();
	});
	$('#close_search').on('click', function () {
		$('#search_input_box').slideUp(500);
	});
	// Search Toggle
	$('#search_input_box').hide();
	$('#search_1').on('click', function () {
		$('#search_input_box').slideToggle();
		$('#search_input').focus();
	});

	//Abrir
	$('.mobile-header .sidemenu-cta .open').click(function () {
		$('.mobile-sidemenu').css('left', '0%');
	});
	// Fechar
	$('.mobile-sidemenu .sidemenu-cta .close-menu').click(function () {
		$('.mobile-sidemenu').css('left', '100%');
	});
})(jQuery);
