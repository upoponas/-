<footer>
    <div class="container">
      <div class="search-form">
        <form action="https://google.co.jp/search" method="get" target="_blank">
          <input type="text" name="s" size="31" id="s" placeholder="">

        </form>
      </div>
      <div class="information">
        <div class="content aboutMe">
          <div class="title">About me</div>
          <div class="text">兵庫県で大学生webエンジニアをやっているうぽぽ茄子（松村拓海）です。現在大学一年生（18歳)でコロナの影響で外でバイトすることに抵抗があったのでプログラミングをバイトの代わりにしようと思い、勉強を始めました。趣味は旅行とショッピングです。</div>
          <div class="links">
            <ul class="url">
              <li class="profile">
                <a href="/">プロフィール<span><i class="fas fa-arrow-circle-right"></i></span></a></li>
              <li class="order"><a href="/">Web制作依頼<span><i class="fas fa-arrow-circle-right"></i></span></a></li>
              <li class="contact"><a href="/">お問い合わせ<span><i class="fas fa-arrow-circle-right"></i></span></a></li>
            </ul>
          </div>
        </div>
        <div class="content portfolio">
          <div class="title">Portfolio</div>
          <ul>
            <li><a href="/">はじめて作ったサイト</a></li>
            <li><a href="/">模擬台湾観光サイト</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="container-fluid credit">
      <p>©︎upoponas All Right Reserved.</p>
    </div>
  </footer>
  <!-- js読み込み -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
