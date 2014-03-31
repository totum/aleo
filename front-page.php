<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="wrap-main  lc  clear" role="main">

		<?php
		// First we show the frontpage blurb.
		?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<section class="front-page__blurb  content  content--full">
					<h2 class="content__title">
						<?php the_title(); ?>
					</h2>
					<?php the_content(); ?>
				</section>
				<?php
				// If we ad some fancy ass content for the top right, place here in section with title.
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<section class="content  content--full">
				<h2 class="content__title">Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
			</section>
		<?php endif; ?>


		<?php
		// Then we loop through some products
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1
		);
		$wp_query = new WP_Query( $args ); ?>
		
		<?php if (have_posts()) : ?>
			<section class="content content--full  lc">
				<!-- <h2 class="content__title">Featured products</h2> -->
				<ul class="product--list">
					<?php include (TEMPLATEPATH . '/partials/_product-list.php'); ?>
				</ul>
			</nav>
		<?php else : ?>
			<article class="content--full">
				<h2 class="content__title">Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
			</article>

			<?php endif; ?>

			<?php wp_reset_postdata(); ?>

	</main>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>