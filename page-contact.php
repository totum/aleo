<?php include (TEMPLATEPATH . '/partials/_header.php'); ?>
		
	<main class="wrap-main  lc  clear" role="main">

		<?php if (have_posts()) : ?>

			<article class="content  content--full  lc">

			<?php while (have_posts()) : the_post(); ?>
				<h2 class="content__title">
						<?php the_title(); ?>
				</h2>
				<section  class="content--half--left">
					<?php the_content(); ?>
				</section>

				<section class="content--half--right  img-text__container">
					<?php include (TEMPLATEPATH . '/partials/_productgallery.php'); ?>
				</section>

			<?php endwhile; ?>

			</article>

		<?php else : ?>

			<article class="content--full">
				<h1 class="post-title">Not Found</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
			</article>

		<?php endif; ?>

	</main>

<?php include (TEMPLATEPATH . '/partials/_maker.php'); ?>

<?php include (TEMPLATEPATH . '/partials/_footer.php'); ?>