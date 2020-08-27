<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/classic.css">
　<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<?php wp_head(); ?>
</head>


<body>
  <header>
    <div class="site-title">upoponas.<span class="stress">com</span></div>
    <div class="menu-icon"><i class="fas fa-bars"></i></div>
    <nav>
      <div class="search-form">
        <form action="https://google.co.jp/search" method="get" target="_blank">
          <input type="text" name="s" size="31" id="s" placeholder="">

        </form>
      </div>
      <?php get_template_part('category'); ?>
      <div class="close-btn">閉じる</div>
    </nav>
  </header>
