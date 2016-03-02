<?php /* Template Name: Services */ get_header(); ?>

<div class="color">
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

          <div class="col-md-6">
            <div class="service-container">
              <aside class="service-photo-box">
                <figure>
                  <img class="service-photo"
                  src="<?=types_render_field('service-photo', array('output' => 'raw')); ?>" alt="" />
                </figure>
              </aside>

              <div class="service-content">
                <h2><?=types_render_field('service', array('output' => 'raw')); ?></h2>
                <p>
                  <?=types_render_field('description', array('output' => 'raw')); ?>
                </p>
              </div>
            </div>
          </div>

	<?php endwhile; endif;?>
  <?php wp_reset_postdata(); ?>
    </div>
    </div>
  </div>


<?php get_footer();?>
