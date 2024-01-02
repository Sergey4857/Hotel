<?php

get_header();
?>

<section class="month-dish-container">
	<div class="month-dish">

		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', get_post_type());


		endwhile; // End of the loop.
		?>

	</div>
</section>

<section class="blog-container">

	<div class="blog">

		<div class="blog-content">

			<h2 class="blog-title">RELATED POSTS</h2>


			<div class="blog-wrapper">
				<div class="slider-blog">

					<?php
					global $post;

					$myposts = get_posts([
						'numberposts' => -1,
						'offset' => 1,
						'category_name' => "dishes_month",
						'post_type' => 'post',
						'order' => 'ASC',

					]);

					if ($myposts) {
						foreach ($myposts as $post) {
							setup_postdata($post);
							?>
							<a href="<?php echo get_permalink() ?>" class="blog-item">
								<div class="blog-disk-box">
									<p class="blog-dish-title">
										<?php the_title() ?>
									</p>
									<div class="blog-dish-description">
										<?php echo get_the_content(); ?>
									</div>
								</div>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="Cheese soup">
							</a>
							<?php
						}
					} else {
						// Постов не найдено
					}

					wp_reset_postdata(); // Сбрасываем $post
					?>

				</div>
				<div class="slider-btns">
					<button type="button" class="slider-btn-prev">
						<img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-left-white.svg" ?>" alt="left">
					</button>

					<button type="button" class="slider-btn-next">
						<img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-right-white.svg" ?>" alt="left">
					</button>
				</div>

			</div>

</section>

<?php
get_footer();


