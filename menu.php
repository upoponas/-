<ul>
  <li class="menu-list">
    <a href="<?php echo home_url();?>"><i class="fas fa-home"></i><span>ホーム</span></a>
  </li>
  <!-- ここからカテゴリをループで表示 -->
  <?php
  // 親カテゴリーのものだけを一覧で取得
	$args = array(
		'parent' => 0,
		'orderby' => 'term_order',
    'order' => 'ASC',
    'child_of',
    'get'=>'all'
	);
	$categories = get_categories( $args );
  ?>
  <?php
  foreach( $categories as $category ) :
    //そのカテゴリの子カテゴリの情報取得
    $children = get_term_children($category->term_id, 'category');
  ?>

  <?php
  $t_id=$category->term_id;
  if(!empty($children)):
  ?>
	<li class="menu-list">
		<a><i class="<?php echo get_option("cat_$t_id")['extra_text']; ?>"></i><span><?php echo $category->name; ?></span></a>
    <ul>
    <?php foreach ($children as $child):?>
      <li><a href="<?php echo get_category_link($child); ?>"><i class="fas fa-chevron-right"></i><span><?php echo get_cat_name($child); ?></span></a></li>
  <?php endforeach; ?>
  </ul>
  <?php else: ?>
  <li class="menu-list">
		<a href="<?php echo get_category_link( $category->term_id ); ?>"><i class="<?php echo get_option("cat_$t_id")['extra_text']; ?>"></i><span><?php echo $category->name; ?></span></a>
  <?php endif; ?>
	</li>
<?php endforeach; ?>
    <!-- カテゴリループ終了 -->






</ul>
