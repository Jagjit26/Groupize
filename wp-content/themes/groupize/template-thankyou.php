<?php 
/** Template Name: ThankYou Template Page*/


get_header();?>
	<div id="contact" class="body-wrap">
    <div class="body-content">
	
     	<section id="contactus">
		<?php while ( have_posts() ) : the_post(); ?>
		
			
				<div class="thanks_container">
					<div class="thanks_img">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="thanks_content">
					<h2>YOUR MESSAGE HAS BEEN RECEIVED</h2>
					<p><?php the_content(); ?></p>
				</div>    	
				</div>
				<p align="center" class="link_back"><a href="<?php bloginfo('url'); ?>">RETURN TO OUR HOMEPAGE</a></p>
			
		<?php endwhile; // end of the loop. ?>
	
		</section><!-- /#intro -->
	 
      
    </div>
  </div>

<?php get_footer();?>
