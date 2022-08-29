export function loadJQuery() {
    (function ($) {
        "use strict";

        // ACCORDIAN

        panelAccordian();

        // RADIAL PROGRESS BAR
        enableRadialProgress();

        enableSwiper();

        /*COUNTER*/
        var countLineProgress = 0;
        var countCounterUp = 0;
        var a = 0;
        countCounterUp = enableCounterUp(countCounterUp);

        $(window).on("scroll", function () {
            countCounterUp = enableCounterUp(countCounterUp);
        });

        /*CUSTOME ISOTOPE*/
        var selectedAttr = $("[data-select].active");
        selectedActive(selectedAttr);

        $("[data-select]").on("click", function () {
            // @ts-ignore
            var selectedAttr = $(this);
            selectedActive(selectedAttr);
            return false;
        });

        // DROPDOWN MENU

        var winWidth = $(window).width();
        dropdownMenu(winWidth);

        $(window).on("resize", function () {
            winWidth = $(window).width();
            dropdownMenu(winWidth);
        });

        // $("[data-menu]").on("click", function () {
        //     // @ts-ignore
        //     var mainMenu = $(this).data("menu");

        //     $(mainMenu).toggleClass("visible-menu");
        // });
    })(
        // @ts-ignore
        jQuery
    );
}
