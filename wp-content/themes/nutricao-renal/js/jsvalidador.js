// JavaScript Validador , E.M. - 30/12/2020

// ========================== MASCARAS ======================

//mascara ao RG
function MascaraRG(rg) {
        if ((rg) == false) {
                event.returnValue = false;
        }
        return formataCampo(rg, '00.000.000-0', event);
}

//mascara de CEP
function MascaraCep(cep) {
        if (mascaraInteiro(cep) == false) {
                event.returnValue = false;
        }
        return formataCampo(cep, '00.000-000', event);
}

//mascara de data
function MascaraData(data) {
        if (mascaraInteiro(data) == false) {
                event.returnValue = false;
        }
        return formataCampo(data, '00/00/0000', event);
}

//mascara do Telefone
function MascaraTelefone(tel) {
        if (mascaraInteiro(tel) == false) {
                event.returnValue = false;
        }
        return formataCampo(tel, '(00) 0000-0000', event);
}
//mascara do Celular
function MascaraCelular(tel) {
        if (mascaraInteiro(tel) == false) {
                event.returnValue = false;
        }
        return formataCampo(tel, '(00) 00000-0000', event);
}

//mascara do CPF
function MascaraCPF(cpf) {
        if (mascaraInteiro(cpf) == false) {
                event.returnValue = false;
        }
        return formataCampo(cpf, '000.000.000-00', event);
}

//mascara de CNPJ
function MascaraCNPJ(cnpj) {
        if (mascaraInteiro(cnpj) == false) {
                event.returnValue = false;
        }
        return formataCampo(cnpj, '00.000.000/0000-00', event);
}

// =============================== VALIDAÇÕES ===============================
// valida Nomes
function ValidaNome(nome) {
        if (nome.value.length < 3 || !isNaN(nome.value)) {
                $(".nome-completo .wpforms-field-description").html('Nome inválido').css({ 'color': '#900' });
                $(".nome-completo .wpforms-field-name-first").val('');
                $(".nome-completo .wpforms-field-name-first").focus();
        }
}

function ValidaSobreNome(nome) {
        if (nome.value.length < 3 || !isNaN(nome.value)) {
                $(".nome-completo .wpforms-field-description").html('Sobrenome inválido').css({ 'color': '#900' });
                $(".nome-completo .wpforms-field-name-last").val('');
                $(".nome-completo .wpforms-field-name-last").focus();
        }
}

function ValidaUser(nome) {
        if (nome.value.length < 3 || !isNaN(nome.value)) {
                $(".usuario .wpforms-field-description").html('Nome de Usuário inválido').css({ 'color': '#900' });
                $(".usuario input").val('');
                $(".usuario input").focus();
        }
}
function ValidaPass(nome) {
        if (nome.value.length < 3 || !isNaN(nome.value)) {
                $(".senha .wpforms-field-description").html('Senha inválida').css({ 'color': '#900' });
                $(".senha input").val('');
                $(".senha input").focus();
        }
}

// valida E-Mail
function ValidaMail(mail) {
        var exp = /^\w+([\.-]\w+)*@\w+\.(\w+\.)*\w{2,3}$/;
        if (!exp.test(mail.value)) {
                $(".email .wpforms-field-description").html('E-Mail inválido').css({ 'color': '#900' });
                $(".email .wpforms-field-email-primary").val('');
                $(".email .wpforms-field-email-primary").focus();
                $(".email .wpforms-field-email-secondary").val('');
        }
}

// Pesquisa CEP

function limpaformuláriocep() {
        //Limpa valores do formulário de cep.        
        $(".estado select").val("Estado");
        $(".logradouro .wpforms-field-name-first").val("");
        $(".bairro-cidade .wpforms-field-name-first").val("");
        $(".bairro-cidade .wpforms-field-name-last").val("");
}

function meucallback(conteudo) {
        if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.               
                $(".estado select").val(conteudo.uf);
                $(".logradouro .wpforms-field-name-first").val(conteudo.logradouro);
                $(".bairro-cidade .wpforms-field-name-first").val(conteudo.bairro);
                $(".bairro-cidade .wpforms-field-name-last").val(conteudo.localidade);
        }
        else {
                //CEP não Encontrado.
                limpaformuláriocep();
                $(".campocep .wpforms-field-description").html('CEP não encontrado!').css({ 'color': '#900' }); $(".campocep input").val(''); $(".campocep input").focus();
        }
}

function pesquisa_cep(valor) {
        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if (validacep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $(".estado select").val("...");
                        $(".logradouro .wpforms-field-name-first").val("...");
                        $(".bairro-cidade .wpforms-field-name-first").val("...");
                        $(".bairro-cidade .wpforms-field-name-last").val("...");

                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meucallback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                }
                else {
                        //cep é inválido.
                        limpaformuláriocep();
                        $(".campocep .wpforms-field-description").html('Formato de CEP inválido').css({ 'color': '#900' }); $(".campocep input").val(''); $(".campocep input").focus();
                }
        }
        else {
                //cep sem valor, limpa formulário.
                limpaformuláriocep();
        }
};

