$(document).ready(function () {
    /* =====================
            HEADER Menua
    ===================== */
    // Submenua iskutatu
    $(".submenua").hide();

    // Logika ematen du submenura (hover)
    $(".menua > li").hover(
        function () {
            // Aitaren LI sartzean
            $(this)
                .find(".submenua")
                .stop(true, true)
                .slideDown(200);
        },
        function () {
            // Aitaren LI ateratzean (submenuak)
            $(this)
                .find(".submenua")
                .stop(true, true)
                .slideUp(200);
        }
    );
});