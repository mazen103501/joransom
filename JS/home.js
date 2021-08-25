$(function (){

         $('.responsive').slick({
                 infinite: true,
                 slidesToShow: 5,
                  slidesToScroll: 1,
                  autoplay: true,
                 autoplaySpeed: 0,
                 speed: 5000,
                pauseOnHover: false,
                cssEase: 'linear',
                arrows:false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 3,
              infinite: true,
              dots: false,
              arrows:false
            }
          },
          {
            breakpoint: 600,
            settings: {
                infinite:true,
              slidesToShow: 1,
              slidesToScroll: 2,
              arrows:false
            }
          },
          {
            breakpoint: 480,
            settings: {
               infinite:true,
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});