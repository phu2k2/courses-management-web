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

    $(".edit-comment").hide();
    $(".btn-edit").bind("click", function () {
        var editId = $(this).attr("data-comment-id");
        $(`.edit-comment.${editId}`).toggle();
        $(`.comment-content.${editId}`).toggle();
    })
});
