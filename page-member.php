<?php

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<section id="member" class="memberMain">
    <div class="memberMain__inner">
        <div class="section_heading">
            <div class="over_heading">
                <h2 class="en">BOKU WATA <br class="u-sp">MEMBERS</h2>
            </div>
            <p>[<span>僕わたメンバー</span>]</p>
        </div>
        <div class="memberMain__container">
            <div class="memberMain__wrapper">
                <h3 class="memberMain__heading">僕わたメンバー</h3>
                <div class="memberMain__lists">
                    <?php if (have_rows('ぼくわたメンバー')) : ?>
                        <?php while (have_rows('ぼくわたメンバー')) : the_row(); ?>
                            <div class="memberMain__list">
                                <div class="memberMain__img">
                                    <img src="<?php the_sub_field('画像'); ?>" alt="<?php the_sub_field('名前'); ?>" />
                                    <div class="memberMain__option">
                                        <svg height="77.736" viewBox="0 0 80.282 77.736" width="80.282" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <clipPath id="a">
                                                <path d="m0 0h80.282v77.736h-80.282z" />
                                            </clipPath>
                                            <g clip-path="url(#a)">
                                                <path d="m77.518 53.184-2.491 1.558 1.1 2.721a8.958 8.958 0 0 1 -8.933 12.288l-2.932-.2-.705 2.833a8.958 8.958 0 0 1 -14.454 4.7l-2.239-1.88-2.239 1.88a8.959 8.959 0 0 1 -14.454-4.7l-.705-2.833-2.932.2a8.958 8.958 0 0 1 -8.934-12.288l1.1-2.72-2.491-1.558a8.958 8.958 0 0 1 0-15.19l2.491-1.558-1.1-2.721a8.958 8.958 0 0 1 8.933-12.288l2.932.2.705-2.828a8.958 8.958 0 0 1 14.454-4.7l2.239 1.88 2.237-1.88a8.958 8.958 0 0 1 14.454 4.7l.705 2.833 2.932-.2a8.958 8.958 0 0 1 8.932 12.287l-1.1 2.721 2.491 1.558a8.958 8.958 0 0 1 0 15.19" fill="<?php the_sub_field('カラー'); ?>" transform="translate(-6.721 -6.722)" />
                                                <path d="m48.111 5.278a8.948 8.948 0 0 1 8.724 6.8l.705 2.833 2.932-.2q.329-.023.652-.023a8.959 8.959 0 0 1 8.276 12.306l-1.1 2.721 2.5 1.558a8.958 8.958 0 0 1 0 15.189l-2.491 1.558 1.1 2.721a8.96 8.96 0 0 1 -8.281 12.311c-.216 0-.432-.007-.652-.023l-2.932-.2-.706 2.833a8.948 8.948 0 0 1 -8.723 6.8 8.847 8.847 0 0 1 -5.73-2.1l-2.239-1.88-2.24 1.88a8.847 8.847 0 0 1 -5.73 2.1 8.948 8.948 0 0 1 -8.724-6.8l-.705-2.833-2.932.2q-.329.023-.651.023a8.959 8.959 0 0 1 -8.281-12.311l1.1-2.721-2.498-1.558a8.958 8.958 0 0 1 0-15.189l2.491-1.558-1.1-2.721a8.959 8.959 0 0 1 8.281-12.31q.323 0 .651.023l2.932.2.705-2.833a8.949 8.949 0 0 1 8.724-6.8 8.849 8.849 0 0 1 5.73 2.1l2.239 1.88 2.239-1.88a8.849 8.849 0 0 1 5.73-2.1m0-5.278a14.194 14.194 0 0 0 -7.969 2.466 14.226 14.226 0 0 0 -21.389 6.949 14.24 14.24 0 0 0 -13.234 18.2 14.241 14.241 0 0 0 0 22.508 14.239 14.239 0 0 0 13.234 18.2 14.227 14.227 0 0 0 21.393 6.945 14.227 14.227 0 0 0 21.392-6.945 14.24 14.24 0 0 0 13.234-18.2 14.24 14.24 0 0 0 0-22.508 14.239 14.239 0 0 0 -13.234-18.2 14.239 14.239 0 0 0 -13.423-9.411" fill="#fff" />
                                            </g>
                                        </svg>
                                        <p style="color: <?php the_sub_field('テキストカラー'); ?>;"><?php the_sub_field('役職'); ?></p>
                                    </div>
                                </div>
                                <p class="memberMain__name">(<?php the_sub_field('名前'); ?>)</p>
                                <p class="memberMain__genius"><span><?php the_sub_field('〇〇の天才'); ?></span></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