//valida CEP
function ValidaCep(vcep) {
        var exp = /\d{2}\.\d{3}\-\d{3}/;
        if (!exp.test(vcep.value)) {
                $(".campocep .wpforms-field-description").html('CEP inválido').css({ 'color': '#900' }); $(".campocep input").val(''); $(".campocep input").focus();
        } else {
                pesquisa_cep(vcep.value)
        }
}

//valida data
function ValidaData(data) {
        var exp = /\d{2}\/\d{2}\/\d{4}/;
        if (!exp.test(data.value)) { 
                $(".campo-data .wpforms-field-description").html('Data inválida').css({ 'color': '#900' }); $(".campo-data input").val(''); $(".campo-data input").focus();
        }
}

//valida telefone Celular
function ValidaTelefone(tel) {
        var exp = /\(\d{2}\)\ \d{5}\-\d{4}/;
        if (!exp.test(tel.value)) { alert('Numero de Telefone Invalido!'); form1.tel.value = ''; form1.rg.focus(); return false; }
}

//valida o CPF digitado
function ValidarCPF(campocpf) {
        var exp = /\.|\-/g;
        var cpf = campocpf.value.replace(exp, '').toString();
        if (cpf.length == 11) {
                var v = [];
                //Calcula o primeiro dígito de verificação.
                v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
                v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
                v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
                v[0] = v[0] % 11;
                v[0] = v[0] % 10;
                //Calcula o segundo dígito de verificação.
                v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
                v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
                v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
                v[1] = v[1] % 11;
                v[1] = v[1] % 10;
                //Retorna Verdadeiro se os dígitos de verificação são os esperados.
                if ((v[0] != cpf[9]) || (v[1] != cpf[10])) {
                        $(".campo-cpf .wpforms-field-description").html('CPF inválido').css({ 'color': '#900' }); $(".campo-cpf input").val(''); $(".campo-cpf input").focus();
                }

                else if (cpf[0] == cpf[1] && cpf[1] == cpf[2] && cpf[2] == cpf[3] && cpf[3] == cpf[4] && cpf[4] == cpf[5] && cpf[5] == cpf[6] && cpf[6] == cpf[7] && cpf[7] == cpf[8] && cpf[8] == cpf[9] && cpf[9] == cpf[10]) {
                        $(".campo-cpf .wpforms-field-description").html('CPF inválido').css({ 'color': '#900' }); $(".campo-cpf input").val(''); $(".campo-cpf input").focus();
                }

                else { console.log("CPF ok") }

        } else { $(".campo-cpf .wpforms-field-description").html('CPF inválido').css({ 'color': '#900' }); $(".campo-cpf input").val(''); $(".campo-cpf input").focus(); } // 11
}

//valida numero inteiro com mascara
function mascaraInteiro() {
        if (event.keyCode < 48 || event.keyCode > 57) {
                event.returnValue = false;
                return false;
        }
        return true;
}

//valida o CNPJ digitado
function ValidarCNPJ(ObjCnpj) {
        var cnpj = ObjCnpj.value;
        var valida = new Array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
        var dig1 = new Number;
        var dig2 = new Number;

        exp = /\.|\-|\//g;
        cnpj = cnpj.toString().replace(exp, "");
        var digito = new Number(eval(cnpj.charAt(12) + cnpj.charAt(13)));

        for (i = 0; i < valida.length; i++) {
                dig1 += (i > 0 ? (cnpj.charAt(i - 1) * valida[i]) : 0);
                dig2 += cnpj.charAt(i) * valida[i];
        }
        dig1 = (((dig1 % 11) < 2) ? 0 : (11 - (dig1 % 11)));
        dig2 = (((dig2 % 11) < 2) ? 0 : (11 - (dig2 % 11)));

        if (((dig1 * 10) + dig2) != digito) { alert('CNPJ Invalido!'); form1.cnpj.value = ''; form1.rg.focus(); return false; }

}

//formata de forma generica os campos..
function formataCampo(campo, Mascara, evento) {
        var boleanoMascara;

        var Digitato = evento.keyCode;
        var exp = /\-|\.|\/|\(|\)| /g;
        campoSoNumeros = campo.value.toString().replace(exp, "");

        var posicaoCampo = 0;
        var NovoValorCampo = "";
        var TamanhoMascara = campoSoNumeros.length;;

        if (Digitato != 8) { // backspace 
                for (i = 0; i <= TamanhoMascara; i++) {
                        boleanoMascara = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                || (Mascara.charAt(i) == "/"))
                        boleanoMascara = boleanoMascara || ((Mascara.charAt(i) == "(")
                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))
                        if (boleanoMascara) {
                                NovoValorCampo += Mascara.charAt(i);
                                TamanhoMascara++;
                        } else {
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                                posicaoCampo++;
                        }
                }
                campo.value = NovoValorCampo;
                return true;
        } else {
                return true;
        }
}