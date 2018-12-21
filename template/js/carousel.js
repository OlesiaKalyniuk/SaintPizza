$(document).ready(function(){

/*BEGIM MAIN PAGE SLIDER*/
  $('.top-slider').slick({
    infinite: true,
    dots: true,
    speed: 500,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEaser: 'linear',
    adaptiveHeight: true,
    arrows: true
  });
/*END MAIN PAGE SLIDER*/
/*BEGIM CONTENT PAGE SLIDER*/
  $('.ing-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });
/*END CONTENT PAGE SLIDER*/

});
