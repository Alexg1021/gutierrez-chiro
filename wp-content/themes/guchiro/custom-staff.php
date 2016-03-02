<?php /* Template Name: Staff */ get_header(); ?>
<div class="color">
 <div id="page-title" class="row">
  <div class="container">
    <h1>
    <?php $key="page-title"; echo get_post_meta($post->ID, $key, true); ?>
    </h1>
  </div>
</div>

<div id="staff"class="row">
  <div class="container">

<?php
    $args = array(
        'post_type' => 'staff',
        'order' => 'ASC'
    );

    $staff = new WP_Query($args);

    if ($staff->have_posts()):
					while ($staff->have_posts()): $staff->the_post()?>


            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="staff-photo-box">
                <div class="staff-pics">
                  <img class="staff-photo"
                  src="<?=types_render_field('photo', array('output' => 'raw')); ?>" alt="" />
                </div>

              <h3><?php the_title();?></h3>

              <h4><?=types_render_field('title', array('output' => 'raw')); ?></h4>

              <p>
                <?=types_render_field('biography', array('output' => 'raw')); ?>
              </p>

              </div>
            </div>


	<?php endwhile; endif;?>
  <?php wp_reset_postdata(); ?>
    </div>
    </div>
</div>

<?php get_footer();?>
