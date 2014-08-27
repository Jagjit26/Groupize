<?php 
/**
Template Name: Price

*/


get_header();?>

<section id="price-main">
    	
		<div class="inner">
		<h3><?php the_title();?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	
	</section><!-- /#intro -->
	
	<section id="price">
		<div id="table">
		<!-- Section-1 -->
			<div id="column">
				<div id="sec-1">
					<div id="heading">Groupize Live</div>
					<div id="sub-title">Gropus Booking Engine</div>
				</div>
				<div id="sec-2">
					<p>automated</p>
					<span>$149</span>
					<p>semi-automated</p>
					<span>$59</span>
				</div>
			</div>
			<!-- Section-1 -->
			
			<!-- Section-2 -->
			<div id="column_even">
				<div id="sec-1-even">
					<div id="heading">Groupize PRM</div>
					<div id="sub-title">Planner Relationship Manager</div>
				</div>
				<div id="sec-2-even">
					<p>intro</p>
					<span>$0</span>
					<p>solo</p>
					<span>$59</span>
					<p>group</p>
					<span>$199</span>
					<p>premium</p>
					<span>$399</span>
				</div>
			</div>
			<!-- Section-2 -->
			
			<!-- Section-3 -->
			<div id="column">
				<div id="sec-1">
					<div id="heading">Groupize SFP</div>
					<div id="sub-title">group management portal</div>
				</div>
				<div id="sec-2">
					<p>automated</p>
					<span>$149</span>
					<p>semi-automated</p>
					<span>$59</span>
				</div>
			</div>
			<!-- Section-3 -->
			
			<!-- Section-4 -->
			<div id="column_even">
				<div id="sec-1-even">
					<div id="heading">Groupize HUB</div>
					<div id="sub-title">groupize salesforce package</div>
				</div>
				<div id="sec-2-even">
					<p>portal</p>
					<span>$149</span>
				</div>
			</div>
			<!-- Section-4 -->
		</div>
		<a href="/solutions-for-hotels/"><div class="submit">MORE ABOUT OUR SOLUTION</div></a>
	</section>
	
<?php get_footer();?>