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
      <ul>
        <li class="menu-list">
          <a href=""><i class="fas fa-home"></i><span>ホーム</span></a>
        </li>
        <li class="menu-list">
          <a><i class="fas fa-laptop"></i><span>プログラミング</span></a>
          <ul>
            <li><a href=""><i class="fas fa-chevron-right"></i><span>HTML&CSS</span></a></li>
            <li><a href=""><i class="fas fa-chevron-right"></i><span>PHP</span></a></li>
            <li><a href=""><i class="fas fa-chevron-right"></i><span>WordPress</span></a></li>
          </ul>
        </li>
        <li class="menu-list">
          <a><i class="fas fa-pencil-alt"></i><span>大学受験</span></a>
          <ul>
            <li><a href="/"><i class="fas fa-chevron-right"></i><span>体験談・モチベ</span></a></li>
            <li><a href="/"><i class="fas fa-chevron-right"></i><span>参考書・勉強法</span></a></li>
          </ul>
        </li>
        <li class="menu-list">
          <a href=""><i class="fas fa-plane"></i><span>旅行・観光</span></a>
        </li>
        <li class="menu-list">
          <a href=""><i class="fas fa-shopping-cart"></i><span>買い物</span></a>
        </li>
      </ul>
      <div class="close-btn">閉じる</div>
    </nav>
  </header>
