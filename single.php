<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>

<section class='invert-section hero bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/blog_banner.png);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h1>
          blog
        </h1>
      </div>
    </div>
  </div>
</section>

<section class='blog blog-single'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-11 col-md-push-1'>
        <div class='row'>
          <div class='col-md-10'>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; // end of the loop. ?>
          </div>
          <div class='col-md-2'></div>
        </div>
      </div>
      <div class='col-md-1 col-md-pull-11'>
        <div class='social-btn-group'>
          <div class='fix-social affix' data-offset-bottom='600' data-offset-top='210' data-spy='affix'>
            <div aria-label='...' class='btn-group btn-group-vertical' role='group'>
              <a class='btn btn-default' href='#'>
                F
              </a>
              <a class='btn btn-default' href='#'>
                L
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>