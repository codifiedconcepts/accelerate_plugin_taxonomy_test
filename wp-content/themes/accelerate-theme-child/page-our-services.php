<?php
/**
 * The template for displaying the Our Services page.
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

	<div id="primary" class="ourservices-page">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php echo do_shortcode( '[taxonomy_terms taxonomy="servicescategory"]'); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services site-content">
		<div class="our-services">
			<?php
			// the query
			$the_query = new WP_Query( array( 'post_type' => 'our_services') ); ?>

			<?php if ( $the_query->have_posts() ) : ?>
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<section class="individual-service clearfix">
						<figure class="about-service-image">
							<?php the_post_thumbnail('full'); ?>
						</figure>
						<aside class="about-service">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							<div class="services-taxonomy-link"><?php the_terms( $post->ID, 'servicescategory' ); ?></div>
						</aside>
					</section>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>
