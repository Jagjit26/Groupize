<?php 
/** Template Name: Widget Handler*/
get_header();
$option1 = '';
$option2 = '';
if (isset($_GET['option1'])) {
	$option1 = $_GET['option1'];
}
if (isset($_GET['option2'])) {
	$option2 = $_GET['option2'];
}

$option = $option1.$option2;

switch ($option) {
	case 21:
		$url = bloginfo('url').'/solutions-for-hotels';
		break;
	case 23:
		$url = bloginfo('url').'/get-more-groups';
		break;
	case 12:
		$url = bloginfo('url').'/solutions-for-hotels';
		break;
	case 13:
		$url = bloginfo('url').'/get-more-groups';
		break;
	case 34:
		$url = bloginfo('url').'/solutions-for-website';
		break;
	case 45:
		$url = 'http://groupize.com/';
		break;
	case 'default':
		$url = bloginfo('url');
		break;
}

wp_redirect( $url );
exit;
?>