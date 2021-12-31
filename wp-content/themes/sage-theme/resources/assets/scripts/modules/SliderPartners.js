export default class SliderPartners {
    constructor () {
      this.$slider = $('.partners-slider')
    }

    addSlick() {
        $(this.$slider).slick({
            rows: 0,
            dots: false,
            arrows: true, 
            slidesToScroll: 1,
            slidesToShow: 1,
            infinite: true, 
            adaptiveHeight: false, 
            slide: '.partners-slider-item',
            appendArrows: $('.arrow-append1'),
            prevArrow: '<button type="button" class="btnslider slick-prev-3 arrows" aria-label="prev"><span class="icomoon icon-chevron-left"></span></button>',
            nextArrow: '<button type="button" class="btnslider slick-next-3 arrows" aria-label="next"><span class="icomoon icon-chevron-right"></span></button>'
        }); 
    }

    init () {
        this.addSlick()
    }
  }
  
  new SliderPartners().init()
  