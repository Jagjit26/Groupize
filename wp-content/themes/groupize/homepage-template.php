<?php 
/** Template Name: Homepage*/


get_header();?>
<section id="intro">
<!--<div class="header-img-wrap">-->
    <div class="selection-wrapper">
      <div class="selection-box">
        <div class="text1">Group Bookings Made Easy.</div>
        <div class="text2">Find the right tool to get your share of the online group market: </div>
        <div class="dropdown-wrap">
          	<div class="dropdown-menu-container">
            	<div class="option_selected">
                	<span id="opt_selected1">I am a...</span>
                    <input type="hidden" value="0" name="drop_down1" id="drop_down1">
                    
                    <div class="option_list_container">
                    	<div class="options1" id="value_0">I am a..</div>
                    	<div class="options1" id="value_1">Hotel</div>
                        <div class="options1" id="value_2">Hotel Chain</div>
                        <div class="options1" id="value_3">Web Sites</div>
                        <div class="options1" id="value_4">Planner</div>
                    </div>
                </div>
                <div class="option_dropdownicon">
                	<img src="<?php echo get_template_directory_uri();?>/assets/images/drop_down.png">
                </div>
                <div class="clear"></div>
            </div>
            
            
            <div class="dropdown-menu-container width_50">
            	<div class="option_selected">
                	<span id="opt_selected2">I want to...</span>
                    <input type="hidden" value="0" name="drop_down2" id="drop_down2">
                    
                    <div class="option_list_container">
	                    <div class="options2" id="value_0">I want to...</div>
                    	<div class="options2" id="value_1">Get Technology for my Chain</div>
                        <div class="options2" id="value_2">Get Technology for my Hotel</div>
                        <div class="options2" id="value_3">Get more Groups</div>
                        <div class="options2" id="value_4">Sell Groups Online</div>
                        <div class="options2" id="value_5">Plan a Group or Meeting</div>
                    </div>
                </div>
                <div class="option_dropdownicon">
                	<img src="<?php echo get_template_directory_uri();?>/assets/images/drop_down.png">
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="button_div">
            	<input id="submit_drop" type="button" value="Start" class="button">
            </div>
            
        </div>
      </div>
    </div>
  <!--</div>-->
 </section>
  
  <!-- Header image and selection wrapper ends here --> 
  <!-- Body content starts from here -->
  <div class="body-wrap">
    <div class="body-content">
	
      <div class="section-wrap">
	 <?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	  </div>
	  
      <div class="section-wrap"><?php the_field('content'); ?></div>
	  
      <div class="section-wrap last"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
  </div>

<?php get_footer();?>
