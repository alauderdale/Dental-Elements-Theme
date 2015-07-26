<?php get_header(); ?>

<section class='invert-section hero bg-cover'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h1>
          Services
        </h1>
      </div>
    </div>
  </div>
</section>


<div class='nav-secondary'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12'>

      <?php 


      $terms = get_terms( 'category', array(
        'post_type' => array('services'),
        'fields' => 'all'
      ));

      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
        echo '<ul>';
        foreach ( $terms as $term ) {

        $catposts = get_posts(array(
          'post_type' => 'services',
          'numberposts' => 1,
          'post_status' => 'publish',
          'category_name' => $term->slug,
          'orderby' => 'date',
          'order' => 'DESC'
        ));

        $list = get_the_terms( $post->ID, 'category' );
        if ( !empty( $list ) ){
          // get the first term
          $currentterm = array_shift( $list );
        }

        $class = $currentterm->slug == $term->slug ? 'active' : '' ;

        echo '<li class="'. $class .'"> <a href='.  get_permalink( $catposts[0]->ID )  .'>' . $term->name . '</a></li>';

        }
          echo '</ul>';
        }

      ?>

      </div>
    </div>
  </div>
</div>
<section class='double-padding-top'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-3 no-padding-right'>
        <?php $current_id = $post->ID; ?>
        <?php
          global $post;
          $categories = get_the_category();
          $category = $categories[0];
          $cat_ID = $category->cat_ID;
          $sideNavLoop = new WP_Query( array( 'post_type' => 'services', 'cat' => $cat_ID ) ); 
        ?>
        <ul class='nav nav-pills nav-stacked double-margin-bottom'>

          <?php while ( $sideNavLoop->have_posts() ) : $sideNavLoop->the_post(); ?>
            <?php $current_class = ( $current_id == $post->ID ) ? 'class="active"' : ''; ?>
            <li <?php if ( $current_class ) echo $current_class; ?> >
              <a href='<?php the_permalink();?>'>
                <?php the_title();?>
              </a>
            </li>
          <?php endwhile; // end of the loop. ?>

        </ul>
      </div>
      <div class='col-sm-9 border-left'>
        <div class='padding-left no-padding-left-sm wiki-content'>
          <?php while ( have_posts() ) : the_post(); ?>
            <h5 class='heading-bordered heading-bordered-left'>
              <?php the_title();?>
            </h5>
            <?php the_content();?>
          <?php endwhile; // end of the loop. ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>