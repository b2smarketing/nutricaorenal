<?php get_header(); ?>
<section id="cadastro">
	<div class="juntos-pelo-rim">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login</h1>
					<?php
					if(!is_user_logged_in()){
					echo do_shortcode('[wpforms id="1399"]');
					}else{
						echo "<script>window.location.href='/programa-de-apoio-ao-paciente-gerar-cupom';</script>";
					}
					?>				
				</div>
			</div>
		</div>

	</div>
</section>
<script type="text/javascript">
	$(function() {
		// Atributos adicionais para CPF (user)
		var campocpf = $(".campo-cpf input");
		campocpf.attr("onKeyPress", "MascaraCPF(this)");
		campocpf.attr("onKeyUp", "$('.campo-cpf .wpforms-field-description').html('')");
		campocpf.attr("onBlur", "ValidarCPF(this)");
		campocpf.attr("maxlength", "14");
	})
</script>
<?php get_footer(); ?>