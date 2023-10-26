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
    $('#nextStep1').bind('click', function () {
        $('#stepOne').hide();
        $('#stepTwo').show();
    })

    $('#cancelStep1').bind('click', function () {
        $('#stepTwo').hide();
        $('#stepOne').show();
        $('#uploadS3').attr('aria-disabled', 'false');
        $('#uploadS3').css('pointer-events', 'auto');
        $('#btnFinish').attr('disabled', 'true');
    })

    $('#uploadS3').bind('click', function () {
        $('#uploadS3').attr('aria-disabled', 'true');
        $('#uploadS3').css('pointer-events', 'none');
        $('#btnFinish').removeAttr('disabled');
    })
})
