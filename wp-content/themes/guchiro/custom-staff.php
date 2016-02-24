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
  <h2><?=types_render_field('title', array('output' => 'raw')); ?></h2>
  <div class="">
    <?=types_render_field('biography', array('output' => 'raw')); ?>
  </div>
  <img src="<?=types_render_field('photo', array('output' => 'raw')); ?>" alt="" />



	<?php endwhile; endif;?>

<?php get_footer();?>
