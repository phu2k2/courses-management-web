function submitForm(id) {
    var formId = document.querySelector("#formEdit" + id);

    var content = document.getElementById("content" + id).value;
    var baseUrl = formId.dataset.url;
    console.log(baseUrl);
    axios.put(baseUrl, {
        'content': content,
    })
    .then(function (response) {
        $(`.edit-comment.${id}`).hide();
        $(`.comment-content.${id}`).html(content);
        $(`.comment-content.${id}`).show();
    })
    .catch(function (error) {
        console.log(error);
    });
}
