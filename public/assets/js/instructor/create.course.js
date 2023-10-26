ClassicEditor
    .create(document.querySelector('#introduction'))
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#description'))
    .catch(error => {
        console.error(error);
    });
ClassicEditor
    .create(document.querySelector('#learns'))
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#requirements'))
    .catch(error => {
        console.error(error);
    });

$(document).ready(function () {
    $('#uploadS3').bind('click', function () {
        $('#uploadS3').attr('aria-disabled', 'true');
        $('#uploadS3').css('pointer-events', 'none');
        $('#btnFinish').removeAttr('disabled');
    })
})
