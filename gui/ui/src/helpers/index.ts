export function loadJQuery() {
    (function ($) {
        ("use strict");

        // ACCORDIAN
        // @ts-ignore
        panelAccordian();

        // RADIAL PROGRESS BAR
        // @ts-ignore
        enableRadialProgress();

        /*COUNTER*/
        var countLineProgress = 0;
        var countCounterUp = 0;
        var a = 0;
        // @ts-ignore
        countCounterUp = enableCounterUp(countCounterUp);

        $(window).on("scroll", function () {
            // @ts-ignore
            countCounterUp = enableCounterUp(countCounterUp);
        });

        /*CUSTOME ISOTOPE*/
        var selectedAttr = $("[data-select].active");
        // @ts-ignore
        selectedActive(selectedAttr);

        $("[data-select]").on("click", function () {
            // @ts-ignore
            var selectedAttr = $(this);
            // @ts-ignore
            selectedActive(selectedAttr);
            return false;
        });

        // DROPDOWN MENU

        var winWidth = $(window).width();
        // @ts-ignore
        dropdownMenu(winWidth);

        $(window).on("resize", function () {
            winWidth = $(window).width();
            // @ts-ignore
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

export function scrollTop() {
    window.scroll({
        top: 0,
        behavior: "smooth",
    });
}
