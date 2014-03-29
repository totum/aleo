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
					<h2 class="h3  sidebar__title">
						<span class="sidebar__title__bg">More <?php echo $cat_name ?></span>
					</h2>

					<ul class="sidebar__list">
					
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<?php
						// Skip this entry if same as main entry
						$aside_post_id = get_the_ID();
						if ( $aside_post_id == $main_post_id ) : continue;						
						else : ?>

							<li class="sidebar__item">
								<?php
								// Checks for ACF featured image #1
  								$feat_image = get_field('featured_1');

  								if ( !empty($feat_image) ) {
  									// Store values
  									$url_feat = $feat_image['url'];
									$title_feat = $image['title'];
									$alt_feat = $image['alt'];
									$caption_feat = $image['caption'];
								// Picturefill markup starts.
								?>
								<a href="<?php the_permalink() ?>" class="img-text__container">

									<span class="sidebar__item__img" data-picture data-alt="<?php echo $alt_feat ?>" title="<?php echo $title_feat; ?>">

										<span data-src="<?php echo $feat_image['sizes'][ 'thumb2' ]?>"></span>
								        <span data-src="<?php echo $feat_image['sizes'][ 'small' ]?>" 	data-media="(min-device-pixel-ratio: 2.0)"></span>
								        <!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
								        <noscript>
								            <img src="<?php echo $feat_image['sizes'][ 'thumbnail' ]?>" alt="<?php echo $alt ?>">
								        </noscript>
								    </span>
								
									<!-- <img class="sidebar__item__img  img-grid__img  img-text__img" src="<?php echo $thumb_url; ?>" /> -->
									<h3 class="h5  img-text__title--sidebar">
										<span class="img-text__bg--sidebar"><?php the_title(); ?></span>
									</h3>
								</a>

								<?php } ?>
								
							</li>
						<?php endif; ?>

					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</aside>