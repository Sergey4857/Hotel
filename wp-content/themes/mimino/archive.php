<?php
get_header();
?>

<div id="primary" class="archive-container">
	<div class="archive">

		<?php if (have_posts()): ?>

			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post();

				get_template_part('template-parts/content', get_post_type());

			endwhile;

			the_posts_navigation();

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>
</div><!-- #main -->

<?php
get_footer();
