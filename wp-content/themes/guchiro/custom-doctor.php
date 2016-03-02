<?php /* Template Name: Doctor */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>


  <div id="page-title" class="row">
    <div class="container">
      <h1>
      <?php $key="page-title"; echo get_post_meta($post->ID, $key, true); ?>
      </h1>
    </div>
  </div>

  <div id="doctor-content" class="row">
    <div class="container">
      <div class="col-xs-12">
        <div class="doctor-image">
          <?php the_post_thumbnail(); ?>
          </div>
            <p><?php the_content(); ?></p>
      </div>


    </div>
  </div>

<?php endwhile; endif;?>


<?php get_footer();?>
