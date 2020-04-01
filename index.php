<?php get_header(); ?>

<div id="page-wrap">
  <div class="slider">
    <?php if(function_exists('easingslider') && is_home()) {
      easingslider(17);
    } ?>
  </div>
</div>

<?php
  get_footer();
?>