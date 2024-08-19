<?php 
      $social = get_field('social', 'option');
      $inst = $social['inst'];
      $facebook = $social['facebook'];
      $twit = $social['twit'];
      $patreon = $social['patreon'];
  ?>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="footer__top">
				<div class="footer__logo">
					<img src="<?php echo get_template_directory_uri() . '/assets/svg/logo_f.svg'; ?>" alt="logo" >
				</div>
				<div class="footer__menu">
					<div class="footer__menu__block">
						<a href="#">Top destinations</a>
						<?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer_left_menu',
                                'container' => 'ul',
                                'menu_class' => 'footer__menu_list',
                            ));
                        ?>
					</div>
					<div class="footer__menu__block">
						<a href="#">Top destinations</a>
						<?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer_right_menu',
                                'container' => 'ul',
                                'menu_class' => 'footer__menu_list',
                            ));
                        ?>
					</div>
					<div class="btn btn_white">Book a tour</div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="footer__bottom_other">
					<p>© 2022 Tanzania</p>
					<span>|</span>
					<a href="#">Terms and conditions</a>
					<span>|</span>
					<a href="#">Privacy policy</a>
				</div>
				<div class="footer__bottom_link">
					<a href="<?=$inst;?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/ins.svg'; ?>"></a>
					<a href="<?=$facebook;?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/face.svg'; ?>"></a>
					<a href="<?=$twit;?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/twit.svg'; ?>"></a>
					<a href="<?=$patreon;?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/patreon.svg'; ?>"></a>
				</div>
			</div>
		</div>
		
	</footer>

<?php wp_footer(); ?>

</body>
</html>
