<?php if (is_mobile()) {
  get_header('m');
  include 'page-mob-magazin.php';
  return;
} else {
  get_header();
}?>

<script>
	$('body').addClass('def-bg');
</script>

<?php get_template_part('inc/sidebar-menu'); ?>

<button id="open_tov_gal"></button>

    <?php global $wp_query; while ( have_posts() ) : the_post(); ?>

              
	<section class="def-bg slide before horizontal">
	  <div class="content">
	    <div class="container">
	      <div class="wrap-cont tovar bottom">

	        <div class="t1185">
                <?php get_template_part('inc/page-header'); ?>
	        </div>
	      
	        <div class="w1185 tov-650">
	        	<?php 
	        		$subtitle = get_the_terms( $post->ID, 'product-cat' );
	        		$tov_cat = $subtitle[0]->term_id;
	        		$back_link = "";
	        		if($tov_cat == 15){
	        			$back_link = get_permalink(201);
	        		}
	        		if($tov_cat == 16){
	        			$back_link = get_permalink(635);
	        		}
	        	?>
	        	<a href="<?php echo $back_link;?>" class="single-tov-back-link">вернутся в каталог</a>
	        	<div class="stv-top">
	        		<div class="shp-title">
	          	<div class="shp-subtitle">
	          		<?php echo $subtitle[0]->name; ?>
	          	</div> 
	          		<div id="tov-name"> <?php the_field('tov-name'); ?> </div>
	          	</div>
	          	<div class="shp-price" data-price="<?php the_field('tov-price'); ?>"><?php the_field('tov-price'); ?> <span>грн.</span></div> 
	        	</div>
	        	<div class="clear"></div>
	        	 

	           <div class="stv-char"><span>Силуэт:</span> <?php the_field('tov1'); ?> </div>
	           <div class="stv-char"><span>Цвет:</span>
		            <?php
		            if( get_field('tov2') ): ?>	
								<?php while( has_sub_field("tov2") ): ?>											
											<?php the_sub_field("tov-2-col-text");?>
								<?php endwhile; ?><?php endif; ?> 
							</div>
							<div class="stv-char"><span>Шлейф:</span> <?php the_field('tov3'); ?> </div>
							<div class="stv-char"><span>Корсет:</span> <?php the_field('tov4'); ?> </div>
							<div class="stv-char"><span>Юбка:</span> <?php the_field('tov5'); ?> </div>
							<div class="stv-char"><span>Тип застежки:</span> <?php the_field('tov6'); ?> </div>
							<div class="stv-char"><span>Декор:</span> <?php the_field('tov7'); ?> </div>
							<div class="stv-char"><?php the_field('tov8'); ?> </div>
							<div class="clear"></div>

				<form id="stv-form">
								
		            <?php
		            if( get_field('tov2') ): ?>
									<select id="tov-color">
										<option value="">Выбор цвета</option>
										<?php while( has_sub_field("tov2") ): ?>											

										<option>
											<?php the_sub_field("tov-2-col-text"); ?>
										</option>

										<?php endwhile; ?>
									</select>
								<?php endif; ?> 
								
		            <?php
		            if( get_field('tov-size') ): ?>
						<select id="tov-size">
							<option value="">Размер</option>
							<?php while( has_sub_field("tov-size") ): ?>											

							<option>
								<?php the_sub_field("tov-size-text"); ?>
							</option>

							<?php endwhile; ?>
						</select>
					<?php endif; ?> 
										
					<input type="number" id="tov-quantity" value="1">
					<input type="button" id="zakaz-tov-btn" value="Заказать">
				</form>
							


	        </div>


	        <div id="zakaz-wrap" class="def-bg">
	        	<div class="zwr-content">				        							        		
						
						<div class="shp-title">
							Оформление <br> заказа
						</div>
	        	<?php echo do_shortcode('[contact-form-7 id="103" title="Заказ"]'); ?>
	        	<div id="zakaz-close">Вернуться назад</div>

	        	</div>
	        </div>

	        <div class="tov-gallery">
				<?php 

					$images = get_field('tov-gal');

					if( $images ): ?>
					    <div id="slider" class="flexslider">
					        <ul class="slides my-gallery">
					            <?php foreach( $images as $image ): ?>
					                <li>
					                    <img class="flex-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </li>
					            <?php endforeach; ?>
					        </ul>
					    </div>
					<?php endif; ?>
			</div>
					
			<div class="clear"></div>
	        <div class="next-tov">
	        	<?php previous_post_link('<div id="prev-link">%link предыдущее платье</div>', ''); ?>
	        	<?php next_post_link('<div id="next-link">%link следущее платье</div>', '');?>
	        </div>


	      </div>
	    </div>
	  </div>
	  
	  <?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
		
		?>
	    <div class="background def-bg"></div>
	</section>

<?php endwhile; // Конец цикла ?>

<div class='clear'></div>

<?php get_footer(); // подключаем footer.php ?>