<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo bloginfo('name'); ?> - <?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="<?php echo get_theme_file_uri('assets/images/site-thumbnail.png') ?>" />
    <meta property="og:site_name" content="Scottie Richardson's Blog / Portfolio"/>
    <meta property="og:title" content="Scottie || Richardson"/>
    <meta property="og:description" content="A compilation of everything software development learned/experianced by a Purdue University Northwest student."/>
    <meta property="og:url" content="http://www.scottierichardson.com/">
    <meta property="og:type" content="Blog / Portfolio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body>
  <header>
    <nav class="navbar border-glow-bottom">
      <a href="<?php echo esc_url(home_url('/'));?>"><img class="blog-logo" src="<?php echo esc_url(get_site_icon_url()); ?>"></a>
      <div class="menu-toggler">
        <span class="fa fa-bars fa-2x"></span>
      </div>

      <div>
        <ul>
          <li class="nav-item <?php if (get_post_type() == 'post') echo ' active' ?>">
            <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>blog">Blog</a>
          </li>
          <li class="nav-item <?php if (is_page('portfolio')) echo ' active' ?>">
            <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>portfolio">Portfolio</a>
          </li>
          <li class="nav-item <?php if (is_page('about')) echo ' active' ?>">
            <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>about">About Me</a>
          </li>
          <li class="nav-item <?php if (is_page('contact')) echo ' active' ?>">
            <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>contact">Contact Me</a>
          </li>
          <li class="nav-item">
            <!--If user is logged in, only show logout button-->
            <?php if(is_user_logged_in()) { ?>
              <span id="avatar"><?php echo get_avatar(get_current_user_id(), 30); ?></span>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo wp_logout_url();  ?>">Logout</a>
            <?php } else { ?>
              <!--Otherwise, show login and sign up-->
              <a class="nav-link" href="<?php echo wp_login_url(); ?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo wp_registration_url(); ?>">Sign Up</a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>