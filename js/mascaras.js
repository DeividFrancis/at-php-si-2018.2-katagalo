$(document).ready(function () {
    // Mask 1
    var options = {
        onKeyPress: function (cpfcnpj, e, field, options) {
            var masks = ['000.000.000-000', '00.000.000/0000-00'];
            var mask = (cpfcnpj.length > 14) ? masks[1] : masks[0];
            $('.cpfcnpj').mask(mask, options);
        }
    };
    $('.cpfcnpj').mask('000.000.000-000', options);


    //OTHER MASK'SS
    $('#pesCep').mask('00000-000', {reverse: true});
    $('#CadProdutoPreco').mask('#.##0,00', {reverse: true});
    $('#camp_precopromocao').mask('#.##0,00', {reverse: true});
    $('#cnpjEmpresa').mask('00.000.000/0000-00', {reverse: true});
    $('.date').mask('00/00/0000');
});

// $(".datepicker").datepicker({
//     showOtherMonths: true,
//     selectOtherMonths: true,
//     dateFormat: 'dd/mm/yy',
//     dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
//     dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
//     dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
//     monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
//     monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
//     nextText: 'Próximo',
//     prevText: 'Anterior'
// });