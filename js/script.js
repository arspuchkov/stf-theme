$( document ).ready(function() {

    // mobile menu
    var mobileMenu = $('.mobile-menu');

    $('.burg').on('click', function(){
        mobileMenu.css('width', '100%');
        $('body').css('overflow', 'hidden');
    });

    $('.controls img, .mobile-menu-items').on('click', function(){
        mobileMenu.css('width', '0');
        $('body').css('overflow', 'auto');
    });

    mobileMenu.on('click', function(){
        mobileMenu.css('width', '0');
        $('body').css('overflow', 'auto');
    });


    //  carousel
    $('.gallery-carousel').owlCarousel({
        items: 1,
        loop:true,
        center:true,
        nav: true,
        // autoWidth:true,
        dots:false,
        navText : ["<img src='"+siteData.templateUrl+"/images/fill-arrow.svg'>",
            "<img src='"+siteData.templateUrl+"/images/fill-arrow.svg'>"]
    });

    // WOW.js
    var wow = new WOW(
        {
            boxClass:     'wow',
            animateClass: 'animated',
            offset:       100,
            mobile:       true,
            live:         true,
            callback:     function(box) {}
        }
    );
    wow.init();


    // arrow down
    $(".arrow-down a").on('click', function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 700);
    });

        // Contact page - accordion
    $(".accordion-image").on('click', function() {
        var $btnParent = $(this).parents('.accordion-block');
        if ($btnParent.length){
            var $content = $btnParent.find('.contact-body');
            if ($content.length) {
                if ($content.css('display') === 'none') {
                    $('.title', $btnParent).addClass('contact_active');
                    $(this, 'toggle-image').children().first().addClass('active-toggle');
                }
                else {
                    $('.title', $btnParent).removeClass('contact_active');
                    $(this).children().first().removeClass('active-toggle');
                }
                $content.slideToggle('600');
            }
        }
        return false;
    });

});