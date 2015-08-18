<?php
/*
Template Name: art Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
      <div class="art-content">
   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/art-section-1.jpg" alt="First slide">
        </div>

         <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/art-section-2.jpg" alt="First slide">
        </div>

        <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/art-section-3.jpg" alt="First slide">
        </div>

      </div>
    </div><!-- /.carousel -->
  <?php get_template_part('templates/content', 'page'); ?>
  </div>
<?php endwhile; ?>
