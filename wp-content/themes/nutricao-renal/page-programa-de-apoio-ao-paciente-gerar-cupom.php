<?php get_header(); ?>
<section id="cadastro">
	<div class="juntos-pelo-rim">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 dados-form">
					<h1>Gerar Cupom</h1>
					<?php
					if (is_user_logged_in()) {
						echo do_shortcode("[wpforms_entries_table id='1388' fields='1,2,3']");
						echo "<br><button class='btngeracod' onclick='geranovocod()'>Gerar Novo Cupom</button>";
					} else {
						echo "<script>window.location.href='/programa-de-apoio-ao-paciente-login';</script>";
					}
					?>				
				<h3 class="resposta">&nbsp;</h3>	
				</div>
			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>