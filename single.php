<?php
get_header();
while (have_posts()) {
  the_post();
  pageBanner(); ?>
  <div class="container">
    <div class="postNav">
      <div class="postNav-home"><a href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home"></i>Blog Home</a></div>
      <div class="postNav-date"><p>Posted on <?php the_time('n/j/Y'); ?></p></div>
      <div class="postNav-category"><p>Categories: <?php echo get_the_category_list(' & '); ?></p></div>
    </div>
  </div>
  <div class="container">
    <div class="postContent border-glow-around">
      <?php the_content(); ?>
    </div>
  </div>

<?php
}

  get_footer();
?>