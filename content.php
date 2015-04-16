<?php
/**
 * @package April White
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php april_white_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			// the_content( sprintf(
			// 	__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'april-white' ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );
			the_excerpt();
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'april-white' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php april_white_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->