<section>
  <div class='container'>
    <div class="row">
      <div class='col-md-12'>
        <?php the_content();?>
		<div class='nav-secondary'>
		  <div class='container'>
		    <div class='row'>
		      <div class='col-lg-12'>

		      <?php 


		      $terms = get_terms( 'category', array(
		        'post_type' => array($posttype),
		        'fields' => 'all'
		      ));

		      if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		        echo '<ul>';
		        foreach ( $terms as $term ) {

		        $catposts = get_posts(array(
		          'post_type' => $posttype,
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
      </div>
    </div>
  </div>
</section>