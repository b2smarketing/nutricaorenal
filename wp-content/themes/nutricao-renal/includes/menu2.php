<!-- Consentimento sobre os cookies -->
<section class="c-cookies-consent container js-cookies-consent-container hide">
    <p class="c-cookies-consent__text">Utilizamos cookies para garantir o funcionamento correto deste site, fornecer o melhor serviço possível para você, melhorar a sua experiência de usuário e otimizar nosso site. <a href="<?php echo esc_url( home_url( '/'));?>declaracao-de-privacidade">Clique aqui</a> para ver nossa Declaração de Privacidade. <a href="<?php echo esc_url( home_url( '/'));?>configuracoes-de-cookies">Clique aqui</a> para gerenciar as configurações de cookies.</p>
    <button class="c-cookies-consent__btn js-cookies-accept" href="#">Aceito</button>
    <button class="c-cookies-consent__btn js-cookies-refuse" href="#">Recuso</button>
</section>

<section class="navigation">
	<div class="esconder tarja"></div>	
		
	<div class="nav-container">
	
		<div>

			<div class="pesquisa">

					<?php global $current_user; wp_get_current_user(); ?>

					<?php /*
                        if ( ! is_user_logged_in() ) { // Display WordPress login form:?>
						   
						   <a href="<?php echo esc_url( home_url( '/'));?>login" style="display: none;">Acessar</a>							

						<?php } else { // If logged in:?>
							
								<a href="<?php echo esc_url( home_url( '/'));?>meu-cadastro">
								<svg viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg"><path d="M210.352 246.633c33.882 0 63.222-12.153 87.195-36.13 23.973-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.133 87.195 23.977 23.969 53.313 36.125 87.188 36.125zm0 0M426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.308-10.34-7.808-20.55-13.37-30.336-5.774-10.156-12.555-19-20.165-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 01-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.039 5.34-10.972 0-22.086-1.797-33.047-5.34-11.21-3.622-20.296-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.75-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.605 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.059 11.476-3.457 22.363-4.149 32.363A438.821 438.821 0 000 423.949c0 26.727 8.496 48.363 25.25 64.32 16.547 15.747 38.441 23.735 65.066 23.735h246.532c26.625 0 48.511-7.984 65.062-23.734 16.758-15.946 25.254-37.586 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm0 0"/></svg>
								<?php echo $current_user->user_login ?></a>

								<a href="<?php echo wp_logout_url(home_url('/login')); ?>"  style="display: none;">sair</a>
						<?php }
                    */ ?>

				<form action="pesquisa.php">
					<input type="search" name="s" class="esconder search" placeholder="Pesquisar...">
				</form>
			</div>

			<div class="brand">			 
				<a href="<?php echo esc_url( home_url( '/'));?>" class="esconder"><img border="0" src="<?php echo get_template_directory_uri();?>/img/logo-fresenius.png" /></a>                     
			</div>

		</div>

		<nav>
			<div class="nav-mobile">
				<a id="nav-toggle" href="#!"><span></span></a>
			</div>
			<a href="<?php echo esc_url( home_url( '/'));?>" class="esconder-desktop"><img border="0" src="<?php echo get_template_directory_uri();?>/img/logo-fresenius.png" class="logo" /></a> 
			<ul class="nav-list">
				
				<?php if ( is_user_logged_in() ) : ?>
					<li class="button-login">
						<span>Bem vindo,</span> 
					</li>
				<?php else : ?>

					<li class="button-login">
						<a href="<?php echo esc_url( home_url( '/'));?>login" >Entrar</a>
					</li>

				<?php endif; ?>


				<li><a href="#!">Rins</a>
					<ul class="nav-dropdown">
						<li><a href="<?php echo esc_url( home_url( '/'));?>os-rins-funcoes">Funções</a></li>		
						<li><a href="<?php echo esc_url( home_url( '/'));?>os-rins-anatomia">Anatomia</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>os-rins-como-funcionam">Como funcionam os rins?</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>os-rins-o-que-e-funcao-renal">O que é função renal?</a></li>
					</ul>
				</li>
				<li><a href="#!">Doença Renal Crônica</a>
					<ul class="nav-dropdown">
						<li><a href="<?php echo esc_url( home_url( '/'));?>doenca-renal-cronica-definicao">Definição</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>doenca-renal-cronica-sintomas">Sintomas</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>doenca-renal-cronica-causas">Causas</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>doenca-renal-cronica-diagnostico">Diagnóstico</a></li>											
						<li><a href="<?php echo esc_url( home_url( '/'));?>doenca-renal-cronica-prevencao">Prevenção</a></li>		
					</ul>
				</li>		
				
				<li><a href="<?php echo esc_url( home_url( '/'));?>ead-cetodieta">APOIO</a>
					<ul class="nav-dropdown">
						<li><a href="<?php echo esc_url( home_url( '/'));?>keto-connect">Keto Connect</a></li>				
					</ul>
				</li>
				
				
				<li><a href="#!">Opções de tratamento</a>
					<ul class="nav-dropdown">
						<li><a href="<?php echo esc_url( home_url( '/'));?>tratamentos-visao-geral">Opções de tratamento</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>opcoes-de-tratamento-conservador">Tratamento conservador</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>opcoes-de-tratamento-hemodialise">Hemodiálise</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>opcoes-de-tratamento-dialise-peritoneal">Diálise peritoneal</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>opcoes-de-tratamento-transplante-renal">Transplante</a></li>						
					</ul>
				</li>

				<li><a href="#!">Manejo Nutricional</a>
					<ul class="nav-dropdown">
						<li><a href="manejo-nutricional-informacoes-gerais">Informação geral</a></li>
						<!-- <li><a href="http://www.b2sinterativa.com.br/nutricaorenal/livro-de-receitas.pdf">Livro de receitas</a></li> -->
						<li><a href="<?php echo esc_url( home_url( '/'));?>nutricao-na-pre-dialise">Nutrição na pré diálise</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>nutricao-na-hemodialise">Nutrição na hemodiálise</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>nutricao-na-dialise-peritoneal">Nutrição na diálise peritoneal</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>nutrientes">Nutrientes</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>monitoramento">Monitoramento</a></li>					
					</ul>
				</li>
				<li><a href="<?php echo esc_url( home_url( '/'));?>programa-de-apoio-ao-paciente">Juntos Pelo Rim</a></li>
				<li><a href="#!">Apoio</a>
					<ul class="nav-dropdown" style="right: 0">
						<li><a href="http://www.sbn.org.br" target="_blank">Profissionais de saúde, como encontrar?</a></li>	
						<li><a href="<?php echo esc_url( home_url( '/'));?>sites">Sites úteis</a></li>
						<!-- <li><a href="cadastro">Cadastro</a></li> -->
						<li><hr></li>
						<li class="outras-infos">Outras informações</li>
						<li><a href="https://www.fresenius-kabi.com/br/a-empresa" target="_blank" rel=”noopener”>Conheça a Fresenius Kabi</a></li>
						<li><a href="<?php echo esc_url( home_url( '/'));?>glossario">Glossário</a></li>
						<!-- <li><a href="sites">Sites úteis</a></li> -->
						<li><a href="https://www.fresenius-kabi.com/br/fale-conosco" target="_blank" rel=”noopener”>Contato</a></li>
					</ul>
				</li>
				
			</ul>
		</nav>
	</div>			
</section>

<style>

.search, .brand{
	float: inherit;
}

.pesquisa form{
	display: inline-block;
}

.pesquisa a{
	color: #0063be;
    margin-right: 13px;
    font-size: 11px;
}

.pesquisa{
	float: right;
	position: relative;
    z-index: 999;
}

.pesquisa svg{
	
    height: 13px;
    position: relative;
    top: 2px;
    right: 2px;
    fill: #0063be;

}
</style>