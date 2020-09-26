$(document).ready(function() {
    $('.venobox').venobox();
});

// Banner Slider

$('.banner-slider').slick({
    infinite: true,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplayspeed: 1000,
    dots: true,
    arrows: false,
});

$('.product-banner-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplayspeed: 1000,
    arrows: false,
    dots: true
});
// Fixed Menu Js
$(window).scroll(function() {
    var scrollamount = $(window).scrollTop()

    if (scrollamount > 400) {
        $(".fixmenu").addClass("fixed")
    } else {
        $(".fixmenu").removeClass("fixed")
    }

    if (scrollamount > 1000) {
        $(".btop").fadeIn();
    } else {
        $(".btop").fadeOut();
    }
});

// top btn Js

$(".btop").click(function() {
    $("html,body").animate({
        scrollTop: 0
    }, 1000)
});

// Special product

$('.spcl-prdct-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplayspeed: 1000,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

// Product Page Js Start

$('.prduct-banner').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplayspeed: 1000,
    arrows: false,
    dots: true,
});

let syncCont = $("#shop-dual-carousel");
let syncCarousel = $("#syncCarousel.owl-carousel");

if (syncCont) {
    syncCont.append('<div class="owl-carousel carousel-shop-detail-inner owl-theme" id="syncChild"></div>');
    let arrTotal = syncCarousel.find('.item').length - 1;
    let item = '';
    let syncChild = $("#syncChild");
    for (let i = 0; i <= arrTotal; i++) {
        item = syncCarousel.find('.item').eq(i).find('img').attr('src');
        syncChild.append('<!-- Item ' + (i + 1) + '--><div class="item"><img src="' + item + '" alt=""></div>');
    }
}
let syncChild = $("#syncChild.owl-carousel");

syncCarousel.owlCarousel({
    singleItem: true,
    items: 1,
    dots: false,
    slideSpeed: 1000,
    mouseDrag: false,
    nav: true,
    pagination: false,
    afterAction: syncPosition(),
    responsiveRefreshRate: 200,
});

syncChild.owlCarousel({
    items: 4,
    pagination: false,
    margin: 0,
    dots: false,
    afterAction: syncPosition(),
});

function syncPosition() {
    setTimeout(function() {
        syncChild.find(".owl-item").first().addClass("synced");
    }, 300);
}

// Sync nav
syncCarousel.on('click', '.owl-next', function() {
    let innerActive = syncChild.find('.owl-item.active:first').index();
    let innerActiveLast = syncChild.find('.owl-item.active:last').index();
    let innerActiveSynced = syncChild.find('.owl-item.active.synced').index();
    let innerSynced = syncChild.find('.owl-item.synced').index();
    if (innerActiveSynced === -1) {
        if (innerActive > innerSynced) {
            while (innerActive > innerSynced) {
                syncChild.trigger('prev.owl.carousel');
                innerSynced++;
            }
        } else if (innerActive < innerSynced) {
            while (innerActive < innerSynced) {
                syncChild.trigger('next.owl.carousel');
                innerSynced--;
            }
        }
    } else if (innerActiveSynced === innerActiveLast) {
        syncChild.trigger('next.owl.carousel');
    }
    let itemBottom = syncChild.find('.owl-item.synced');
    itemBottom.next().addClass('synced').siblings().removeClass('synced');
});
syncCarousel.on('click', '.owl-prev', function() {
    let innerActive = syncChild.find('.owl-item.active:first').index();
    let innerActiveSynced = syncChild.find('.owl-item.active.synced').index();
    let innerSynced = syncChild.find('.owl-item.synced').index();
    if (innerActiveSynced === -1) {
        if (innerActive > innerSynced) {
            while (innerActive > innerSynced - 2) {
                syncChild.trigger('prev.owl.carousel');
                innerSynced++;
            }
        } else if (innerActive < innerSynced) {
            while (innerActive < innerSynced - 2) {
                syncChild.trigger('next.owl.carousel');
                innerSynced--;
            }
        }
    } else if (innerActiveSynced === innerActive) {
        syncChild.trigger('prev.owl.carousel');
    }
    let itemBottom = syncChild.find('.owl-item.synced');
    itemBottom.prev().addClass('synced').siblings().removeClass('synced');
});

syncChild.on("click", ".owl-item", function() {
    let number = $(this).index();
    syncCarousel.trigger("to.owl.carousel", number, 300);
    $(this).siblings().removeClass('synced');
    $(this).addClass("synced");
});

/* =====================================
            Coming Soon Count Down
    ====================================== */
// let countDown = $(".count_down");
// if (countDown.length) {
//     countDown.downCount({
//         // month / day / Year
//         date: '2/21/2021 12:00:00',
//         offset: +10
//     });
// }

$('.count_down').countdown({
    date: '12/24/2020 23:59:59'
}, function() {
    alert('Merry Christmas!');
});

// Responsive Js