<?php

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<div class="ceo_fv">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_fv-pc.jpg" alt="" class="pc">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_fv-sp.jpg" alt="" class="sp">
</div>

<div class="career section-ceo" id="career">
    <div class="ceo_wrapper wrapper">
        <div class="ceo_heading">
            <div class="heading_num">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_topic-1.png" alt="">
            </div>
            <div class="heading_title">
                <h2 class="en">CAREER</h2>
                <p>経歴</p>
            </div>
        </div>
        <div class="ceo_contents">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_career.png" alt="" class="pc">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_career-sp.png" alt="" class="sp">
        </div>
    </div>
    <div class="nav_menu" id="ceo_nav">
        <div class="js-menu_open">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-icon.png" alt="" class="menu_icon">
        </div>
    </div>
</div>

<div class="thinking section-ceo">
    <div class="ceo_wrapper wrapper">
        <div class="ceo_heading">
            <div class="heading_num">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_topic-2.png" alt="">
            </div>
            <div class="heading_title">
                <h2 class="en">THINKING</h2>
                <p>考え方</p>
            </div>
        </div>
        <div class="ceo_contents">
            <div class="note-list">
                <?php if (have_rows('thinking')) : ?>
                    <?php while (have_rows('thinking')) : the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="note-item" target="_new" rel="noopener noreferrer">
                            <div class="note-item_img">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <p class="date en"><?php the_sub_field('date'); ?></p>
                            <p class="title"><?php the_sub_field('title'); ?></p>
                            <p class="hashtag"><?php the_sub_field('hashtag'); ?></p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php
            $args = [
                'buttonText' => "CHECK MORE",
                'link' => "https://note.com/kent_imataki"
            ];
            get_template_part('components/button', null, $args);
            ?>
        </div>
    </div>
</div>

<div class="media section-ceo">
    <div class="ceo_wrapper wrapper">
        <div class="ceo_heading">
            <div class="heading_num">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ceo_topic-3.png" alt="">
            </div>
            <div class="heading_title">
                <h2 class="en sp-small">MEDIA PICK UP</h2>
                <p>メディア掲載・講演実績</p>
            </div>
        </div>
        <div class="ceo_contents">
            <div class="note-list">
                <?php if (have_rows('media_pick_up')) : ?>
                    <?php while (have_rows('media_pick_up')) : the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="note-item" target="_new" rel="noopener noreferrer">
                            <div class="note-item_img">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <p class="date en"><?php the_sub_field('label'); ?></p>
                            <p class="title"><?php the_sub_field('title'); ?></p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php
            $args = [
                'buttonText' => "CHECK MORE",
                'link' => "https://note.com/flower_boy/"
            ];
            get_template_part('components/button', null, $args);
            ?>
        </div>
    </div>
</div>

<div class="ceo-other">
    <div class="ceo_wrapper wrapper">
        <div class="link_list">
            <?php if (have_rows('link_item')) : ?>
                <?php while (have_rows('link_item')) : the_row(); ?>
                    <a href="<?php the_sub_field('link'); ?>" class="link_item" target="_new" rel="noopener noreferrer">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="kent_sns">
            <ul>
                <li>
                    <a href="https://twitter.com/k_hanarida" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_bl-twitter.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://note.com/kent_imataki" target="_new" rel="noopener noreferrer">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sns_bl-note.png" alt="">
                    </a>
                </li>
            </ul>
            <h3 class="en">KENT<span>個人の</span>SNS</h3>
            <p>TwitterのDMいつでもお待ちしております</p>
        </div>
    </div>
</div>

<?php
get_footer();
