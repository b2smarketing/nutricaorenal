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



<?php get_footer(); ?>