<?php get_header(); ?> 

<main>
    <div class="p-404page">
        <section class="p-404page__title">
            <h2>404<br><span class="p-404page__title--text">Page Not Found</span></h2>
        </section>

        <section class="p-404page__content">
            <p class="p-404page__content--text">指定された以下のページは存在しないか、または移動した可能性があります。</p>
            <!--ページurl取得-->
            <p class="p-404page__content--url">URL:&nbsp;<span><?php echo get_pagenum_link(); ?></span></p>
            <!--ホームへ戻る-->
            <p class="p-404page__content--home">URLをご確認の上再読み込みするか、ホームへお戻りください。</p>
            <button class="c-button--404home" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>'">ホームへ戻る</button>
        </section>
    </div>  
</main>
<?php get_footer(); ?>