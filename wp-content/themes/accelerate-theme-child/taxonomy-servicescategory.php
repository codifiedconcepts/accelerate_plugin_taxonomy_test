<?php
/**
 * The template for displaying the services category pages.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">

		<div class="main-content" role="main">

			<h1>This is a custom taxonomy page!</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
