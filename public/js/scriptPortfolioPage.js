$(function() {
   $('#fullpage').fullpage({
		// //options here
		// autoScrolling:true,
      // scrollHorizontally: true
      anchors: ['portfolioPageSection', 'detailPageSection'],
      slidesNavigation: 'true',
   });
   $(document).on('load', setInterval(function(){
      fullpage_api.moveSlideRight();
   },5000));
 });
