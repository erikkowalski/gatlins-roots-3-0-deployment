<?php
/*
Template Name: Location Template
*/
?>
<div class="location-page">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
