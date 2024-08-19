<!DOCTYPE html >
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#" class="no-js"> 
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="" type="image/x-icon">

  <title>
    <?php wp_title(); ?>
  </title>
  <?php wp_head() ?>
 
  <header class="header">
    <div class="container">
		<div class="header__content">
			<a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri() . '/assets/svg/logo_h.svg'; ?>" alt="logo" ></a>
			<nav>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'header_menu',
					'container' => 'ul',
					'menu_class' => 'header__menu',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				));
				?>
			</nav>
			<div class="btn">Book a tour</div>
			<div class="menu__open">
				
			</div>
		</div>
		
	</div>
	<div class="modal-menu" id="modal-menu">
		<div class="modal-menu__content">
			<div class="modal-menu-close"></div>
			<nav>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'header_menu',
					'container' => 'ul',
					'menu_class' => 'modal-menu__menu',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				));
				?>
			</nav>
			<div class="btn">Book a tour</div>
		</div>
		</div>
  </header>
</head>
<body>