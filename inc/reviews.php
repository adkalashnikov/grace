<div class="js-reviews home-reviews">
    <ul class="slides clearfix">
        <?php
        $args = array(
            'posts_per_page' => 8,
            'cat'  => array(20),
            'order' => 'DESC',
        );
        $query = new WP_Query( $args );

        // Цикл
        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post(); ?>

            <li>
                <div class="slide-inner">
                    <div class="slide-image"><?php the_post_thumbnail('full'); ?></div>

                    <div class="slide-content">
                        <div class="subtitle">Отзыв</div>
                        <div class="title"><?php the_title(); ?></div>
                        <div class="text">
                            <?php the_excerpt(); ?>
                        </div>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="more-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </li>

        <?php }
        } else {
            // Постов не найдено
        }
        wp_reset_postdata();
        ?>
    </ul>
</div>
