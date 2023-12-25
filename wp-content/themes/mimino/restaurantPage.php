<?php
/*
Template Name: restaurantPage
*/
?>

<?php get_header();
$restaurant_hero_section = get_field("section-restaurant-hero");
$about_kitchen_section = get_field("section-about-kitchen");
$restaurant_menu_section = get_field("section-restaurant-menu");

?>

<section class="restaurant-container" id="hero">

  <div class="restaurant">
    <div class="restaurant-hero-wrap">

      <div class="restaurant-hero-box">
        <div class="restaurant-hero-content">

          <h1 class="restaurant-hero-title animate__animated animate__fadeInDown">
            <?php echo $restaurant_hero_section["restaurant-hero-title"]; ?>
          </h1>
          <div class="restaurant-hero-btns">

            <button type="button"
              class="room-btn black-button animate__animated animate__bounceIn animate__delay-1s js-open-modal"
              data-modal="book-room">
              <?php echo $restaurant_hero_section["restaurant-button-1"]; ?>
            </button>


            <button type="button"
              class="prices-btn black-button animate__animated animate__bounceIn animate__delay-1s js-open-modal"
              data-modal="view-prices">
              <?php echo $restaurant_hero_section["restaurant-button-2"]; ?>
            </button>
          </div>
        </div>
      </div>
      <div class="restaurant-hero-wrapper">
        <div class="slider slider-container animate__animated animate__zoomIn">

          <div class="slider-box">
            <picture>
              <source media="(min-width: 1440px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/desktop/hero-rest-desk-1-1x-min.jpg" ?>" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/tablet/hero-rest-tabl-1-1x-min.jpg" ?>" />

              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/mobile/hero-rest-mob-1-1x-min.jpg" ?>" />
            </picture>
          </div>
          <div class="slider-box">
            <picture>
              <source media="(min-width: 1440px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/desktop/hero-rest-desk-2-1x-min.jpg" ?>" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/tablet/hero-rest-tabl-2-1x-min.jpg" ?>" />
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/mobile/hero-rest-mob-2-1x-min.jpg" ?>" />
            </picture>
          </div>
          <div class="slider-box">
            <picture>
              <source media="(min-width: 1440px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/desktop/hero-rest-desk-3-1x-min.jpg" ?>" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/tablet/hero-rest-tabl-3-1x-min.jpg" ?>" />
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/mobile/hero-rest-mob-3-1x-min.jpg" ?>" />
            </picture>
          </div>

          <div class="slider-box">
            <picture>
              <source media="(min-width: 1440px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/desktop/hero-rest-desk-4-1x-min.jpg" ?>" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/tablet/hero-rest-tabl-4-1x-min.jpg" ?>" />
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/mobile/hero-rest-mob-4-1x-min.jpg" ?>" />
            </picture>
          </div>

          <div class="slider-box">
            <picture>
              <source media="(min-width: 1440px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/desktop/hero-rest-desk-5-1x-min.jpg" ?>" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/tablet/hero-rest-tabl-5-1x-min.jpg" ?>" />
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/mobile/hero-rest-mob-5-1x-min.jpg" ?>" />
            </picture>
          </div>

          <div class="slider-box">
            <picture>
              <source media="(min-width: 1440px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/desktop/hero-rest-desk-6-1x-min.jpg" ?>" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/tablet/hero-rest-tabl-6-1x-min.jpg" ?>" />
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/hero-slider/mobile/hero-rest-mob-6-1x-min.jpg" ?>" />
            </picture>
          </div>
        </div>





        <div class="slider-btns animate__animated animate__zoomIn">
          <button type="button" class="slider-btn-prev">
            <img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-left.svg" ?>" alt="left">
          </button>

          <button type="button" class="slider-btn-next">
            <img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-right.svg" ?>" alt="left">
          </button>
        </div>

        <p class="restaurant-hero-text animate__animated animate__zoomIn animate__delay-1s">
          <?php echo $restaurant_hero_section["restaurant-text"]; ?>
        </p>
      </div>
    </div>
  </div>

</section>

