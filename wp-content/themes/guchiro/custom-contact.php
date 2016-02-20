<?php /* Template Name: Contact */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="page-title" class="row">
    <div class="container">
      <h1>
      <?php $key="page-title"; echo get_post_meta($post->ID, $key, true); ?>
      </h1>
    </div>
  </div>

  <div id="contact-form"class="row">
    <div class="container">
      <div class="form">
        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container-fluid">
      <?php the_content(); ?>
    </div>
  </div>



<?php endwhile; endif;?>
<?php get_footer();?>
