$(function () {

    TelescopeBangladesh.Platforms.Init();
    if (!TelescopeBangladesh.IsIFrame()) {
        TelescopeBangladesh.Cookies.InitDisclaimer();
        TelescopeBangladesh.InitModal();
        //TelescopeBangladesh.InitStickyNavbar();
    }

});

var TelescopeBangladesh = TelescopeBangladesh || {};

TelescopeBangladesh.Platforms = {

    Init: function () {

        if (TelescopeBangladesh.Platforms.initDone === true)
            return;
        TelescopeBangladesh.Platforms.initDone = true;

        var body = $('body');
        if (!body.hasClass("mbl") && !body.hasClass("dsk")) {
            var md = new MobileDetect(window.navigator.userAgent);
            if (md.mobile()) {
                body.addClass("mbl");
                var os = md.os();
                if (os == "AndroidOS") body.addClass("and");
                else if (os == "iOS") body.addClass("ios");
            } else
                body.addClass("dsk");
        }
        TelescopeBangladesh.Platforms.isMobile = body.hasClass("mbl");
        TelescopeBangladesh.Platforms.isDesktop = body.hasClass("dsk");
    }

};

TelescopeBangladesh.Cookies = TelescopeBangladesh.Cookies || {

    Get: function (cname) {

        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1);
            if (c.indexOf(name) == 0)
                return c.substring(name.length, c.length);
        }
        return "";
    },

    Set: function (cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    },

    InitDisclaimer: function () {
        if (TelescopeBangladesh.Cookies.Get("cookiesOK") != "ok") {
            var cookiesDisclaimer = $("<div class=\"cookies-disclaimer\">Telescope Banladesh website uses Cookies</div>");
            var cookiesDisclaimerButton = $("<a class=\"btn-type-1-blue\">Got it!</a>");
            cookiesDisclaimerButton.click(function () {
                TelescopeBangladesh.Cookies.Set("cookiesOK", "ok", 365);
                $(".cookies-disclaimer").remove();
            });
            cookiesDisclaimer.append(cookiesDisclaimerButton);
            $("body").append(cookiesDisclaimer);
        }
    }
};

TelescopeBangladesh.InitModal = TelescopeBangladesh.InitModal || function () {

    var modalDialog = $('<div class="modal-dialog"></div>');
    var modalHolder = $('<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby=" label" aria-hidden="true"></div>');
    modalHolder.append(modalDialog);
    $('body').append(modalHolder);

    $("a[data-modal]").on("click", function (e) {

        var url = $(this).attr('data-modal-url');
        modalDialog.load(url, function () {
            modalHolder.modal({
                keyboard: true
            }, 'show');
        });
        return false;
    });

};

TelescopeBangladesh.InitStickyNavbar = TelescopeBangladesh.InitStickyNavbar || function () {

    var navbar = $('#header > .navbar');
    var sticky_navigation_offset_top = navbar.offset().top;
    var sticky_navigation = function () {
        if ($(window).scrollTop() > sticky_navigation_offset_top)
            navbar.addClass('fixed');
        else
            navbar.removeClass('fixed');
    };
    $(window).scroll(sticky_navigation);
    sticky_navigation();

};

TelescopeBangladesh.Logout = TelescopeBangladesh.Logout || function () {

    $.ajax({
        type: 'POST',
        url: '../../../../api/signout.php',
        success: function () {
            window.location.reload();
        }
    });

};

TelescopeBangladesh.IsIFrame = TelescopeBangladesh.IsIFrame || function () {
    return window.location !== window.parent.location;
}

TelescopeBangladesh.GeneratePassword = TelescopeBangladesh.GeneratePassword || function (length) {
    if (!length)
        length = 8;
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    return pass;
}

