<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, user-scalable=yes" />
<!-- Stylesheet linking goes here -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- ******* ADDED BY WHATARMY ******* -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>


<script>document.createElement('section');var duration=1000,easing='easeInOutExpo';</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/drop_down_script.js"></script>
<!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

$(document).ready(function(){
 $("a[title='Show Profile']").each(function(){
    $(this).replaceWith($(this).text());
 });
	
 $(".drop_menu > a").mouseover(function(){
  var parent=$(this).parent();
  var sub_menu=$(parent).children(".sub-menu");
  $(".sub-menu").slideUp(0);
  $(sub_menu).css({
	  'top':'41px',
	  'left':'0px',
	  'visibility':'visible',
	});
  $(sub_menu).slideDown(100);
 });
 
 $(".sub-menu").mouseleave(function(){
  var parent=$(this).parent();
  var sub_menu=$(parent).children(".sub-menu");
  
  $(this).slideUp(100);
 });
});


</script>

<?php wp_head(); ?>
</head>

<body style="position:relative;z-index:-1">
  <!-- Header section starts from here -->
  <div class="header-wrap">
    <header>
      <div class="logo"><a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/groupize-logo.jpg" width="177" height="48" alt="Groupize Logo" border="0"></a></div>
      <!-- Navigation starts from here -->
	   
      <nav style="z-index:1000;width: 620px;">
        <div id="smoothmenu1" class="ddsmoothmenu">
         
		  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
			
        </div>
      </nav>
      <!-- Navigation ends here --> 
    </header>
  </div>
  