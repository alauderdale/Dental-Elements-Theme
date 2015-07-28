<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>

<!-- permalink encoding -->

 <?php
ob_start();
the_permalink();
$permalink = ob_get_clean();
?>

<!-- end -->

<?php $pageTitle = 'Blog' ?>

<?php  set_query_var( 'pageTitle' , $pageTitle );
        get_template_part( 'content', 'page_header' ); 
?>

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
              <a class='btn btn-default'  onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo (urlencode($permalink)); ?>', 'newwindow', 'width=500, height=250');  return false;"   href='#'>
                F
              </a>
              <a class='btn btn-default' target="_blank"  onclick="window.open('http://twitter.com/share?url=<?php echo (urlencode($permalink)); ?>&text=<?php the_title()?>', 'newwindow', 'width=300, height=250');  return false;" href='#'>
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