$("#cpfcnpj").keydown(function(){
    try {
        $("#cpfcnpj").unmask();
    } catch (e) {}

    var tamanho = $("#cpfcnpj").val().length;

    if(tamanho < 11){
        $("#cpfcnpj").mask("999.999.999-99");
    } else if(tamanho >= 11){
        $("#cpfcnpj").mask("99.999.999/9999-99");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});


$(document).ready(function () {
    var campoPreco = $("#CadProdutoPreco");
    campoPreco.mask('#.##0,00', { reverse: true });
});

$(document).ready(function () {
    var campocnpj = $("#cnpjEmpresa");
    campocnpj.mask('00.000.000/0000-00', { reverse: true });
});