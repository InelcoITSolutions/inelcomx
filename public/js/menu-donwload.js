$(document).ready(function() {
    $(".menu-toggle").click(function(e) {
        if ($("#wrapper").hasClass('abierto')) {} else {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            $("#wrapper").toggleClass("abierto");
        }
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("#wrapper").toggleClass("abierto");
    });
    $(".list-group-item").click(function() {
        id = $(this).attr('data-toggle');
        $(".tab-visible").toggleClass("tab-visible");
        $("#" + id).addClass("tab-visible");
        $("#wrapper").toggleClass("toggled");
        $("#wrapper").toggleClass("abierto");
    });
});