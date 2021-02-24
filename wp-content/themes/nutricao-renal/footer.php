<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<?php 
					setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
					date_default_timezone_set('America/Sao_Paulo');
				?>
				<p>Fresenius Kabi Brasil Ltda. © <?php echo strftime('%B %Y', strtotime('today')); ?></p>
				<a href="<?php echo esc_url( home_url( '/'));?>sitemap">Mapa do Site</a>
				<a href="<?php echo esc_url( home_url( '/'));?>aviso-legal">Aviso legal</a>
				<a href="<?php echo esc_url( home_url( '/'));?>politica-de-cookies">Política de Cookies</a>
				<a href="<?php echo esc_url( home_url( '/'));?>declaracao-de-privacidade">Declaração de Privacidade</a>
			</div>
			<div class="col-lg-2">			
				<img border="0" class="wow fadeIn" src="<?php echo get_template_directory_uri();?>/img/logo-fresenius.png" />			
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer();?>


<script>
wow = new WOW(
  {
	animateClass: 'animated',
	offset:       100,
	mobile: false,
	callback:     function(box) {
	  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
	}
  }
);
wow.init();
try {
	document.getElementById('moar').onclick = function() {
		var section = document.createElement('section');
		section.className = 'section--purple wow fadeInDown';
		this.parentNode.insertBefore(section, this);
	};
}
catch(e) {
	//console.log("Erro ao tentar lidar com id = moar: ", e);
}
</script>