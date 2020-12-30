<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Nutrição Renal</title>
    <meta name="keywords" content="dieta, dieta renal cronica, dieta, frenesius kabi, kabi, nutrição, nutricao, doença, doencas, renal, rin, casa, rim, renal, nutricao">
	<meta name="description" content="O conteúdo deste site traz informações úteis relacionadas a nutrição ideal enquanto paciente renal, bem como informações básicas sobre a doença renal e o rim.">
	<meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png" type="image/png" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Nutrição Renal" />
    <meta property="og:description" content="O conteúdo deste site traz informações úteis relacionadas a nutrição ideal enquanto paciente renal, bem como informações básicas sobre a doença renal e o rim." />
    <meta http-equiv="Cache-Control" content="public" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo SITEPATH; ?>css/nutricao.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo SITEPATH; ?>js/jsvalidador.js"></script>
    <link rel="canonical" href="https://nutricaorenal.com.br<?php echo $_SERVER['REQUEST_URI']; ?>" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-82077519-21"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-82077519-21');
    </script>
</head>
<body>
<header>           
    <?php include ("includes/menu2.php"); ?>     

	<?php if(is_front_page()) : ?>
    <div class="slide">	
		<div class="pagination baby-pagination"></div>
		<div class="pagination baby-controls"></div>
		<ol class="baby" id="baby">
			
			<li class="baby-item">
				<a href="/programa-de-apoio-ao-paciente">
					<picture>
						<source media="(max-width: 780px)" srcset="<?php echo get_template_directory_uri();?>/img/banners/mobile/banner_juntos_pelo_rim.png">
						<img border="0" src="<?php echo get_template_directory_uri();?>/img/banners/banner_juntos_pelo_rim.png"/>
					</picture>
				</a>
			</li>
			<li class="baby-item">
				<picture>
					<source media="(max-width: 780px)" srcset="<?php echo get_template_directory_uri();?>/img/banners/mobile/nutricao-pre-dialise.png">
					<img border="0" src="<?php echo get_template_directory_uri();?>/img/banners/nutricao-pre-dialise.png" class="opacity-mobile"/>
				</picture>
				<div class="container-fluid textoSlide">
					<div class="col-lg-4">
						<h1 class="wow fadeIn">Nutrição na Pré Diálise</h1>
                        <p>Restrições na alimentação, podem significar sobrevida ao rim. Nutrir-se adequadamente é sinônimo de qualidade de vida e longevidade.</p>
                        <a class="wow fadeIn" href="nutricao-na-pre-dialise.php">Saiba Mais ></a>
					</div>
				</div>					
			</li>
			<li class="baby-item">
				<picture>
					<source media="(max-width: 780px)" srcset="<?php echo get_template_directory_uri();?>/img/banners/mobile/nutricao-hemodialise.png">
					<img border="0" src="<?php echo get_template_directory_uri();?>/img/banners/nutricao-hemodialise.png" class="opacity-mobile"/>
				</picture>
				<div class="container-fluid textoSlide">
					<div class="col-lg-4">
						<h1 class="wow fadeIn">Nutrição na Hemodiálise</h1>
                        <p>A escolha dos alimentos e o acompanhamento nutricional são partes essenciais para o sucesso do tratamento dialítico.</p>
                        <a class="wow fadeIn" href="nutricao-na-hemodialise.php">Saiba mais ></a>
					</div>
				</div>					
			</li>
			<li class="baby-item">
				<picture>
					<source media="(max-width: 780px)" srcset="<?php echo get_template_directory_uri();?>/img/banners/mobile/suporte-nutricional.png">
					<img border="0" src="<?php echo get_template_directory_uri();?>/img/banners/suporte-nutricional.png" class="opacity-mobile"/>
				</picture>
				<div class="container-fluid textoSlide">
					<div class="col-lg-4">
                        <h1 class="wow fadeIn">Suporte Nutricional</h1>
                        <p>O que considerar em relação a ingestão dos alimentos? Devo modificar meu hábito alimentar?</p>
                        <a class="wow fadeIn" href="manejo-nutricional-informacoes-gerais.php">Saiba Mais ></a>
					</div>
				</div>					
			</li>
		</ol>
		<div style="display:none !important;" class="baby-controls"></div>
        <div class="c-scroll-down">
			<a class="c-scroll-down__link" href="#bem-vindo"><i class="fa fa-chevron-down c-scroll-down__icon" aria-hidden="true"></i></a>
		</div>
    </div>
	<?php endif;?>
</header>