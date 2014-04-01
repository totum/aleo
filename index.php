<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="wrap-main  lc  clear" role="main">

		<!-- Category name, h1 -->

		<?php
			// Get current category name
			$cats = get_the_category();
			$cat_name = $cats[0]->name;
			?>
			<!--<h1 class="category-title clear"><?php echo $cat_name; ?></h1>
			-->
		<article class="content  content--left  lc">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

		<?php
		// Get the context to output in class for CTA. TEMP!
			if ( is_single() ) {
				$context = 'single';
			} else {
				$context = 'grid';
			} ?>

				<?php
				// Checks for post selected image. Inserts if true.
				/*if( has_post_thumbnail() ) {
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-large', true );
					$thumb_url = $thumb['0'];
					$thumb_large = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-xlarge', true );
					$thumb_large_url = $thumb_large['0'];
					?>
						<a href="<?php echo $thumb_large_url; ?>" class="img-text__container  img-container">
							<img class="product__img" src="<?php echo $thumb_url; ?>" />
							<h1 class="h2  img-text__title  img-text__title--product"><span class="img-text__bg"><?php the_title(); ?></span></h1>
						</a>
				<?php }*/ ?>
				<section class="img-text__container">
					<?php include (TEMPLATEPATH . '/partials/_productgallery.php'); ?>

					<h1 class="h1  img-text__title--product">
						<span class="img-text__bg--product"><?php the_title(); ?></span>
					</h1>
				</section>

				<section>
					<?php the_content(); ?>
				</section>				
			<?php endwhile; ?>
		<?php else : ?>

			<h1 class="post-title">Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>

		</article>

<?php include (TEMPLATEPATH . '/partials/_sidebar.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_cta.php'); ?>

	</main>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>