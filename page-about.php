<?php
get_header();
while (have_posts()) {
  the_post(); ?>

  <br><br>
  <div class="container border-glow-around postContent">
    <div class="float-text-container">
      <div class="featured-image-display">
        <?php the_post_thumbnail('subsPortrait'); ?>
      </div>
      <div class="post-text-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php
}

  get_footer();
?>