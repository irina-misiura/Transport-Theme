<?php 
/*
* Template Name: Страница Автомобильных трекеров
*/

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
			<div class="row">
				<div class="small-12 medium-3 columns">
					<div class="left-sidebar trackers-sidebar">
						<?php if(function_exists('dynamic_sidebar') && is_active_sidebar('trackers-sidebar')):?>
							<?php dynamic_sidebar('trackers-sidebar');?>
						<?php endif;?>
					</div>
				</div>
				<div class="small-12 medium-9 columns">
					<div class="content">
					
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php endif;?>

					</div>
				</div>
			</div>
			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
