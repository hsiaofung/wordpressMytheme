<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php get_header(); ?>
    <div>Hello I am post</div>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <div class="entry-meta">
                        <div class="entry-data">
                            <span class="genericon genericon-month"></span><?php the_time(get_option('date_format')) ?> | <span class="genericon genericon-user"></span><?php the_author(); ?>
                        </div>
                    </div>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages('before=<nav class="pages-link">&after=</nav>&link_before=<span>&link_after=</span>');
                    ?>
                </div>
                <?php
                if (is_singular('post')) :
                ?>
                    <footer class="entry-footer">
                        <div class="entry-meta">
                            <span class="cat-links"><span class="genericon genericon-category"></span><?php the_category(', ') ?></span>
                            <span class="tag-links"><?php the_tags(' | <span class="genericon genericon-tag"></span>', ', '); ?></span>
                        </div>
                    </footer>
                <?php
                endif;
                ?>
            </article>
            <nav id="nav-below" class="navigation">
                <ul>
                    <?php previous_post_link('<li class="nav-previous">%link</li>', '&laquo;%title'); ?>
                    <?php next_post_link('<li class="nav-next">%link</li>', '%title &raquo'); ?>
                </ul>
            </nav>
    <?php
        endwhile;
    endif
    ?>
    <?php get_footer(); ?>
</body>

</html>