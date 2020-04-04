<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
  <div class="header__container">
    <h1 class="header__logo"><?php the_custom_logo() ?></h1>
  
    <div class="header__right">
      <nav class="header__right--menu">
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
          <li class="item special<?php if (is_page('contact')) echo 'item__active' ?>">
            <a href="<?php echo site_url('/contact') ?>">Get a Quote</a>
          </li>
        </ul>
      </nav>

      <div class="header__right--language">
        <button>EN</button>|<button>ES</button>
      </div>
    </div>
  </div>
</header>

  
