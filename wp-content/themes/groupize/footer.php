<div class="footer-wrap">
    <footer style="padding-bottom: 30px;">
      <div class="footer-content">
	  
        <div class="footer-column-1">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
        </div>
		
        <div class="footer-column-1">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
        </div>
		
        <div class="footer-column-1">
          <div class="text7">SOCIAL<br>
          </div>
          <div class="text8"><a target="_blank" href="https://www.facebook.com/Groupize"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.jpg" width="24" height="23" alt="facebook"></a>&nbsp;&nbsp;<a target="_blank" href="http://www.linkedin.com/company/1551577"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.jpg" width="24" height="23" alt="linkdin"></a>&nbsp;&nbsp;<a target="_blank" href="https://twitter.com/@groupize"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.jpg" width="24" height="23" alt="twitter"></a></div>
          <br>
          <br>
        </div>
        <div class="footer-col4" style="clear: both;">
          <div class="text9">Copyright &copy; 2013 Groupize,Inc</div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Footer content ends here --> 
</div>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/stretch.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function($){
	$('#intro').backstretch([
		'<?php echo get_template_directory_uri(); ?>/assets/img/slider-2.png',
		'<?php echo get_template_directory_uri(); ?>/assets/img/slider-7.jpg',
		'<?php echo get_template_directory_uri(); ?>/assets/img/slider-6.jpg',
		'<?php echo get_template_directory_uri(); ?>/assets/img/slider-4.jpg',
		'<?php echo get_template_directory_uri(); ?>/assets/img/slider-5.jpg',
		'<?php echo get_template_directory_uri(); ?>/assets/img/slider-1.jpg'
	], {
		fade: 1500,
		duration: 3500
	});
	

});
</script>
<?php
if(isset($_POST['submit'])){
    $a = $_POST['i_am_a'];
    $b = $_POST['i_want_to_be'];
    $c = array($a, $b);
    switch($c){
        case array('hotel_chain', 'gettech4chain'):header('location:test.php');
            break;
        case array('hotel', 'gettech4hotel'):header('location:test.php');
            break;
        case array('hotel_chain', 'getgroups'):header('location:test1.php');
            break;
        case array('hotel', 'getgroups'):header('location:test1.php');
            break;
        case array('websites', 'sellgroups'):header('location:test2.php');
            break;
        case array('planner','plangroups'):header('location:test2.php');
            break;
        default:header('location:index.php');
    }
}
?>

<?php wp_footer(); ?>
</body>
</html>