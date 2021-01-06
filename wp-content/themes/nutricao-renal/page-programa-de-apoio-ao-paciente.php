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
					<a class="cadastro-pap" href="/programa-de-apoio-ao-paciente-novo-cadastro">Novo Cadastro</a>
					<a class="cadastro-pap" href="/programa-de-apoio-ao-paciente-login">Já sou Cadastrado</a>
				</div>
			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>