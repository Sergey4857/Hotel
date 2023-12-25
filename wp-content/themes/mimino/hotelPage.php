<!-- <?php
/*
Template Name: hotelPage
*/
?> -->
<?php get_header();
$hero_section = get_field("section-hero");
$double_room_section = get_field("section-double-room");
$triple_room_section = get_field("section-triple-room");
$four_seater_section = get_field("section-four-seater");
?>

<section class="hotel-container" id="hero">

  <div class="hotel">
    <div class="hotel-hero-wrap">

      <div class="hotel-hero-box">
        <div class="hotel-hero-content">

          <h1 class="hotel-hero-title animate__animated animate__fadeInDown">
            <?php echo $hero_section["hotel-hero-title"]; ?>
          </h1>
          <div class="hotel-hero-btns">

            <button type="button"
              class="room-btn black-button animate__animated animate__bounceIn animate__delay-1s js-open-modal"
              data-modal="book-room">
              <?php echo $hero_section["hotel-button-1"]; ?>
            </button>


            <button type="button"
              class="prices-btn black-button animate__animated animate__bounceIn animate__delay-1s js-open-modal"
              data-modal="view-prices">
              <?php echo $hero_section["hotel-button-2"]; ?>
            </button>
          </div>
        </div>
      </div>
      <div class="hotel-hero-wrapper">
        <div class="slider slider-container animate__animated animate__zoomIn">

          <div class="slider-box">
            <picture>
              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/desktop/hero-desk-1-1x-min.jpg" ?>"
                media="(min-width: 1440px)">
              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/tablet/hero-tabl-1-1x-min.jpg" ?>"
                media="(min-width: 768px)">
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/mobile/hero-mob-1-1x-min.jpg" ?>">
            </picture>
          </div>
          <div class="slider-box">
            <picture>
              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/desktop/hero-desk-2-1x-min.jpg" ?>"
                media="(min-width: 1440px)">
              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/tablet/hero-tabl-2-1x-min.jpg" ?>"
                media="(min-width: 768px)">
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/mobile/hero-mob-2-1x-min.jpg" ?>">
            </picture>
          </div>
          <div class="slider-box">
            <picture>
              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/desktop/hero-desk-3-1x-min.jpg" ?>"
                media="(min-width: 1440px)">
              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/tablet/hero-tabl-3-1x-min.jpg" ?>"
                media="(min-width: 768px)">
              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/hero-slider/mobile/hero-mob-3-1x-min.jpg" ?>">
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

        <p class="hotel-hero-text animate__animated animate__zoomIn animate__delay-1s">
          <?php echo $hero_section["hotel-hero-text"]; ?>
        </p>
      </div>
    </div>
  </div>

</section>

<section class="double-room-container">
  <div class="double-room">
    <div class="double-room-images">
      <picture class="double-room-img-1">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/desktop/double-desk-1-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/tablet/double-tabl-1-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/mobile/double-mob-1-1x-min.jpg" ?>" />
      </picture>

      <picture class="double-room-img-2">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/desktop/double-desk-2-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/tablet/double-tabl-2-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/mobile/double-mob-2-1x-min.jpg" ?>" />
      </picture>

      <picture class="double-room-img-3">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/desktop/double-desk-3-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/tablet/double-tabl-3-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/double-luxury-room/mobile/double-mob-3-1x-min.jpg" ?>" />
      </picture>
    </div>

    <div class="double-room-wrap">
      <div class="double-room-text-wrap">
        <h2 class="hotel-rooms-title">
          <?php echo $double_room_section["double-room-title"]; ?>
        </h2>

        <ul class="hotel-rooms-text-list">
          <li class="hotel-rooms-text-item">
            <p class="triple-text-1">
              <?php echo $double_room_section["double-text-1"]; ?>
            </p>
          </li>
          <li class="hotel-rooms-text-item">
            <p class="triple-text-2">
              <?php echo $double_room_section["double-text-2"]; ?>
            </p>
          </li>
        </ul>
      </div>

      <div class="hotel-rooms-btns">

        <a href="roompage/" class="black-button room-btn dark-bg-btn">
          <?php echo $double_room_section["double-button-1"]; ?>
        </a>

        <button type="button" class="black-button prices-btn js-open-modal" data-modal="view-prices">
          <?php echo $double_room_section["double-button-2"]; ?>
        </button>

      </div>
    </div>
  </div>
