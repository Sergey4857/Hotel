<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mimino
 */

?>

<div id="post-<?php the_ID(); ?>" class="blog-item">
	<div class="blog-content">


		<p class="blog-date">
			<?php echo get_the_date(); ?>
		</p>




		<a href="<?php echo get_the_permalink(); ?>">
			<div class="blog-subtitle">
				<?php echo get_the_title(); ?>
			</div>
		</a>

		<div class="blog-text">
			<?php $content = get_the_content();
			echo wp_trim_words($content, 140, '...'); ?>
		</div>

		<div class="blog-box">
			<a class="article-back" href="/Mimino/restaurantpage/">‹ Back</a>

			<div class="blog-price">
				<?php the_field("price") ?>
			</div>
		</div>




	</div>

	<div class="blog-image-content">
		<?php the_post_thumbnail('post-thumbnail', array('class' => 'blog-picture')); ?>
	</div>

</div>