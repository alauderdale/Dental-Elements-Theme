<?php get_header(); ?>

<section class='invert-section hero bg-cover' style='background-image:url(<?php bloginfo('template_url'); ?>/images/testimonials_banner.png);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h1>
          Patient Library
        </h1>
      </div>
    </div>
  </div>
</section>


<?php $posttype = 'library' ?>

<?php  set_query_var( 'posttype', $posttype );
        get_template_part( 'content', 'wiki_page' ); 
?>



<?php get_footer(); ?>