<?php
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<footer>
    <div class="width_wrapper wrapper">
        <div class="row">
            <div class="l-1 line">
                <div class="item">
                    <p>会社名</p>
                    <p>僕と私と株式会社</p>
                </div>
                <div class="item">
                    <p>代表</p>
                    <p>今瀧 健登</p>
                </div>
                <div class="item">
                    <p>設立</p>
                    <p>2020年11月</p>
                </div>
                <div class="item">
                    <p>所在地</p>
                    <p>東京都渋谷区円山町5-5<br>Navi渋谷V 3階</p>
                </div>
                <div class="item">
                    <p>メンバー数</p>
                    <p>45名（業務委託含む）</p>
                </div>
            </div>
            <div class="l-2 line">
                <p class="item">事業内容</p>
                <ol>
                    <li>Z世代に関する企画・マーケティング事業</li>
                    <li>ブランド事業</li>
                    <li>「花贈り」に関する事業</li>
                    <li>前各号に付帯する一切の業務</li>
                </ol>
            </div>
            <div class="l-3 line">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer_logo.png" alt="僕と私と">
                <div class="social_media">
                    <a href="https://pin.it/4DO1ipP" class="sns_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_pintarest.png" alt="pintarest">
                    </a>
                    <a href="https://twitter.com/k_hanarida" class="sns_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_twitter.png" alt="twitter">
                    </a>
                    <a href="https://note.com/flower_boy/" class="sns_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_note.png" alt="note">
                    </a>
                </div>
                <div class="policy pc">
                    <a href="<?php echo home_url('/privacy'); ?>">個人情報の取り扱いについて</a>
                    <p>©️BOKU to WATASHI and. inc</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="menu" id="menu">
    <div class="menu_close-btn js-menu_close">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-icon_close.png" alt="" class="menu_icon">
    </div>
    <div class="menu_wrapper">
        <div class="menu_contents">
            <div class="menu_contents-item">
                <a href="<?php echo home_url('ceo'); ?>">
                    <p class="main_title en">CEO</p>
                    <p class="sub_title">Z世代の企画屋</p>
                </a>
            </div>
            <div class="menu_contents-item">
                <a href="<?php echo home_url('brand'); ?>">
                    <p class="main_title en">BRAND</p>
                    <p class="sub_title">ブランド</p>
                </a>
            </div>
            <div class="menu_contents-item">
                <a href="<?php echo home_url('member'); ?>">
                    <p class="main_title en">MEMBER</p>
                    <p class="sub_title">僕わたメンバー</p>
                </a>
            </div>
            <div class="menu_contents-item">
                <a href="<?php echo home_url('recruit'); ?>">
                    <p class="main_title en">RECRUIT</p>
                    <p class="sub_title">採用</p>
                </a>
            </div>
            <div class="menu_contents-item">
                <a href="<?php echo home_url('planning'); ?>">
                    <p class="main_title en">PLANNING</p>
                    <p class="sub_title">企画</p>
                </a>
            </div>
            <div class="menu_contents-item">
                <a href="<?php echo home_url(''); ?>#contact">
                    <p class="main_title en">CONTACT</p>
                    <p class="sub_title">お問い合わせ</p>
                </a>
            </div>
            <div class="menu_contents-item">
                <div class="social_media en">
                    <a href="https://pin.it/4DO1ipP" class="sns_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_pintarest_green.png" alt="pintarest">
                    </a>
                    <a href="https://twitter.com/k_hanarida" class="sns_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_twitter_green.png" alt="twitter">
                    </a>
                    <a href="https://note.com/flower_boy/" class="sns_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_note_green.png" alt="note">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (is_home() || is_front_page()) : ?>
    <div class="popup" id="pickup">
        <div class="popup_bg js-close_popup"></div>
        <div class="popup_wrapper">
            <div class="popup_close_btn js-close_popup"></div>
            <img src="<?php the_field('image'); ?>" alt="<?php the_field('text'); ?>" class="pickup_img">
            <p class="pickup_text"><?php the_field('text'); ?></p>
            <a href="<?php the_field('check_more_url'); ?>" class="button check-more" target="_new" rel="noopener noreferrer">CHECK MORE</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pickup.png" alt="" class="pickup_right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pickup.png" alt="" class="pickup_left">
        </div>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>