<?php get_header(); ?>
<section class="single">
	<div class="container-fluid">		
		<div class="row">		
			
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        

            <h1><?php the_title();?></h1>
            
            <?php the_post_thumbnail();?>

			
			<div class="col-lg-12">
				<?php the_content(); ?>
			</div>


		<?php endwhile; endif; ?>

		</div>	
	</div>	
	<?php include ("includes/rins-tabs.php"); ?>
</section>	    

<?php get_footer();?>