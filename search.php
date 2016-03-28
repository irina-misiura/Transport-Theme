<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="section">

			<div class="page-heading" <?php if($transport['page-title-bg-image']['url']):?>style="background-image: url(<?php echo $transport['page-title-bg-image']['url'];?>)"<?php endif; ?>>
				<div class="row">
					<h1><?php _e( 'Результаты поиска для "', 'transport' ); echo get_search_query() . '"'; ?></h1>
				</div>
			</div>

			<div class="row">
				<div class="small-12 medium-9 columns">
					<?php get_template_part('loop'); ?>
				</div>
				<div class="small-12 medium-3 columns">
					<?php get_sidebar(); ?>				
				</div>
			</div>
			<?php get_template_part('pagination'); ?>


		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
