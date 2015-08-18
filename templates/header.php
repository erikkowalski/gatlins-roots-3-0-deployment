<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img class="hidden-sm"  src="<?php bloginfo('template_url'); ?>/assets/img/gatlins-sm.png" alt="gatlins framing logo"><img class="visible-sm" src="<?php bloginfo('template_url'); ?>/assets/img/g-sm.png" alt="gatlins framing logo">  </a>

    </div>

    <nav class="collapse navbar-right navbar-collapse" role="navigation">
           <a class="fb hidden-xs" href="https://www.facebook.com/GatlinsFramingAndPhotography"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.png"></a>

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
