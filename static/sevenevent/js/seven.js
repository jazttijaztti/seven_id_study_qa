$(function() {
  $('.space__slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  infinite: true,


  });

  $('.space__slider2').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  infinite: true,

  });


  $('.space__slider_sp').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  infinite: true,

  });


  $('#tab-2').on('click', function() {
        $('.space__slider2').slick('setPosition');
    });

  $('#tab2-2').on('click', function() {
        $('.space__slider2').slick('setPosition');
    });
    
  $('.Flist01').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: true,
		  infinite: true
  });
  $('.Flist02').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: true,
		  infinite: true
  });
  $('.Flist03').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: true,
		  infinite: true
  });
  $('.Flist04').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  adaptiveHeight: true,
		  infinite: true
  });


});

 


$(function(){
$(window).on('load scroll', function(){
    
    if($('#event').length){
  	  var thisOffset = $('#event').offset().top + $('#event').outerHeight();
  	}	
	  if($('#access').length){
  	  var foo = $('#access').offset().top + $('#access').outerHeight();
  	}
    
    if( $(window).scrollTop() + $(window).height() > thisOffset && $(window).scrollTop() + $(window).height() < foo){
        $(".header").fadeIn(800)
    }else{
        $(".header").fadeOut(800)
    }
});
});







