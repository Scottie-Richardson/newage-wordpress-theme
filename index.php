<?php get_header();
pageBanner(array(
  'title' => "Welcome to the World of Scottie"
));
?>

<div class="container">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="postPreview border-glow-around">
        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>

        <div class="postInfo">
          <p>
            Posted by:<br>
            <em><u><?php the_author_posts_link(); ?></u></em>
            <br><br><br>
            Categories:<br>
            <em><u><?php echo get_the_category_list('</u> & <br><u>'); ?></u></em></p>
        </div>

        <div class="postExcerpt">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>"><em><u>Continue reading &raquo;</u></em></a>
        </div>
      </div>
    <?php }
    echo paginate_links(); ?>
</div>

<?php get_footer(); ?>