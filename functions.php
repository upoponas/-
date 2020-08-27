<?php
function create_post_type()
{
  register_post_type(
    "profile", // 投稿タイプ名の定義
    array(
      "label" =>  "プロフィール", // 表示する投稿タイプ名
      "public" => true,
      "menu_position" => 5,
    )
  );
}
// カスタム投稿タイプの追加
add_action("init", "create_post_type");

//投稿カテゴリ編集項目追加
add_action('edit_category_form_fields', 'extra_category_fields');
function extra_category_fields($tag)
{
  $t_id = $tag->term_id;
  $cat_meta = get_option("cat_$t_id");//カテゴリの情報をidによって識別して取得
?>
  <tr class="form-field">
    <th><label for="extra_text">fontawesomeアイコンclass</label></th>
    <td><input type="text" name="Cat_meta[extra_text]" id="extra_text" size="25" value="<?php if (isset($cat_meta['extra_text'])) echo esc_html($cat_meta['extra_text']) ?>" /></td>
    <!-- issetで何かその中に入っているか判別 -->
  </tr>
<?php
}
add_action('edited_term', 'save_extra_category_fileds');
function save_extra_category_fileds($term_id)
{
  if (isset($_POST['Cat_meta'])) {
    $t_id = $term_id;
    $cat_meta = get_option("cat_$t_id");
    $cat_keys = array_keys($_POST['Cat_meta']);
    foreach ($cat_keys as $key) {
      if (isset($_POST['Cat_meta'][$key])) {
        $cat_meta[$key] = $_POST['Cat_meta'][$key];
      }
    }
    update_option("cat_$t_id", $cat_meta);
  }
}
