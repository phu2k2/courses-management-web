function submitForm(id) {
    var formId = document.querySelector("#formEdit" + id);
    var content = document.getElementById("content" + id).value;
    var userId = document.getElementById("userId").value;
    var baseUrl = formId.dataset.url;

    axios.put(baseUrl, {
        'user_id':userId,
        'content': content,
    })
    .then(function (response) {
        if (response.status == 200) {
            $(`.edit-comment.${id}`).hide();
            $(`.comment-content.${id}`).html(content);
            $(`.comment-content.${id}`).show();
        }
        $(".toast-body").html(response.data.message);
        $(".toast").show();
        setTimeout(() => {
            $(".toast").hide();
        }, 5000);
    })
    .catch(function (error) {
        $(".toast-body").html(error.data.message);
        $(".toast").show();
    });
}
