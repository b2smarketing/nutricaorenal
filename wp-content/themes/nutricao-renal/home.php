<?php get_header(); ?>



<section class="blog tree bg-blue">

	<div class="container-fluid">

			<h1>Keto Connect</h1>	


			<?php /* if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<div class="row">
					<div class="box20 wow fadeInLeft" style="background-image: url('<?php the_post_thumbnail_url();?>');">
					</div>
					<div class="box80 wow fadeInRight linksNutricaoManejo">
						<h2><?php the_title();?></h2>
						<p><?php the_excerpt();?></p>
					</div>
				</div>
			</a>


		<?php endwhile; endif;*/ ?>

			<a href="/update-kdoqi-2020/">
				<div class="row">
					<div class="box20 wow fadeInLeft" style="background-image: url('<?php the_post_thumbnail_url();?>');">
					</div>
					<div class="box80 wow fadeInRight linksNutricaoManejo">
						<h2>UPDATE KDOQI 2020</h2>
						<p>Confira os Highlights do KDOQI 2020 – O que há de novo sobre as proteínas no tratamento conservador da DRC, por Lilian Cuppari.</p>
					</div>
				</div>
			</a>


		<div class="row">	

		</div>


	</div>
    
    
	<?php include ("includes/rins-tabs.php"); ?>
</section>




<?php get_footer();?>