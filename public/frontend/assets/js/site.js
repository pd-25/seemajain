$(document).ready(function () {
    // -- Initialize AOS
    AOS.init();
});
// -- Carousel 01
$('#popClsCarousel').slick({
    dots: true,
    speed: 300,
    arrows: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
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
// -- Carousel 02
$('#videoTutorialCarousel').slick({
    dots: true,
    speed: 300,
    arrows: false,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
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
// -- Carousel 03
$('#testimonialCarousel').slick({
    dots: true,
    speed: 300,
    arrows: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
});
