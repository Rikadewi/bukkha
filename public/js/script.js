$(function() {
    $(window).scroll(function () {
       if ($(this).scrollTop() > 50) {
          $('#home').addClass('change-background-color')
       }
       if ($(this).scrollTop() < 50) {
          $('#home').removeClass('change-background-color')
       }
    });
 });
