<?php get_header(); ?>

<main class="main">
    <div class="container">
        <h1>404 Page Not Found</h1>
        <p>お探しのページは見つかりませんでした。</p>
        <?php
        $args = [
            'buttonText' => "HOME",
            'link' => home_url(''),
        ];
        get_template_part('components/button', null, $args);
        ?>
    </div><!-- container -->
</main><!-- main -->

<style>
    .container {
        text-align: center;
        padding: 100px 0;
    }
</style>

<?php get_footer(); ?>