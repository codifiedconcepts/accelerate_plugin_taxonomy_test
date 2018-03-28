<?php
/**
 * The template for displaying the About page.
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

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$mission = get_field('mission_statement');?>
				<h2><?php echo $mission; ?></h2>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="services">
		<div class="site-content">
			<?php// while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php// endwhile; // end of the loop. ?>
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
								<p class="read-more-link"><?php the_terms( $post->ID, 'servicescategory' ); ?></p>
							</aside>
						</section>
					<?php endwhile; ?>
					<!-- end of the loop -->
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>

			<div class="contact-button">
				<h2 >Interested in working with us?</h2>
				<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
