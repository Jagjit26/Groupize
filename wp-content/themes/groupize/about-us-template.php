<?php 
/**
Template Name: About us

*/


get_header();?>

<section id="aboutus">
    	
		<div class="inner">
			<h3><?php the_title();?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	
	</section><!-- /#intro -->
	
	<section id="about">
	<div class="inner">
		<div class="one_half"><?php echo the_post_thumbnail(); ?></div>
		
		<div class="one_half last1">
			
			<div class="author">
			
			<?php the_field('content')?>

			</div>
			
		</div>
	
	</div>
	</section>
	 
	
<?php get_footer();?>