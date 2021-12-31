export default class ModTestimonials {
    constructor () {
      this.$slider = $('.slider-list')
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
            slide: '.slide-item',
            appendArrows: $('.arrow-append'),
            prevArrow: '<button type="button" class="btnslider slick-prev-1 arrows" aria-label="prev"><span class="icomoon icon-chevron-left"></span></button>',
            nextArrow: '<button type="button" class="btnslider slick-next-1 arrows" aria-label="next"><span class="icomoon icon-chevron-right"></span></button>'
        }); 
    }

    init () {
        this.addSlick()
    }
  }
  
  new ModTestimonials().init()
  