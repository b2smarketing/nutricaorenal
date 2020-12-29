var calcularFR = function() {
    var creatininaSerica = parseFloat($("input[name=creatininaSerica]").val().replace(',', '.'));
    var idade = parseInt($("input[name=idade]").val());
    var genero = ($("input[name=idade]").val());
    var peso = parseFloat($("input[name=peso]").val().replace(',', '.'));

    if (genero == "Homem") {
        clearenceDeCreatinina = ((140 - idade) * peso) / (creatininaSerica * 72);
    } else {
        clearenceDeCreatinina = (((140 - idade) * peso) / (creatininaSerica * 72)) * 0.85;
    }
        
    $("input[name=resultado]").val(clearenceDeCreatinina.toFixed(2));
}

window.onload = function() {
    $("#calcular").on("click", calcularFR);
    $("input[name=peso]").keypress(function(e) {
        if(e.which == 13) {
            calcularFR();
        }
    });
}