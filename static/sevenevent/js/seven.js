$(function() {
  $('.space__slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  infinite: true,


  });

  $('.space__slider2').slick({
  dots: true,
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


});

 


$(function(){
$(window).on('load scroll', function(){
    var thisOffset = $('#event').offset().top + $('#event').outerHeight();
    var foo = $('#access').offset().top + $('#access').outerHeight();
    
    if( $(window).scrollTop() + $(window).height() > thisOffset && $(window).scrollTop() + $(window).height() < foo){
        $(".header").fadeIn(800)
    }else{
        $(".header").fadeOut(800)
    }
});
});




