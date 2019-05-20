$(function() {
   $('#fullpage').fullpage({
		//options here
      anchors: ['homeSection', 'serviceSection', 'portfolioSection', 'valueSection', 'contactSection'],
      slidesNavigation: 'true',
   
      afterLoad: function(origin, destination, direction){
         //display bukkha menu
         if(origin.anchor == 'homeSection' && direction == 'down'){
            $('.menu-logo').removeClass('none');
         }

         //change menu bar color
         if (direction == 'down'){
            if(origin.anchor == 'homeSection' || origin.anchor == 'portfolioSection' || origin.anchor == 'contactSection'){
               $('#menu').removeClass('black-background').addClass('white-background');
               $('#menu-img').attr('src', 'img/logo/logo2-black.png');
            }
            else{
               $('#menu').removeClass('white-background').addClass('black-background');
               $('#menu-img').attr('src', 'img/logo/logo2-white.png');
            }
         }
      },
      onLeave: function(origin, destination, direction){
         //display bukkha menu
         if(origin.anchor == 'serviceSection' && direction == 'up'){
            $('#menu-img').attr('src', 'img/logo/logo2-black.png');
         }

         //change menubar color
         if (direction == 'up'){
            if(origin.anchor == 'homeSection' || origin.anchor == 'portfolioSection' || origin.anchor == 'contactSection'){
               $('#menu').removeClass('black-background').addClass('white-background');
               $('#menu-img').attr('src', 'img/logo/logo2-black.png');
            }
            else{
               if(origin.anchor != 'serviceSection'){
                  $('#menu-img').attr('src', 'img/logo/logo2-white.png');
               }
               $('#menu').removeClass('white-background').addClass('black-background');
            }
         }
      },
   });
 });
