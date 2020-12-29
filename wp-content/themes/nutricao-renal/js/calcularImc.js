var calcularIMC = function() {
    var altura = parseFloat($("input[name=altura]").val().replace(',', '.'));
    var peso = parseFloat($("input[name=peso]").val().replace(',', '.'));

    var imc = peso / (altura * altura);
    
    $("input[name=resultado]").val(imc.toFixed(2));
}

window.onload = function() {
    $("#calcular").on("click", calcularIMC);
    $("input[name=peso]").keypress(function(e) {
        if(e.which == 13) {
            calcularIMC();
        }
    });
}