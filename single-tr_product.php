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
					<div class="small-12 medium-3 columns">
						<div class="left-sidebar product-sidebar">
							<?php if(function_exists('dynamic_sidebar') && is_active_sidebar('product-sidebar')):?>
								<?php dynamic_sidebar('product-sidebar'); ?>
							<?php endif;?>
						</div>
					</div>
					<div class="small-12 medium-9 columns">
						<div class="content">	

							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<?php the_content(); // Dynamic Content ?>			

							<ul class="tabs" data-tabs id="example-tabs">
								<li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><?php _e('Возможности');?></a></li>
								<li class="tabs-title"><a href="#panel2"><?php _e('Характеристики');?></a></li>
								<li class="tabs-title"><a href="#panel3"><?php _e('Загрузки');?></a></li>
							</ul>
							<div class="tabs-content" data-tabs-content="example-tabs">
								<div class="tabs-panel is-active" id="panel1">
									<?php if(count($transport['product-capabilities'])): ?>
										<ul>
										<?php foreach($transport['product-capabilities'] as $capability): ?>
											<li><?php echo $capability; ?></li>
										<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</div>
								<div class="tabs-panel" id="panel2">
									<?php if(count($transport['product-characteristics-names']) && count($transport['product-characteristics-values'])): ?>
										<table>
											<tbody>
												<?php 
												$i=0;
												foreach($transport['product-characteristics-names'] as $characteristic): 
													if($transport['product-characteristics-values'][$i]):
														?>
														<tr>
															<th><?php echo $characteristic; ?></th>
															<td><?php echo $transport['product-characteristics-values'][$i]; ?></td>
														</tr>
												<?php 
													endif;
													$i++;
												endforeach; 
												?>
											</tbody>
										</table>
									<?php endif; ?>
								</div>
								<div class="tabs-panel" id="panel3">
									<?php if(count($transport['product-downloads-url']) && count($transport['product-downloads-names'])): ?>
										<ul>
											<?php 
											$i=0;
											foreach($transport['product-downloads-url'] as $download_url): 
												if($transport['product-downloads-names'][$i]):
													?>
													<li>
														<a href="<?php echo $download_url; ?>"><?php echo $transport['product-downloads-names'][$i]; ?></a>
													</li>
											<?php 
												endif;
												$i++;
											endforeach; 
											?>
										</ul>
									<?php endif; ?>
								</div>
							</div>

						</div>
					</div>
				</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'transport' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
