
$(document).ready(function(){
    $("body").removeAttr("class");
      var windowTop = $(this).scrollTop();
      if(windowTop > 80){ 
        $('.header').addClass('smaller'); 
        $('.menu ul.menu-wrap li a').css('color','#1d2124');
      }
      $(window).scroll(function(event) {
          windowTop = $(this).scrollTop();
          if(windowTop > 80){
              $('.header').addClass('smaller');
              $('.menu ul.menu-wrap li a').css('color','#1d2124');
          } else{
              $('.header').removeClass('smaller');
              $('.menu ul.menu-wrap li a').css('color','#40454b');
          }
          $('.bg-caption').css({
           'transform': 'translate(0px,'+ windowTop /10+'%)',
          });
          // $('.slide-image').css({
          //  'transform': 'translate(0px,'+ windowTop /30+'%)',
          // });
       
      });
    
      $('a').click(function(){
          $('html, body').animate({
              scrollTop: $( $(this).attr('href') ).offset().top -50
          }, 1000);
          return false;
      });

      $('.sp-menu').click(function(e){
          e.preventDefault();
          if($('.menuHide').is(':hidden')){
              $('.menuHide').slideDown( "slow");
              $("html").css("overflow", "hidden");
          }else{
             $('.menuHide').slideUp( "slow");
             $("html").css("overflow", "scroll");
          }
      });

      $('.menu-list ul li a').click(function(){
          $('.menuHide').slideUp( "slow");
          $('a').click(function(){
          $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top -60
            }, 1000);
            return false;
          });
          $("html").css("overflow", "scroll");
      }); 
});
$(document).ready(function() {
    $('a[href*=#]').bind('click', function(e) {
        e.preventDefault();

        var target = $(this).attr("href");
        $('html, body').stop().animate({
            scrollTop: $(target).offset().top
        }, 600, function() {
            location.hash = target;
        });

        return false;
    });
});

$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop() +100;
    $('.page-section').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('.navigation a.active').removeClass('active');
            $('.navigation a').eq(i).addClass('active');
        }
    });
    
}).scroll();
