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

 








