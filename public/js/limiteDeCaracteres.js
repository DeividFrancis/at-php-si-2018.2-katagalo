function limite(e) {
    try {
        var element = e.target
    } catch (er) {

    };
    try {
        var element = event.srcElement
    } catch (er) {

    };
    try {
        var ev = e.which
    } catch (er) {

    }; try {
        var ev = event.keyCode
    } catch (er) {

    }; if ((ev != 0) && (ev != 8) && (ev != 13))
        if (!RegExp(/[0-9]/gi).test(String.fromCharCode(ev)))
            return false;
    if (element.value + String.fromCharCode(ev) > 100) return false;
}
window.onload = function () {
    document.getElementById('input-qtd').onkeypress = limite;
}