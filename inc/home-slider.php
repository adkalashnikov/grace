<div class="js-home-slider home-slider">
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
                <div class="slide-inner">
                    <div class="slider-couner"></div>

                    <div class="col-right">
                        <h2>
                            <?php the_title(); ?>
                        </h2>

                        <a href="<?php if( get_field('btn-link') ) {the_field('btn-link');} ?>"
                           class="btn-more">
                            <?php if( get_field('btn-text') ) {the_field('btn-text');} ?>
                            <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg>
                        </a>
                    </div>
                </div>
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
