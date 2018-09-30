function readName() {

    var imgUrl = $('#inputGroupFile01').val();
    var splitUrl = imgUrl.split('\\')
    var nomeImg = splitUrl[splitUrl.length - 1]

    $('#labelInputImg').text(nomeImg)
}