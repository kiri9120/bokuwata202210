<?php

get_header();

?>

<section id="planning" class="memberMain">
    <div class="memberMain__inner">
        <div class="section_heading pc">
            <div class="over_heading">
                <h2 class="en">PLANNING</h2>
            </div>
            <p>[<span style="color:#A0B084;">キカク</span>]</p>
        </div>
    </div>
    <div class="brand_fv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/planning/planning-top.jpg" alt="" class="pc">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/planning/planning-top-sp.jpg" alt="" class="sp">
        <div class="topic sp">
            <div class="section_heading">
                <div class="over_heading">
                    <h2 class="en">[PLANNING]</h2>
                </div>
            </div>
            <div class="scroll_work">
                <div class="scroll_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/planning/topic-1.jpg" alt="">
                </div>
                <div class="scroll_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/planning/topic-2.jpg" alt="">
                </div>
                <div class="scroll_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/planning/topic-3.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="faq sp">
            <div class="section_heading">
                <div class="over_heading">
                    <h2 class="en">[Q&A]</h2>
                </div>
            </div>
            <div class="faq_list">
                <div class="faq_item">
                    <p><span class="en">Q</span>予算の目安は？ </p>
                    <p><span class="en">A</span>案件は300万円から承っております。</p>
                </div>
                <div class="faq_item">
                    <p><span class="en">Q</span>どれぐらい企画の方針を固めてから依頼すれば良い？ </p>
                    <p><span class="en">A</span>課題と予算だけでも結構です。お気軽にご相談ください。</p>
                </div>
                <div class="faq_item">
                    <p><span class="en">Q</span>企画以外もできますか？ </p>
                    <p><span class="en">A</span>SNS運用、インフルエンサーPR、ドラマ制作、デザイン、WEB制作と多岐に渡ったご提案が可能です。</p>
                </div>
                <div class="faq_item">
                    <p><span class="en">Q</span>英語対応可能ですか？ </p>
                    <p><span class="en">A</span>可能です。グローバル化を推進しており、英語でMTGを行っているプロジェクトもございます。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-note">
        <div class="width_wrapper wrapper">
            <div class="note-list">
                <?php if (have_rows('planning')) : ?>
                    <?php while (have_rows('planning')) : the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="note-item" target="_new" rel="noopener noreferrer">
                            <div class="note-item_img">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <p class="title"><?php the_sub_field('title'); ?></p>
                            <p class="hashtag"><?php the_sub_field('text'); ?></p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
