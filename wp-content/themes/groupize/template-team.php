<?php 
/**
Template Name: Team

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
	
	<div id="team">
	<div id="team-section">
	<div id="category">EXECUTIVE TEAM</div>
	<?php 
		  $loop = new WP_Query( array( 'post_type' => 'team', 'team_category' => 'Executive Team','orderby' => 'menu_order',
		'order' => 'ASC' ) ); 
		  while ( $loop->have_posts() ) : $loop->the_post();
	?>
		
		<div id="featured-image"><?php echo the_post_thumbnail(); ?></div>
		<div id="author"><?php echo the_title(); ?></div>
		<div id="designation"><?php the_field('designation');?></div>
		<div id="content"><?php the_content(); ?></div>
	<?php endwhile; ?>
	</div>
	</div>
	
	<div id="team">
	<div id="team-section">
	<div id="category">BOARD OF DIRECTORS</div>
	
	<?php 
		  $loop = new WP_Query( array( 'post_type' => 'team', 'team_category' => 'Board of Directors','orderby' => 'menu_order',
		'order' => 'ASC' ) ); 
		  while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div id="featured-image"><?php echo the_post_thumbnail(); ?></div>
		<div id="author"><?php echo the_title(); ?></div>
		<div id="designation"><?php the_field('designation');?></div>
		<div id="content"><?php the_content(); ?></div>
	<?php endwhile; ?>
	</div>
	</div>
	
	<div id="team">
	<div id="team-section">
	<div id="category">ADVISORY BOARD</div>
	
	<?php 
		  $loop = new WP_Query( array( 'post_type' => 'team', 'team_category' => 'Advisory Board','orderby' => 'menu_order',
		'order' => 'ASC' ) ); 
		  while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div id="featured-image"><?php echo the_post_thumbnail(); ?></div>
		<div id="author"><?php echo the_title(); ?></div>
		<div id="designation"><?php the_field('designation');?></div>
		<div id="content"><?php the_content(); ?></div>
	<?php endwhile; ?>
	</div>
	</div>
	
	<div id="team-section">
	<div id="category">STRATEGIC ADVISORS</div>
	
	<?php 
		  $loop = new WP_Query( array( 'post_type' => 'team', 'team_category' => 'Strategic Advisors','orderby' => 'menu_order',
		'order' => 'ASC' ) ); 
		  while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div id="featured-image"><?php echo the_post_thumbnail(); ?></div>
		<div id="author"><?php echo the_title(); ?></div>
		<div id="designation"><?php the_field('designation');?></div>
		<div id="content"><?php the_content(); ?></div>
	<?php endwhile; ?>
	</div>
	
<?php get_footer();?>