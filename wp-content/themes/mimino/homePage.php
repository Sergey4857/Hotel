<?php
/*
Template Name: homePage
*/
?>

<?php get_header();
?>



<main>
	<!-- Герой -->
	<section class="hero-container" id="hero">
		<div class="hero">
			<div class="hero-wrapper">
				<h1 class="hero-title animate__animated animate__fadeInDown animate__delay-1s">
					<?php the_field("hero_title"); ?>
				</h1>
				<div class="hero-wrap-item">
					<div class="hero-btns animate__animated animate__bounceIn animate__delay-1s">

						<button type="button" class="white-button js-open-modal" data-modal="book-room">
							<?php the_field("button-1"); ?>
						</button>


						<button type="button" class="white-button  js-open-modal" data-modal="book-table">
							<?php the_field("button-2"); ?>
						</button>

					</div>

				</div>

			</div>
			<ul class="hero-list-desc animate__animated animate__bounceIn animate__delay-2s animate__slow">
				<li class="hero-item-desc">

					<p class="hero-desc">
						<?php the_field("hero-desc-1"); ?>
					</p>


				</li>
				<li class="hero-item-desc">

					<p class="hero-desc">
						<?php the_field("hero-desc-2"); ?>
					</p>

				</li>
			</ul>
		</div>
	</section>

	<section class="about-container">
		<div class="about">
			<h2 class="visually-hidden">About a complex</h2>

			<div class="about-wrapper">
				<div class="about-restaurant-box">

					<picture class="about-complex-1">
						<source srcset="
						<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/desktop/about-desk-1-1x-min.jpg" ?>,
						" media="(min-width:1440px)" />

						<source srcset="
						<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/tablet/about-1-bg-tabl-1x-min.jpg" ?>,
						 " media="(min-width:768px)" />

						<img
							src="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/mobile/about-mob-1-1x-min.jpg" ?>"
							alt="about-complex-1" />
					</picture>

					<picture class="about-complex-2">
						<source
							srcset="
							<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/desktop/about-desk-2-1x-min.jpg" ?>"
							media="(min-width:1440px)" />

						<source
							srcset="
							<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/tablet/about-2-bg-tabl-1x-min.jpg" ?>"
							media="(min-width:768px)" />

						<img
							src="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/mobile/about-mob-2-1x-min.jpg" ?>"
							alt="about-complex-2" />
					</picture>

					<div class="about-wrap">
						<img class="about-review-img"
							srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/alexander-and-maria/about-maria-1x-min.png" ?>"
							alt="Maria-review" width="41" height="41" />

						<div class="about-review-content">
							<p class="about-review-name">Maria</p>
							<p class="about-review-desc">
								give rating
								<span class="about-review-rating">4.5</span>
							</p>
						</div>
					</div>
				</div>

				<div class="about-restaurant-complex">
					<h3 class="about-restaurant-complex-subtitle">
						<?php the_field("about-subtitle-1"); ?>
					</h3>
					<p class="about-restaurant-desc">
						<?php the_field("about-restaurant-desc-1"); ?>
					</p>
					<p class="about-restaurant-desc">
						<?php the_field("about-restaurant-desc-2"); ?>
					</p>
				</div>
			</div>

			<div class="business-class-hotel-wrapper">
				<div class="business-class-hotel-img">
					<picture class="about-complex-img-4">
						<source
							srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/desktop/about-desk-4-1x-min.jpg" ?>"
							media="(min-width:1440px)" />

						<source
							srcset="
						<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/tablet/about-3-bg-tabl-1x-min.jpg" ?>"
							media="(min-width:768px)" />

						<img class="about-complex-img-4"
							src="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/mobile/about-mob-3-1x-min.jpg" ?>"
							alt="about-complex-4" width="530" height="492" />
					</picture>

					<div class="review-wrapper">
						<img class="alexander-review-img"
							srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/alexander-and-maria/about-alexander-1x-min.png" ?>"
							alt="Alexander-review" width="41" height="41" />
						<div class="review-content">
							<p class="review-name">Alexander</p>
							<p class="review-desc">
								give rating
								<span class="review-rating">5.5</span>
							</p>
						</div>
					</div>
				</div>

				<div class="business-class-hotel-content">
					<div class="business-class-hotel-text">
						<h3 class="about-complex-subtitle">
							<?php the_field("about-subtitle-2"); ?>
						</h3>
						<p class="about-complex-desc">
							<?php the_field("about-restaurant-desc-3"); ?>
						</p>
					</div>
					<picture class="about-complex-img-3">
						<source
							srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/desktop/about-desk-3-1x-min.jpg" ?>"
							media="(min-width:1440px)" width="266" />

						<source
							srcset="
							<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/tablet/about-4-bg-tabl-1x-min.jpg" ?>"
							media="(min-width:768px)" width="266" />

						<img
							src="<?php echo get_template_directory_uri() . "/src/images/page-home/about-a-complex/mobile/about-mob-4-1x-min.jpg" ?>"
							alt="about-complex-3" width="335" height="309" />
					</picture>
				</div>
			</div>
		</div>
	</section>

	<section class="restaurant">

		<div class="restaurant-desc-wrapper">
			<h2 class="restaurant-title">
				<?php the_field("restaurant-title"); ?>
			</h2>
			<p class="restaurant-desc">
				<?php the_field("restaurant-desc"); ?>
			</p>
		</div>

		<div class="restaurant-details-slider">


			<div class="restaurant-img-wrapper slider-container-main-restaurant">

				<?php
				$rows = get_field("restaurant-slider");

				if ($rows) {

					foreach ($rows as $row) {
						?>

						<div>
							<picture>
								<source srcset="<?php echo $row["slider-image-desc"] ?>" media="(min-width:1440px)" width="266"
									height="309" />

								<source srcset="<?php echo $row["slider-image-tabl"] ?>" media="(min-width:768px)" width="336"
									height="309" />

								<img src="<?php echo $row["slider-image-mobile"] ?>" alt="restaurant1" width="157" height="201" />
							</picture>
						</div>

						<?php
					}

				}
				?>
			</div>


			<div class="btn-slider-wrapper">

				<button class="btn-slider-left slider-btn-prev" aria-label="scroll to left">
					<img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-left.svg" ?>" alt="left">
				</button>

				<button class="btn-slider-right slider-btn-next" aria-label="scroll to right">
					<img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-right.svg" ?>" alt="left">
				</button>
			</div>
		</div>

		<div class="restaurant-button-wrapper">
			<button type="button" class="black-button js-open-modal" data-modal="book-table">
				<?php the_field("restaurant-button-1"); ?>
			</button>

			<a class="black-button" href="restaurantpage/">
				<?php the_field("restaurant-button-2"); ?>
			</a>
		</div>
	</section>

	<section class="welcome-container">
		<div class="welcome">
			<div class="information">
				<h2 class="welcome-title">

					<?php the_field("welcome-title"); ?>

				</h2>
				<ul class="welcome-list">
					<li class="welcome-item">
						<?php the_field("welcome-desc-1"); ?>
					</li>
					<li class="welcome-item-second">
						<?php the_field("welcome-desc-2"); ?>
					</li>
				</ul>
			</div>
			<div class="picture">
				<picture>
					<source
						srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/welcome-complex/desktop/welcome-desk-1-1x-min.jpg" ?>"
						media="(min-width:1440px)" />
					<source
						srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/welcome-complex/tablet/welcome-tabl-1-1x-min.jpg" ?>"
						width="704" height="599" media="(min-width:768px)" />

					<img
						src="<?php echo get_template_directory_uri() . "/src/images/page-home/welcome-complex/tablet/welcome-tabl-1-1x-min.jpg" ?>"
						alt="complex" />
				</picture>
			</div>
		</div>
	</section>

	<section class="hotel-container-homepage ">
		<div class="hotel">
			<div class="hotel-wrap">
				<h2 class="hotel-title">
					<?php the_field("hotel-title"); ?>
				</h2>
				<p class="hotel-text">
					<?php the_field("hotel-text"); ?>
				</p>
			</div>
			<div class="hotel-pictures">
				<div class="pictures-wrap">
					<div class="picture-1">
						<picture>
							<source
								srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/desktop/hotel-desk-1-1x-min.jpg" ?>"
								width="320" height="260" media="(min-width:1440px)" />
							<source
								srcset="
															<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/tablet/hotel-tabl-1-1x-min.jpg" ?>"
								width="176" height="143" media="(min-width:768px)" />
							<img
								src="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/mobile/hotel-mob-3-1x-min.jpg" ?>"
								alt="hotel" />
						</picture>
					</div>


					<div class="picture-2">

						<picture>
							<source
								srcset="
								<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/desktop/hotel-desk-3-1x-min.jpg" ?>"
								width="420" height="548" media="(min-width:1440px)" />

							<source
								srcset="
													<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/tablet/hotel-tabl-3-1x-min.jpg" ?>"
								width="320" height="417" media="(min-width:768px)" />
							<img
								src="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/mobile/hotel-mob-1-1x-min.jpg" ?>" />
						</picture>
					</div>
					<div class="picture-3">
						<picture>
							<source
								srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/desktop/hotel-desk-2-1x-min.jpg" ?>"
								width="320" height="260" media="(min-width:1440px)" />
							<source
								srcset="
								<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/tablet/hotel-tabl-2-1x-min.jpg" ?>"
								width="176" height="258" media="(min-width:768px)" />
							<img
								src="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/mobile/hotel-mob-2-1x-min.jpg" ?>" />
						</picture>
					</div>

					<div class="picture-4">
						<picture>
							<source
								srcset="
														<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/desktop/hotel-desk-4-1x-min.jpg" ?>"
								media="(min-width:1440px)" />
							<source
								srcset="
														<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/tablet/hotel-tabl-4-1x-min.jpg" ?>"
								media="(min-width:768px)" />
							<img
								src="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/mobile/hotel-mob-4-1x-min.jpg" ?>" />
						</picture>

					</div>
					<div class="picture-5">
						<picture>
							<source
								srcset="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/desktop/hotel-desk-5-1x-min.jpg" ?>"
								media="(min-width:1440px)" />
							<source
								srcset="
														<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/tablet/hotel-tabl-5-1x-min.jpg" ?>"
								media="(min-width:768px)" />
							<img
								src="<?php echo get_template_directory_uri() . "/src/images/page-home/hotel’s-details/mobile/hotel-mob-5-1x-min.jpg" ?>" />
						</picture>
					</div>

				</div>



			</div>
			<div class="hotel-buttons">
				<button type="button" class="hotel-button js-open-modal white-button" data-modal="book-room">
					<?php the_field("hotel-button-1"); ?>
				</button>

				<a class="hotel-view-btn white-button" href="roompage/">
					<?php the_field("hotel-button-2"); ?>
				</a>


			</div>
		</div>
	</section>

	<section class="location-container">
		<div class="location">
			<div class="location-content">
				<h2 class="location-title">
					<?php the_field("location-title"); ?>
				</h2>

				<?php the_field("location-map"); ?>


				<address class="locations-contacts">
					<div class="location-wrap">
						<div class="location-country">
							<?php the_field("location-country"); ?>
						</div>
						<div class="location-address">
							<?php the_field("location-address"); ?>
						</div>
					</div>

					<div class="locations-phones">
						<div class="locations-phones-title">
							<?php the_field("location-locations-phones-title"); ?>
						</div>
						<ul class="contacts-list">
							<li class="contacts-item"><a class="contacts-link" href="tel:<?php the_field("location-telephone-1"); ?>">
									<?php the_field("location-telephone-1"); ?>
								</a></li>
							<li class="contacts-item"><a class="contacts-link" href="tel:<?php the_field("location-telephone-2"); ?>">
									<?php the_field("location-telephone-2"); ?>
								</a></li>
						</ul>
					</div>
				</address>
			</div>
			<div class="location-map-box">
			</div>
		</div>
	</section>


</main>


<!-- Футер -->

<?php get_footer() ?>