<?php 
/**
Template Name: Blog Page

*/


get_header();?>

<div class="blog">
<div id="primary">
<?php 
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => get_query_var('posts_per_page'), 'paged' => $paged );
query_posts($args); ?>
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

<div class="clear">
<div class="l_date">
<span class="month"><?php echo get_the_date('M'); ?></span>
<span class="day"><?php echo get_the_date('d'); ?></span>
</div>

<div id="post_content">
<div id="featured-image"><?php echo the_post_thumbnail(); ?></div>
<div id="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to<?php the_title(); ?>"><?php the_title(); ?></a></div>
<div id="cat-links"><?php the_category(', ');?> | Posted by <?php the_author();?></div>
<div id="blog_content">
<p><?php the_excerpt(); ?><a class="read_more" href="<?php the_permalink() ?>">READ MORE</a></p>
</div>
</div>
</div>

<?php endwhile; ?>
<div class="clear"></div>
<div class="nav">
<nav class="nav-single">
<span class="nav-next"><?php next_posts_link(); ?></span>
<span class="nav-previous"><?php previous_posts_link(); ?></span>
</div>
<?php endif; ?>
</div>

<div id="secondary">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

</div>
	
<?php get_footer();?>