		<nav class="nav-sidebar  sidebar  nav  lc">

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
					<ul class="sidebar__list  grid--img  nav-list">
					
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<?php
						// Skip this entry if same as main entry
						$aside_post_id = get_the_ID();
						if ( $aside_post_id == $main_post_id ) : continue;						
						else : ?>
							<li class="sidebar__item  img-grid__itm">
								<?php
								// Checks for post selected image. Inserts if true.
								if( has_post_thumbnail() ) {
									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-small', true );
									$thumb_url = $thumb['0'];
									//$thumb_large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-large', true );
									//$thumb_large_url = $thumb_large['0'];
								?>
								<a href="<?php the_permalink() ?>" class="img-text__container  img-grid__container">
									<img class="sidebar__item__img  img-grid__img  img-text__img" src="<?php echo $thumb_url; ?>" />
									<h2 class="sidebar__item__title  h5  img-text__title  img-text__title--img-grid"><span class="img-text__bg"><?php the_title(); ?></span></h2>
								</a>
								<?php } ?>
								
							</li>
						<?php endif; ?>

					<?php endwhile; ?>
					</ul>
				<?php endif; ?>


			<?php wp_reset_postdata(); ?>

		</nav>