<!-- about -->
<section class="about-kitchen-container">
  <div class="about-kitchen">
    <div class="about-kitchen-block">
      <div class="about-kitchen-images">
        <div class="about-kitchen-1">
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/desktop/about-rest-des-1-1x-min.jpg" ?>"
              media="(min-width:1440px)" />

            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/tablet/about-rest-tab-1-1x-min.jpg" ?>"
              media="(min-width:768px)" />

            <img
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/mobile/about-rest-mob-1-1x-min.jpg" ?>"
              alt="about-a-kitchen-1" />
          </picture>
        </div>
        <div class="about-kitchen-2">
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/desktop/about-rest-des-2-1x-min.jpg" ?>"
              media="(min-width:1440px)" />

            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/tablet/about-rest-tab-2-1x-min.jpg" ?>"
              media="(min-width:768px)" />

            <img
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/mobile/about-rest-mob-2-1x-min.jpg" ?>"
              alt="about-a-kitchen-1" />
          </picture>
        </div>
        <div class="about-kitchen-3">
          <picture>
            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/desktop/about-rest-des-3-1x-min.jpg" ?>"
              media="(min-width:1440px)" />

            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/tablet/about-rest-tab-3-1x-min.jpg" ?>"
              media="(min-width:768px)" />

            <img
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-restaurant/about-a-kitchen/mobile/about-rest-mob-3-1x-min.jpg" ?>"
              alt="about-a-kitchen-1" />
          </picture>
        </div>
      </div>


    </div>
    <ul class="about-kitchen-text-list">
      <li class="about-kitchen-text-item">
        <p class="about-kitchen-text" data-aos-easing="ease-in-sine">
          <?php echo $about_kitchen_section["about-kitchen-text-1"]; ?>


          <!-- At Mimino, we are experts in
          <span class="italic-text">meat preparation.</span> Our chefs use only
          the finest and freshest ingredients to
          <span class="italic-text">create delicious dishes</span> that showcase
          the flavors of premium cuts of meat. -->
        </p>
      </li>
      <li class="about-kitchen-text-item">
        <p class="about-kitchen-text">
          <?php echo $about_kitchen_section["about-kitchen-text-2"]; ?>

          <!-- Our <span class="italic-text">slow-cooking process</span> and expert
          seasoning bring out the best in each dish, making for an unforgettable
          dining experience. Come taste the magic
          <span class="italic-text">of meat preparation at</span> Mimino. -->
        </p>
      </li>
    </ul>
  </div>
</section>

