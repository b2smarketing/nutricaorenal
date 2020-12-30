<?php get_header(); ?>
<section id="cadastro">
	<div class="container-fluid juntos-pelo-rim">		
		<div class="row">
		

        <?php 

        $current_user = wp_get_current_user();?>
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>





        <form action="" method="post">
            <h2>Dados do Paciente</h2>
            <div class="row">
                <label class="col-lg-4">
               
                    <span>Nome</span>
                    <span class="wpcf7-form-control-wrap nome">
                        <input type="text" name="nome" value="<?php printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_firstname ) ) ?>"  placeholder="Digite seu nome">
                    </span>
                </label>
                <label class="col-lg-4">
                    <span>Sobrenome</span>

                    <span class="wpcf7-form-control-wrap sobrenome">
                    <input type="text" name="sobrenome" value="<?php printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_lastname ) ) ?>"   aria-required="true" aria-invalid="false" placeholder="Digite seu sobrenome"></span></label><label class="col-lg-4">

                    <span>Data de Nascimento</span>
                    <span class="wpcf7-form-control-wrap nascimento">
                        <input type="textx" name="nascimento" value="<?php echo get_field('nascimento', 'user_'.$current_user->id); ?>">
                    </span>
                </label>
            </div>
                                    
            <div class="row">
                <label class="col-lg-4">
                    <span>CPF</span>
                    <span>
                        <input type="text" name="cpf" value="<?php echo get_field('cpf', 'user_'.$current_user->id) ?>" placeholder="000.000.000-00"></span> 
                </label>
                <label class="col-lg-4">
                    <span>E-mail</span>
                    <span class="wpcf7-form-control-wrap email">
                        <input type="email" name="email" value="<?php printf( __( '%s', 'textdomain' ), esc_html( $current_user->user_email ) ) ?>" placeholder="Digite seu e-mail">
                    </span> 
                </label>
                    <label class="col-lg-4">
                        <span>Sexo</span>
                        <span class="wpcf7-form-control-wrap sexo">
                            <select name="sexo">
                                <option value="<?php echo get_field('sexo', 'user_'.$current_user->id); ?>">"<?php echo get_field('sexo', 'user_'.$current_user->id); ?></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </span>
                    </label>
            </div>
            <div class="row">
                <label class="col-lg-4">
                <span>Fone 1</span><span class="wpcf7-form-control-wrap telefone"><input type="text" name="telefone" value=""  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required pointcom_celphones" id="sp_celphones" aria-required="true" aria-invalid="false" placeholder="(00)0000-0000" maxlength="15"></span></label><label class="col-lg-4">
                <span>Fone 2</span><span class="wpcf7-form-control-wrap telefone2"><input type="text" name="telefone2" value=""  class="wpcf7-form-control wpcf7-text pointcom_celphones" aria-invalid="false" placeholder="(00)0000-0000" maxlength="15"></span></label><label class="col-lg-4">
                <span>Celular</span><span class="wpcf7-form-control-wrap celular"><input type="text" name="celular" value=""  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required pointcom_celphones" aria-required="true" aria-invalid="false" placeholder="(00)00000-0000" maxlength="15"></span></label></div>
            <div class="row">
                <label class="col-lg-6"><span>Nome Cuidador</span><span class="wpcf7-form-control-wrap cuidador"><input type="text" name="cuidador" value=""  aria-required="true" aria-invalid="false" placeholder="Nome Cuidador"></span></label><label class="col-lg-6"><span>Sobrenome Cuidador</span><span class="wpcf7-form-control-wrap cuidadorsobrenome"><input type="text" name="cuidadorsobrenome" value=""  aria-required="true" aria-invalid="false" placeholder="Sobrenome Cuidador"></span></label><label class="col-lg-4">
                <span>CEP</span><span class="wpcf7-form-control-wrap cep"><input type="text" name="cep" value=""  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required cep" id="cep" aria-required="true" aria-invalid="false" placeholder="00000-000" maxlength="9"></span></label><label class="col-lg-2"><span>UF</span><span class="wpcf7-form-control-wrap estados"><select name="estados" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" id="uf" aria-required="true" aria-invalid="false"><option value="">---</option><option value="AC">AC</option><option value="AL">AL</option><option value="AP">AP</option><option value="AM">AM</option><option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option><option value="MT">MT</option><option value="MS">MS</option><option value="MG">MG</option><option value="PA">PA</option><option value="PB">PB</option><option value="PR">PR</option><option value="PE">PE</option><option value="PI">PI</option><option value="RJ">RJ</option><option value="RN">RN</option><option value="RS">RS</option><option value="RO">RO</option><option value="RR">RR</option><option value="SC">SC</option><option value="SP">SP</option><option value="SE">SE</option><option value="TO">TO</option></select></span></label><label class="col-lg-6"><span>Logradouro</span><span class="wpcf7-form-control-wrap logradouro"><input type="text" name="logradouro" value=""  id="rua" aria-required="true" aria-invalid="false" placeholder="Logradouro"></span></label></div>
            <div class="row">
                <label class="col-lg-6"><span>Bairro</span><span class="wpcf7-form-control-wrap bairro"><input type="text" name="bairro" value=""  id="bairro" aria-required="true" aria-invalid="false" placeholder="Bairro"></span> </label><label class="col-lg-6"><span>Cidade</span><span class="wpcf7-form-control-wrap cidade"><input type="text" name="cidade" value=""  id="cidade" aria-required="true" aria-invalid="false" placeholder="Cidade"></span> </label></div>
                        <div class="row">
                <label class="col-lg-6"><span>Cópia do R.G. ou autorização para o Responsável  (para pacientes menores de 18 anos ou incapazes)</span><span class="wpcf7-form-control-wrap autorizacao"><input type="file" name="autorizacao"  class="wpcf7-form-control wpcf7-file" accept=".jpg,.jpeg,.png,.gif,.pdf,.doc,.docx,.ppt,.pptx,.odt,.avi,.ogg,.m4a,.mov,.mp3,.mp4,.mpg,.wav,.wmv" aria-invalid="false"></span> </label></div>
                    <h2>Dados de Prescrição</h2>
                    <div class="row">
                        <label class="col-lg-4">
                            <span>Data de início do tratamento</span>
                            <span class="wpcf7-form-control-wrap inicio"><input type="date" name="inicio" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" placeholder="Início do Tratamento"></span></label><label class="col-lg-4">
                            <span>Dose Diária</span><span class="wpcf7-form-control-wrap posologia"><input type="number" name="posologia" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false"></span></label><label class="col-lg-4">
                            <span>Instituição do prescritor</span><span class="wpcf7-form-control-wrap instituicao"><input type="text" name="instituicao" value=""  aria-required="true" aria-invalid="false" placeholder="Instituição do prescritor"></span></label></div>
                            <div class="row">
                <label class="col-lg-4">
                <span>Nome Prescritor</span><span class="wpcf7-form-control-wrap prescritor"><input type="text" name="prescritor" value=""  aria-required="true" aria-invalid="false" placeholder="Nome Prescritor"></span></label><label class="col-lg-4">
                <span>Sobrenome Prescritor</span><span class="wpcf7-form-control-wrap sobrenomeprescritor"><input type="text" name="sobrenomeprescritor" value=""  aria-required="true" aria-invalid="false" placeholder="Sobrenome Prescritor"></span></label><label class="col-lg-4">
                <span>CRM do prescritor</span>
                <span class="wpcf7-form-control-wrap crm"><input type="text" name="crm" value=""  aria-required="true" aria-invalid="false" placeholder="CRM do prescritor"></span></label></div>
                            <div><label class="check-label"><span class="wpcf7-form-control-wrap privacidade"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><input type="checkbox" name="privacidade[]" value="Aceito a"><span class="wpcf7-list-item-label">Aceito a</span></span></span></span></label><a href="/regulamento" target="_blank"> Política do Programa</a></div>
                            <p>
                            <br><br>
                            <input type="submit" value="ENVIAR" class="wpcf7-form-control wpcf7-submit">
                            <span class="ajax-loader"></span></p>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>




















			</div>


		<?php endwhile; endif; ?>

		</div>	
	</div>	
	<?php include ("includes/rins-tabs.php"); ?>
</section>	    

<?php get_footer();?>