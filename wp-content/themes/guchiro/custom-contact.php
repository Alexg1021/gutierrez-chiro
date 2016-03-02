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
      <div class="contact-content">


        <div class="form">
          <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
        </div>


        <div class="content">
          <h2><?=types_render_field('office-name', array('output' => 'raw')); ?></h2>
          <p>
            <?=types_render_field('street-address', array('output' => 'raw')); ?>
          </p>
          <p>
            <?=types_render_field('office-phone', array('output' => 'raw')); ?>
          </p>
          <p>
            <a href="mailto:info@gutierrez-chiropractic.com">
            <?=types_render_field('office-email', array('output' => 'raw')); ?>
            </a>
          </p>
        </div>


      </div>
    </div>
  </div>

  <div class="row">
    <div class="container-fluid">
<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
    </div>
  </div>



<?php endwhile; endif;?>
<?php get_footer();?>
