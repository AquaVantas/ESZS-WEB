$('.tvoj-prvi-slider').slick({
	dots: true,
	infinite: true,
	autoplay:true,
	autoplaySpeed: 2500,
	slidesToShow: 4,
	prevArrow: $('.arrow_prev'),  
	nextArrow: $('.arrow_next'),
	responsive: [
    {
      breakpoint: 1248,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 990,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 762,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1
      }
    }]
});


$('.tvoj-slider').slick({
	dots: true,
  infinite: true,
  autoplay:true,
  autoplaySpeed: 2500,
  slidesToShow: 4,
  prevArrow: $('.arrow_prev'),  
  nextArrow: $('.arrow_next'),
  asNavFor: '.tvoj-prvi-slider',
  responsive: [
    {
      breakpoint: 1248,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 990,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 762,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1
      }
    }]
});

$('.tvoj-drugi-slider').slick({
  infinite: true,
  autoplay:true,
  autoplaySpeed: 2500,
  slidesToShow: 10,
  responsive: [
    {
      breakpoint: 1248,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 10
      }
    },
    {
      breakpoint: 990,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 10
      }
    },
    {
      breakpoint: 762,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 10
      }
    }]
});