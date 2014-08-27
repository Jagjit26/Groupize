<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="blog">
		<div id="primary">
			<?php while ( have_posts() ) : the_post(); ?>

					

					<?php get_template_part( 'content-single', get_post_format() ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

		</div>
		<div id="secondary"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
	</div>

<?php get_footer(); ?>