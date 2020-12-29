<?php get_header(); ?>
<section class="block one bg-white contentDownBanner" id="bem-vindo">
	<div class="container-fluid">
		<div class="row">
            <div class="col-lg-6 col-sm-2 col-xs-12"></div>
            <div class="col-lg-6 col-sm-10 col-xs-12">
				<h2>Seja bem vindo!</h2>
                <p>Se você é um paciente que possui Doença Renal Crônica, você terá a oportunidade através deste site de entender sobre a importância da nutrição como forma de tratamento.</p>
				<p>Convidamos você a navegar por este mundo da nutrição renal onde informações de alta qualidade poderão ser aplicadas no seu dia a dia, somando em prazer e qualidade de vida.</p><br><br>
                <!--<p>Atenciosamente/Mit freundlichen Grüßen/Kind Regards</p>-->
            </div>
		</div>
	</div>	
</section>	
<section class="block two bg-white">
	<div class="container-fluid">
		<div class="row">
            <div class="col-lg-7 col-xs-12">
				<h1>Os rins e<br>Doença Renal Crônica (DRC)</h1>
				<p>O que é a doença renal crônica? Quais sintomas podem aparecer?<br>
				<a href="<?php echo esc_url( home_url( '/'));?>doenca-renal-cronica-definicao">Saiba Mais</a></p><br>
                <p>
					<b>Os Rins</b><br>
					Quais são as funções dos rins?<br>
					Como eles funcionam?
				</p>
				<a href="<?php echo esc_url( home_url( '/'));?>os-rins-como-funcionam">Saiba Mais</a>
            </div>
		</div>
	</div>	
</section>    
<section class="block tree bg-blue">

	<div class="container-fluid">
		<h1>Nutrição e manejo nutricional</h1>	
		<a href="<?php echo esc_url( home_url( '/'));?>manejo-nutricional-informacoes-gerais">
			<div class="row">
				<div class="box20 wow fadeInLeft">
					<img border="0" src="<?php echo get_template_directory_uri();?>/img/02.png" />
				</div>
				<div class="box80 wow fadeInRight linksNutricaoManejo">
					<h2>Manejo nutricional na DRC</h2>
					<p>A assistência nutricional é essencial como parte do seu tratamento quando portador da doença renal crônica.</p>
				</div>
			</div>
		</a>

		<div class="row">
			<div class="box20 wow fadeInLeft">
				<img border="0" src="<?php echo get_template_directory_uri();?>/img/01.png" />
			</div>
			<div class="box80 wow fadeInRight linksNutricaoManejo">
				<h2>Receitas</h2>
				<p>Conheça o <b>livro Kabi Sabor</b>, Série Receitas Hipoproteicas. <a href="<?php echo get_template_directory_uri();?>/livro-de-receitas.pdf" target="_blank" style="font-weight: normal; text-decoration: underline">Clique aqui</a>.<br/>
				<b>Vídeos das receitas</b> com o passo a passo. <a href="<?php echo esc_url( home_url( '/'));?>video-receitas" style="font-weight: normal; text-decoration: underline">Clique aqui</a>.</p>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>
