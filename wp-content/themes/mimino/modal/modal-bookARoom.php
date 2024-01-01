<!-- Book room modal -->

<div class="backdrop is-hidden" data-modal="book-room">
  <div class="book-room-modal modal">
    <button class="modal-close-btn" type="button">
      <img src="<?php echo get_template_directory_uri() . "/src/icons/icon-close.svg" ?>" alt="close" />
    </button>
    <h2 class="modal-title">
      book a <span class="current-font-style">room</span>
    </h2>

    <?php echo do_shortcode('[wpforms id="336" title="false"]'); ?>

  </div>
</div>