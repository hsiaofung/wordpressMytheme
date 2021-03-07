<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_header(); ?>
    <div>
        Hello I am Page
    </div>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
    <?php
        endwhile;
    endif
    ?>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    <?php if (is_page('company')) : ?>
        <div>"我是公司"</div>
    <?php else : ?>
        <div>"我是其他"</div>
    <?php endif; ?>
</body>

</html>