<?php get_header(); ?>


<section class="login">
	<div class="container-fluid">		
		<div class="row">		
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			
			<div class="col-lg-12">

				<div class="login_box">
					
                     <h1><?php the_title();?></h1>

                    <?php
                        if ( ! is_user_logged_in() ) { // Display WordPress login form:
                            $args = array(
                                'redirect' => home_url(), 
                                'form_id' => 'loginform-custom',
                                //'label_username' => __( 'Username custom text' ),
                                'remember' => true
                            );
                            wp_login_form( $args );
                        } else { // If logged in:
                        
                            wp_redirect(home_url() );
                        }
                    ?>

                    <span class="login_box_cadastre">Não tem cadastro? <a href="<?php echo esc_url( home_url( '/'));?>cadastro">Cadastre-se</a></span>

				</div>

			</div>


		<?php endwhile; endif; ?>

		</div>	
	</div>	
</section>	    

<?php get_footer();?>



