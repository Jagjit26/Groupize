<?php 
/**
Template Name: Carrers Template Page

*/


get_header();?>

<section id="aboutus">
    	
		<div class="inner main">
			<h3><?php the_title();?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
			<p class="para"><?php the_content(); ?></p>
			<?php endwhile; // end of the loop. ?>
		</div>
	
	</section><!-- /#intro -->
	
	<section id="about">
	<div class="inner main">
		
		<div class="career">
			<h3>OPEN POSITIONS</h3>
			<?php $args = array( 'post_type' => 'careers', 'order' => 'ASC' , 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				?>
				
				<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				
			<?php endwhile;
			?>
		</div>

			
	</div>
	</section>
	 
	
<?php get_footer();?>