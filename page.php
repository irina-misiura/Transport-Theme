<?php 
get_header(); 
global $transport;
?>

	<main role="main">
		<!-- section -->
		<section class="section">
			<div class="page-heading" <?php if($transport['page-title-bg-image']['url']):?>style="background-image: url(<?php echo $transport['page-title-bg-image']['url'];?>)"<?php endif; ?>>
				<div class="row">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="row">
						<?php the_content(); ?>
					</div>
				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'transport' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
