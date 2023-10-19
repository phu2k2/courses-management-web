$(document).ready(function () {
    $(".reply-comment").hide();
    $(".btn-reply").on("click", function () {
        var parentId = $(this).attr('data-parentId');
        $(`.reply-comment.${parentId}`).toggle();
    })

    $(".reply-wrap").hide();
    $(".show-reply").on("click", function () {
        var parentId = $(this).attr('data-parentId');
        $(`.reply-wrap.${parentId}`).show();
        $(`.show-reply.${parentId}`).hide();
    })

    $(".hide-reply").on("click", function () {
        var parentId = $(this).attr('data-parentId');
        $(`.reply-wrap.${parentId}`).hide();
        $(`.show-reply.${parentId}`).show();
    })

    $("a#commentId").bind("click", function () {
        var commentId = $(this).attr("data-id");
        $("#submitDelete").attr("data-id", `${commentId}`);
    })

    $("#submitDelete").on("click", function () {
        var commentId = $(this).attr("data-id");
        $(`#formDelete${commentId}`).trigger("submit");
    })

    setTimeout(() => {
        $(".notification-toast").hide();
    }, 2000);
});
