<?php 
/*
* Template Name: Страница оборудования
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
					<div class="left-sidebar equipment-sidebar">
						<?php if(function_exists('dynamic_sidebar') && is_active_sidebar('equipment-sidebar')):?>
							<?php dynamic_sidebar('equipment-sidebar');?>
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
					<?php $countCircles = 0; 
						if($transport['equipment-circle-block1-text']):
							$countCircles++;
						endif;
						if($transport['equipment-circle-block2-text']):
							$countCircles++;
						endif;
						if($transport['equipment-circle-block3-text']):
							$countCircles++;
						endif;
						if($transport['equipment-circle-block4-text']):
							$countCircles++;
						endif;
						if($transport['equipment-circle-block5-text']):
							$countCircles++;
						endif;
						$heightCircles = 0;
						if($countCircles<3):
							$heightCircles = 250;
						elseif($countCircles == 3):
							$heightCircles = 450;
						elseif($countCircles > 3):
							$heightCircles = 650;
						endif;
					?>
					<div class="clear circles-block" style="height:<?php echo $heightCircles; ?>px;">
						<?php if($transport['equipment-circle-block1-text']): ?>
							<a <?php if($transport['equipment-circle-block1-url']): echo 'href="'.$transport['equipment-circle-block1-url'].'"'; endif; ?>class="circle">
								<div class="circle-text"><?php echo $transport['equipment-circle-block1-text']; ?></div>
							</a>
						<?php endif; ?>
						<?php if($transport['equipment-circle-block2-text']): ?>
							<a <?php if($transport['equipment-circle-block2-url']): echo 'href="'.$transport['equipment-circle-block2-url'].'"'; endif; ?>class="circle">
								<div class="circle-text"><?php echo $transport['equipment-circle-block2-text']; ?></div>
							</a>
						<?php endif; ?>
						<?php if($transport['equipment-circle-block3-text']): ?>
							<a <?php if($transport['equipment-circle-block3-url']): echo 'href="'.$transport['equipment-circle-block3-url'].'"'; endif; ?>class="circle">
								<div class="circle-text"><?php echo $transport['equipment-circle-block3-text']; ?></div>
							</a>
						<?php endif; ?>
						<?php if($transport['equipment-circle-block4-text']): ?>
							<a <?php if($transport['equipment-circle-block4-url']): echo 'href="'.$transport['equipment-circle-block4-url'].'"'; endif; ?>class="circle">
								<div class="circle-text"><?php echo $transport['equipment-circle-block4-text']; ?></div>
							</a>
						<?php endif; ?>
						<?php if($transport['equipment-circle-block5-text']): ?>
							<a <?php if($transport['equipment-circle-block5-url']): echo 'href="'.$transport['equipment-circle-block5-url'].'"'; endif; ?>class="circle">
								<div class="circle-text"><?php echo $transport['equipment-circle-block5-text']; ?></div>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
