<aside>
  <div class="author">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nas.png" alt="">
    <h4><span>うぽぽ茄子</span></h4>
    <p>兵庫県で大学生webエンジニアをやっているうぽぽ茄子（松村拓海）です。現在大学一年生（18歳)でコロナの影響で外でバイトすることに抵抗があったのでプログラミングをバイトの代わりにしようと思い、勉強を始めました。趣味は旅行とショッピングです。</p>
    <ul class="url">
      <li class="profile">
        <a href="<?php echo get_page_link(150); ?>">プロフィール<span><i class="fas fa-arrow-circle-right"></i></span></a></li>
      <li class="order"><a href="/">Web制作依頼<span><i class="fas fa-arrow-circle-right"></i></span></a></li>
      <li class="contact"><a href="<?php echo get_page_link(159); ?>">お問い合わせ<span><i class="fas fa-arrow-circle-right"></i></span></a></li>
    </ul>
  </div>
  <?php get_template_part('archive','list'); ?>
  <div class="chase">
    <!-- <div class="search-form">
      <form action="https://upoponas.com/" method="get" target="_blank">
        <input type="text" name="s" size="31" id="s" placeholder="">

      </form>
    </div> -->
    <div class="menu">
      <div class="title">MENU</div>
      <nav>
        <?php get_template_part('menu'); ?>
      </nav>
    </div>
  </div>

</aside>