<section class="restaurant-menu-container" id="restaurant-menu">
  <div class="restaurant-menu">
    <h2 class="restaurant-menu-title">
      <?php echo $restaurant_menu_section["restaurant-title"]; ?>
    </h2>

    <div class="slider-restaurant-menu">
      <div class="restaurant-menu-slider-box">
        <div class="restaurant-menu-blocks">
          <h3 class="restaurant-menu-suptitle">
            <?php echo $restaurant_menu_section["category-1"]["category-1-subtitle"]; ?>
          </h3>
          <ul class="restaurant-menu-list">

            <?php
            $rows = $restaurant_menu_section["category-1"]["dish-info"];

            if ($rows) {

              foreach ($rows as $row) {
                echo '<li class="restaurant-menu-item">';
                ?>

                <div class="restaurant-menu-wrap-name">
                  <p class="restaurant-menu-name">
                    <?php echo $row["restaurant-menu-name"] ?>
                  </p>

                  <p class="restaurant-menu-grams">
                    <?php echo $row["restaurant-menu-grams"] ?>
                  </p>
                </div>
                <div class="restaurant-menu-wrap-ingredients">
                  <p class="restaurant-menu-list-ingredients">
                    <?php echo $row["restaurant-menu-ingredients"] ?>
                  </p>
                  <p class="restaurant-menu-price">
                    <?php echo $row["restaurant-menu-price"] ?>
                  </p>
                </div>

                <?php
                echo '</li>';
              }

            }

            ?>




          </ul>
        </div>
      </div>
      <div class="restaurant-menu-slider-box">
        <div class="restaurant-menu-blocks">
          <h3 class="restaurant-menu-suptitle">
            <?php echo $restaurant_menu_section["category-2"]["category-2-subtitle"]; ?>
          </h3>
          <ul class="restaurant-menu-list">
            <?php
            $rows = $restaurant_menu_section["category-2"]["dish-info"];

            if ($rows) {

              foreach ($rows as $row) {
                echo '<li class="restaurant-menu-item">';
                ?>

                <div class="restaurant-menu-wrap-name">
                  <p class="restaurant-menu-name">
                    <?php echo $row["restaurant-menu-name"] ?>
                  </p>

                  <p class="restaurant-menu-grams">
                    <?php echo $row["restaurant-menu-grams"] ?>
                  </p>
                </div>
                <div class="restaurant-menu-wrap-ingredients">
                  <p class="restaurant-menu-list-ingredients">
                    <?php echo $row["restaurant-menu-ingredients"] ?>
                  </p>
                  <p class="restaurant-menu-price">
                    <?php echo $row["restaurant-menu-price"] ?>
                  </p>
                </div>

                <?php
                echo '</li>';
              }

            }

            ?>

          </ul>
        </div>
      </div>
      <div class="restaurant-menu-slider-box">
        <div class="restaurant-menu-blocks">
          <h3 class="restaurant-menu-suptitle">
            <?php echo $restaurant_menu_section["category-3"]["category-3-subtitle"]; ?>
          </h3>
          <ul class="restaurant-menu-list">
            <?php
            $rows = $restaurant_menu_section["category-3"]["dish-info"];

            if ($rows) {

              foreach ($rows as $row) {
                echo '<li class="restaurant-menu-item">';
                ?>

                <div class="restaurant-menu-wrap-name">
                  <p class="restaurant-menu-name">
                    <?php echo $row["restaurant-menu-name"] ?>
                  </p>

                  <p class="restaurant-menu-grams">
                    <?php echo $row["restaurant-menu-grams"] ?>
                  </p>
                </div>
                <div class="restaurant-menu-wrap-ingredients">
                  <p class="restaurant-menu-list-ingredients">
                    <?php echo $row["restaurant-menu-ingredients"] ?>
                  </p>
                  <p class="restaurant-menu-price">
                    <?php echo $row["restaurant-menu-price"] ?>
                  </p>
                </div>

                <?php
                echo '</li>';
              }

            }

            ?>

          </ul>
        </div>
      </div>
      <div class="restaurant-menu-slider-box">
        <div class="restaurant-menu-blocks">

          <h3 class="restaurant-menu-suptitle">
            <?php echo $restaurant_menu_section["category-4"]["category-4-subtitle"]; ?>
          </h3>
          <ul class="restaurant-menu-list">

            <?php
            $rows = $restaurant_menu_section["category-4"]["dish-info"];

            if ($rows) {

              foreach ($rows as $row) {
                echo '<li class="restaurant-menu-item">';
                ?>

                <div class="restaurant-menu-wrap-name">
                  <p class="restaurant-menu-name">
                    <?php echo $row["restaurant-menu-name"] ?>
                  </p>

                  <p class="restaurant-menu-price">
                    <?php echo $row["restaurant-menu-price"] ?>
                  </p>
                </div>

                <?php
                echo '</li>';
              }

            }

            ?>
          </ul>



          <div class="restaurant-menu-drinks">
            <h3 class="restaurant-menu-suptitle">
              <?php echo $restaurant_menu_section["category-5"]["category-5-subtitle"]; ?>
            </h3>
            <ul class="restaurant-menu-list">

              <?php
              $rows = $restaurant_menu_section["category-5"]["dish-info"];

              if ($rows) {

                foreach ($rows as $row) {
                  echo '<li class="restaurant-menu-item">';
                  ?>

                  <div class="restaurant-menu-wrap-name">
                    <p class="restaurant-menu-name">
                      <?php echo $row["restaurant-menu-name"] ?>
                    </p>

                    <p class="restaurant-menu-price">
                      <?php echo $row["restaurant-menu-price"] ?>
                    </p>
                  </div>

                  <?php
                  echo '</li>';
                }

              }

              ?>
            </ul>
          </div>



        </div>
      </div>






    </div>
    <div class="slider-btns">
      <button type="button" class="restaurant-slider-btn-prev">
        <img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-left-white.svg" ?>" alt="left">
      </button>

      <button type="button" class="restaurant-slider-btn-next">
        <img src=" <?php echo get_template_directory_uri() . "/src/icons/slider-right-white.svg" ?>" alt="left">
      </button>
    </div>

    <button class="restaurant-menu-btn white-button js-open-modal" data-modal="book-table" type="button">BOOK A
      TABLE</button>
  </div>
</section>



<!-- Футер -->


<?php get_footer() ?>

</body>

</html>