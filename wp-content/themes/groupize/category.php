<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
 

	<div class="blog">
		<div id="primary">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1><?php
						printf( __( '%s', 'twentyeleven' ), '' . single_cat_title( '', false ) . '' );
					?></h1>
					<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) )
							echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
					?>
			
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$selected_category = single_cat_title( '', false );

$args = array('posts_per_page' => -1, 'paged' => $paged, 'category_name' => $selected_category );
query_posts($args); 
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				 ?>
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

			<?php endwhile;	?>

		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
		<?php endif; ?>

		</div>
		<div id="secondary-single"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
	</div>


<?php get_footer(); ?>