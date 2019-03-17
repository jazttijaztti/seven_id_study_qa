

(function($) {


	$(function () {
		var ua = {};
		ua.name = window.navigator.userAgent.toLowerCase();
		ua.isIE = (ua.name.indexOf('msie') >= 0 || ua.name.indexOf('trident') >= 0);
		ua.isFirefox = ua.name.indexOf('firefox') >= 0;
		ua.isChrome = ua.name.indexOf('chrome') >= 0;
		ua.isSafari = ua.name.indexOf('safari') >= 0;
		ua.isiPhone = ua.name.indexOf('iphone') >= 0;
		ua.isiPod = ua.name.indexOf('ipod') >= 0;
		ua.isiPad = ua.name.indexOf('ipad') >= 0;
		ua.isiOS = (ua.isiPhone || ua.isiPod || ua.isiPad);
		ua.isAndroid = ua.name.indexOf('android') >= 0;
		ua.isTablet = (ua.isiPad || (ua.isAndroid && ua.name.indexOf('mobile') < 0));
		if (ua.isIE) {		$('body').addClass('ie ie_' + ua.ver);	}
		if (ua.isFirefox) {	$('body').addClass('firefox');	}
		if (ua.isChrome) {	$('body').addClass('chrome');	}
		if (ua.isSafari) {	$('body').addClass('safari');	}
		if (ua.isiPhone) {	$('body').addClass('iPhone');	}
		if (ua.isiPod) {	$('body').addClass('iPod');		}
		if (ua.isiPad) {	$('body').addClass('iPad');		}
		if (ua.isiOS) {		$('body').addClass('iOS iOS_' + ua.ver);	}
		if (ua.isAndroid) {	$('body').addClass('android android_' + ua.ver);	}
		if (ua.isTablet) {	$('body').addClass('tablet');	}
	});


	$(function () {
		$('body').each(function () {
			var $window = $(window),
				$header = $('body'),
				headerOffsetTop = $header.offset().top;
			$window.on('scroll', function () {
				if ($window.scrollTop() > headerOffsetTop) {
					$header.addClass('sticky');
				} else {
					$header.removeClass('sticky');
				}
			});
			$window.trigger('scroll');
		});
	});


	$(window).load(function(){
		smoothScroll.init({
			selector: '[data-scroll]',
			selectorHeader: '[data-scroll-header]',
			speed: 800,
			easing: 'easeOutQuart',
			offset: 0,
			updateURL: true,
			callback: function () {}
		});
	});


})(jQuery);


$(window).on('load', function () {
	$('body').addClass('loadDone');
});


$(window).on('load', function() {
	if ($(window).width() > 768) {
		$(function() { new WOW().init(); });
	}
});



