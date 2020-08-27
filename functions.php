<?php
function create_post_type() {
  register_post_type( "profile", // 投稿タイプ名の定義
  array(
    "label" =>  "プロフィール" , // 表示する投稿タイプ名
    "public" => true,
    "menu_position" =>5,
    )
  );
}
// カスタム投稿タイプの追加
add_action( "init", "create_post_type" );
