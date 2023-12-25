<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php get_bloginfo("name"); ?>
	</title>
	<?php wp_head() ?>
</head>

<body>
	<!-- Шапка сайта  -->
	<section class="<?php if (is_front_page()) {
		echo "header-container-black";
	} else {
		echo "header-container-white";
	} ?>">
		<header class="header" id="header">
			<div class="header-wrap">
				<button class="btn-mobile-menu" data-menu-button></button>
				<div class="header-items">
					<nav class="nav">
						<?php wp_nav_menu(
							array("theme_location" => "header_nav-black")
						) ?>
					</nav>

					<a class="logo" href="#">

						<?php if (is_front_page()): ?>
							<img src="<?php echo get_field("logo", "option"); ?>" alt="logo" class="logo-white">
						<?php else: ?>
							<img src="<?php echo get_field("logo", "option"); ?>" alt="logo" class="logo-black">
						<?php endif; ?>

					</a>

					<ul class="socials-list">
						<li class="socials-item">
							<a class="socials-link" target="_blank" rel="noreferrer noopener" href="https://www.instagram.com/"
								aria-label="instagram">

								<img src="<?php echo get_field("instagram", "option"); ?>" width="24" height="24" alt="instagram" class="<?php if (is_front_page()) {
											echo "socials-icons-white";
										} else {
											echo "socials-icons-black";
										} ?>">
							</a>
						</li>
						<li class="socials-item">
							<a class="socials-link" href="https://www.facebook.com" aria-label="facebook" target="_blank"
								rel="noreferrer noopener">
								<img src="<?php echo get_field("facebook", "option"); ?>" width="24" height="24" alt="facebook" class="<?php if (is_front_page()) {
											echo "socials-icons-white";
										} else {
											echo "socials-icons-black";
										} ?>">
							</a>
						</li>
						<li class="socials-item">
							<a class="socials-link" href="https://twitter.com" target="_blank" aria-label="twitter"
								rel="noreferrer noopener">

								<img src="<?php echo get_field("twitter", "option"); ?>" width="24" height="24" alt="twitter" class="<?php if (is_front_page()) {
											echo "socials-icons-white";
										} else {
											echo "socials-icons-black";
										} ?>">

							</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
	</section>