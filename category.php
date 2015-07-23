<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>


<section class='header-section padding-bottom' style='background:#2FA8DD no-repeat scroll center top; '>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-10'>
        <h1>
          Displaying posts in:
        </h1>
        <div class='row'>
          <div class='col-md-2'></div>
          <div class='col-md-8'>
            <p class='lead'>
              <em>
                <?php single_cat_title(); ?>
              </em>
            </p>
          </div>
          <div class='col-md-2'></div>
        </div>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>


<section class='blog blog-index'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
        			<?php get_template_part( 'content', 'post_thumb' ); ?>
        		<?php endwhile; ?>
					<?php endif; ?>
      </div>
    </div>
  </div>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
          <nav>
            <ul class='pager'>
              <li>
              	<?php next_posts_link('&laquo; Older'); ?>
              </li>
              <li>
                <?php previous_posts_link('Newer &raquo;'); ?>
              </li>
            </ul>
          </nav>
					<?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>


<?php get_template_part( 'content', 'sign_up_inner' ); ?>



<?php get_footer(); ?>