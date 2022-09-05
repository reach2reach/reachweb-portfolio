<?php get_header(); ?> 

<main>
    <div class="p-404page">
        <section class="p-404page__title">
            <h2>404<br><span class="p-404page__title--text">Page Not Found</span></h2>
        </section>

        <section class="p-404page__content_en">
            <p class="p-404page__content--text">The page you are looking for might have been removed, or deleted.</p>
            <!--ページurl取得-->
            <p class="p-404page__content--url">URL:&nbsp;<span><?php echo get_pagenum_link(); ?></span></p>
            <!--ホームへ戻る-->
            <p class="p-404page__content--home">Please check the URL and try again or click the button below to go back to Home.</p>
            <button class="c-button--404home_en" onclick="location.href='<?php echo esc_url( home_url( '/' ) ); ?>'">Back to Home</button>
        </section>
    </div>  
</main>
<?php get_footer(); ?>