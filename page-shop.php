<?php
/**
 *  Template Name: Магазин
 */
if (is_mobile()) {
  get_header('m');
  include 'page-mob-rabotu.php';
  return;
} else {
  get_header();
}?>

<script>
	$('body').addClass('horizontal');
</script>


<!-- Navigation -->
<div class="panel bottom navmz">
<div class="w1185">
	<div class="sections">
		<div class="left">
			<nav class="small">
			  <div class="navigation">
			    <ul></ul>
			  </div>
			</nav>
		</div>
	</div>
</div>
</div>


<?php get_template_part('inc/sidebar-menu'); ?>

            <?php

            
                 

            $args = array (
            	'post_type'              => array( 'product' ),
                'posts_per_page'         => -1,
                'paged'                  => get_query_var( 'paged' ),
            	'order'                  => 'DESC',
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>

              
					<section class="slide fade kenBurns before  horizontal" data-title="<?php the_title(); ?>">
					  <div class="content">
					    <div class="container">
					      <div class="wrap-cont">

					        <div class="t1185">
                                <?php get_template_part('inc/page-header'); ?>
					        </div>
					      
					        <div class="b1185 magaz">  
					          <div class="shp-title">
					          	<div class="shp-subtitle">
					          		<?php 
						            $subtitle = get_the_terms( $post->ID, 'product-cat' );
						            echo $subtitle[0]->name;
						           ?>
					          	</div> 
					          	<?php the_field('tov-name'); ?> 
					          </div>
										<div class="shp-desc"><?php the_field('tov-desc'); ?></div>
					          <div class="shp-price"><?php the_field('tov-price'); ?> <span>грн.</span></div>
					          <div class="shp-btn"><a class="btn-more" href="<?php the_permalink(); ?>">Подробнее</a></div>
					        </div>
					        
					          
					      </div>
					    </div>
					  </div>
						  <?php
							$thumb_id = get_post_thumbnail_id();
							$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);							
							?>
					  <div class="background" style="background-image:url(<?php echo $thumb_url[0]; ?>"></div>
					</section>


            <?php }
                } else {
                	echo 'Ничего нет!';
                }
                wp_reset_postdata();
            ?>  

<div class='clear'></div>

<?php get_footer(); // подключаем footer.php ?>