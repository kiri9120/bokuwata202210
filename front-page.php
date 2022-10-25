<?php

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<div class="beforeLoad"></div>

<div id="loader" style="display: none;">
    <div class="loader__inner">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/loading.gif" alt="">
    </div>
</div>

<div class="fv-section">
    <div class="fv-wrapper">
        <header class="fv_header">
            <div class="fv_header-wrapper">
                <div class="fv_header_menu">
                    <div class="menu_item">
                        <a href="<?php echo home_url('ceo'); ?>">
                            <p class="menu_item_title en">CEO</p>
                            <p class="menu_item_subTitle">Z世代の企画屋</p>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a href="<?php echo home_url('member'); ?>">
                            <p class="menu_item_title en">MEMBER</p>
                            <p class="menu_item_subTitle">僕わたメンバー</p>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a href="<?php echo home_url('planning'); ?>">
                            <p class="menu_item_title en">PLANNING</p>
                            <p class="menu_item_subTitle">キカク</p>
                        </a>
                    </div>
                    <div class="menu_item menu_item-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="僕と私と株式会社">
                    </div>
                    <div class="menu_item">
                        <a href="<?php echo home_url('brand'); ?>">
                            <p class="menu_item_title en">BRAND</p>
                            <p class="menu_item_subTitle">ブランド</p>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a href="<?php echo home_url('recruit'); ?>">
                            <p class="menu_item_title en">RECRUIT</p>
                            <p class="menu_item_subTitle">サイヨウ</p>
                        </a>
                    </div>
                    <div class="menu_item">
                        <a href="<?php echo home_url(''); ?>#contact">
                            <p class="menu_item_title en">CONTACT</p>
                            <p class="menu_item_subTitle">コンタクト</p>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="fv_img">
            <div class="fv_img-wrapper">
                <div class="fv_img_scroll pc">
                    <div class="img_scroll-left img_scroll-narrow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/left-img.jpg?cache=<?php echo time(); ?>" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/left-img.jpg?cache=<?php echo time(); ?>" alt="">
                    </div>
                    <div class="img_scroll-midlle img_scroll-width">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/midlle-img.jpg?cache=<?php echo time(); ?>" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/midlle-img.jpg?cache=<?php echo time(); ?>" alt="">
                    </div>
                    <div class="img_scroll-right img_scroll-narrow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/right-img.jpg?cache=<?php echo time(); ?>" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/right-img.jpg?cache=<?php echo time(); ?>" alt="">
                    </div>
                </div>
                <div class="fv_img_scroll sp">
                    <div class="img_scroll-left img_scroll-width">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/sp-left-img.jpg?cache=<?php echo time(); ?>" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/sp-left-img.jpg?cache=<?php echo time(); ?>" alt="">
                    </div>
                    <div class="img_scroll-midlle img_scroll-width">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/sp-right-img.jpg?cache=<?php echo time(); ?>" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fv-scroll/sp-right-img.jpg?cache=<?php echo time(); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fv_title">
        <h1>
            <p><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/z-sedai.png" alt="Z世代"></span>に特化した</p>
            <p>企画マーケティング会社</p>
        </h1>
    </div>
    <div class="fv_pickup">
        <div class="fv_pickup-wrapper">
            <div class="fv_pickup_img">
                <img src="<?php the_field('画像'); ?>" alt="">
                <p class="pickup en">PICK UP!</p>
                <p class="date en">
                    <?php the_field('月'); ?><br>
                    <span>月</span><br>
                    <?php the_field('日'); ?><br>
                    <span>日</span><br>
                    <span>日直</span>
                </p>
                <a href="<?php the_field('リンク'); ?>" class="read-more" target="_new" rel="noopener noreferrer">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/readmore.png" alt="">
                    <p class="en">READ<br>MORE!</p>
                </a>
            </div>
            <div class="fv_pickup_text">
                <p>
                    <?php the_field('タイトル'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="ceo" class="ceo-section">
    <div class="section_heading">
        <h2 class="en">CEO</h2>
        <p>[<span>Z世代の企画屋</span>]</p>
    </div>
    <div class="narrow_wrapper wrapper">
        <div class="img_title">
            <p class="sub_title en">ABOUT KENT</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo-kent.png" alt="" class="ceo_kent">
            <div class="option_mark">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo-marketer_bg.png" alt="" class="option_mark_bg">
                <div class="option_mark_text">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo-marketer_97.png" alt="97年生まれのマーケター">
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo-bg.png" alt="" class="img_title_bg">
        </div>
        <div class="over-parent">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo-bokuwata.png" alt="">
        </div>
        <?php
        $args = [
            'buttonText' => "CHECK MORE",
            'link' => home_url('ceo')
        ];
        get_template_part('components/button', null, $args);
        ?>
    </div>

    <div class="nav_menu" id="top_nav">
        <div class="js-menu_open">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-icon.png" alt="" class="menu_icon">
        </div>
    </div>
</div>

<div id="member" class="member-section">
    <div class="section_heading">
        <div class="over_heading pc">
            <h2 class="en">
                MEMBER<span>・</span>MEMBER<span>・</span>MEMBER<span>・</span>MEMBER<span>・</span>MEMBER<span>・</span>MEMBER<span>・</span>MEMBER
            </h2>
        </div>
        <h2 class="en sp">MEMBER</h2>
        <p>[<span>僕わたメンバー</span>]</p>
    </div>
    <div class="member__contents">
        <div class="member__list">
            <?php for ($i = 1; $i <= 2; $i++) : ?>
                <div class="member__list-<?php echo $i; ?> member__list-item">
                    <?php if (have_rows('ぼくわたメンバー', 410)) : ?>
                        <?php while (have_rows('ぼくわたメンバー', 410)) : the_row(); ?>
                            <div class="list__item">
                                <div class="people_img">
                                    <img src="<?php the_sub_field('画像'); ?>" alt="<?php the_sub_field('名前'); ?>" />
                                    <div class="people_option">
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
                                    <div class="people_hover" style="background:<?php the_sub_field('カラー'); ?>;">
                                        <p style="color:<?php the_sub_field('テキストカラー'); ?>;"><?php the_sub_field('〇〇の天才'); ?></p>
                                    </div>
                                </div>
                                <p class="people_name"><?php the_sub_field('名前'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
        <div class="member__list">
            <?php for ($i = 1; $i <= 2; $i++) : ?>
                <div class="member__list-<?php echo $i; ?> member__list-item">
                    <?php if (have_rows('ぼくわたパートナー', 410)) : ?>
                        <?php while (have_rows('ぼくわたパートナー', 410)) : the_row(); ?>
                            <div class="list__item">
                                <div class="people_img">
                                    <img src="<?php the_sub_field('画像'); ?>" alt="<?php the_sub_field('名前'); ?>" />
                                    <div class="people_option">
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
                                    <div class="people_hover" style="background:<?php the_sub_field('カラー'); ?>;">
                                        <p style="color:<?php the_sub_field('テキストカラー'); ?>;"><?php the_sub_field('〇〇の天才'); ?></p>
                                    </div>
                                </div>
                                <p class="people_name"><?php the_sub_field('名前'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php
    $args = [
        'buttonText' => "CHECK MORE",
        'link' => home_url('member')
    ];
    get_template_part('components/button', null, $args);
    ?>
</div>

<div id="works" class="works-section">
    <div class="section_heading">
        <h2 class="en">WORKS</h2>
        <p>[<span>キカク・ブランド</span>]</p>
    </div>
    <a href="<?php echo home_url('planning'); ?>" class="img_with_text">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-planning.jpg?cache=<?php echo time(); ?>" alt="">
        <div class="img_with_text_title pc">
            <p>OUR SERVICE</p>
            <h3>Planning / Marketing</h3>
        </div>
        <div class="img_with_text_contents">
            <p class="sub_title">OUR SERVICE</p>
            <p class="title">
                <span>Planning / Marketing</span><br>
                企画・マーケティング事業
            </p>
            <p class="text pc">
                機械ではできない、<br>
                潜在的顧客のアプローチなど、<br>
                心を動かす企画を咲かせます。
            </p>
        </div>
    </a>
    <a href="<?php echo home_url('brand'); ?>" class="img_with_text">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-brand.jpg?cache=<?php echo time(); ?>" alt="">
        <div class="img_with_text_title pc">
            <p>OUR SERVICE</p>
            <h3>Brand Creation</h3>
        </div>
        <div class="img_with_text_contents">
            <p class="sub_title">OUR SERVICE</p>
            <p class="title">
                <span>Brand Creation</span><br>
                ブランド事業
            </p>
            <p class="text pc">
                D2Cブランドをはじめとし、<br>
                インフルエンサー とのコラボブランドや、<br>
                原宿でのリアル店舗なども咲かせています。
            </p>
        </div>
    </a>
</div>

<div id="recruit" class="recruit-section">
    <div class="wrapper width_wrapper">
        <div class="section_heading">
            <h2 class="en">RECRUIT</h2>
            <p>[<span>採用</span>]</p>
        </div>
        <a href="<?php echo home_url('recruit'); ?>" class="img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit.png" alt="">
        </a>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo-bg.png" alt="" class="bg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit_left-top.png" alt="" class="left-top">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit_right-top.png" alt="" class="right-top">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit_left-bottom.png" alt="" class="left-bottom">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit_right-bottom.png" alt="" class="right-bottom">

        <?php
        $args = [
            'buttonText' => "CHECK MORE",
            'link' => home_url('recruit')
        ];
        get_template_part('components/button', null, $args);
        ?>
    </div>
</div>

<div class="contact-section" id="contact">
    <div class="width_wrapper wrapper">
        <?php echo do_shortcode('[contact-form-7 id="432" title="contact_2022"]'); ?>
    </div>
</div>

<?php
$args = [
    'contact' => "home",
];
get_template_part('components/submit_popup', null, $args);
?>

<?php
get_footer();
