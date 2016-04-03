<?php 
/*
* Template Name: Контакты
*/


get_header(); 

global $transport;
$content_classes = 'small-12 medium-9 ';
if(!$transport['our-contacts']):
	$content_classes = 'small-12 medium-12 ';
endif;
?>

	<main role="main">
		<!-- section -->
		<section class="section">
			<div class="page-heading" <?php if($transport['page-title-bg-image']['url']):?>style="background-image: url(<?php echo $transport['page-title-bg-image']['url'];?>)"<?php endif; ?>>
				<div class="row">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="<?php echo $content_classes; ?> columns">
					<div class="content">

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php endif;?>

					</div>
				</div>
				<?php if($transport['our-contacts']): ?>
					<div class="small-12 medium-3 columns">
						<div class="right-sidebar contacts-sidebar">
							<?php echo apply_filters('the_content', $transport['our-contacts']); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			
			<?php if($transport['contacts-map-address']): ?>
				<?php echo transport_display_map(); ?>
			<?php endif; ?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
