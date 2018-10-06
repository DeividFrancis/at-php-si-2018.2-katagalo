function readName() {

    var imgUrl = $('#inputGroupFile01').val();
    var splitUrl = imgUrl.split('\\')
    var nomeImg = splitUrl[splitUrl.length - 1]

    $('#labelInputImg').text(nomeImg)
}

function addImageUser() {
    $('#user-add-input').click();
}

function readURL(input, idCampo) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image-' + idCampo).attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
    }
} 