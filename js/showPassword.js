//MOSTRAR SENHA ANTIGA
$(document).ready(function () {
    $('#showAntigaPassword').on('click', function () {

        var passwordField = $('#pesAntigaSenha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});

//MOSTRAR NOVA SENHA
$(document).ready(function () {
    $('#showNovaPassword').on('click', function () {

        var passwordField = $('#pesNovaSenha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});
//MOSTRAR SENHA CONFIRMAR NOVA SENHA
$(document).ready(function () {
    $('#showRepetirNovaPassword').on('click', function () {

        var passwordField = $('#pesRepetirNovaSenha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});

//MOSTRAR SENHA LOGIN
$(document).ready(function () {
    $('#showLoginPassword').on('click', function () {

        var passwordField = $('#login_senha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});

//MOSTRAR SENHA REGISTRO USUARIO
$(document).ready(function () {
    $('#showRegisterPassword').on('click', function () {

        var passwordField = $('#senha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});

//MOSTRAR SENHA REGISTRO USUARIO
$(document).ready(function () {
    $('#showConfirmarRegisterPasswordUsuario').on('click', function () {

        var passwordField = $('#repetirSenha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});

//MOSTRAR SENHA REGISTRO EMPRESA
$(document).ready(function () {
    $('#showRegisterPasswordEmpresa').on('click', function () {

        var passwordField = $('#senha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});

//MOSTRAR SENHA REGISTRO EMPRESA
$(document).ready(function () {
    $('#showConfirmarRegisterPasswordEmpresa').on('click', function () {

        var passwordField = $('#repetirSenha');
        var passwordFieldType = passwordField.attr('type');
        if (passwordFieldType == 'password') {
            passwordField.attr('type', 'text');
            $(this).val('Hide');
        } else {
            passwordField.attr('type', 'password');
            $(this).val('Mostrar');
        }
    });
});