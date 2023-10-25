function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.img-change').attr('src', e.target.result);
            $('.img-change').show();
        }

        reader.readAsDataURL(input.files[0]);
    }
}
