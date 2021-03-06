<?php get_header(); ?>
<section id="tratamentos">
	<div class="container-fluid">		
		<div class="row">		
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="col-lg-12">
						<div class="justos-pelo-rim__form">
							

						<form>
							<h2>Dados Pessoais</h2>
							<div class="row">
								<label class="col-lg-4">
									<input type="text" name="cpf" required placeholder="CPF">
								</label>

								<label class="col-lg-8">
									<input type="email" name="email" required>
								</label>
							</div>

							<div class="row">
								<label class="col-lg-8">
									<input type="text" name="nome"  placeholder="Nome">
								</label>
								<label class="col-lg-4">
									<input type="text" name="sobrenome" placeholder="Data Nascimento">
								</label>
							</div>

							<div class="row">
								<label class="col-lg-8">
									<input type="text" name="sobrenome" placeholder="Sobrenome">
								</label>
								<label class="col-lg-4">
										<input type="text" name="telefone" placeholder="Fone 1">
								</label>
							</div>


							<div class="row">
								<label class="col-lg-8">
									<input type="text" name="cuidador" placeholder="Nome Cuidador">
								</label>
									<label class="col-lg-4">
										<input type="text" name="telefone2" placeholder="Fone 2">
									</label>
							</div>


							<div class="row">
								<label class="col-lg-8">
									<input type="text" name="cuidadorsobrenome" placeholder="Sobrenome Cuidador">
								</label>
								<label class="col-lg-4">
									<input type="text" name="celular" placeholder="Celular">
								</label>
							</div>

							<div class="row">
								<label class="col-lg-8">
									<input type="text" name="logradouro" value="" placeholder="Logradouro">
								</label>
								<label class="col-lg-4">
									<input type="text" name="cep" placeholder="CEP">
								</label>
							</div>


							<div class="row">
								<label class="col-lg-2">
									<input type="text" name="uf" placeholder="UF">
								</label>

								<label class="col-lg-6">
									<input type="text" name="cidade" placeholder="Cidade">
								</label>
								
								<label class="col-lg-4">
									<input type="text" name="bairro" placeholder="Bairro">
								</label>
							</div>


							<h2>Dados de Prescrição</h2>

							<div class="row">
								<label class="col-lg-4">
									<input type="text" placeholder="Início do Tratamento">
								</label>
								<label class="col-lg-4">
									<input type="text" placeholder="Posologia Compromidos / Dia">
								</label>
								<label class="col-lg-4">
									<input type="text" placeholder="Instituição">
								</label>
							</div>

							<div class="row">
								<label class="col-lg-6">
									<input type="text" name="prescritor" value="" size="40" placeholder="Nome Prescritor">
								</label>
								<label class="col-lg-6">
										<input type="text" placeholder="Sobrenome Prescritor">
								</label>
							</div>
							<div class="row">
							<label class="col-lg-6">
									<input type="text" name="plano" placeholder="Plano de Saúde">
								</span>
							</label>
							<label class="col-lg-6">
									<input type="file" name="anexo" size="40" class="wpcf7-form-control wpcf7-file" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv" aria-invalid="false">
							</label>
							</div>
							<div class="row">
							<label class="col-lg-12">
								<textarea name="observacoes" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Observações"></textarea>
							</label>
							</div>
							<div>
							<label>
								<input type="checkbox" name="privacidade[]" value="Aceito a">
								Aceito a
								<a href="#target-content"> Política do Programa</a>
							</label>
							</div>
							<br>
							<br>
							<input type="submit" value="ENVIAR"></p>
						</form>





						</div>

					</div>


		<?php endwhile; endif; ?>

		</div>	
	</div>	
	<?php include ("includes/rins-tabs.php"); ?>
</section>	    

<?php get_footer();?>