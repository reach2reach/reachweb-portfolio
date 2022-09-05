<?php get_header(); ?>
        <main>
                <div class="p-single_en">

                    <h2 class="p-single_en__title">
                        <?php the_title();?>
                    </h2>
                    
                    <?php if(have_posts()): 
                        while(have_posts()): 
                            the_post(); ?>
                            <?php the_content();?> 
                            <?php wp_link_pages();?>
                            <button class="c-button--single_en" onclick="location.href='<?php echo esc_url( home_url( '/' ) )?>#work'">Back to Project List</button>
                </div>
                <?php endwhile; 
                else:
                    ?><p>表示する記事がありません</p>
                <?php endif; ?>
        </main> 
    <?php get_footer(); ?>