jQuery(".toggle").on("click", () => {
    jQuery(".toggle").toggleClass("toggle--open");
    jQuery(".navigation").slideToggle();
});

if (jQuery(window).width() < 1024) {
    jQuery(".menu li").on("click", function(event) {
        event.preventDefault();
        //alert('done');
        jQuery(".menu li ul.menu-list").not(jQuery(this).find("ul.menu-list")).hide();
        jQuery(this).find("ul.menu-list").toggle();
    });
 }

jQuery(function() {
    var owl = jQuery(".owl-carousel-news");
    owl.owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: false,
        navText: [
            '<img src="/wp-content/themes/ah-wordpress-boilerplate/dist/img/prev-black.svg">',
            '<img src="/wp-content/themes/ah-wordpress-boilerplate/dist/img/next-black.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
});

jQuery(function() {
    var owl = jQuery(".owl-carousel-main");
    owl.owlCarousel({
        autoplayTimeout: 10000,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        navText: [
            '<img src="/wp-content/themes/ah-wordpress-boilerplate/dist/img/prev.svg">',
            '<img src="/wp-content/themes/ah-wordpress-boilerplate/dist/img/next.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});

jQuery(function() {
    var owl = jQuery(".owl-carousel-small");
    owl.owlCarousel({
        autoplayTimeout: 10000,
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        navText: [
            '<img src="/wp-content/themes/ah-wordpress-boilerplate/dist/img/prev.svg">',
            '<img src="/wp-content/themes/ah-wordpress-boilerplate/dist/img/next.svg">',
          ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});