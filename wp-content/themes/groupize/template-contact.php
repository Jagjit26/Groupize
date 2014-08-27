<?php 
/** Template Name: Contact Template Page*/


get_header();?>
	<div id="contact" class="body-wrap">
    <div class="body-content">
	
     	<section id="contactus">
			<div class="traversing"><?php get_breadcrumbs(); ?></div>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<div class="contact_form_container">
				<h1><?php the_title(); ?></h1>
				
				<div class="contact_form">
        	
					<?php the_content(); ?>
					
				</div>
			</div>
			
		<?php endwhile; // end of the loop. ?>
	
		</section><!-- /#intro -->
	 
      
    </div>
  </div>

<?php get_footer();?>
