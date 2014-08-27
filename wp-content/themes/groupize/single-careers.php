<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<section id="aboutus">
    	
		<div class="inner main">
			<h3><?php the_title();?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	
	</section><!-- /#intro -->
	
	<section id="about">
	<div class="inner main">
		
		<div class="career">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
				
				<div class="description"><?php the_content(); ?></div>
				
			<?php endwhile;
			?>
		</div>

			
	</div>
	</section>
	 
	
<?php get_footer();?>