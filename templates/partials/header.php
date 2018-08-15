<?php
  $phone  = get_field('contact_phone_number', 'options');
?>
<header class="navbar top" role="banner">
  <div class="navbar__topbar">
    <nav class="navbar__topbar__nav container row between centered">
      <a href="#">Join the tribe &amp; receive member perks! <span class="coin">GO</span></a>

      <?php if (has_nav_menu('secondary_navigation')) : ?>
        <?php
        if ( has_nav_menu('secondary_navigation') ) {
          wp_nav_menu( array(
            'theme_location'  => 'secondary_navigation',
            'menu_class'      => 'nav navbar-nav'
          ) );
        }
        ?>
      <?php endif; ?>

      <?php if (is_active_sidebar('sidebar-primary')) : ?>
      <button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#sidebar-nav">

        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggle__box">
          <span class="navbar-toggle__inner"></span>
        </span><!-- .navbar-toggle__box -->

      </button><!-- .navbar-toggle -->

      <div class="sidebar-nav" id="sidebar-nav" role="navigation">

        <?php dynamic_sidebar('sidebar-primary'); ?>

      </div><!-- .secondary-nav -->

      <?php endif; ?>

    </nav>
  </div>
  <div class="navbar-header container row between centered">

    <?php $logo = get_field( 'global_logo', 'option' ); ?>

    <?php if ( $logo ) : ?>

      <a class="flex" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="logo logo--header" src="<?php echo $logo['url']; ?>" alt="<?php bloginfo('name'); ?>">
      </a>

    <?php else : ?>

      <a class="logo__brand flex" href="<?php echo esc_url(home_url('/')); ?>" data-backgrounder>
        <span class="feature"><?php echo ll_get_logo('graphic'); ?></span>
      </a>

    <?php endif; ?>

    <?php if (has_nav_menu('primary_navigation')) : ?>
    <nav class="primary-nav flex" id="primary-nav" role="navigation">
      <?php
      if ( has_nav_menu('primary_navigation') ) {
        wp_nav_menu( array(
          'theme_location'  => 'primary_navigation',
          'menu_class'      => 'nav navbar-nav'
        ) );
      }
      ?>
    </nav><!-- .primary-nav -->
    <?php endif; ?>
    <?php
      //$date = get_date();
      $openings = get_field('schema_openings','option');
    ?>

    <time class="text-small">We're Open Today 10:00am &ndash; 8:00pm</time>

    <?php if (has_nav_menu('primary_navigation')) : ?>
    <button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#primary-nav">

      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggle__box">
        <span class="navbar-toggle__inner"></span>
      </span><!-- .navbar-toggle__box -->

    </button><!-- .navbar-toggle -->
    <?php endif; ?>

  </div>

</header>