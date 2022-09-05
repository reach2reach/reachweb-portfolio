<?php
//============================================
// テーマを翻訳対応する
//============================================
function reachweb_theme_setup(){
    load_theme_textdomain( 'reachweb', get_template_directory() . '/languages' );
    }
add_action( 'after_setup_theme', 'reachweb_theme_setup' );

function my_setup()  {   
    add_theme_support( 'post-thumbnails' );   //投稿の際にアイキャッチ画像を設定
    add_theme_support('automatic-feed-links');   //RSSフィードを自動的に<head>タグ内に出力 
    add_theme_support( 'wp-block-styles' );//ブロックエディター用のスタイルを有効化 (テーマチェックでエラーがでるので記述）
    add_theme_support( 'responsive-embeds' );//埋め込みしたコンテンツをレスポンシブ対応できる
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );//コメントフォーム、検索フォーム、コメントリスト、ギャラリーでHTML5マークアップの使用を許可(テーマチェックでエラーがでるので記述)
    add_theme_support( "custom-logo",);//カスタムロゴの機能を有効化(テーマチェックでエラーがでるので記述)
    add_theme_support( "align-wide" );//alignwide / alignfull に対応=コンテンツ幅を広げたりフルにしたりする機能
    add_theme_support( 'custom-header' );//ヘッダー画像として実装できる＝カスタムヘッダー（テーマチェックでエラーがでるので記述）
    add_theme_support( "custom-background");//背景色と背景画像のカスタマイズを提供
} 
    add_action('after_setup_theme', 'my_setup'); 


// 親テーマのテーマフォルダの画像パスを短くする
function imagepassshort($arg) {
    $content = str_replace('"Images/', '"' . get_template_directory_uri() . '/Images/', $arg);
    return $content;
    }
    add_action('the_content', 'imagepassshort');


//=================================================
// タイトル出力
//=================================================
    
    add_theme_support( 'title-tag' );

    function reachweb_title( $title ) {
        if ( is_front_page() && is_home() ) { //もし表示されたページがフロントページ＆メインブログページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはサイトのタイトル名を取得
        } elseif ( is_singular() ) { //投稿・カスタム投稿・固定ページ・添付ファイルのシングルページなら
            $title = single_post_title( '', false ); //タイトルは投稿ページのタイトルを表示
        }
            return $title;
    }
    add_filter( 'pre_get_document_title', 'reachweb_title' ); //


//==================================================
// CSS&JS読み込み
//==================================================
    function reachweb_script(){ //関数宣言{}内で関数定義

        //CSS読み込み
        wp_enqueue_style( 'style-css', get_template_directory_uri(). '/CSS/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style-reachweb', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    
        //JS読み込み
        wp_enqueue_script( 'jQuery',  get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0',true);
        wp_enqueue_script( 'vivus.js','https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js', array(), true) ;
        wp_enqueue_script( 'script-accordion', get_template_directory_uri() . '/js/accordion.js', array(), '1.0.0', true );
        wp_enqueue_script( 'script-hamburger', get_template_directory_uri() . '/js/hamburger.js', array(), '1.0.0', true );
        wp_enqueue_script( 'script-hello', get_template_directory_uri() . '/js/hello.js', array(), '1.0.0', true );
        wp_enqueue_script( 'script-menu-title', get_template_directory_uri() . '/js/menu-title.js', array(), '1.0.0', true );
        wp_enqueue_script( 'script-modal', get_template_directory_uri() . '/js/modal.js', array(), '1.0.0', true );
    }

    add_action( 'wp_enqueue_scripts', 'reachweb_script' ); //関数を出力

//==================================================
// メニュー設定
//==================================================

    //add_theme_support( 'menu' );

    function register_my_menu() {
        register_nav_menu( 'global-menu','Global Menu');
    }
    add_action( 'after_setup_theme', 'register_my_menu' );

//==================================================
// Bogo設定
//==================================================

    // 言語切替ボタンで、国旗アイコンを表示しない
    add_filter( 'bogo_use_flags','bogo_use_flags_false');
    function bogo_use_flags_false(){
    return false;
    }

    // フック「bogo_language_switcher_links」を利用し、言語切り替えボタンの表記を変更
    add_filter( 'bogo_language_switcher_links', function ( $links ) {
        for ( $i = 0; $i < count( $links ); $i ++ ) {
        // 各言語のtitle、native_name変更箇所
        //「native_name」は表示文字列、「title」はリンクのtitle属性

        // 日本語
            if ( 'ja' === $links[ $i ]['locale'] ) {
                $links[ $i ]['title']       = 'JA';
                $links[ $i ]['native_name'] = 'JA';
            }
        // 英語
            if ( 'en_US' === $links[ $i ]['locale'] || 'en' === $links[ $i ]['locale'] || 'en_NZ' === $links[ $i ]['locale'] ||'en_CA' === $links[ $i ]['locale'] ||'en_GB' === $links[ $i ]['locale'] ||'en_AU' === $links[ $i ]['locale'] ) {
            $links[ $i ]['title']       = 'EN';
            $links[ $i ]['native_name'] = 'EN';
            }
        }
        return $links;
    } );

    // Bogoのテンプレート出し分け
    function select_locale_template($template){
        $locale = get_locale();
        if($locale == 'en_US'){
        $locale_template = dirname( __FILE__ ) . '/' . basename($template, '.php') . '_en.php';
        if(file_exists($locale_template)){
        $template = $locale_template;
        }
        }
        return $template;
    }
    add_filter('home_template', 'select_locale_template');
    add_filter('single_template', 'select_locale_template');
    add_filter('404_template', 'select_locale_template');

//==========================================================================
// editor-style.cssの読み込み--->フロントのデザインをそのままビジュアルエディターで表現
//==========================================================================

    function reachweb_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/editor-style.css" );
    }
    add_action( 'admin_init', 'reachweb_theme_add_editor_styles' );
