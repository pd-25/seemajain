$(document).ready(function () {
    // -- Initialize AOS
    AOS.init();
    // -- Carousel 01
    $('.pop-cls-carousel').owlCarousel({
        loop: true,
        margin: 24,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    // -- Carousel 02
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        items: 1,
    })
});