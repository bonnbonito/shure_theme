<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BonnJoel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('front-content'); ?>>
  <div class="ui container">
    <header class="entry-header text-center">
    	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content text-center">

      <?php
        the_content();

        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bonnjoel' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->

    <div class="blue-divider"></div>

    <div class="ui grid">
      <div class="row middle aligned">
        <div class="six wide column">
          <img src="<?php echo get_stylesheet_directory_uri() . '/img/learn.png'; ?>" alt="">
        </div>
        <div class="ten wide column">
          <div class="front-items">
            <h3>Learn</h3>
            <div class="">
              Learn from over 1000 videos created by expert teachers on web design, coding, business, and much more. Our library is continually refreshed with the latest on web technology so you'll never fall behind.
            </div>
          </div>
        </div>
      </div>
      <div class="row centered">
        <div class="fourteen wide column">
           <img src="<?php echo get_stylesheet_directory_uri() . '/img/l-r.png'; ?>" alt="" class="ui image fluid">
        </div>
      </div>
      <div class="row middle aligned">
        <div class="ten wide column">
          <div class="front-items">
            <h3>Learn</h3>
            <div class="">
              Learn from over 1000 videos created by expert teachers on web design, coding, business, and much more. Our library is continually refreshed with the latest on web technology so you'll never fall behind.
            </div>
          </div>
        </div>
        <div class="six wide column right aligned">
          <img src="<?php echo get_stylesheet_directory_uri() . '/img/develope.png'; ?>" alt="">
        </div>
      </div>
      <div class="row centered">
        <div class="fourteen wide column">
           <img src="<?php echo get_stylesheet_directory_uri() . '/img/r-l.png'; ?>" alt="" class="ui image fluid">
        </div>
      </div>
      <div class="row middle aligned">
        <div class="six wide column">
          <img src="<?php echo get_stylesheet_directory_uri() . '/img/achieve.png'; ?>" alt="">
        </div>
        <div class="ten wide column">
          <div class="front-items">
            <h3>Learn</h3>
            <div class="">
              Learn from over 1000 videos created by expert teachers on web design, coding, business, and much more. Our library is continually refreshed with the latest on web technology so you'll never fall behind.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="front-block gray">
    <div class="ui segment vertical nb0">
      <div class="ui container">
        <h1 class="entry-title text-center">Lorem ipsum dolor sit amet</h1>
        <div class="text-center">
          Lorem ipsum dolor sit amet, eros dicit hendrerit ut per. Et elit sonet usu, no sed dico rebum. Sed eius periculis ex, te labore albucius philosophia sit. Alterum volumus complectitur ea duo.
        </div>
        <div class="blue-divider"></div>
        <div class="ui four column grid padded doubling stackable center aligned">
          <div class="column">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/hex.png' ?>" alt="">
            <h3 class="upper">Lorem Ipsum</h3>
            <div class="dax">
              Pri aliquid similique an. His dico nominati ad. Nec omnis discere appetere ex. Omittam nominavi in eum.
            </div>
          </div>
          <div class="column">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/hex.png' ?>" alt="">
            <h3 class="upper">Lorem Ipsum</h3>
            <div class="dax">
              Pri aliquid similique an. His dico nominati ad. Nec omnis discere appetere ex. Omittam nominavi in eum.
            </div>
          </div>
          <div class="column">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/hex.png' ?>" alt="">
            <h3 class="upper">Lorem Ipsum</h3>
            <div class="dax">
              Pri aliquid similique an. His dico nominati ad. Nec omnis discere appetere ex. Omittam nominavi in eum.
            </div>
          </div>
          <div class="column">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/hex.png' ?>" alt="">
            <h3 class="upper">Lorem Ipsum</h3>
            <div class="dax">
              Pri aliquid similique an. His dico nominati ad. Nec omnis discere appetere ex. Omittam nominavi in eum.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="front-block cta mt0">
    <div class="ui segment inverted vertical">
      <div class="ui container center aligned">
        <h2>Lorem Ipsum Dolor</h2>
        <p>Diam postulant eum ad, audire recteque quo id. Errem splendide urbanitas vix te.</p>
        <div class="ui divider hidden"></div>
        <div class="ui grid centered padded">
          <div class="four wide column">
            <a href="#" class="ui button fluid white">Log In</a>
          </div>
          <div class="four wide column">
            <a href="#" class="ui button fluid blue">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'bonnjoel' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
