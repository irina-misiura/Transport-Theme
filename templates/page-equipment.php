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
						<?php /*if(function_exists('dynamic_sidebar') && is_active_sidebar('equipment-sidebar')):?>
							<?php dynamic_sidebar('equipment-sidebar');?>
						<?php endif;*/?>

						<?php
						
						$terms = get_terms('tr_product_category', array('hide_empty' => false));
						if ( $terms ): ?>
							<ul class="menu">
  								<?php foreach ( $terms  as $term ):?>
    								<li class="menu-item"><a href="<?php echo get_term_link($term);?>"><?php echo $term->name; ?></a></li>
  								<?php endforeach; ?>
  							</ul>
						<?php endif; ?>
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
						// if($transport['equipment-circle-block1-text']):
						// 	$countCircles++;
						// endif;
						// if($transport['equipment-circle-block2-text']):
						// 	$countCircles++;
						// endif;
						// if($transport['equipment-circle-block3-text']):
						// 	$countCircles++;
						// endif;
						// if($transport['equipment-circle-block4-text']):
						// 	$countCircles++;
						// endif;
						// if($transport['equipment-circle-block5-text']):
						// 	$countCircles++;
						// endif;

						$countCircles = count($terms);
						$heightCircles = 0;
						if($countCircles < 3):
							$heightCircles = 250;
						elseif($countCircles == 3):
							$heightCircles = 450;
						elseif($countCircles > 3):
							$heightCircles = 650;
						endif;
						$i = 1;
						$j = 0;

						foreach($terms as $term): ?>
							<?php if($j%3 == 0 || $i%3 == 0): ?>
								<div class="row medium-unstack align-middle clear circles-block">
							<?php endif; ?>
								<div class="columns "><a href="<?php echo get_term_link($term);?>" class="circle">
									<div class="circle-text"><?php echo $term->name; ?></div>
								</a></div>
							<?php if($j%3 == 1 || $i%3==0): ?>
								</div>
							<?php 
							endif;
							$i++;
							$j++;
							?>
						<?php endforeach;?>
						<?php/* if($transport['equipment-circle-block1-text']): ?>
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
						<?php endif; */?>
					<!-- </div> -->
				</div>
			</div>
			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
