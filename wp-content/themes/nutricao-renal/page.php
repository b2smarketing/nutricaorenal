<?php get_header(); ?>
<section id="tratamentos">
	<div class="container-fluid">		
		<div class="row">		
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			
			<div class="col-lg-12">
				<?php the_content(); ?>
			</div>


		<?php endwhile; endif; ?>

		</div>	
	</div>	
	<?php include ("includes/rins-tabs.php"); ?>
</section>	    

<?php get_footer();?>