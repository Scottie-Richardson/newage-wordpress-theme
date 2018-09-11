<?php
add_action('wp_enqueue_scripts', 'initNewAgeStylesAndScripts');
add_action('after_setup_theme', 'featuresNewAge');
add_action('admin_init', 'redirectSubsToFrontend');
add_action('wp_loaded', 'noSubsAdminBar');
add_filter('login_headerurl', 'customHeaderUrl');
add_action('login_enqueue_scripts', 'customLoginCSS');
add_filter('login_headertitle', 'customLoginTitle');

//  INITIALIZE ALL DEPENDENCIES
function initNewAgeStylesAndScripts() {
    // INCLUDE STYLES
    wp_enqueue_style('fontAwesomeIcons', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('customStyle', get_template_directory_uri() . '/assets/css/NewAge.css', array(), '1.0.0', 'all');

    // INCLUDE SCRIPTS/PACKAGES
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/lib/jquery-3.3.1.min.js', array(), true, true);
    wp_enqueue_script('customJS', get_template_directory_uri() . '/assets/js/NewAge.js', array(), true, true);
}

//  CUSTOM PAGE BANNER
function pageBanner($args = NULL) {

  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('assets/images/mainBanner2.png');
    }
  }
  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>
  </div>
<?php }

// ADD NEW CUSTOM IMAGE SIZES
function featuresNewAge() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('subsLandscape', 400, 260, true);
  add_image_size('subsPortrait', 480, 650, true);
  add_image_size('subsSmallThumbnail', 180, 120, true);
  add_image_size('pageBanner', 1500, 350, true);
}

// REDIRECT SUBSCRIBERS OUT OF WORDPRESS DASHBOARD AND ONTO HOMEPAGE
function redirectSubsToFrontend() {
  $currentUser = wp_get_current_user();

  if (count($currentUser->roles) == 1 AND $currentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}

// REMOVE WORDPRESS DASHBOARD BAR FOR SUBSCRIBER ACCOUNTS
function noSubsAdminBar() {
  $currentUser = wp_get_current_user();

  if (count($currentUser->roles) == 1 AND $currentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

// CUSTOMIZE WORDPRESS LOGIN SCREEN
function customHeaderUrl() {
  return esc_url(site_url('/blog'));
}

function customLoginTitle() {
  return get_bloginfo('name');
}

function customLoginCSS() {
  wp_enqueue_style('customStyle', get_template_directory_uri() . '/assets/css/NewAge.css');
  wp_enqueue_style('customStyle', get_stylesheet_uri());
}