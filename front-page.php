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
						<div class="register-form">
							<div class="register-form-header text-center">
								Try it! Register for free
							</div>
							<div class="register-form-content">
								<div class="ui form">
								  <div class="two fields">
								    <div class="field">
								      <label>First name</label>
								      <input type="text" placeholder="">
								    </div>
								    <div class="field">
								      <label>Last name</label>
								      <input type="text" placeholder="">
								    </div>
								  </div>
									<div class="two fields">
								    <div class="field">
								      <label>Email Address</label>
								      <input type="text" placeholder="">
								    </div>
								    <div class="field">
								      <label>Password</label>
								      <input type="password" placeholder="">
								    </div>
								  </div>
									<button type="submit" class="ui button fluid primary">Register</button>
									<p class="small text-center">You are agreeing to our <a href="#">Terms and Services</a></p>
								</div>
							</div>
							<div class="register-form footer"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
