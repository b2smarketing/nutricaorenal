<?php
	$stringASerPesquisada = isset($_GET['s']) ? $_GET['s'] : null;

    $links = array(['Rins: Funções','os-rins-funcoes.php'],
    ['Rins: Anatomia','os-rins-anatomia.php'],
    ['Como funcionam os rins?','os-rins-como-funcionam.php'],
    ['Programa de apoio ao paciente','programa-de-apoio-ao-paciente.php'],
    ['O que é função renal?','os-rins-o-que-e-funcao-renal.php'],
    ['O que é Doença Renal Crônica?','doenca-renal-cronica-definicao.php'],
    ['Quais são os sinais e os sintomas da Doença Renal Crônica?','doenca-renal-cronica-sintomas.php'],
    ['Causas e fatores de risco da doença renal crônica','doenca-renal-cronica-causas.php'],
    ['Diagnóstico','doenca-renal-cronica-diagnostico.php'],
    ['Como se prevenir da DRC','doenca-renal-cronica-prevencao.php'],
    ['Opções de Tratamento na Doença Renal Crônica','tratamentos-visao-geral.php'],
    ['Tratamento conservador na doença renal crônica','opcoes-de-tratamento-conservador.php'],
    ['Hemodiálise','opcoes-de-tratamento-hemodialise.php'],
    ['Diálise Peritoneal','opcoes-de-tratamento-dialise-peritoneal.php'],
    ['Transplante renal','opcoes-de-tratamento-transplante-renal.php'],
    ['Manejo nutricional na doença renal crônica de acordo com os estágios','manejo-nutricional-informacoes-gerais.php'],
    ['Nutrição e pré-diálise','nutricao-na-pre-dialise.php'],
    ['Nutrição na hemodiálise','nutricao-na-hemodialise.php'],
    ['Nutrição na diálise peritoneal','nutricao-na-dialise-peritoneal.php'],
    ['Nutrientes','nutrientes.php'],
    ['Monitoramento do estado nutricional em pacientes com doença renal crônica','monitoramento.php'],
    ['Sites úteis','site.php'],
    ['Juntos pelo Rim - Programa de Apoio ao Paciente Renal','programa-de-apoio-ao-paciente.php'],
    ['Unidades da Fresenius Kabi','https://www.fresenius-kabi.com/br/a-empresa'],
    ['Glossário','glossario.php'],
    ['Vídeo Receitas','video-receitas.php'],
    ['Entre em Contato Conosco','https://www.fresenius-kabi.com/br/fale-conosco']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php get_header(); ?>
</head>
<body>

	<header>           
		<?php include ("includes/menu2.php"); ?>     
	</header>

	<section class="block bg-white" id="pesquisa">
		<div class="container-fluid">
			<div class="row">
				<?php if ($stringASerPesquisada) { ?>
					<h2 class="text-center tituloPesquisa">Mostrando resultados de pesquisa para <span class="darken-blue"><?php echo $stringASerPesquisada ?></span></h2>
				<?php } else { ?>
					<h2 class="text-center">O que você está pesquisando?</h2>
				<?php } 
					
				$aoMenosUmResultado = false;

				foreach($links as $link) {
					if (strrpos(strtolower($link[0]), strtolower($stringASerPesquisada)) !== false) {
						echo "<div class='col-md-12 resultado'><a href='$link[1]'><h3>$link[0]</h3></a></div>";
						$aoMenosUmResultado = true;
					}
				}

				if (!$aoMenosUmResultado) {
					echo "<div class='col-md-12'><p class='text-center no-result'>Desculpe, nenhum resultado encontrado :/</p></div>";
				}
				?>
			</div>
		</div>	
	</section>	
	

	<footer>
		<?php include ("includes/footer.php"); ?>
	</footer>
	
</body>
</html>