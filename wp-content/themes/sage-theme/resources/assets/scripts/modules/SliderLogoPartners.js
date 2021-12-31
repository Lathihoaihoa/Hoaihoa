export default class SliderPartnersFooter {
  constructor() {
    this.$slider = $('.logo-slider')
  }

  addSlick() {
    $(this.$slider).slick({
      rows: 0,
      dots: false,
      arrows: true, 
      slidesToShow: 6,
      slidesToScroll: 1,
      infinite: true, 
      adaptiveHeight: false, 
      slide: '.logo-slider-item',
      prevArrow: '<button type="button" class="btnslider slick-prev-2 arrows" aria-label="prev"><span class="icomoon icon-chevron-left"></span></button>',
      nextArrow: '<button type="button" class="btnslider slick-next-2 arrows" aria-label="next"><span class="icomoon icon-chevron-right"></span></button>',
      responsive: [{
          breakpoint: 1440,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
      ],
    });
  }

  init() {
    this.addSlick()
  }
}

new SliderPartnersFooter().init()
