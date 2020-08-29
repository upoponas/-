<ul>
  <li class="menu-list">
    <a href=""><i class="fas fa-home"></i><span>ホーム</span></a>
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

  <?php if(!empty($children)): ?>
	<li class="menu-list">
		<a><i></i><span><?php echo $category->name; ?></span></a>
    <ul>
    <?php foreach ($children as $child):?>
      <li><a href="<?php echo get_category_link($child); ?>"><i class="fas fa-chevron-right"></i><span><?php echo get_cat_name($child); ?></span></a></li>
  <?php endforeach; ?>
  </ul>
  <?php else: ?>
  <li class="menu-list">
		<a href="<?php echo get_category_link( $category->term_id ); ?>"><i></i><span><?php echo $category->name; ?></span></a>
  <?php endif; ?>
	</li>
<?php endforeach; ?>
    <!-- カテゴリループ終了 -->





  <!-- <li class="menu-list">
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
  </li> -->



</ul>