<!--             <div class="memberMain__wrapper">
                <h3 class="memberMain__heading">僕わたパートナー</h3>
                <div class="memberMain__lists">
                    <?php if (have_rows('ぼくわたパートナー')) : ?>
                        <?php while (have_rows('ぼくわたパートナー')) : the_row(); ?>
                            <div class="memberMain__list">
                                <div class="memberMain__img">
                                    <img src="<?php the_sub_field('画像'); ?>" alt="<?php the_sub_field('名前'); ?>" />
                                    <div class="memberMain__option">
                                        <svg height="77.736" viewBox="0 0 80.282 77.736" width="80.282" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <clipPath id="a">
                                                <path d="m0 0h80.282v77.736h-80.282z" />
                                            </clipPath>
                                            <g clip-path="url(#a)">
                                                <path d="m77.518 53.184-2.491 1.558 1.1 2.721a8.958 8.958 0 0 1 -8.933 12.288l-2.932-.2-.705 2.833a8.958 8.958 0 0 1 -14.454 4.7l-2.239-1.88-2.239 1.88a8.959 8.959 0 0 1 -14.454-4.7l-.705-2.833-2.932.2a8.958 8.958 0 0 1 -8.934-12.288l1.1-2.72-2.491-1.558a8.958 8.958 0 0 1 0-15.19l2.491-1.558-1.1-2.721a8.958 8.958 0 0 1 8.933-12.288l2.932.2.705-2.828a8.958 8.958 0 0 1 14.454-4.7l2.239 1.88 2.237-1.88a8.958 8.958 0 0 1 14.454 4.7l.705 2.833 2.932-.2a8.958 8.958 0 0 1 8.932 12.287l-1.1 2.721 2.491 1.558a8.958 8.958 0 0 1 0 15.19" fill="<?php the_sub_field('カラー'); ?>" transform="translate(-6.721 -6.722)" />
                                                <path d="m48.111 5.278a8.948 8.948 0 0 1 8.724 6.8l.705 2.833 2.932-.2q.329-.023.652-.023a8.959 8.959 0 0 1 8.276 12.306l-1.1 2.721 2.5 1.558a8.958 8.958 0 0 1 0 15.189l-2.491 1.558 1.1 2.721a8.96 8.96 0 0 1 -8.281 12.311c-.216 0-.432-.007-.652-.023l-2.932-.2-.706 2.833a8.948 8.948 0 0 1 -8.723 6.8 8.847 8.847 0 0 1 -5.73-2.1l-2.239-1.88-2.24 1.88a8.847 8.847 0 0 1 -5.73 2.1 8.948 8.948 0 0 1 -8.724-6.8l-.705-2.833-2.932.2q-.329.023-.651.023a8.959 8.959 0 0 1 -8.281-12.311l1.1-2.721-2.498-1.558a8.958 8.958 0 0 1 0-15.189l2.491-1.558-1.1-2.721a8.959 8.959 0 0 1 8.281-12.31q.323 0 .651.023l2.932.2.705-2.833a8.949 8.949 0 0 1 8.724-6.8 8.849 8.849 0 0 1 5.73 2.1l2.239 1.88 2.239-1.88a8.849 8.849 0 0 1 5.73-2.1m0-5.278a14.194 14.194 0 0 0 -7.969 2.466 14.226 14.226 0 0 0 -21.389 6.949 14.24 14.24 0 0 0 -13.234 18.2 14.241 14.241 0 0 0 0 22.508 14.239 14.239 0 0 0 13.234 18.2 14.227 14.227 0 0 0 21.393 6.945 14.227 14.227 0 0 0 21.392-6.945 14.24 14.24 0 0 0 13.234-18.2 14.24 14.24 0 0 0 0-22.508 14.239 14.239 0 0 0 -13.234-18.2 14.239 14.239 0 0 0 -13.423-9.411" fill="#fff" />
                                            </g>
                                        </svg>
                                        <p style="color: <?php the_sub_field('テキストカラー'); ?>;"><?php the_sub_field('役職'); ?></p>
                                    </div>
                                </div>
                                <p class="memberMain__name">(<?php the_sub_field('名前'); ?>)</p>
                                <p class="memberMain__genius"><span><?php the_sub_field('〇〇の天才'); ?></span></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /.memberMain__inner -->
</section>
<!-- /.memberMain -->
<section class="memberRecruit">
    <div class="memberMain__inner memberRecruit__inner">
        <div class="memberRecruit__container">
            <div class="memberRecruit__textarea">
                <div class="section_heading">
                    <div class="over_heading">
                        <h2 class="en">RECRUIT</h2>
                    </div>
                    <p>[<span>採用</span>]</p>
                </div>
                <p class="memberRecruit__lead">僕と私とのメンバーに<br>入りたい方はこちら</p>
            </div>
            <div class="memberRecruit__linkarea">
                <a href="<?php echo esc_url(home_url('/')); ?>recruit" class="memberRecruit__img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/member/recruit-img.png" alt="RECRUIT">
                </a>
            </div>
        </div>
        <!-- /.memberRecruit__container -->
    </div>
    <!-- /.memberMain__inner -->
</section>
<!-- /.memberRecruit -->
<section class="memberGuild">
    <div class="memberMain__inner">
        <div class="section_heading">
            <div class="over_heading">
                <h2 class="en">GUILD</h2>
            </div>
            <p>[<span>僕と私とギルド</span>]</p>
        </div>
        <div class="memberGuild__container">
            <div class="memberGuild__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/member/guild-img.png" alt="GUILD">
            </div>
        </div>
        <!-- /.memberGuild__container -->
    </div>
    <!-- /.memberMain__inner -->
</section>
<!-- /.memberGuild -->

<?php
get_footer();
