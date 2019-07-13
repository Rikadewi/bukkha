$(function() {
   $('#fullpage').fullpage({
		// //options here
      anchors: ['portfolioPageSection', 'detailPageSection'],
      slidesNavigation: 'true',
      verticalCentered: 'false',
      responsiveWidth: 576,
   });
   $(document).on('load', setInterval(function(){
      fullpage_api.moveSlideRight();
   },7000));
 });
