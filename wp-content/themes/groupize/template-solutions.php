<?php 
/** Template Name: Main Solution Template*/


get_header();?>
	<div class="body-wrap grey_bg">
    <div class="body-content">
	
     	<section id="solution" class="solutions">
		<div class="traversing"><?php get_breadcrumbs(); ?></div>
    	
		<div class="inner">
			<div class="description">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h3><?php the_title(); ?></h3>
				<p class="para"><?php the_content(); ?></p>
				
			<?php endwhile; // end of the loop. ?>
	
			</div>
			
			
			<div class="inner-sub">

			
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tab.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>			
<div id="tabs">
  <ul>
    <li><a href="#fragment-1"><span>GROUPIZE LIVE</span></a></li>
    <li><a href="#fragment-2"><span>GROUPIZE PRM</span></a></li>
    <li><a href="#fragment-3"><span>GROUPIZE SFP</span></a></li>
	<li class="last"><a href="#fragment-4"><span>GROUPIZE HUB</span></a></li>
  </ul>
	<div id="fragment-1">
		<div class="featured_img">
			<img src="<?php the_field('featured_image'); ?>">
		</div>
		
		<div class="description_text">
			<h1><?php the_field('groupize_live_title'); ?>.</h1>
			
			<?php the_field('description'); ?>
			
			<div class="pricing">
				<h2>PRICING</h2>
				<?php the_field('pricing'); ?>
				<p style="padding: 0px 0px 15px 0px!important;"><a href="<?php bloginfo('url');?>/pricing">SEE OUR FULL PRICING CHART</a></p>
			
			</div>
			
			<p style="padding: 15px 0px 0px 0px!important;" class="free_trial"><?php the_field('free_trail_text_live'); ?></p>
			<a href="<?php the_field('button_link_live'); ?>"><div class="submit"><?php the_field('demo_button_text'); ?></div></a>
		</div>
	</div>
  <div id="fragment-2">
    <div class="featured_img">
			<img src="<?php the_field('featured_image_prm'); ?>">
		</div>
		
		<div class="description_text">
			<h1><?php the_field('groupize_prm_title'); ?>.</h1>
			
			<?php the_field('description_prm'); ?>
			
			<div class="pricing">
				<h2>PRICING</h2>
				<?php the_field('pricing_prm'); ?>
				<p style="padding: 0px 0px 15px 0px!important;"><a href="<?php bloginfo('url');?>/pricing">SEE OUR FULL PRICING CHART</a></p>
			
			</div>
			
			<p style="padding: 15px 0px 0px 0px!important;" class="free_trial"><?php the_field('prm_free_trial_text'); ?></p>
			<a href="<?php the_field('button_link_prm'); ?>"><div class="submit"><?php the_field('demo_button_text_prm'); ?></div></a>
		</div>
  </div>
  <div id="fragment-3">
   <div class="featured_img">
			<img src="<?php the_field('featured_image_sfp'); ?>">
		</div>
		
		<div class="description_text">
			<h1><?php the_field('groupize_sfp_title'); ?>.</h1>
			
			<?php the_field('description_sfp'); ?>
			
			<div class="pricing">
				<h2>PRICING</h2>
				<?php the_field('pricing_sfp'); ?>
				<p style="padding: 0px 0px 15px 0px!important;"><a href="<?php bloginfo('url');?>/pricing">SEE OUR FULL PRICING CHART</a></p>
			
			</div>
			
			<p style="padding: 15px 0px 0px 0px!important;" class="free_trial"><?php the_field('sfp_free_trial_text'); ?></p>
			<a href="<?php the_field('button_link_sfp'); ?>"><div class="submit"><?php the_field('demo_button_text_sfp'); ?></div></a>
		</div>
  </div>
  <div id="fragment-4">
   <div class="featured_img">
			<img src="<?php the_field('featured_image_hub'); ?>">
		</div>
		
		<div class="description_text">
			<h1><?php the_field('groupize_hub_title'); ?>.</h1>
			
			<?php the_field('description_hub'); ?>
			
			<div class="pricing">
				<h2>PRICING</h2>
				<?php the_field('pricing_hub'); ?>
				<p style="padding: 0px 0px 15px 0px!important;"><a href="<?php bloginfo('url');?>/pricing">SEE OUR FULL PRICING CHART</a></p>
			
			</div>
			
			<p style="padding: 15px 0px 0px 0px!important;" class="free_trial"><?php the_field('hub_free_trial_text'); ?></p>
			<a href="<?php the_field('button_link_hub'); ?>"><div class="submit"><?php the_field('demo_button_text_hub'); ?></div></a>
		</div>
  </div>
</div>
 
<script>
$( "#tabs" ).tabs();
</script>





			</div>
	
		</div>
	
		</section><!-- /#intro -->
	 
      
    </div>
  </div>

<?php get_footer();?>