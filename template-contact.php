<?php
/*
Template Name: Contact Template
*/
?>
<div id="contact-form">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
