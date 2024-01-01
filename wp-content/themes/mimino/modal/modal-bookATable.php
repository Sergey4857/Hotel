<!--  Book a table modal -->

<div class="backdrop is-hidden" data-modal="book-table">
  <div class="book-table-modal modal">
    <button class="modal-close-btn" type="button">
      <img src="
      <?php echo get_template_directory_uri() . "/src/icons/icon-close.svg" ?>" alt="close" />
    </button>
    <h2 class="modal-title">
      book a <span class="current-font-style">table</span>
    </h2>
    <div class="book-a-table-modal-form">

      <?php echo do_shortcode('[contact-form-7 id="df17ac8" title="Book a table"]') ?>

    </div>
  </div>
</div>




<!-- <ul class="book-a-table-modal-list">
        <li class="book-a-table-modal-item">
          <label class="book-a-table-modal-label">
            <input class="book-a-table-modal-input" type="text" name="user_name" autocomplete="off"
              pattern="[A-Za-zА-Яа-я]{2,}" title="Name must contain at least 2 letters" placeholder="Your name"
              required />Who should book a table for?
          </label>
        </li>
        <li class="book-a-table-modal-item">
          <label class="book-a-table-modal-label">
            <span class="modal-icon-wrap fix-margin">
              <select class="book-a-table-modal-select" name="check_in_day" required>
                <option value disabled selected>NUMBER OF PEOPLE</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
              <img class="modal-select-icon"
                src="<?php echo get_template_directory_uri() . "../src/icons/arrow-down.svg" ?>" alt="close" />
              </span>
            </label>
          </li>
          <li class="book-a-table-modal-item">
            <label class="book-a-table-modal-label">
              <span class="modal-icon-wrap">
                <input class="book-room-modal-input fix-margin my-date-input datepicker" type="text" name="booking-date"
                  autocomplete="off" placeholder="TODAY"
                  pattern="(0[1-9]|[12][0-9]|3[01])[- ..](0[1-9]|1[012])[- ..](19|20)\d\d" />
                <img class="modal-select-icon"
                  src="<?php echo get_template_directory_uri() . "/src/icons/arrow-down.svg" ?>" alt="close" />
              </span>
              What date to book?
            </label>
          </li>
          <li class="book-a-table-modal-item">
            <label class="book-a-table-modal-label">
              <input class="book-a-table-modal-input tel-input" type="tel" name="user_phone" autocomplete="off"
                required />Phone number
            </label>
          </li>
        </ul>
        <div class="modal-button-wrap">
          <button type="submit" class="modal-button">MAKE A RESERVATION</button>
        </div> -->