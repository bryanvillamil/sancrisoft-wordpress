<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Sancrisoft site wordpress</title>
</head>

<body <?php body_class(); ?>>
<header class="header">
  <div class="header__container">
    <div class="header__logo">
      <h1><?php the_custom_logo() ?></h1>
    </div>
  
    <div class="header__menu">
      <nav>
        <ul>
          <li class="item <?php if (is_page('about-us')) echo 'item__active' ?>">
            <a href="<?php echo site_url('/about-us') ?>">About Us</a>
          </li>
          <li class="item <?php if (is_page('case-studies')) echo 'item__active' ?>">
            <a href="<?php echo site_url('/case-studies') ?>">Case Studies</a>
          </li>
          <li class="item <?php if (is_page('careers')) echo 'item__active' ?>">
            <a href="<?php echo site_url('/careers') ?>">Careers</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>

  
