<?php get_header(); ?>
<section id="calculadoraimc">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Calculadora da TFG: estimando a função renal</h1>	
				<!-- <img border="0" src="<?php echo get_template_directory_uri();?>/img/title.png" /> -->
				<p>A função renal pode ser estimada utilizando diferentes fórmulas. Todas elas levam em consideração a creatinina sérica, tendo em vista que a concentração de creatinina no sangue é inversamente proporcional a função renal.  Se a função renal cai, o nível de creatinina sérica sobe. Então, a função renal pode ser estimada a partir de um exame de creatinina rotineiro.</p><p>Uma equação muito utilizada é a de Cockroft-Gault, a qual estima o cleareance de creatinina. Essa estimativa do cleareance é a forma mais precisa de se chegar no valor da TFG. Outra forma de se chegar na TFG é utilizando a equação MDRD (Modification of Diet in Renal Disease).</p><p>Atenção: A formula da TFG foi desenvolvida em estudos de pacientes com doença renal crônica. Em indivíduos saudáveis ela pode apresentar valores menos precisos. Além disso, essas fórmulas não são válidas para crianças</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<center><img border="0" src="<?php echo get_template_directory_uri();?>/img/etapas.png" /><br><br><br><br></center>
			</div>
			<div class="col-lg-6">
				<h2>Estágios da doença renal crônica baseada na TFG</h2>
				<p>A partir da análise da TFG, existem cinco estágios da doença renal crônica (de acordo com a diretriz do NKF-KDOQI [1]). O estágio 1 é o mais recente, enquanto que o estágio 5 representa a falência renal ou o estágio final da doença renal crônica (EFDR).</p>				
			</div>
		</div>
	</div>	
	<div class="container-fluid">
		<div class="row mb50">
			<h2>Calcule sua função renal</h2>
			<p>Preencha as lacunas com as casas decimais dos valores e pontos. Ex: 1.5mg/dl ou 62.3kg.</p>
			
			<div class="col-lg-3">
				<p><b>Creatinina sérica</b></p>
				<input type="number" name="creatininaSerica" placeholder="0.6">

				<select class="mb-3">
					<option value="volvo">mg/dl</option>
					<option value="saab">umol/l</option>
				</select>
				
				<p><b>Gênero</b></p>				
				<input name="genero" type="radio" value="Homem" id="Homem"> <label for="Homem">Homem</label>

				<input name="genero" type="radio" value="Mulher" id="Mulher"> <label for="Mulher">Mulher</label>

				<button id="calcular">Calcular<i class="fa fa-angle-right"></i></button>
			</div>
			<div class="col-lg-4 col-lg-offset-1 tabela">
				
				<div class="row">
					<div class="col-sm-12">
						<p><b>Idade (> 18 anos)</b></p>
						<input type="number" name="idade" placeholder="19"/>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12">
						<p><b>Peso</b></p>
						<input type="number" class="mb-4" name="peso" placeholder="65">
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<input type="number" name="resultado" readonly placeholder="Resultado..." class="resultado">	
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="slider">
  					<div class="slider-inner">
    					<input class="slider-open" type="radio" id="slider-1" name="slider" aria-hidden="true" hidden="" checked="checked">
    						<div class="slider-item" style="background:#0063be;min-height:350px;">
								<h3>Você Sabia?</h3>								
								<p>A TFG é menor em pessoas de mais idade.  A TFG cai aproximadamente 1ml/min/1.73m² por ano dos 20 aos 30 anos. Mesmo em indivíduos saudáveis</p>
							</div>
						<input class="slider-open" type="radio" id="slider-2" name="slider" aria-hidden="true" hidden="">
							<div class="slider-item">
						  		<h3>Você Sabia?</h3>								
								<p>Em pacientes de hemodiálise o IMC de 23 ou mais reduz o risco de morbilidades e mortalidade. Quanto mais baixo o IMC, maior o risco de desenvolver doenças cardiovasculares. </p>
							</div>						
						<ol class="slider-indicators">
							<li><label for="slider-1"><p class="square slider-bullet"></p></label></li>
						  	<li><label for="slider-2"><p class="square slider-bullet"></p></label></li>

						</ol>
  					</div>
				</div>
			</div>
		</div>		
	</div>	
</section>	    
<?php get_footer();?>