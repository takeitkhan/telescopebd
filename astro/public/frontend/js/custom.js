jQuery(document).ready(function ($) {
    $.noConflict();
    $('.carousel').carousel({
        interval: 2000
    });

    // Mega Menu
    $(document).ready(function () {
        var menu = $("#header .menu-hover");
        var menuBtn = $("#header .menu-hover-start-button");
        var menuDrop = $("#header .menu-hover-backdrop");
        var menuHideCheck = function (e) {
            if (menu.is(":hidden"))
                return;
            var target = $(e.target);
            var modal = $(".modal");
            if (menu.has(target).length || menu.is(target) || modal.has(target).length || modal.is(target))
                return;
            menu.slideUp();
            menuDrop.fadeOut();
            $(document).off("click", menuHideCheck);
            setTimeout(function () {
                menuBtn.on("click", menuShow);
            }, 1);
        }
        var menuShow = function (e) {
            if (!menu.is(":hidden"))
                return;
            menu.slideDown();
            menuDrop.fadeIn();
            menuBtn.off("click", menuShow);
            setTimeout(function () {
                $(document).on("click", menuHideCheck);
            }, 1);
        }
        menuBtn.on("click", menuShow);
    });

    // Custom Port
    var updateViewport = function () {
        var minWidth = 500;
        var screenWidth = screen.width;
        switch (window.orientation) {
            case -90:
            case 90:
                minWidth = 730;
                screenWidth = screen.height;
                break;
        }
        document.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=" + (screenWidth / minWidth));
    }
    window.addEventListener('orientationchange', updateViewport);
    updateViewport();


    // Gallery

    $(".pswp-gallery").each(function (galleryIndex, object) {
        var holderPSWP = $(".pswp")[0];
        var holderGallery = $(this);
        var id = "pswp-uid-" + galleryIndex;
        holderGallery.attr("data-pswp-uid", id);
        var images = holderGallery.find("img");
        var items = [];

        images.each(function (imageIndex, object) {
            var image = images.eq(imageIndex);
            var imageSrc = image.attr("src");
            var imageAlt = image.attr("alt");
            var imageTarget = image.attr("pswp-target");
            if (!imageTarget)
                imageTarget = imageSrc;
            var imageTargetSize = image.attr("pswp-target-size").split("x");
            image.css({cursor: "pointer"});
            items.push({
                src: imageTarget,
                msrc: imageSrc,
                title: imageAlt,
                w: imageTargetSize[0],
                h: imageTargetSize[1]
            });
        });

        images.each(function (imageIndex, object) {
            var image = images.eq(imageIndex);
            var openedIndex = imageIndex;
            image.on("click", function () {
                var options = {
                    history: false,
                    galleryUID: id,
                    getThumbBoundsFn: function (index) {
                        var image = images.eq(index);
                        var offset = image.offset();
                        return {x: offset.left, y: offset.top, w: image.width()};
                    },
                    index: imageIndex
                };
                var pswp = new PhotoSwipe(holderPSWP, PhotoSwipeUI_Default, items, options);
                pswp.listen("afterChange", function () {
                    images.eq(openedIndex).css({visibility: ""});
                    openedIndex = pswp.getCurrentIndex();
                    images.eq(openedIndex).css({visibility: "hidden"});
                });
                pswp.listen('destroy', function () {
                    images.css({visibility: ""});
                });
                pswp.init();
                return false;
            });
        });

    });

    // Slick

    $('.autoplay').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 20000,
        prevArrow: '<div class="arrow-left"></div>',
        nextArrow: '<div class="arrow-right"></div>',
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1599,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 989,
                settings: {
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 766,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
