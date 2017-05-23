$(document).ready(function(){
/*-------------------------------------
| Toggle Dropdown Navbar Menu
-------------------------------------*/
$(".navbar-inverse button.navbar-toggle").toggleClass('in');
/*-------------------------------------
| Slideshow Effect
-------------------------------------*/
    var $item = $('.carousel .item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
    $item.addClass('full-screen');


    $('.carousel img').each(function() {
      var $src = $(this).attr('src');
      var $color = $(this).attr('data-color');
      $(this).parent().css({
        'background-image' : 'url(' + $src + ')',
        'background-color' : $color
      });
      $(this).remove();
    });

    $(window).on('resize', function (){
      $wHeight = $(window).height();
      $item.height($wHeight);
    });

    $('.carousel').carousel({
      interval: 6000,
      pause: "false"
    });

    /*-------------------------------------
    | Fade-Ins
    -------------------------------------*/
    $('.parallaxContentHome p').delay(500).fadeIn(400);
    $('.parallaxContentHome  button').delay(1700).fadeIn(300);
    $('.parallaxContent p').delay(500).fadeIn(400);
    $('.parallaxContent  button').delay(1700).fadeIn(300);

    /*-------------------------------------
    | Smooth Scroll Effect
    -------------------------------------*/
    function scrollAbout () {
        $('html,body').animate({
            scrollTop: $("#infoFirst").offset().top},
            'slow');
    }

    function scrollContact () {
        $('html,body').animate({
            scrollTop: $("#contact").offset().top},'slow');
    }

    function scrollServices () {
            $('html,body').animate({
            scrollTop: $('#services').offset().top},'slow');
    }

    $(".about").click(scrollAbout);
    $(".contact").click(scrollContact);
    $(".servicesButton").click(scrollServices);
});