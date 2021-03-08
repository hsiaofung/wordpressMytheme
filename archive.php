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
    <div>Hello I am archive</div>
    <?php
      if(have_posts()):
    ?>
        <header class="page-header">
           <div class="inner">
              <h1 class="page-title">
                <?php 
                   if(is_category()){
                     echo '分類'. single_cat_title('', false) . '的文章清單';
                   }elseif (is_tag()){
                    echo '標籤'. single_cat_title('', false) . '的文章清單';
                   }elseif (is_day()){
                    echo get_the_date('Y 年 n 月 j 日') . '的文章清單';
                   }elseif (is_month()){
                    echo get_the_date('Y 年 n 月') . '的文章清單';
                   }elseif (is_year()){
                      echo get_the_date('Y 年') . '的文章清單'; 
                   }elseif (is_tax()){
                        echo single_term_title('', false) . '的文章清單';   
                      }elseif (is_search()){
                        echo get_search_query() . '的搜尋結果清單';    
                      }else{
                        echo 'Blog'
                      }      
                ?>
              </h1>
           </div>
        </header>
        <div class="inner">
          <div id="content">
    <?php while(have_posts()):
          the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
       <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="entry-meta">
         <span class="icon genericon-month"><?php the_time(get_option('date_format')) ?></span> |  
         <span class="icon genericon-user"><?php the_author(); ?></span>
         <div class="entry-meta">
         </div>
    </header>
    <div class="entry-content cf">
    <div class="thumbnail"></div>
    <?php the_excerpt(); ?>
        </div>
    </article>
          </div>
        </div>
</body>

</html>