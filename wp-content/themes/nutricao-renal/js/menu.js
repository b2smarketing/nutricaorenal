(function ($) { // Begin jQuery
    $(function () { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function (e) {
            $(this).siblings('.nav-dropdown').toggle();
            // Close one dropdown when selecting another
            $('.nav-dropdown').not($(this).siblings()).hide();
            e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function () {
            $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function () {
            $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function () {
            this.classList.toggle('active');
        });
    }); // end DOM ready
})(jQuery); // end jQuery



$(document).ready(function () {
    $(window).on('load', function () {

        $('#loadOverlay').fadeOut('slow');

    })
})

// Mostrar o consentimento sobre os cookies, se não tiver cookie funcional configurado
if (!checkCookie("decisaoCookies")) {
    // Limpa os cookies
    // Caso tenha sobrado algo do Analytics
    deleteAllCookies();
    // Mostra o consentimento
    $(".js-cookies-consent-container").slideToggle(function() {
        $(this).toggleClass("hide");
    });
} else {
    // Carrega o Analytics, se a decisão foi sim
    if (getCookie("decisaoCookies") === "sim") {
        carregarAnalytics();
    }
}

// Esconder o consentimento sobre os cookies ao aceitar ou recusar
$(".js-cookies-accept, .js-cookies-refuse").on("click", function() {
    $(".js-cookies-consent-container").slideToggle();
});

// Ao aceitar Analytics
$(".js-cookies-accept").on("click", function () {
    // Cookie funcional para armazenar respostas
    setCookie("decisaoCookies", "sim", 365);
    // Carregando Analytics
    carregarAnalytics();
});

// Ao recusar Analytics
$(".js-cookies-refuse").on("click", function () {
    // Cookie funcional para armazenar respostas
    setCookie("decisaoCookies", "nao", 30);
});

// Ao salvar preferências sobre cookies
$(".js-salvar-preferencias").on("click", function() {

    // Caso cookies funcionais desabilitados
    if (!$("#cookiesFuncionais").is(':checked')) {
        // Excluindo o cookie funcional
        setCookie("decisaoCookies", '', -1);
    } else {
        // Oculta a barra acima, se estiver aberta
        $(".js-cookies-consent-container").hide("slide");
    }

    if (!$("#cookiesAnaliticos").is(':checked')) {
        // Salvando o cookie de decisao se ainda houve
        // Se o if acima limpou ele, não vai ter tmb
        var decisaoSobreFuncionais = getCookie("decisaoCookies");
        
        // Limpando todos os cookies, pois limpar cada do Analytics é inviável
        deleteAllCookies();

        // Recuperando o cookie funcional, se houver e estiver habilitado
        if (decisaoSobreFuncionais) {
            setCookie("decisaoCookies", "nao", 30);
        }
    } else {
        // Esconde o consentimento lá em cima se estiver aberto
        $(".js-cookies-consent-container").slideToggle();

        // Habilita os funcionais visualmente também
        $("#cookiesFuncionais").prop('checked', true);

        // Configura o cookie funcional
        setCookie("decisaoCookies", "sim", 365);

        // Carrega o Analytics
        carregarAnalytics();
    }

    alert("Preferências salvas com sucesso!");
});

// Se estiver na página de configuração de cookies
if($("#cookiesFuncionais").length) {
    // Habilita o seletor de Cookies funcionais visualmente
    if (getCookie("decisaoCookies")) {
        $("#cookiesFuncionais").prop('checked', true);
    }
    // Habilita o seletor de Cookies analiticos visualmente
    if (getCookie("_ga")) {
        $("#cookiesAnaliticos").prop('checked', true);
    }
}

// Scroll suave
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Funções úteis
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie(cookie) {
    if (getCookie(cookie)) return true;
    return false;
}


function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=" + "; path=/" + "; domain="+window.location.hostname + ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
    }
}

function carregarAnalytics() {
    // Script
    var script = $('<script>', {
        type: 'text/javascript',
        src: 'https://www.googletagmanager.com/gtag/js?id=UA-82077519-21'
    });
    script[0].setAttribute("async", "");    

    // Colocar no Head
    $('head').append(script);

    // Configuração em si
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-82077519-21');
}