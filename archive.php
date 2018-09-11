<?php get_header();
pageBanner(array(
  'title' => get_the_archive_title(),
  'subtitle' => get_the_archive_description()
)); ?>
<div class="container">
  <?php
    while(have_posts()) {
      the_post(); ?>
      <div class="postPreview border-glow-around">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="postInfo">
          <p>
            Posted by<br>
            <em><u><?php the_author_posts_link(); ?></u></em>
            <br><br><br>
            Categories:<br>
            <em><u><?php echo get_the_category_list('</u> & <br><u>'); ?></u></em></p>
        </div>

        <div class="postExcerpt">
          <?php the_excerpt(); ?>
          <p><a href="<?php the_permalink(); ?>"><em><u>Continue reading &raquo;</u></em></a></p>
        </div>
      </div>
    <?php }
    echo paginate_links(); ?>
</div>

<?php get_footer(); ?>