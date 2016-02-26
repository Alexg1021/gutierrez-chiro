<?php /* Template Name: Staff */ get_header(); ?>

<div id="page-title" class="row">
  <div class="container">
    <h1>
    <?php $key="page-title"; echo get_post_meta($post->ID, $key, true); ?>
    </h1>
  </div>
</div>

<?php
    $args = array(
        'post_type' => 'staff',
        'order' => 'ASC'
    );

    $staff = new WP_Query($args);

    if ($staff->have_posts()):
					while ($staff->have_posts()): $staff->the_post()?>

          <div id="staff"class="row ">
            <div class="col-md-3 col-md-offset-1">
              <div class="staff-photo-box">
                <img class="staff-photo"
                src="<?=types_render_field('photo', array('output' => 'raw')); ?>" alt="" />
              </div>
            </div>
            <div class="col-md-6">
              <h2><?php the_title();?></h2>

              <h3><?=types_render_field('title', array('output' => 'raw')); ?></h3>

              <p>
                <?=types_render_field('biography', array('output' => 'raw')); ?>
              </p>
            </div>
            </div>

	<?php endwhile; endif;?>
  <?php wp_reset_postdata(); ?>


<?php get_footer();?>
