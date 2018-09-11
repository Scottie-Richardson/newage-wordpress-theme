<?php get_header();
while(have_posts()) {
    the_post();
?>
<br>
<div class="container centered">
    <h4><strong class="lightGreen">Interested in working together?</strong><em class="lightBlue"> &nbsp Or maybe you have some feedback?</em></h4>
</div>
<div class="form-container">
  <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 4 ); } ?>
</div>


<?php }
get_footer(); ?>