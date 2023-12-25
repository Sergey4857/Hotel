<!-- Book room modal -->

<div class="backdrop is-hidden" data-modal="book-room">
  <div class="book-room-modal modal">
    <button class="modal-close-btn" type="button">
      <img src="
      <?php echo get_template_directory_uri() . "/src/icons/icon-close.svg" ?>" alt="close" />
    </button>
    <h2 class=" modal-title">
      book a <span class="current-font-style">room</span>
    </h2>
    <form class="book-room-modal-form">
      <ul class="book-room-modal-list">
        <li class="book-room-modal-item">
          <label class="book-room-modal-label">
            <input class="book-room-modal-input" type="text" name="user_name" autocomplete="off" placeholder="Your name"
              pattern="[A-Za-zА-Яа-я]{2,}" title="Name must contain at least 2 letters" required />Who should book a
            table for?
          </label>
        </li>
        <li class="book-room-modal-item">
          <label class="book-room-modal-label">
            <input class="book-room-modal-input tel-input" type="tel" name="user_phone" autocomplete="off"
              required />Phone number
          </label>
        </li>
        <li class="book-room-modal-item">
          <label class="book-room-modal-label">
            <span class="modal-icon-wrap">
              <input class="book-room-modal-input fix-margin my-date-input" type="text" name="date-in"
                autocomplete="off" placeholder="TODAY"
                pattern="(0[1-9]|[12][0-9]|3[01])[- ..](0[1-9]|1[012])[- ..](19|20)\d\d" />
              <svg class="modal-select-icon" width="20" height="20">
                <use href="./img/icons/sprite.svg#btn-select"></use>
              </svg>
            </span>
            Check-in date
          </label>
        </li>
        <li class="book-room-modal-item">
          <label class="book-room-modal-label modal-select-label"><span class="modal-icon-wrap">
              <input class="book-room-modal-input fix-margin my-date-input" type="text" name="date-out"
                autocomplete="off" placeholder="25/04/2023"
                pattern="(0[1-9]|[12][0-9]|3[01])[- ..](0[1-9]|1[012])[- ..](19|20)\d\d" required />
              <svg class="modal-select-icon" width="20" height="20">
                <use href="./img/icons/sprite.svg#btn-select"></use>
              </svg>
            </span>
            Check-out date</label>
        </li>
        <li class="book-room-modal-item">
          <label class="book-room-modal-label modal-select-label"><span class="modal-icon-wrap">
              <select class="book-room-modal-select" name="type_of_room">
                <option value="1">DOUBLE SUITE</option>
                <option value="2">TRIPLE SUITE</option>
                <option value="3">QUADRUPLE SUITE</option>
              </select>
              <svg class="modal-select-icon" width="20" height="20">
                <use href="./img/icons/sprite.svg#btn-select"></use>
              </svg>
            </span>
            Number category</label>
        </li>
      </ul>
      <div class="modal-button-wrap">
        <button class="modal-button" type="submit">MAKE A RESERVATION</button>
      </div>
    </form>
  </div>
</div>