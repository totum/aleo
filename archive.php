<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="wrap-main  lc  clear" role="main">

		<!-- Category name, h1 -->

		<?php
			// Get current category name
			$cats = get_the_category();
			$cat_name = $cats[0]->name;
		?>
		
		<?php if (have_posts()) : ?>

			<nav class="content content--full  lc" role="navigation">
				<h1 class="content__title"><?php echo $cat_name; ?></h1>
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

	</main>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>