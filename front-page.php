<?php
/**
 * The template for displaying front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

get_header(); ?>

	<div class="front-banner">
		<div class="ui container">
			<div class="ui segment vertical">
				<div class="ui two column grid stackable middle aligned">
					<div class="column"></div>
					<div class="column">
						<?php //get_template_part('template-parts/front', 'form'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'front' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
