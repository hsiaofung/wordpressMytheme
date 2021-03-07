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
              <h1 class="page-title">彙整頁面的標題</h1>
           </div>
        </header>
        <div class="inner">
          <div id="content">
    <?php while(have_posts()):
          the_post();
    ?>
          </div>
        </div>
</body>

</html>