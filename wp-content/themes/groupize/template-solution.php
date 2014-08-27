<?php 
/** Template Name: Solution Template Page*/


get_header();?>
	<div class="body-wrap">
    <div class="body-content">
	
     	<section id="solution">
    	
		<div class="inner">
			<div class="description">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h3><?php the_title(); ?></h3>
				<p class="para"><?php the_content(); ?></p>
				
			<?php endwhile; // end of the loop. ?>
	
			</div>
			
			
			<div class="inner-sub">
			
				<ul class="one-third">
					<li><img src="<?php the_field('hotel_image'); ?>">
					
						<h3><?php the_field('hotel'); ?></h3>
						<?php the_field('hotel_description'); ?>
						<a href="<?php bloginfo('url'); ?>/<?php the_field('link_url'); ?>"><div class="learn_button"><?php the_field('hotel_button_text'); ?></div></a>
						
					
					</li>
					<li><img src="<?php the_field('group_image'); ?>">
					
						<h3><?php the_field('group_title'); ?></h3>
						<?php the_field('group_description'); ?>

						<a href="<?php bloginfo('url'); ?>/<?php the_field('group_link_url'); ?>"><div class="learn_button"><?php the_field('group_button_text'); ?></div></a>
					
					</li>
					<li class="last"><img src="<?php the_field('website_image'); ?>">
					
						<h3><?php the_field('website_title'); ?></h3>
						<?php the_field('website_description'); ?>

						<a href="<?php bloginfo('url'); ?>/<?php the_field('website_link_url'); ?>"><div class="learn_button"><?php the_field('find_more_text'); ?></div></a>
					
					</li>
				</ul>
			</div>
	
		</div>
	
		</section><!-- /#intro -->
	 
      
    </div>
  </div>

<?php get_footer();?>
