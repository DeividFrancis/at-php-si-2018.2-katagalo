$(document).ready(function () {
    $("#loadControl").click(function () {
        var params = '{}';
        $.ajax({
            type: "POST",
            url: "UserControlsService.asmx/GetUserControl",
            data: params,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (msg, status) {
                $("#resposta").html(msg.d);
            },
            error: function (xhr, msg, e) {
                alert(msg);
            }
        });
    });
});



function addFav(IdProd) {
    $.ajax({
        type: "POST",
        url: "./produto-list.php",//ENDEREÇO DO ARQUIVO PHP QUE IRÁ RECEBER A REQUISIÇÃO
        data: { 'prodId': IdProd, 'situacao': '1' },//SITUACAO: 0 PARA REMOVER DOS FAVORITOS E 1 PARA ADICIONAR NOS FAVORITOS
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            $("#favoritoId").css('color', '#f00');
        }
    })
}

// function mudaCorFav(favoritoId) {
//     $("#" + favoritoId).css("color", '#f00');
// }

// function mudaCorAlerta(alertaId) {
//     $("#" + alertaId).css("color", '#ffc107');
// }