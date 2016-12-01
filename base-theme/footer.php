<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base-theme
 */

?>
		</div><!-- #site-content-container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<!-- Include space for showing recent web projects -->
		<div class="recent-project">
			<div class="row">
				<div class="recent-project-container columns">
					<h2 class="recent-project-title text-center">Recent Projects</h2>
					<?php get_template_part('template-parts/slider', 'featured'); ?>
				</div><!-- recent-project-container -->
			</div>
		</div>


		<!-- Include space for social media -->
		<!-- Include space for copyrite -->
		<div class="site-info row">
			<div class="columns">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'base-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'base-theme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'base-theme' ), 'base-theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
