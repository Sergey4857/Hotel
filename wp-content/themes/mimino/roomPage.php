<?php
/*
Template Name: roomPage
*/
?>

<?php get_header() ?>


<section class="room-container" id="hero">

  <div class="room">
    <div class="room-hero-wrap">

      <div class="room-hero-box">
        <div class="room-hero-content">

          <h1 class="room-hero-title animate__animated animate__fadeInDown">double luxury room</h1>
          <div class="room-hero-btns">

            <button type="button"
              class="room-btn black-button animate__animated animate__bounceIn animate__delay-1s js-open-modal"
              data-modal="book-room">Book a room</button>


            <button type="button"
              class="prices-btn black-button animate__animated animate__bounceIn animate__delay-1s js-open-modal"
              data-modal="view-prices">View prices</button>
          </div>
        </div>
      </div>
      <div class="room-hero-wrapper">
        <div class="slider slider-container animate__animated animate__zoomIn">

          <div class="slider-box">
            <picture>

              <source
                srcset="
              <?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/desktop/hero-slider-rest-des-1-1x-min.jpg" ?>"
                media="(min-width: 1440px)">


              <source
                srcset=" <?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/tablet/hero-slider-rest-tab-1-1x-min.jpg" ?>"
                media="(min-width: 768px)">


              <img
                src=" <?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/mobile/hero-slider-rest-mob-1-1x-min.jpg" ?>">

            </picture>
          </div>

          <div class="slider-box">
            <picture>

              <source
                srcset="
                                    <?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/desktop/hero-slider-rest-des-2-1x-min.jpg" ?>"
                media="(min-width: 1440px)">


              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/tablet/hero-slider-rest-tab-2-1x-min.jpg" ?>"
                media="(min-width: 768px)">


              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/mobile/hero-slider-rest-mob-2-1x-min.jpg" ?>">

            </picture>
          </div>

          <div class="slider-box">
            <picture>

              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/desktop/hero-slider-rest-des-3-1x-min.jpg" ?>"
                media="(min-width: 1440px)">


              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/tablet/hero-slider-rest-tab-3-1x-min.jpg" ?>"
                media="(min-width: 768px)">


              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/mobile/hero-slider-rest-mob-3-1x-min.jpg" ?>">

            </picture>
          </div>

          <div class="slider-box">
            <picture>

              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/desktop/hero-slider-rest-des-4-1x-min.jpg" ?>"
                media="(min-width: 1440px)">


              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/tablet/hero-slider-rest-tab-4-1x-min.jpg" ?>"
                media="(min-width: 768px)">


              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/mobile/hero-slider-rest-mob-4-1x-min.jpg" ?>">

            </picture>
          </div>

          <div class="slider-box">
            <picture>

              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/desktop/hero-slider-rest-des-5-1x-min.jpg" ?>"
                media="(min-width: 1440px)">


              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/tablet/hero-slider-rest-tab-5-1x-min.jpg" ?>"
                media="(min-width: 768px)">


              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/mobile/hero-slider-rest-mob-5-1x-min.jpg" ?>">

            </picture>
          </div>

          <div class="slider-box">
            <picture>

              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/desktop/hero-slider-rest-des-6-1x-min.jpg" ?>"
                media="(min-width: 1440px)">


              <source
                srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/tablet/hero-slider-rest-tab-6-1x-min.jpg" ?>"
                media="(min-width: 768px)">


              <img
                src="<?php echo get_template_directory_uri() . "/src/images/page-room/hero-slider/mobile/hero-slider-rest-mob-6-1x-min.jpg" ?>">

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

        <p class="room-hero-text animate__animated animate__zoomIn animate__delay-1s">
          The Mimino hotel features spacious and stylish double luxury rooms with modern amenities for a comfortable
          stay.
        </p>
      </div>
    </div>
  </div>

</section>

