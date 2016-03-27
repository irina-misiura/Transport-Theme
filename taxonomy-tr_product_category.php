<?php 
get_header();

$value = get_query_var($wp_query->query_vars['taxonomy']);
$current_term = get_term_by('slug', $value, $wp_query->query_vars['taxonomy']);
?>
	<main role="main">
		<!-- section -->
		<section class="section">
			<div class="page-heading" <?php if($transport['page-title-bg-image']['url']):?>style="background-image: url(<?php echo $transport['page-title-bg-image']['url'];?>)"<?php endif; ?>>
				<div class="row">
					<h1><?php echo $current_term->name; ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="small-12 medium-3 columns">
					<div class="left-sidebar trackers-sidebar">
						<?php/* if(function_exists('dynamic_sidebar') && is_active_sidebar('trackers-sidebar')):?>
							<?php dynamic_sidebar('trackers-sidebar');?>
						<?php endif;*/?>

						<?php 
						  $args = array(
					        'post_type' => 'tr_product',
					        'post_status' => 'publish',
					        'posts_per_page' => -1,
					        'numberposts' => -1,
					        'tax_query' => array(
					            array(
					                'taxonomy' => 'tr_product_category',
					                'field' => 'slug',
					                'terms' => $current_term->slug
					            )
					        )
					    );
					    $products_list = array();
					    $products = get_posts($args);
					    if($products): ?>
						    <ul>
						    	<?php foreach($products as $product): ?>
						    		<li><a href="<?php echo get_permalink($product->ID);?>"><?php echo $product->post_title; ?></a></li>
						    	<?php endforeach; ?>
						    </ul>
					    <?php endif;
					    wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="small-12 medium-9 columns">

					<div class="content">
						<?php echo apply_filters('the_content', $current_term->description); ?>
					</div>

					<?php 
					$terms = get_terms('tr_product_subcategory');

					if ( !empty($terms) && !is_wp_error($terms) ): ?>

						<div class="products-block">
							<?php foreach($terms as $term):
								$args = array(
							        'post_type' => 'tr_product',
							        'post_status' => 'publish',
							        'posts_per_page' => -1,
							        'numberposts' => -1,
							        'tax_query' => array(
										'relation' => 'AND',
							            array(
							                'taxonomy' => 'tr_product_category',
							                'field' => 'slug',
							                'terms' => $current_term->slug
							            ),
							            array(
							                'taxonomy' => 'tr_product_subcategory',
							                'field' => 'slug',
							                'terms' => $term->slug
							            )
							       )
							    );

							    $products = get_posts($args);
							    if($products): ?>
							    
									<h3><?php echo $term->name; ?></h3>
								    <div class="row">
							    		<?php foreach($products as $product): ?>
							    			<div class="small-12 medium-6 columns">
							    				<a href="<?php echo get_permalink($product->ID); ?>">
							    					<?php echo $product->post_title; ?>
							    				</a>
							    			</div>
							    		<?php endforeach; ?>
							    	</div>

						    	<?php endif;
							    wp_reset_postdata(); ?>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>

				</div>
			</div>			

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
