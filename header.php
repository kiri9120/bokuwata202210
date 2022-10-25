<?php

defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
$navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if (is_home() || is_front_page()) : ?>
        <meta property="og:title" content="僕と私と株式会社">
    <?php else : ?>
        <meta property="og:title" content="<?php the_title(); ?> | 僕と私と株式会社">
    <?php endif; ?>
    <meta property="og:description" content="僕と私と株式会社は、Z世代を代表する企画・マーケティング会社です。若者向けの企画やSNSマーケティングを得意とし、社員全員フルリモート・フルフレックスという新しい働き方を実施しながら、食べられるお茶“咲茶“や”KANGOL NAIL”など、Z世代ならではの多くの企画を生み出しています。">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ogp.jpg">
    <meta name="note:card" content="summary_large_image">
    <meta property="og:site_name" content="僕と私と株式会社">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@k_hanarida">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <!-- slickのCSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <!-- jQuery -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!-- slickのJavaScript -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/fvj1etk.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js?<?php echo filemtime(get_stylesheet_directory() . '/assets/js/common.js'); ?>"></script>

    <script>
        $(function() {
            var style = '<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animation.css" />';
            $('head link:last').after(style);
        });
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action('wp_body_open'); ?>

    <header class="main-header 
        <?php if (is_home() || is_front_page()) : ?>
            home_header
        <?php elseif (is_page('ceo')) : ?>
            ceo_header
        <?php elseif (is_page('member')) : ?>
            underlayer_header member_header
        <?php elseif (is_page('brand')) : ?>
            underlayer_header brand_header
        <?php elseif (is_page('planning')) : ?>
            underlayer_header planning_header
        <?php elseif (is_page('recruit')) : ?>
            underlayer_header recruit_header
        <?php endif; ?>
        ">
        <div class="wrapper">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="僕と私と株式会社">
                </a>
            </div>
            <div class="nav_menu">
                <div class="js-menu_open">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-icon.png" alt="" class="menu_icon">
                </div>
            </div>
        </div>
    </header>