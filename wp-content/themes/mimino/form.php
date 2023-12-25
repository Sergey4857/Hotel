<div class="backdrop is-hidden" data-modal>
  <div class="modal">
    <button class="modal-botton" type="button" data-modal-close>
      <svg class="close-icon">
        <use href="./images/icons.svg#close"></use>
      </svg>


    </button>
    <h2 class="modal-title">Leave your contacts and we will call you back</h2>
    <form class="modal-form">

      <div role="group" class="data-container">

        <div class="data-box">
          <label for="name" class="data-title data-name">Name</label>
          <input type="text" name="name" id="name" class="data-field" required>
          <svg class="icon-person">
            <use href="./images/icons.svg#person-black"></use>
          </svg>
        </div>



        <div class="data-box">
          <label for="tel" class="data-title">Phone</label>
          <input type="tel" name="number" id="tel" class="data-field" required>
          <svg class="icon-phone">
            <use href="./images/icons.svg#phone"></use>
          </svg>
        </div>

        <div class="data-box">
          <label for="mail" class="data-title">Email</label>
          <input type="email" name="email" id="mail" class="data-field" required>
          <svg class="icon-mail">
            <use href="./images/icons.svg#email"></use>
          </svg>
        </div>


        <div class="data-box">

          <label for="comment" class="data-title">Comment</label>
          <textarea name="Comment" id="comment" class="data-comment" placeholder="Text input"></textarea>

        </div>


      </div>


      <label for="policy" class="policy-text">
        <input type="checkbox" name="policy" id="policy" class="checkbox">
        <svg class="custom-checkbox">
          <use href="./images/icons.svg#checkbox"></use>
        </svg> I accept the terms and conditions of the <a href="" class="data-link">Privacy Policy</a></label>

      <button type="submit" class="send-btn">Send</button>


    </form>
  </div>

</div>