$(document).ready(function () {
    var campoCpf = $("#cpfUsuarioPessoaFisica");
    campoCpf.mask('000.000.000-00', { reverse: true });
});

$(document).ready(function () {
    var campodataNascimento = $("#dataNascimentoUsuarioPessoaFisica");
    campodataNascimento.mask('00/00/0000', { reverse: true });
});

$(document).ready(function () {
    var campoCnpj = $("#cnpjPessoaJuridica");
    campoCnpj.mask('00.000.000/0000-00', { reverse: true });
});

$(document).ready(function () {
    var campoPreco = $("#CadProdutoPreco");
    campoPreco.mask('#.##0,00', { reverse: true });
});