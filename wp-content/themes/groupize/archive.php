<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
				<h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?></h1>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => -1, 'paged' => $paged );
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

			<?php endwhile;

			
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div>
		
		<div id="secondary-single"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
	</div>


<?php get_footer(); ?>