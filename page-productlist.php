<?php
/*
Template Name: Product List
*/
?>

<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="wrap-main  lc  clear" role="main">

		<?php
		// First we show the frontpage blurb.
		?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<section class="product-page__blurb  content  content--full">
					<h1 class="content__title">
						<?php the_title(); ?>
					</h1>
					<?php the_content(); ?>
				</section>
				<?php
				// If we ad some fancy ass content for the top right, place here in section with title.
				?>
			<?php endwhile; ?>
		<?php else : ?>
			<section class="content  content--full">
				<h1 class="content__title">Not Found</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
			</section>
		<?php endif; ?>

		<?php
		// Get page name -> query based on that.
		global $post;
		$cat_name = get_post( $post )->post_name;
		?>

		<?php
		// Then we loop through posts based on cat name
		$args = array(
			'category_name' => $cat_name,
			'posts_per_page' => -1
		);
		$wp_query = new WP_Query( $args ); ?>
		
		<?php if (have_posts()) : ?>

			<nav class="content content--full  lc" role="navigation">
				<ul class="product--list">

					<?php include (TEMPLATEPATH . '/partials/_product-list.php'); ?>

				</ul>
			</nav>

		<?php else : ?>

			<article class="content--full">
				<h1 class="content__title">Not Found</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
			</article>

		<?php endif; ?>

		<?php wp_reset_postdata(); ?>

	</main>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>