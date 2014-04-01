<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="wrap-main  lc  clear" role="main">

		<!-- Category name, h1 -->

		<?php
			// Get current category name
			$cats = get_the_category();
			$cat_name = $cats[0]->name;
			?>
			<!--<h2 class="category-title clear"><?php echo $cat_name; ?></h2>
			-->

		<?php if (have_posts()) : ?>

			<article class="content  content--left  lc">

			<?php while (have_posts()) : the_post(); ?>
		<?php
		// Get the context to output in class for CTA. TEMP!
			if ( is_single() ) {
				$context = 'single';
			} else {
				$context = 'grid';
			} ?>
				<section class="img-text__container">
					<?php include (TEMPLATEPATH . '/partials/_productgallery.php'); ?>

					<h1 class="h1  img-text__title--product">
						<span class="img-text__bg--product"><?php the_title(); ?></span>
					</h1>
				</section>
				
				<section  class="content__text">
					<?php the_content(); ?>
				</section>

			<?php endwhile; ?>

			</article>

			<?php include (TEMPLATEPATH . '/partials/_cta.php'); ?>

			<?php include (TEMPLATEPATH . '/partials/_sidebar.php'); ?>



		<?php else : ?>

			<article class="content--full">
				<h1 class="post-title">Not Found</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
			</article>

		<?php endif; ?>

	</main>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>