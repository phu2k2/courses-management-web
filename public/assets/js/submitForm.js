function submitForm(id) {
    var formId = document.querySelector("#formEdit" + id);
    var content = document.getElementById("content" + id).value;
    var baseUrl = formId.dataset.url;

    axios.put(baseUrl, {
        'content': content,
    }, { withCredentials: true })
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
        }, 3000);
    })
    .catch(function (error) {
        $(".toast-body").html(error.data.message);
        $(".toast").show();
        setTimeout(() => {
            $(".toast").hide();
        }, 3000);
    });
}

function deleteComment(id)
{
    var formDelete = document.getElementById("formDelete" + id);
    var baseUrl = formDelete.dataset.url;
    $('#submitDelete').on("click", function () {
        $('#cancelDelete').trigger('click');
        axios.delete(baseUrl, {
            params: { id: id },
        }, { withCredentials: true })
        .then(function (response) {
            $('#comment' + id).remove();
            $(".toast-body").html(response.data.message);
            $(".toast").show();
            setTimeout(() => {
                $(".toast").hide();
            }, 3000);
        })
        .catch(function (error) {
            $(".toast-body").html(error.data.message);
            $(".toast").show();
            setTimeout(() => {
                $(".toast").hide();
            }, 3000);
        });
    })

}