TelescopeBangladesh.Parallax = TelescopeBangladesh.Parallax || {

    Objects: [],

    UpdateObjects: function (elementOnly) {

        if (TelescopeBangladesh.Parallax.available !== true)
            return;

        if (!TelescopeBangladesh.Parallax.Objects)
            return;

        var documentElement = $(document);
        var documentHeight = documentElement.height();
        var windowElement = $(window);
        var windowHeight = windowElement.height();
        var windowTop = windowElement.scrollTop();
        var windowBottom = windowTop + windowHeight;
        var windowCenter = windowTop + windowHeight / 2;

        TelescopeBangladesh.Parallax.Objects.forEach(function (object) {

            if (elementOnly && object.element != elementOnly)
                return;

            if ($.isFunction(object.beforeUpdate))
                object.beforeUpdate();

            var element = object.element;
            var type = object.type;
            var fixed = .5;
            if (typeof object["fixed"] !== 'undefined')
                fixed = object.fixed;

            var elementTop = element.offset().top;
            if (type == "element")
                elementTop -= object.parallaxDelta;

            var elementHeight = element.outerHeight();
            var elementBottom = elementTop + elementHeight;
            var elementCenter = elementTop + elementHeight / 2;

            if (type == "background" && (windowBottom < elementTop || windowTop > elementBottom))
                return;

            var parallaxCenter = elementCenter;
            if (typeof object["enableScreenLimits"] !== 'undefined') {
                if (parallaxCenter < windowHeight / 2) parallaxCenter = windowHeight / 2;
                else if (parallaxCenter > documentHeight - windowHeight / 2) parallaxCenter = documentHeight - windowHeight / 2;
            }
            object.parallaxDelta = (windowCenter - parallaxCenter) * fixed;

            //if (type == "element" && (windowBottom < elementTop + parallaxDelta || windowTop > elementBottom + parallaxDelta))
            //	return;

            switch (type) {

                case "background":

                    if (typeof object["enableScreenLimits"] !== 'undefined' && object["backgroundHeight"] !== 'undefined') {
                        var backgroundHeight = object["backgroundHeight"];
                        var parallaxMaxWindow = (windowHeight - elementHeight) / 2;
                        if (parallaxMaxWindow > elementTop) parallaxMaxWindow = elementTop;
                        else if (parallaxMaxWindow > documentHeight - elementBottom) parallaxMaxWindow = documentHeight - elementBottom;
                        parallaxMaxWindow *= fixed;
                        var parallaxMaxBackground = (backgroundHeight - elementHeight) / 2;
                        if (parallaxMaxBackground < parallaxMaxWindow)
                            object.parallaxDelta *= parallaxMaxBackground / parallaxMaxWindow;
                        var backgroundTop = elementHeight / 2 - backgroundHeight / 2 + object.parallaxDelta;
                        element.css({backgroundPositionY: backgroundTop + "px"});
                    } else {
                        element.css({backgroundPositionY: "calc(50% + " + object.parallaxDelta + "px)"});
                    }
                    break;

                case "element":

                    element.offset({top: elementTop + object.parallaxDelta});
                    break;
            }
        });
    },

    OnScroll: function () {
        TelescopeBangladesh.Parallax.UpdateObjects();
    },

    Init: function () {
        if (TelescopeBangladesh.Parallax.initDone === true)
            return;
        TelescopeBangladesh.Parallax.initDone = true;
        TelescopeBangladesh.Platforms.Init();
        if (TelescopeBangladesh.Platforms.isMobile)
            return;
        TelescopeBangladesh.Parallax.available = true;
        $(window).on('scroll resize', TelescopeBangladesh.Parallax.OnScroll);
        $(document).ready(TelescopeBangladesh.Parallax.Ready);
    },

    Ready: function () {
        TelescopeBangladesh.Parallax.Objects.forEach(function (object) {
            switch (object.type) {
                case "element":
                    object.element.css({visibility: "visible"});
                    break;
                case "background":
                    object.element.css({backgroundImage: object.backgroundImage});
                    break;
            }
        });
        TelescopeBangladesh.Parallax.UpdateObjects();
    },

    AddElement: function (element, params) {
        TelescopeBangladesh.Parallax.Init();
        if (TelescopeBangladesh.Parallax.available !== true)
            return;
        if (!params)
            params = {};
        params.type = "element";
        params.element = element;
        params.parallaxDelta = 0;
        if (!$.isReady)
            element.css({visibility: "hidden"});
        TelescopeBangladesh.Parallax.Objects.push(params);
        TelescopeBangladesh.Parallax.UpdateObjects(element);
    },

    AddBackground: function (element, params) {
        TelescopeBangladesh.Parallax.Init();
        if (TelescopeBangladesh.Parallax.available !== true)
            return;
        if (!params)
            params = {};
        params.type = "background";
        params.element = element;
        params.backgroundImage = element.css("background-image");
        params.parallaxDelta = 0;
        if (!$.isReady)
            element.css({backgroundImage: ""});
        TelescopeBangladesh.Parallax.Objects.push(params);
        TelescopeBangladesh.Parallax.UpdateObjects(element);
    }

};
