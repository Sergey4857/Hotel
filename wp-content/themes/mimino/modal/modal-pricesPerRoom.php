<!-- Prices per room modal -->

<div class="backdrop is-hidden" data-modal="view-prices">
  <div class="prices-modal modal">
    <button class="modal-close-btn" type="button">
      <!-- <svg width="28" height="28">
        <use href="./img/icons/sprite.svg#close-x"></use>
      </svg> -->
    </button>
    <h2 class="modal-title">
      prices per <span class="prices-current-font-style">room</span>
    </h2>
    <form class="prices-per-room-modal-form">
      <h3 class="prices-modal-subtitle">Double suite</h3>
      <ul class="prices-per-room-modal-list">
        <li class="prices-per-room-modal-item">
          <label class="prices-per-room-modal-label">
            <span class="modal-icon-wrap">
              <select class="prices-per-room-modal-select" name="check_in_day" id="number-of-nights">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
              <!-- <svg class="modal-select-icon" width="20" height="20">
                <use href="./img/icons/sprite.svg#btn-select"></use>
              </svg> -->
            </span>
            Number of nights
          </label>
        </li>
        <li class="prices-per-room-modal-item">
          <label class="prices-per-room-modal-label">
            <span class="prices-per-room-modal-input prices-input" id="prices">1000</span>
            UAH
          </label>
        </li>
      </ul>
      <div class="modal-button-wrap">
        <button type="submit" class="modal-button">MAKE A RESERVATION</button>
      </div>
    </form>
  </div>
</div>