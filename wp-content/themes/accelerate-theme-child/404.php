<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<figure>
				<img src="/wp-content/themes/accelerate-theme-child/img/map.png" />
			</figure>
			<aside>
                <h1>Whoops, Took a Wrong Turn…</h1>
				<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
				<p>Feel free to take a look around our <a href="<?php echo home_url(); ?>/blog">blog</a> or some of our <a href="<?php echo home_url(); ?>/case-studies">featured work.</a><p>
			</aside>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
