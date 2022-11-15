<?php

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<section id="recruit" class="recruitUpper">
    <div class="recruit__inner">
        <div class="section_heading">
            <div class="over_heading">
                <h2 class="en">RECRUIT</h2>
            </div>
            <p>[<span>採用</span>]</p>
        </div>
        <div class="recruitUpper__container">
            <div class="recruitUpper__wrapper">
                <div class="recruitUpper__en">VISION</div>
                <div class="recruitUpper__jp">自分らしさを<br>咲かせる</div>
            </div>
            <div class="recruitUpper__wrapper">
                <div class="recruitUpper__en">MISSION</div>
                <div class="recruitUpper__jp">一人一人の能力を<br>最大限に引き上げる</div>
            </div>
        </div>
        <!-- /.recruitUpper__container -->
    </div>
    <!-- /.recruitUpper__inner -->
</section>
<!-- /.recruitUpper -->
<section class="recruitFigure">
    <div class="recruit__inner">
        <div class="recruitFigure__container">
            <h2 class="recruitFigure__heading">数字でみる僕わた</h2>
            <div class="recruitFigure__grid">
                <div class="recruitFigure__img recruitFigure__img--01">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img-sp_1.png" media="(max-width: 767px)" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img_1.png" alt="Z世代の割合">
                    </picture>
                </div>
                <div class="recruitFigure__img recruitFigure__img--02">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/recruit_average-age.png" alt="平均年齢">
                    </picture>
                </div>
                <div class="recruitFigure__img recruitFigure__img--03">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img-sp_3.png" media="(max-width: 767px)" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/recruit_sidejob.png" alt="複業している人">
                    </picture>
                </div>
                <div class="recruitFigure__img recruitFigure__img--04">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/recruit_sidejob.png" media="(max-width: 767px)" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img_4.png" alt="累計クライアント数">
                    </picture>
                </div>
                <div class="recruitFigure__img recruitFigure__img--05">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img-sp_5.png" media="(max-width: 767px)" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img_5.png" alt="営業した会社の数">
                    </picture>
                </div>
                <div class="recruitFigure__img recruitFigure__img--06">
                    <picture>
                        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img-sp_6.png" media="(max-width: 767px)" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/figure-img_6.png" alt="僕と私とギルド">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.recruitFigure -->
<section class="recruitWork">
    <div class="recruit__inner">
        <div class="recruitWork__heading-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-heading.png" alt="WORK STYLE">
        </div>
        <div class="recruitWork__container">
            <div class="recruitWork__wrapper">
                <h3 class="recruitWork__wrapper-title">働き方</h3>
                <ul class="recruitWork__slider">
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide-sp_1.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide_1.png" alt="新卒教育制度">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide-sp_2.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide_2.png" alt="フレックス">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide-sp_3.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide_3.png" alt="リモート">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide-sp_4.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide_4.png" alt="月1の1on1実施">
                        </picture>
                    </li>
                    <!-- comments
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide-sp_5.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/work-slide_5.png" alt="表彰制度">
                        </picture>
                    </li>
                    endcomments -->
                </ul>
            </div>
            <div class="recruitWork__wrapper">
                <h3 class="recruitWork__wrapper-title">福利厚生</h3>
                <ul class="recruitWork__slider">
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide-sp_1.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide_1.png" alt="月1サウナ部">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide-sp_2.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide_2.png" alt="ワーケーション">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide-sp_3.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide_3.png" alt="図書館制度">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide-sp_4.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide_4.png" alt="社員食堂">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide-sp_5.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/welfare-slide_5.png" alt="整体">
                        </picture>
                    </li>
                </ul>
            </div>
            <div class="recruitWork__wrapper">
                <h3 class="recruitWork__wrapper-title">部活動</h3>
                <ul class="recruitWork__slider">
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/activity-slide-sp_1.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/activity-slide_1.png" alt="朝活部">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/activity-slide-sp_2.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/activity-slide_2.png" alt="フットサル部">
                        </picture>
                    </li>
                    <li class="recruitWork__slide-item">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/activity-slide-sp_3.png" media="(max-width: 767px)" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/activity-slide_3.png" alt="サウナ部">
                        </picture>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- /.recruitWork -->
<section class="recruitFlow">
    <div class="recruit__inner">
        <h2 class="recruitFlow__heading"><span>選考フロー</span></h2>
        <p class="recruitFlow__text">Z世代じゃなくても歓迎!!</p>
        <div class="recruitFlow__img">
            <picture>
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/flow-img-sp.png" media="(max-width: 767px)" />
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/flow-img.png" alt="選考フロー">
            </picture>
        </div>
        <div class="recruitFlow__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/recruit-position.jpg" alt="募集ポジション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/recruit-position2.jpg" alt="募集ポジション"></div>		
    </div>
</section>
<!-- /.recruitFlow -->
<section class="recruitEntry">
    <div class="contact-section" id="contact">
        <div class="width_wrapper wrapper">
            <?php echo do_shortcode('[contact-form-7 id="559" title="採用フォーム"]'); ?>
        </div>
    </div>
</section>
<?php
$args = [
    'contact' => "recruit",
];
get_template_part('components/submit_popup', null, $args);
?>
<!-- /.recruitEntry -->
<?php
get_footer();
