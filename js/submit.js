function verificaSenha() {
    var senha = $("#senha").val();
    var senha2 = $("#repetirSenha").val();

    if (senha != senha2) {
        alert("As senhas estão diferentes, por favor digita as senhas iguais");
        return false;
    }
    return true;
}