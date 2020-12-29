<?php get_header(); ?>
<section id="calculadoraimc">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Calcule o Seu Índice de Massa Corporal (IMC)</h1>	
				<!-- <img border="0" src="<?php echo get_template_directory_uri();?>/img/title.png" /> -->
				<p>O índice de massa corporal é a ferramenta mais utilizada para estimar uma relação entre o peso e o estado nutricional.  Ele é gerado a partir da divisão do peso pelo quadrado da altura. Portanto, relaciona seu peso com sua altura. Estimar seu IMC regularmente na DRC é importante, pois pode indicar seu estado nutricional e detectar a desnutrição precocemente.</p>
				<p>Preencha o seu peso e sua altura. Ex: 62.3kg e 1,66m.</p>
				<h2>Classificação de peso</h2>
				<p>IMC é utilizado para classificá-lo em uma das categorias: Abaixo do peso, peso ideal, sobrepeso e obeso. A tabela abaixo traz os valores de inclusão de acordo com a Organização Mundial da Saúde (OMS).</p>
			</div>
		</div>
	</div>	
	<div class="container-fluid">
		<div class="row mb50">
			<div class="col-lg-3">
				<p class="txt-center"><b>Sua Altura</b></p>
				
				<div class="input-box">
					<input type="number" placeholder="Altura em metros" name="altura" step="0.01"><p class="azul">m</p>
				</div>
				
				<br><br>

				<p class="txt-center"><b>Seu Peso</b></p>
				
				<div class="input-box">
					<input type="number" placeholder="Peso em kg" name="peso" step="0.01"><p class="azul">Kg</p>
				</div>

				<button id="calcular">Calcular IMC <i class="fa fa-angle-right"></i></button>
				<!-- <span class="azul2 esconder">Cancelar</span>	 -->
			</div>
			<div class="col-lg-4 col-lg-offset-1 tabela">
				<h2>Tabela de Classificação</h2>
				<p>Abaixo do Peso<span>< 18.5</span></p>
				<p>Peso Normal<span>18.5 - 24.9</span></p>
				<p>Acima do Peso<span>25.0 - 29.9</span></p>
				<p>Obesidade<span>30.0 - 39.9</span></p>
				<p>Obesidade Mórbida<span>> 40.0</span>
				<input type="number" placeholder="Resultado..." class="resultado" name="resultado"><span class="azul3">Kg/m²</span>	
			</div>
			<div class="col-lg-4">
				<div class="slider">
  					<div class="slider-inner">
    					<input class="slider-open" type="radio" id="slider-1" name="slider" aria-hidden="true" hidden="" checked="checked">
    						<div class="slider-item" style="background:#0063be;min-height:350px;">
								<h3>Você Sabia?</h3>								
								<p>O IMC não faz distinção entre massa muscular e massa gorda. Então alguns atletas musculosos podem ser considerados com sobrepeso ou até obesos pelo IMC.</p>
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