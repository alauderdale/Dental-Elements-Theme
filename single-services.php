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

<?php $posttype = 'services' ?>

<?php  set_query_var( 'posttype', $posttype );
        get_template_part( 'content', 'wiki_page' ); 
?>



<?php get_footer(); ?>