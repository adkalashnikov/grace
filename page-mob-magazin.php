<?php
/**
 *  Template Name: Моб. магазин
 */
get_header('m'); ?>
<style>
	body{
		background-image: url(<?php the_post_thumbnail_url('full'); ?>);
	}
</style>
<section class="">
		<?php

    $args = array (
    	'post_type'              => array( 'product' ),
        'posts_per_page'         => -1,
        'paged'                  => get_query_var( 'paged' ),
    	'order'                  => 'DESC',
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
	   
	   <?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);							
			?>  
    <div class="sg-item">
    	<div class="sg-item-gallery">
												<?php 

													$images = get_field('tov-gal');

													if( $images ): ?>
													    <div class="flexslider">
													        <ul class="slides">
													            <?php foreach( $images as $image ): ?>
													                <li>
													                    <img class="flex-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													                </li>
													            <?php endforeach; ?>
													        </ul>
													    </div>
													<?php endif; ?>
									</div>   
      <div class="sg-title">
      	<div class="sg-subtitle">
      	 	<?php 
            $subtitle = get_the_terms( $post->ID, 'product-cat' );
            echo $subtitle[0]->name;
           	?>
        </div> 
      	<?php the_field('tov-name'); ?>
      </div>
      <div class="sg-price"><?php the_field('tov-price'); ?> <span>грн.</span></div>
      
      
    </div>

  <?php }
  } else {
  	echo 'Ничего нет!';
  }
      wp_reset_postdata();
  ?>  
	<div class="clear"></div>	
</section>
<?php get_footer('m'); ?>