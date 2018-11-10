$(document).ready(function () {
    // Mask 1
    var options = {
        onKeyPress: function(cpfcnpj, e, field, options) {
            var masks = ['000.000.000-000', '00.000.000/0000-00'];
            var mask = (cpfcnpj.length > 14) ? masks[1] : masks[0];
            $('.cpfcnpj').mask(mask, options);
        }
    };
    $('.cpfcnpj').mask('000.000.000-000', options);




    $('#pesCep').mask('00000-000', {reverse: true});
    $('#CadProdutoPreco').mask('#.##0,00', {reverse: true});
    $('#campanhaProdutoPreco').mask('#.##0,00', {reverse: true});
    $('.date').mask('00/00/0000');


    var campocnpj = $("#cnpjEmpresa");
    campocnpj.mask('00.000.000/0000-00', { reverse: true });
});