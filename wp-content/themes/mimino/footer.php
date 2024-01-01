<footer class="footer-container" id="footer">
	<div class="footer">
		<nav class="nav">

			<?php wp_nav_menu(
				array("theme_location" => "header_nav-black")
			) ?>

		</nav>
		<a class="footer-logo" href="#">
			<img src="<?php echo get_field("logo", "option"); ?>" alt="logo" class="logo-black">
		</a>


		<ul class="footer-socials-list">
			<li class="footer-socials-item">
				<a class="footer-socials-link" target="_blank" rel="noreferrer noopener" href="https://www.instagram.com/"
					aria-label="instagram">
					<img src="<?php echo get_field("instagram", "option"); ?>" alt="instagram" class="icons" />
				</a>
			</li>
			<li class="footer-socials-item">
				<a class="footer-socials-link" href="https://www.facebook.com" target="_blank" aria-label="facebook"
					rel="noreferrer noopener">
					<img src="<?php echo get_field("facebook", "option"); ?>" alt="facebook" class="icons" />
				</a>
			</li>
			<li class="footer-socials-item">
				<a class="footer-socials-link" href="https://twitter.com" aria-label="twitter" target="_blank"
					rel="noreferrer noopener">
					<img src="<?php echo get_field("twitter", "option"); ?>" alt="twitter" class="icons" />
				</a>
			</li>
		</ul>



	</div>
</footer>



<?php get_template_part("modal/modal-bookARoom") ?>
<?php get_template_part("modal/modal-bookATable") ?>
<?php get_template_part("modal/modal-mobileMenuMain") ?>
<?php get_template_part("modal/modal-pricesPerRoom") ?>

<?php wp_footer() ?>




</body>

</html>