<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">

        <!--ウェブクリップアイコン-->
        <link rel="apple-touch-icon" href="<?php echo esc_url (get_template_directory_uri().'/Images/webclip.png');?>"/>

        <!--Adobe fonts-->
        <script>
            (function(d) {
                var config = {
                kitId: 'udt3skw',
                scriptTimeout: 3000,
                async: true
                },
                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
            })(document);
        </script>

        <?php wp_head(); ?> 
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div <?php post_class('l-container'); ?>>
            <header class="l-header p-header">
                <button class="c-button--hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <h1 class="c-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url (get_template_directory_uri().'/Images/r-logo.svg');?>" alt="Reach Webdesign Portfolio logo"></a>  
                </h1>

                    <?php wp_nav_menu( array(
                        'menu_class'      => 'p-global-nav__menu', //メニューのul要素に付加されるクラス名
                        'container'       => 'nav',//メニューのul要素を囲む要素。divかnav。なしの場合はfalse
                        'container_class' => 'p-global-nav', //メニューのul要素を囲む要素に付加するクラス名
                        'theme_location' => 'global-menu',
                    )); ?>
                    
                <div class="bogo-language-switcher">
                    <?php echo do_shortcode("[bogo]"); ?>
                </div>        
            </header>