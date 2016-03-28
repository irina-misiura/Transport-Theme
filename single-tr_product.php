<?php 
get_header(); 
global $transport;
global $post;
$terms = get_the_terms($post->ID,'tr_product_subcategory');
$tax_query = array();
if ( $terms && !is_wp_error($terms) ) :
	foreach($terms as $term):
		$tax_query[] =  array(
            'taxonomy' => 'tr_product_subcategory',
            'field' => 'slug',
            'terms' => $term->slug
        );
	endforeach;
	$args = array(
	    'post_type' => 'tr_product',
	    'post_status' => 'publish',
	    'posts_per_page' => -1,
	    'numberposts' => -1,
	    'exclude' => $post->ID,
	    'tax_query' => $tax_query
	);

	$products = get_posts($args);
	wp_reset_postdata(); 
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

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="row">
					<div class="small-12 medium-3 columns">
						<div class="left-sidebar product-sidebar">
							<?php/* if(function_exists('dynamic_sidebar') && is_active_sidebar('product-sidebar')):?>
								<?php dynamic_sidebar('product-sidebar'); ?>
							<?php endif;*/?>

							<?php if($products): ?>
							    
							    <ul class="menu">
						    		<?php foreach($products as $product): ?>
						    			<li class="menu-item">
						    				<a href="<?php echo get_permalink($product->ID); ?>">
						    					<?php echo $product->post_title; ?>
						    				</a>
						    			</li>
						    		<?php endforeach; ?>
						    	</ul>

					    	<?php endif; ?>
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
							
							<div class="product-tabs-wrap">
								<ul class="tabs" data-tabs id="product-tabs">
									<li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><?php _e('Возможности');?></a></li>
									<li class="tabs-title"><a href="#panel2"><?php _e('Характеристики');?></a></li>
									<li class="tabs-title"><a href="#panel3"><?php _e('Загрузки');?></a></li>
								</ul>
								<div class="tabs-content" data-tabs-content="product-tabs">
									<div class="tabs-panel is-active" id="panel1">
										<?php if(count($transport['product-capabilities']) && $transport['product-capabilities'][0]): ?>
											<ul>
											<?php foreach($transport['product-capabilities'] as $capability): ?>
												<li><?php echo $capability; ?></li>
											<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</div>
									<div class="tabs-panel" id="panel2">
										<?php if(count($transport['product-characteristics-names']) && $transport['product-characteristics-names'][0] && count($transport['product-characteristics-values']) && $transport['product-characteristics-values'][0]): ?>
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
										<?php if(count($transport['product-downloads-url']) && $transport['product-downloads-url'][0] && count($transport['product-downloads-names']) && $transport['product-downloads-names'][0]): ?>
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
				</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Извините, нет ничего для отображения.', 'transport' ); ?></h1>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
