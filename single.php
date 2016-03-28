<?php get_header(); ?>

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
						<div class="small-12 medium-9 columns">
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-thumb">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<!-- post details -->
							<div class="post-details">
								<span class="date"><span class="dashicons dashicons-calendar-alt"></span><?php the_time('F j, Y'); ?></span>
								<!-- /post details -->
							</div>
							<!-- /post details -->

							<!-- post title -->
							<h1 class="post-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h1>
							<!-- /post title -->

							<div class="post-content">
								<?php the_content(); // Dynamic Content ?>
							</div>

							<p><?php _e( 'Категории: ', 'transport' ); the_category(', '); // Separated by commas ?></p>

						</div>
						<div class="small-12 medium-3 columns">
							<?php get_sidebar(); ?>				
						</div>
					</div>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>
					<div class="row">
						<h1><?php _e( 'Извините, нет ничего для отображения.', 'transport' ); ?></h1>
					</div>
				</article>
				<!-- /article -->

			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
