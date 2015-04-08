<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package April White
 */
?>

                </div><!-- .panel-body -->
            </div><!-- .panel -->
        </div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
    		<div class="site-info">
    			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'april-white' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'april-white' ), 'WordPress' ); ?></a>
    			<span class="sep"> | </span>
    			<?php printf( __( 'Theme: %1$s by %2$s.', 'april-white' ), 'April White', '<a href="http://www.johnthelinux.com" rel="designer">John Reginald</a>' ); ?>
    		</div><!-- .site-info -->
        </div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
