<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
 <div>     
 Hello, WordPress. This is my theme
 <?php get_sidebar(); ?>
 </div>
 <?php get_footer(); ?>
 <?php wp_footer(); ?>
</body>
</html>