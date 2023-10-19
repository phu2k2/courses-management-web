$(document).ready(function (params) {
    var cartTotal = $("#badgeCart").text();
    if (cartTotal == 0) {
        $("#badgeCart").css("display", "none");
    }
    if (cartTotal > 99) {
        $("#badgeCart").text('99+');
    }
})
