<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
		<?php if ( is_object_in_taxonomy( get_post_type(), 'category' ) ) : // Hide category text when not supported ?>
		<?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );
                    if ( $categories_list ):
                ?>
                <?php printf( __( '%2$s', 'twentyeleven' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list ); ?>
                <?php endif; // End if categories ?>
                <?php endif; // End if is_object_in_taxonomy( get_post_type(), 'category' ) ?>
            | <span>Posted by <?php the_author(); ?> <!--| <?php //the_time('F d, Y'); ?> |  -->
                
                
               <!-- | <?php// comments_popup_link( '<span class="leave-reply">' . __( 'No Comments', 'twentyeleven' ) . '</span>', _x( 'One Comment', 'comments number', 'twentyeleven' ), _x( '% Comments', 'comments number', 'twentyeleven' ) ); ?>-->
            </span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php if ( has_post_thumbnail() ) { ?>
        <div class="post-image">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php } ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
