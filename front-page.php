<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo bloginfo('name'); ?> - <?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="<?php echo get_theme_file_uri('/assets/images/site-thumbnail.png') ?>" />
    <meta property="og:site_name" content="Scottie Richardson's Blog / Portfolio"/>
    <meta property="og:title" content="Scottie || Richardson"/>
    <meta property="og:description" content="A compilation of everything software development learned/experianced by a Purdue University Northwest student."/>
    <meta property="og:url" content="http://www.scottierichardson.com/">
    <meta property="og:type" content="Blog / Portfolio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body class="splash-page">
    <div class="splash-container">
      <div class="splash-title">
        <ul>
          <li><h1 class="big drop-in-0">S</h1></li>
          <li><h1 class="big drop-in-1">c</h1></li>
          <li><h1 class="big drop-in-2">o</h1></li>
          <li><h1 class="big drop-in-3">t</h1></li>
          <li><h1 class="big drop-in-4">t</h1></li>
          <li><h1 class="big drop-in-5">i</h1></li>
          <li><h1 class="big drop-in-6">e</h1></li>
          <li><div class="big space"></div></li>
          <li><h1 class="big drop-in-7">D.</h1></li>
          <li><div class="big space"></div></li>
          <li><h1 class="big drop-in-8">R</h1></li>
          <li><h1 class="big drop-in-9">i</h1></li>
          <li><h1 class="big drop-in-10">c</h1></li>
          <li><h1 class="big drop-in-11">h</h1></li>
          <li><h1 class="big drop-in-12">a</h1></li>
          <li><h1 class="big drop-in-13">r</h1></li>
          <li><h1 class="big drop-in-14">d</h1></li>
          <li><h1 class="big drop-in-15">s</h1></li>
          <li><h1 class="big drop-in-16">o</h1></li>
          <li><h1 class="big drop-in-17">n</h1></li>
          <li><div class="big space"></div></li>
          <li><h1 class="big drop-in-18">J</h1></li>
          <li><h1 class="big drop-in-19">R</h1></li>
        </ul>
      </div>
    </div>

    <div class="splash-container border-glow-around-blue"></div>

    <div class="splash-container"><p></p></div>

    <div class="text-fly-in">
      <p>
        <span class="big trait-1">Innovative</span>
        <span class="big trait-2">Creative</span>
        <span class="big trait-3">Dedicated</span>
        <span class="big trait-4">U.S. Army Veteran</span>
        <span class="big trait-5">Purdue University Senior</span>
        <span class="big trait-6">Software Developer</span>
      </p>
    </div>

    <div class="enter-button">
      <a href="<?php echo esc_url(home_url('/')); ?>blog"><div class="splash-link">
        <img class="centered" src="<?php echo get_theme_file_uri('assets/images/enter-button.png') ?>" alt="">
      </div></a>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>