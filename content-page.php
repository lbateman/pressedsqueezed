<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pressedsqueezed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() )  {
			$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
			echo '<img src="' . $image_src[0]  . '" width="100%"  />'; 
			/* Lifted from http://wordpress.stackexchange.com/questions/21136/set-post-thumbnail-size-in-percent-not-pixels with deep appreciation */
		} ?>
		<h1 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'pressedsqueezed' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<!-- <?php edit_post_link( __( 'Edit', 'pressedsqueezed' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?> -->
</article><!-- #post-## -->
