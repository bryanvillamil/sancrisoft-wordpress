<?php get_header(); ?>

<div id="page-wrap">

  <!-- Slider Home -->
  <?php
    $args = array(
      'post_type' => 'slides',
      'orderby' => 'menu_order',
      'post_per_page' => -1
    );

    $slides = new WP_Query($args);

    if ($slides->have_posts()) : ?>
      <div class="flexslider">
        <ul class="slides">
          <?php while ($slides->have_posts(  )) : $slides->the_post(); ?>
            <li>
              <?php the_post_thumbnail('slides') ?>
              <p><?php the_content(); ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>
</div>

<?php
  get_footer();
?>