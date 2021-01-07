<?php get_header(); ?>
<section id="cadastro">
	<div class="juntos-pelo-rim">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 dados-form">
					<h1>Gerar Cupom</h1>
					<?php
					if(is_user_logged_in()){
					$user = wp_get_current_user()->user_login;
					echo do_shortcode("[wpforms_entries_table id='1388' user='".$user."']");
					}else{
						echo "<h3>Precisa estar logado no sistema !</h3>";
					}
					?>				
				</div>
			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>