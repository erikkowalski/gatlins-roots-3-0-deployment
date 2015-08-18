<?php
/*
Template Name: Framing Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="framing-content">
  <?php get_template_part('templates/content', 'page'); ?>
     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/framing-section-1.jpg" alt="First slide">
        </div>

         <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/framing-section-2.jpg" alt="First slide">
        </div>

        <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/framing-section-3.jpg" alt="First slide">
        </div>
         <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/framing-section-4.jpg" alt="First slide">
        </div>

      </div>
    </div><!-- /.carousel -->
  </div>
<?php endwhile; ?>

