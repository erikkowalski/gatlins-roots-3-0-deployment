<article class="col-sm-6 col-lg-3" <?php post_class(); ?>>
  <header>

         <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>
	 <div class="title">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>

    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