</section>

<section class="triple-room-container">
  <div class="triple-room">
    <div class="triple-room-images">
      <picture class="triple-room-img-1">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/desktop/triple-desk-1-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/tablet/triple-tabl-1-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/mobile/triple-mob-1-1x-min.jpg" ?>" />
      </picture>

      <picture class="triple-room-img-2">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/desktop/triple-desk-2-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/tablet/triple-tabl-2-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/mobile/triple-mob-2-1x-min.jpg" ?>" />
      </picture>

      <picture class="triple-room-img-3">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/desktop/triple-desk-3-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/tablet/triple-tabl-3-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/triple-room/mobile/triple-mob-3-1x-min.jpg" ?>" />
      </picture>
    </div>

    <div class="triple-room-wrap">
      <div class="triple-room-text-wrap">
        <h2 class="hotel-rooms-title">
          <?php echo $triple_room_section["triple-room-title"]; ?>
        </h2>

        <ul class="hotel-rooms-text-list">
          <li class="hotel-rooms-text-item">
            <p class="triple-text-1">
              <?php echo $triple_room_section["triple-room-text-1"]; ?>
            </p>
          </li>
          <li class="hotel-rooms-text-item">
            <p class="triple-text-2">
              <?php echo $triple_room_section["triple-room-text-2"]; ?>
            </p>
          </li>
        </ul>
      </div>

      <div class="hotel-rooms-btns">

        <a href="roompage/" class="black-button room-btn dark-bg-btn">
          <?php echo $triple_room_section["triple-button-1"]; ?>
        </a>

        <button type="button" class="black-button prices-btn js-open-modal" data-modal="view-prices">
          <?php echo $triple_room_section["triple-button-2"]; ?>
        </button>

      </div>
    </div>
  </div>
</section>

<section class="four-seater-container">
  <div class="four-seater">
    <div class="four-seater-images">
      <picture class="four-seater-img-1">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/desktop/four-desk-1-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/tablet/four-tabl-1-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/mobile/four-mob-1-1x-min.jpg" ?>" />
      </picture>

      <picture class="four-seater-img-2">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/desktop/four-desk-2-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/tablet/four-tabl-2-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/mobile/four-mob-2-1x-min.jpg" ?>" />
      </picture>

      <picture class="four-seater-img-3">
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/desktop/four-desk-3-1x-min.jpg" ?>"
          media="(min-width: 1440px)" />
        <source
          srcset="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/tablet/four-tabl-3-1x-min.jpg" ?>"
          media="(min-width: 768px)" />
        <img
          src="<?php echo get_template_directory_uri() . "/src/images/page-hotel/four-seater-room/mobile/four-mob-3-1x-min.jpg" ?>" />
      </picture>
    </div>

    <div class="four-seater-wrap">
      <div class="four-seater-text-wrap">
        <h2 class="hotel-rooms-title">
          <?php echo $four_seater_section["four-seater-title"]; ?>
        </h2>

        <ul class="hotel-rooms-text-list">
          <li class="hotel-rooms-text-item">
            <p class="four-seater-text-1">
              <?php echo $four_seater_section["four-seater-text-1"]; ?>
            </p>
          </li>

        </ul>
      </div>

      <div class="hotel-rooms-btns">

        <a href="roompage/" class="black-button room-btn dark-bg-btn">
          <?php echo $four_seater_section["button-1"]; ?>
        </a>

        <button type="button" class="black-button prices-btn js-open-modal" data-modal="view-prices">
          <?php echo $four_seater_section["button-2"]; ?>
        </button>

      </div>
    </div>
  </div>
</section>


</main>

<!-- Футер -->

<?php get_footer() ?>