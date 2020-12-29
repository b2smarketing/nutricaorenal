<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<?php 
					setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
					date_default_timezone_set('America/Sao_Paulo');
				?>
				<p>Fresenius Kabi Brasil Ltda. © <?php echo strftime('%B %Y', strtotime('today')); ?></p>
				<a href="sitemap.php">Mapa do Site</a>
				<a href="aviso-legal.php" target="_blank">Aviso legal</a>
				<a href="politica-de-cookies.php" target="_blank">Política de Cookies</a>
				<a href="declaracao-de-privacidade.php" target="_blank">Declaração de Privacidade</a>
			</div>
			<div class="col-lg-2">			
				<img border="0" class="wow fadeIn" src="<?php echo get_template_directory_uri();?>/img/logo-fresenius.png" />			
			</div>
		</div>
	</div>
</footer>




<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='js/compressed.js'></script>
<script src='js/slider.js'></script>
<script src='js/menu.js'></script>

<!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>-->	
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
	console.log("Erro ao tentar lidar com id = moar: ", e);
}
</script>


</body>
</html>