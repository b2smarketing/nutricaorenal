<?php get_header(); ?>
<section id="tratamentos">
	<div class="container-fluid">
		<div class="row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>

					<div class="col-lg-12">
						<?php the_content(); ?>
					</div>


			<?php endwhile;
			endif; ?>

		</div>
	</div>
</section>

<section id="cadastro">
	<div class="juntos-pelo-rim">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1>Cadastro</h1>					
					<?php
					//echo do_shortcode('[contact-form-7 id="1377" title="Formulário de contato 1"]');
					echo do_shortcode('[wpforms id="1388"]');
					?>
				</div>
			</div>
		</div>

	</div>
</section>
<script type="text/javascript">
$(function(){
	var codigo = $(".codigo input");
	codigo.attr("type", "hidden");
	var pref = "KTLFD";
	$.get("/wp-content/themes/nutricao-renal/codigo/contador.txt", function(resultado){
     codigo.val(pref+resultado);
	 console.log(pref+resultado);
	})

	// Atributos adicionais para Nomes
	var nome = $(".nome-completo .wpforms-field-name-first");
	nome.attr("onBlur", "ValidaNome(this)");
	nome.attr("onKeyUp", "$('.nome-completo .wpforms-field-description').html('')");	
	nome.attr("maxlength", "30");
	
	var sobrenome = $(".nome-completo .wpforms-field-name-last");
	sobrenome.attr("onBlur", "ValidaSobreNome(this)");
	sobrenome.attr("onKeyUp", "$('.nome-completo .wpforms-field-description').html('')");	
	sobrenome.attr("maxlength", "30");

	// Atributos adicionais para User
	var nome = $(".usuario input");
	nome.attr("onBlur", "ValidaUser(this)");
	nome.attr("onKeyUp", "$('.usuario .wpforms-field-description').html('( para Login no sistema )').css({ 'color': '#000' })");	
	nome.attr("maxlength", "10");

	var senha = $(".senha input");
	senha.attr("onBlur", "ValidaPass(this)");
	senha.attr("onKeyUp", "$('.senha .wpforms-field-description').html('( para Login no sistema )').css({ 'color': '#000' })");	
	senha.attr("maxlength", "10");

	/* Atributos adicionais para E-Mail
	var nome = $(".email .wpforms-field-email-primary");
	nome.attr("onBlur", "ValidaMail(this)");
	nome.attr("onKeyUp", "$('.email .wpforms-field-description').html('')");	
	nome.attr("maxlength", "30");
	
	var sobrenome = $(".email .wpforms-field-email-secondary");
	sobrenome.attr("onBlur", "ValidaMail(this)");
	sobrenome.attr("onKeyUp", "$('.email .wpforms-field-description').html('')");	
	sobrenome.attr("maxlength", "30");
	*/


	// Atributos adicionais para CPF
	var campocpf = $(".campo-cpf input");
	campocpf.attr("onKeyPress", "MascaraCPF(this)");
	campocpf.attr("onKeyUp", "$('.campo-cpf .wpforms-field-description').html('')");
	campocpf.attr("onBlur", "ValidarCPF(this)");
	campocpf.attr("maxlength", "14");	

	// Atributos adicionais para Telefones
	var telefone = $(".telefones .wpforms-field-name-first");
	telefone.attr("onKeyPress", "MascaraTelefone(this)");	
	telefone.attr("maxlength", "14");
	
	var celular = $(".telefones .wpforms-field-name-last");
	celular.attr("onKeyPress", "MascaraCelular(this)");	
	celular.attr("maxlength", "15");

	// Atributos adicionais para CEP
	var campocep = $(".campocep input");
	campocep.attr("onKeyPress", "MascaraCep(this)");
	campocep.attr("onKeyUp", "$('.campocep .wpforms-field-description').html('')");
	campocep.attr("onBlur", "ValidaCep(this)");
	campocep.attr("maxlength", "10");

})
</script>


<?php get_footer(); ?>