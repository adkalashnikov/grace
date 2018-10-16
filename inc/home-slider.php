<div class="js-slider-home">
    <ul class="slides">

            <?php
            $args = array (
                'post_type'              => array( 'home_slider' ),
                'posts_per_page'         => -1,
                'paged'                  => get_query_var( 'paged' ),
                'order'                  => 'DESC',
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();
                ?>

            <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
            ?>
            <li data-slide-bg="<?php echo $thumb_url[0]; ?>">
                <div class="slider-couner"></div>

                <h2>
                    <?php the_title(); ?>
                </h2>

                <a href="#" class="btn-more">Заказать пошив</a>
            </li>

                <?php
            }
            } else {
                echo 'Ничего нет!';
            }
            wp_reset_postdata();
            ?>
    </ul>
</div>
