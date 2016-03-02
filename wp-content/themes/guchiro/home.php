<?php /* Template Name: GuChiro Home*/ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!--Main Banner-->
  <section id="banner" class="">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icons/jc-adjustment-banner.png" alt="chiropractor">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icons/jc-adjustment-banner.png" alt="chiropractor">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </section>

<!--Info Boxes-->
  <section id="services">
    <div class="row">
      <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="box">
            <a href="#" class="icon-style"><i class="fa fa-ambulance fa-3x"></i></a>
            <h3>Friendly and Professional Staff</h3>
            <p>
              Our staff prides itself in ensuring your visit is as comfortable and enjoyable as possible. Your health is our number one concern
            </p>
            <a href="http://www.gutierrez-chiropractic.com/about/team/" class="service-button">Read more!</a>

          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="box">
              <a href="#" class="icon-style"><i class="fa fa-heart fa-3x"></i></a>
            <h3>Highest Quality Care</h3>
            <p>
              We are committed to providing the best care for our patients. We consider our relationship a partnership to achieve the best relief and preventive care possible
            </p>
            <a href="http://www.gutierrez-chiropractic.com/about/services/" class="service-button">Read more!</a>

          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="box">
              <a href="#" class="icon-style"><i class="fa fa-hospital-o fa-3x"></i></a>
            <h3>In the Heart of the Central Valley</h3>
            <p>
              Born and raised in Sanger, California, Dr. Gutierrez has chosen to open his practice in his hometown, in the historic downtown community, just a short distance from a vibrant business district
            </p>
            <a href="http://www.gutierrez-chiropractic.com/contact/" class="service-button">Read more!</a>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="box">
              <a href="#" class="icon-style"><i class="fa fa-medkit fa-3x"></i></a>
            <h3>An Experienced Doctor Who Cares</h3>
            <p>
              Dr. Gutierrez believes that true chiropractic care is about listening to your needs and uses his expertise to heal you correctly and intuitively.
            </p>
            <a href="" class="service-button">Read more!</a>

          </div>
        </div>
      </div>
    </div>
</section>

<section id="testimonials">
  <div class="row">
    <div class="container">
    <div class="separator"></div>

    <div class="col-md-12">
      <h1>See what others are saying</h1>
    </div>
    <div class="col-md-9 col-md-offset-2">
      <div class="row">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
        </div>
      </div>
    </div>
  </div>




</section>

<?php endwhile; endif;?>
<?php get_footer();?>
