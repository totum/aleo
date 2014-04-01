		<aside class="nav-sidebar  sidebar  nav  lc">

			<?php
			// Store post ID in variable to access in aside
			$main_post_id = get_the_ID();
			
			// Query posts depending on category (category of current main item)
			//$current_category = wp_get_post_categories($post->ID);
			//echo $current_category;

			//$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'category_name' => $cat_name,
				'posts_per_page' => -1
			);

			$wp_query = new WP_Query( $args );
				if ( $wp_query->have_posts() ): ?>
					<?php
					// Count posts to avoid printing header if no more.
					$post_count = $wp_query->post_count;
					if ($post_count > 1) { ?>
						<!-- <h2 class="h3  sidebar__title"> -->
							<!-- <span class="sidebar__title__bg">More... <?php //echo $cat_name ?></span> -->
						<!-- </h2> -->
					<?php } ?>

					<ul class="sidebar__list">
					
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<?php
						// Skip this entry if same as main entry
						$aside_post_id = get_the_ID();
						if ( $aside_post_id == $main_post_id ) : continue;						
						else : ?>

							<?php
							// Checks for ACF featured image #1
  							$feat_image = get_field('featured_1');
 							if ( !empty($feat_image) ) {
 								// Store values
 								$url_feat = $feat_image['url'];
								$title_feat = $feat_image['title'];
								$alt_feat = $feat_image['alt'];
								$caption_feat = $feat_image['caption'];
							?>

								<li class="sidebar__item">

									<a href="<?php the_permalink() ?>" class="img-text__container">
										<img class="sidebar__item__img" title="<?php echo $title_feat; ?>" alt="<?php echo $alt_feat ?>"
										     src="<?php echo $feat_image['sizes'][ 'thumb2_t' ]?>"
										     <?php /*srcset="
										     	<?php echo $feat_image['sizes'][ 'thumb2_t' ]?> 1x,
										     	<?php echo $feat_image['sizes'][ 'small_t' ]?> 2x" */ ?>
										/>
										<h3 class="h4  img-text__title--sidebar">
											<span class="img-text__bg--sidebar"><?php the_title(); ?></span>
										</h3>
									</a>
									
								</li>
							<?php } ?>
						<?php endif; ?>

					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</aside>