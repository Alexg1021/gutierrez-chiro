<?php /* Template Name: Services */ get_header(); ?>

<div id="page-title" class="row">
  <div class="container">
    <h1>
    <?php $key="page-title"; echo get_post_meta($post->ID, $key, true); ?>
    </h1>
  </div>
</div>

<div id="service" class="row">
  <div class="container">
<?php
    $args = array(
        'post_type' => 'aboutservice',
        'order' => 'ASC'
    );

    $service = new WP_Query($args);

    if ($service->have_posts()):
					while ($service->have_posts()): $service->the_post()?>

          <div class="col-md-6 service-container">

            <div class="col-md-5">
              <div class="service-photo-box">
                <img class="service-photo"
                src="<?=types_render_field('service-photo', array('output' => 'raw')); ?>" alt="" />
              </div>
            </div>
            <div class="col-md-7">
              <h2><?=types_render_field('service', array('output' => 'raw')); ?></h2>

              <p>
                <?=types_render_field('description', array('output' => 'raw')); ?>
              </p>
            </div>
          </div>

	<?php endwhile; endif;?>
  <?php wp_reset_postdata(); ?>
    </div>
    </div>


<?php get_footer();?>
