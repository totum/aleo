				<?php
				// Set counter to output bigger src for featured.
				$i = 1;

				?>

				<?php while (have_posts()) : the_post(); ?>
					<?php
					// Get current category name
					$cats = get_the_category();
					$cat_name = $cats[0]->name;
					?>
					<?php
					// Pull ACF featured image #1.
					$feat_image = get_field('featured_1');
					if ( !empty($feat_image) ) {
  						// Store values
  						$url_feat = $feat_image['url'];
						$title_feat = $feat_image['title'];
						$alt_feat = $feat_image['alt'];
						$caption_feat = $feat_image['caption'];
					?>
						<li class="product--list__item  product--<?php echo $cat_name; ?>">
							<a href="<?php the_permalink() ?>" class="img-text__container">
								<?php
								if ( $i == 1 ) { ?>
									<img class="product--list__img" title="<?php echo $title_feat; ?>" alt="<?php echo $alt_feat ?>"
										src="<?php echo $feat_image['sizes'][ 'small' ]?>"
										srcset="
											<?php echo $feat_image['sizes'][ 'small' ]?> 1x,
											<?php echo $feat_image['sizes'][ 'medium' ]?> 2x"
									/>

								<?php } else { ?>
									<img class="product--list__img" title="<?php echo $title_feat; ?>" alt="<?php echo $alt_feat ?>"
										src="<?php echo $feat_image['sizes'][ 'thumb2' ]?>"
										srcset="
											<?php echo $feat_image['sizes'][ 'thumb2' ]?> 1x,
											<?php echo $feat_image['sizes'][ 'small' ]?> 2x"
									/>
								<?php } ?>
								<h2 class="h3  img-text__title--product-list">
									<span class="img-text__bg--product-list"><?php the_title(); ?></span>
								</h2>
							</a>
						</li>
					<?php } ?>
					<?php $i++; ?>
				<?php endwhile; ?>