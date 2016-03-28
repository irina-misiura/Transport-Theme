<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="section">

			<!-- article -->
			<article id="post-404">
				<div class="page-heading" <?php if($transport['page-title-bg-image']['url']):?>style="background-image: url(<?php echo $transport['page-title-bg-image']['url'];?>)"<?php endif; ?>>
					<div class="row">
						<h1><?php _e( 'Страница не найдена', 'transport' ); ?></h1>
					</div>
				</div>
				<div class="row">
					<h3>
						<a href="<?php echo home_url(); ?>"><?php _e( 'Перейти на главную', 'transport' ); ?></a>
					</h3>
				</div>
			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
