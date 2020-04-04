<?php get_header(); ?>

<div id="page-wrap">

  <!-- Slider Home -->
  <?php
    $slidesTest = get_field('slider'); // slider padre 
    $slides = get_field('slides', $slidesTest[0]->ID); // hijos del slider
    // var_dump($slides);
    if ($slides) : ?>
      <div class="flexslider">
        <ul class="slides">
          <?php foreach ($slides as $key => $slide) { ?>
            <li>
              <?php $image = get_field('background', $slide->ID);?>

              <?php if($image['url'] !== '') { ?>
                <img src="<?php echo $image['url'] ?>" alt="">
              <?php } ?>

              <div class="detail">
                <h3><?php echo $slide->post_title ?></h3>
                <span>
                  <?php echo $slide->post_content ?>
                </span>
                <a href="<?php the_field('button_url', $slide->ID); ?>"><?php the_field('button_title', $slide->ID); ?></a>
              </div>
            </li>
            <?}
           ?>
        </ul>
      </div>
    <?php endif; ?>
</div>

<?php
  get_footer();
?>