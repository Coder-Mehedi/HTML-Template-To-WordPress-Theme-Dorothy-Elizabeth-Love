jQuery(document).ready(function(jQuery) {

    jQuery('#testimonials').owlCarousel({
        loop: true,
        center: true,
        nav: false,
        autoplayTimeout: 5000,
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1170: { items: 3 }
        }
    })

})