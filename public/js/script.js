$(document).ready(function() {
   $('#fullpage').fullpage({
		//options here
      anchors: ['homeSection', 'serviceSection', 'portfolioSection', 'valueSection', 'contactSection'],
      slidesNavigation: 'true',
      verticalCentered: 'false',
      // scrollBar: 'true',
      responsiveWidth: 670,
      afterLoad: function(origin, destination, direction){
         //change menu bar color
         if (direction == 'down'){
            if(destination.anchor == 'homeSection' || destination.anchor == 'portfolioSection' || destination.anchor == 'contactSection'){
               $('#menu').removeClass('white-background').addClass('black-background');
               $('#menu-img').attr('src', 'img/logo/logo2-white.png');
            }
            else{
               $('#menu').removeClass('black-background').addClass('white-background');
               $('#menu-img').attr('src', 'img/logo/logo2-black.png');
            }
         }
      },
      onLeave: function(origin, destination, direction){
         //display bukkha menu
         if(destination.anchor == 'homeSection' && direction == 'up'){
            $('#menu-img').attr('src', 'img/logo/logo2-black.png');
         }

         //change menubar color
         if (direction == 'up'){
            if(destination.anchor == 'homeSection' || destination.anchor == 'portfolioSection' || destination.anchor == 'contactSection'){
               if(destination.anchor != 'homeSection'){
                  $('#menu-img').attr('src', 'img/logo/logo2-white.png');
               }
               $('#menu').removeClass('white-background').addClass('black-background');
            }
            else{
               $('#menu').removeClass('black-background').addClass('white-background');
               $('#menu-img').attr('src', 'img/logo/logo2-black.png');
            }
         }
      },
   });
   $(document).on('load', setInterval(function(){
      fullpage_api.moveSlideRight();
   },5000));
 });
