<?php
// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
  $labels = array(
    'name' => __('メディア掲載一覧'), // 表示する投稿タイプ名
    'singular_name' => __('メディア掲載一覧'),
    'add_new' => __('新規追加', 'medias'),
    'add_new_item' => __('新しいメディア掲載を追加')
  );

  $args = array(
    'labels' => $labels,
    'description' => 'メディア掲載一覧',
    'has_archive' => true,  // リスト一覧ページを表示可能にするか
    'supports' => array('title', 'excerpt', 'thumbnail', 'custom-fields'),
    'public' => true,
    'rewrite' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5   // adminページのメニューで表示される優先順位
  );
  register_post_type( 'medias', $args );
}

// サムネイル画像を利用
add_theme_support( 'post-thumbnails', array( 'medias' ) );
// サムネイル画像を指定の値で切り抜く
// set_post_thubnail_size( 150, 150, true );

// add_action( 'init', 'register_cpt_medias' );
// 
// function register_cpt_medias() {
// 
// 	$labels = array(
// 		'name' => __( 'メディア一覧', 'メディア' ),
// 		'singular_name' => __( 'メディア一覧', 'メディア' ),
// 		'add_new' => __( '新規作成', 'medias' ),
// 		'add_new_item' => __( '新しいメディアを追加', 'medias' ),
// 		'edit_item' => __( 'メディアを編集', 'medias' ),
// 		'new_item' => __( '新しいメディア', 'medias' ),
// 		'view_item' => __( 'メディアを見る', 'medias' ),
// 		'search_items' => __( 'メディア検索', 'medias' ),
// 		'not_found' => __( 'メディアが見つかりません', 'medias' ),
// 		'not_found_in_trash' => __( 'ゴミ箱にメディアがありません', 'medias' ),
// 		'parent_item_colon' => __( '親メディア', 'medias' ),
// 		'menu_name' => __( 'メディア', 'medias' ),
// 	);
// 
// 	$args = array(
// 		'labels' => $labels,
// 		'hierarchical' => true,
// 		'supports' => array( 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
// 		'public' => false,
// 		'show_ui' => false,
// 		'show_in_nav_menus' => true,
// 		'publicly_queryable' => true,
// 		'exclude_from_search' => true,
// 		'has_archive' => false,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite' => true,
// 		'capability_type' => 'post'
// 	);
// 
// 	register_post_type( 'medias', $args );
// }
?>
