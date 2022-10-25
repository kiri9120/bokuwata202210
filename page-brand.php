<?php

get_header();

?>

<section id="brand" class="memberMain">
    <div class="memberMain__inner pc">
        <div class="section_heading">
            <div class="over_heading">
                <h2 class="en">BRAND</h2>
            </div>
            <p>[<span>ブランド</span>]</p>
        </div>
    </div>
    <div class="brand_fv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand/brand-top.jpg" alt="" class="pc">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand/brand-top-sp.jpg" alt="" class="sp">
        <div class="topic sp">
            <div class="section_heading">
                <div class="over_heading">
                    <h2 class="en">[BRAND]</h2>
                </div>
            </div>
            <div class="scroll_work">
                <div class="scroll_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand/topic-1.jpg" alt="">
                </div>
                <div class="scroll_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand/topic-2.jpg" alt="">
                </div>
                <div class="scroll_item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand/topic-3.jpg" alt="">
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
                    <p><span class="en">Q</span>なぜ自社でブランドを展開しているのですか？ </p>
                    <p><span class="en">A</span>コンサルができるということは、自社でもできるということを証明するためです。</p>
                </div>
                <div class="faq_item">
                    <p><span class="en">Q</span>一番人気の商品はなんですか？ </p>
                    <p><span class="en">A</span>HANARIDAの食べられるお茶「咲茶」は、ご友人へのギフトとして最も人気です。</p>
                </div>
                <div class="faq_item">
                    <p><span class="en">Q</span>商品はどこで買えますか？ </p>
                    <p><span class="en">A</span>下のアイコンをクリックしてご購入いただけます。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-note">
        <div class="width_wrapper wrapper">
            <div class="note-list">
                <?php if (have_rows('brand')) : ?>
                    <?php while (have_rows('brand')) : the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="note-item" target="_new" rel="noopener noreferrer">
                            <div class="note-item_img">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <p class="title"><?php the_sub_field('title'); ?></p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
