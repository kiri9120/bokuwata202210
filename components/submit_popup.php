<div class="submit_popup popup" id="submit">
    <div class="popup_bg js-close_submit_popup"></div>
    <div class="popup_wrapper">
        <div class="popup_close_btn js-close_submit_popup"></div>
        <?php if ($args['contact'] == 'home') : ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/submit_home.jpg" alt="">
        <?php elseif ($args['contact'] == 'recruit') : ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/submit_recruit.jpg" alt="">
        <?php endif; ?>
    </div>
</div>