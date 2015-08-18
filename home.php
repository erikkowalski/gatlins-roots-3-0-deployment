<div class="home-wraper clearfix">

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
          <img src="<?php bloginfo('template_url'); ?>/assets/img/gatlin-1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Custom Framing</h1>
              <p><a class="btn btn-lg btn-primary" href="/framing/" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
         <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/gatlin-2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <p><a class="btn btn-lg btn-primary" href="/photography/" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
             <div class="item ">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/gatlin-3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
             <h1>Art Supplies</h1>
              <p><a class="btn btn-lg btn-primary" href="/art-supplies/" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<div class="main">

<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
</div><!-- /.main -->

</div><!--- /.home-wraper-->

<div class="location clearfix">
 <div class="home-wraper">
  <hr>
    <div class=""><h1>Hours / Location </h1></div>
    </div>
    <div class="info">
     <div class="home-contact">
    <h2 class="phone" >774.202.0649</h2>
    <h2 class="hours" ><span>Tuesday-Friday:</span> 10am-6pm</h2>
    <h2 class="hours" ><span>Saturday:</span> 11am-5pm</h2>
    <h2 class="avail"><span>Available by appointment</span></h2>
    <h2 class="street">209 Union St</h2>
    <h2 class="city">New Bedford, MA 02740 </h2>
    </div>
</div>
</div>
