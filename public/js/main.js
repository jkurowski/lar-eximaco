function lazyloadBackgrounds() {
    const lazyBackgrounds = [...document.querySelectorAll("[data-lazy-background]")];
    if (!lazyBackgrounds.length) return;

    const observer = new IntersectionObserver(function (entries, self) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const lazyBackground = entry.target;
                lazyBackground.style.backgroundImage = `url(${lazyBackground.dataset.lazyBackground}), url(${lazyBackground.dataset.lazyBackground})`;
                self.unobserve(entry.target);
            }
        });
    })
    lazyBackgrounds.forEach(lazyBackground => {
        observer.observe(lazyBackground);
    })
}

$(document).ready(function(){

  lazyloadBackgrounds();

  var aboveHeight = $('header.fixed-top').outerHeight() - 100;
$(window).scroll(function(){
      if ($(window).scrollTop() > aboveHeight) {
          $('header.fixed-top').css( "padding", "1rem 0");
          $('header.fixed-top').addClass("header-opacity");
          }
        if ($(window).scrollTop() < aboveHeight){
          $('header.fixed-top').css( "padding", "3rem 0")
          $('header.fixed-top').removeClass("header-opacity");

        }
        if ($(window).width() < 1200) {
          if ($(window).scrollTop() > aboveHeight){
              $('header.fixed-top').css( "padding", ".5rem 0");
            }
            if ($(window).scrollTop() < aboveHeight){
              $('header.fixed-top').css( "padding", ".5rem 0")
              }
          }
    });

    $('input').focus(function () {
    $(this).parents('.box-anim').addClass('focused');
      });
      $('textarea').focus(function () {
          $(this).parents('.box-anim').addClass('focused');
      });
      $('input').blur(function () {
          var inputValue = $(this).val();
          if (inputValue == "") {
              $(this).removeClass('filled');
              $(this).parents('.box-anim').removeClass('focused');
          } else {
              $(this).addClass('filled');
          }
      });
      $('textarea').blur(function () {
          var inputValue = $(this).val();
          if (inputValue == "") {
              $(this).removeClass('filled');
              $(this).parents('.box-anim').removeClass('focused');
          } else {
              $(this).addClass('filled');
          }
      });

  $('.hero-slider').slick({
    dots: true,
    fade: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1
  });

  $('.investment-slider').slick({
    dots: false,
    arrows:true,
    prevArrow: "<img src='/images/arrow-left.svg' class='slick-prev slick-arrow'>",
    nextArrow: "<img src='/images/arrow-right.svg' class='slick-next slick-arrow'>",
    speed: 300,
    centerMode: true,
    centerPadding: '28%',
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'ease-out',
    responsive: [
        {
          breakpoint: 576,
          settings: {
            centerMode: true,
            centerPadding: '0',
          }
        }
      ]
    });
  $('.advantages-slider').slick({
    dots: false,
    arrows:true,
    prevArrow: "<img src='/images/arrow-left.svg' class='slick-prev slick-arrow'>",
    nextArrow: "<img src='/images/arrow-right.svg' class='slick-next slick-arrow'>",
    speed: 300,
    centerMode: true,
    centerPadding: '28%',
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'ease-out',
    responsive: [
        {
          breakpoint: 576,
          settings: {
            centerMode: true,
            centerPadding: '0',
          }
        }
      ]
    });
  $('.similar-offers-slider').slick({
    dots: false,
    arrows:true,
    prevArrow: "<img src='/images/arrow-left.svg' class='slick-prev slick-arrow'>",
    nextArrow: "<img src='/images/arrow-right.svg' class='slick-next slick-arrow'>",
    autoplay:true,
    autoplaySpeed: 3000,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    cssEase: 'ease-out',
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  $('.investments-other-slider').slick({
    dots: false,
    arrows:true,
    prevArrow: "<img src='/images/arrow-left.svg' class='slick-prev slick-arrow'>",
    nextArrow: "<img src='/images/arrow-right.svg' class='slick-next slick-arrow'>",
    autoplay:true,
    autoplaySpeed: 3000,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    cssEase: 'ease-out',
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });

});

$('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
  $('.investment-slider').slick('setPosition');
})


    //get the current year for the Copyright
  $('#year').text(new Date().getFullYear());


  //hiding menu when clicking on menu item
//   $(document).on('click','.navbar-collapse.show',function(e) {
//   $(this).collapse('hide');
// });
