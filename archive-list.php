<div class="archive">
  <div class="title">ARCHIVE</div>
  <ul>
  <!-- 年月アーカイブリスト情報取得 -->
  <?php
  $args = array(
    'posts_per_page' =>-1 ,
    'post_type'=>'post',
    'order_by'=>'date'
  );
  $archive_query=new WP_Query($args);
  $month=NULL;
  ?>
  <!-- ループ開始 -->
  <?php
  if($archive_query->have_posts()):
    $count=0;
    while($archive_query->have_posts()):
    $archive_query->the_post();
    $count++;
    if($month!=get_the_date('m')):
      $year=get_the_date('Y');
      $month=get_the_date('m');
  ?>
  <li><a href="<?php echo get_month_link($year,$month) ?>"><?php echo get_the_date('Y');?>年<?php echo $month ; ?>月<span><?php echo $count; ?></span></a></li>
  <?php
  $count=0;
  endif;
  ?>
  <?php
  endwhile;
  endif;
  wp_reset_postdata();
  ?>
  </ul>
</div>
