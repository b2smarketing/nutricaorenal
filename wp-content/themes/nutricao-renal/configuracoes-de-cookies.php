<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php get_header(); ?>
</head>
<body>    
<header><?php include ("includes/menu2.php"); ?></header>
<section id="guia-rapido">
	<div class="container-fluid declaracao">
        <h1>Configuração de "Cookies"</h1>
        <p>Nosso site utiliza “cookies”. “Cookies” são pequenos arquivos de texto que são armazenados localmente no seu computador pelo seu navegador da web. Encontre mais <a href="politica-de-cookies.php">informações sobre o uso de cookies aqui</a>.</p>
        <p>Você pode alterar as configurações do seu cookie Fresenius Kabi a qualquer momento.</p>

        <hr/>

        <div class="row align-flex-center">
            <div class="col-md-10">
                <h2>"Cookies" de sessão estritamente necessários</h2>
                <p>Para garantir uma experiência de navegação funcional, usamos “cookies” estritamente necessários. Eles são usados ​​exclusivamente por nós e são, portanto, chamados de “cookies” primários. Seu consentimento não é necessário para o uso desses cookies. Por este motivo, os cookies estritamente necessários não podem ser ativados ou desativados individualmente.</p>
            </div>
            <div class="col-md-2">
                <!-- Rounded switch -->
                <label class="c-switch">
                <input type="checkbox" disabled="true">
                <span class="slider2 round disabled"></span>
                </label>
            </div>
        </div>

        <hr/>

        <div class="row align-flex-center">
            <div class="col-md-10">
                <h2>"Cookies funcionais"</h2>
                <p>Os cookies funcionais salvam as escolhas que você faz ao visitar este site para oferecer uma funcionalidade aprimorada e recursos pessoais. Você ativa esses “cookies” por meio de uma ação explícita, por exemplo, ao consentir com o uso de “cookies” em nosso site. Por esse motivo, os “cookies” funcionais só podem ser desativados nesta página de configurações, mas não ativados.</p>
            </div>
            <div class="col-md-2">
                <!-- Rounded switch -->
                <label class="c-switch">
                <input type="checkbox" name="cookiesFuncionais" id="cookiesFuncionais">
                <span class="slider2 round"></span>
                </label>
            </div>
        </div>
    
        <hr/>

        <div class="row align-flex-center">
            <div class="col-md-10">
                <h2>"Cookies" analíticos</h2>
                <p>Os “cookies analíticos” nos permitem analisar a forma como este site é usado. Isso nos permite otimizar seu desempenho e aumentar a experiência do usuário. Caso aceite esse cookie, os cookies funcionais também serão habilitados para armazenar sua decisão e não perguntar novamente.</p>
            </div>
            <div class="col-md-2">
                <!-- Rounded switch -->
                <label class="c-switch">
                <input type="checkbox" name="cookiesAnaliticos" id="cookiesAnaliticos">
                <span class="slider2 round"></span>
                </label>
            </div>
        </div>

        <div class="row">
            <button class="btn-salvar js-salvar-preferencias">Salvar preferências</button>
        </div>

	</div>
</section>
<footer>
    <?php include ("includes/footer.php"); ?>
</footer>    
</body>
</html>