<section class="amenities-container">
  <div class="amenities">
    <h2 class="visually-hidden">amenities</h2>
    <div class="amenities-content">
      <div class="amenities-box">
        <h3 class="amenities-title">General Amenities & Facilities:</h3>
        <ul class="amenities-list">
          <li class="amenities-item">24-hour front desk service</li>
          <li class="amenities-item">Daily housekeeping</li>
          <li class="amenities-item">Free Wi-Fi throughout the hotel</li>
          <li class="amenities-item">Elevator access</li>
          <li class="amenities-item">Luggage storage</li>
          <li class="amenities-item">Non-smoking rooms available</li>
          <li class="amenities-item">Meeting rooms for business and events</li>
          <li class="amenities-item">On-site parking (surcharge)</li>
          <li class="amenities-item">Concierge services</li>
        </ul>
      </div>

      <div class="amenities-box">


        <h3 class="amenities-title">Bathroom:</h3>
        <ul class="amenities-list">
          <li class="amenities-item">Private bathroom with shower</li>
          <li class="amenities-item">Complimentary toiletries</li>
          <li class="amenities-item">Hair dryer</li>
          <li class="amenities-item">Fresh towels daily</li>
          <li class="amenities-item">
            Deluxe bathrobes (in some room categories)
          </li>
        </ul>
      </div>

      <div class="amenities-box">
        <h3 class="amenities-title">Bedroom:</h3>
        <ul class="amenities-list">
          <li class="amenities-item">
            Comfortable beds with high-quality linens
          </li>
          <li class="amenities-item">Blackout curtains</li>
          <li class="amenities-item">
            Climate control (air conditioning and heating)
          </li>
          <li class="amenities-item">Safe for valuables</li>
          <li class="amenities-item">Writing desk and chair</li>
          <li class="amenities-item">Flat-screen TV with cable channels</li>
        </ul>
      </div>

      <div class="amenities-box">
        <h3 class="amenities-title">Kitchen:</h3>
        <ul class="amenities-list">
          <li class="amenities-item">
            In-room kitchenette (in some room categories)
          </li>
          <li class="amenities-item">Refrigerator</li>
          <li class="amenities-item">Microwave</li>
          <li class="amenities-item">Electric kettle</li>
          <li class="amenities-item">Cooking utensils and cutlery</li>
          <li class="amenities-item">Dining table and chairs</li>
        </ul>
      </div>

      <div class="amenities-box">
        <h3 class="amenities-title">Media:</h3>
        <ul class="amenities-list">
          <li class="amenities-item">Flat-screen TV with cable channels</li>
          <li class="amenities-item">High-speed Wi-Fi</li>
          <li class="amenities-item">iPod docking station</li>
          <li class="amenities-item">Speaker system</li>
          <li class="amenities-item">
            Electrical outlets for charging devices.
          </li>
        </ul>
      </div>
    </div>

    <div class="amenities-wrap">
      <div class="amenities-content-max">
        <div class="amenities-content-min">
          <picture class="amenities-first-img">
            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/amenities/desktop/amenties-des-1-1x-min.jpg" ?>"
              media="(min-width: 1440px)">

            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/amenities/tablet/amenties-tab-1-1x-min.jpg" ?>"
              media="(min-width: 768px)">

            <img
              src="<?php echo get_template_directory_uri() . "/src/images/page-room/amenities/mobile/amenties-mob-1-1x-min.jpg" ?>" />
          </picture>

          <picture class="amenities-second-img">

            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/amenities/desktop/amenties-des-2-1x-min.jpg" ?>"
              media="(min-width: 1440px)">

            <source
              srcset="<?php echo get_template_directory_uri() . "/src/images/page-room/amenities/tablet/amenties-tab-2-1x-min.jpg" ?>"
              media="(min-width: 768px)">


            <img
              src="<?php echo get_template_directory_uri() . "/src/images/page-room/amenities/mobile/amenties-mob-2-1x-min.jpg" ?>" />
          </picture>
        </div>

        <button class="amenities-button white-button js-open-modal" data-modal="book-room" type="button">book a
          room</button>
      </div>
    </div>
  </div>
</section>




<!-- Футер -->

<?php get_footer() ?>