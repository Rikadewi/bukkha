$(function() {
   // Change menu bar background color
   $(window).scroll(function scrolling() {
      var positionService = $('#service').offset().top - 100;
      var positionPortfolio = $('#portfolio').offset().top - 1; 
      var positionValue = $('#value').offset().top - 1;
      var positionContact = $('#contact').offset().top - 1;
      if($(this).scrollTop() > positionService - 200) {
         $('#home').addClass('white-background');
      }
      if($(this).scrollTop() < positionService - 200) {
         $('#home').removeClass('white-background');
      }
      if($(this).scrollTop() < positionService){
         $('.menu-logo').addClass('none')
      }else{
         $('.menu-logo').removeClass('none')
      }
      if((positionService < $(this).scrollTop() && $(this).scrollTop() < positionPortfolio) ||(positionValue < $(this).scrollTop() && $(this).scrollTop() < positionContact)){
         $('#menu').removeClass('black-background').addClass('white-background');
         $('#menu-img').attr('src', 'img/logo/logo2-black.png');
      }
      if((0 < $(this).scrollTop() && $(this).scrollTop() < positionService) || (positionPortfolio < $(this).scrollTop() && $(this).scrollTop() < positionValue) || (positionContact < $(this).scrollTop())){
         $('#menu').removeClass('white-background').addClass('black-background');
         $('#menu-img').attr('src', 'img/logo/logo2-white.png');
      }
   });

   $('#fullpage').fullpage({
		// //options here
		// autoScrolling:true,
      // scrollHorizontally: true
      anchors: ['homeSection', 'serviceSection', 'portfolioSection', 'valueSection', 'contactSection'],
   });
 });
