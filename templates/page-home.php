<?php 
/*
* Template Name: Главная страница
*/

get_header(); 
global $transport;

?>
	<section class="container-row section">
		<?php echo add_slider_images(); ?>
	</section>

	<main role="main">
		<section class="section">
			<div class="">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<div class="gray-block work-way-block">
					<div class="row">
						<h3 class="small-12 columns section-title"><?php _e('Направления Работы'); ?></h3>
						<div class="small-12 medium-6 columns img-block">
							<?php if($transport['home-left-block-image']['url']): ?>
								<?php 
								$attachmentId = get_attachment_id_from_src($transport['home-left-block-image']['url']);
								$src = wp_get_attachment_image_src($attachmentId, 'large');
								?>
								<div class="img-mask"></div>
								<div class="img" style="background-image: url(<?php echo $src[0]; ?>);" class="work-way-img"></div>
							<?php endif;?>
							<?php if($transport['home-left-block-title']): ?>
								<div class="img-block-text">
									<h3><?php echo $transport['home-left-block-title']; ?></h3>
									<?php if($transport['home-left-block-url']): ?>
										<a href="<?php echo $transport['home-left-block-url']; ?>" class="btn"><?php _e('Подробнее') ?></a>
									<?php else: ?>
										<?php echo $transport['home-left-block-title']; ?>
									<?php endif; ?>
								</div>
							<?php endif;?>
						</div>
						<div class="small-12 medium-6 columns img-block">
							<?php if($transport['home-right-block-image']['url']):?>
								<?php 
								$attachmentId = get_attachment_id_from_src($transport['home-right-block-image']['url']);
								$src = wp_get_attachment_image_src($attachmentId, 'large');
								?>
								<div class="img-mask"></div>
								<div class="img" style="background-image: url(<?php echo $src[0]; ?>);" class="work-way-img"></div>
								
							<?php endif;?>
							<?php if($transport['home-right-block-title']): ?>
								<div class="img-block-text">
									<h3><?php echo $transport['home-right-block-title']; ?></h3>
									<?php if($transport['home-right-block-url']): ?>
										<a href="<?php echo $transport['home-right-block-url']; ?>" class="btn"><?php _e('Подробнее') ?></a>
									<?php else: ?>
										<?php echo $transport['home-right-block-title']; ?>
									<?php endif; ?>
								</div>
							<?php endif;?>
						</div>
					</div>

				</div>
				<div class="bgimage-block our-progress-block">
					<div class="row">
						<h3 class="small-12 columns section-title"><?php _e('Наши достижения'); ?></h3>
						<div class="container">
							<div class="small-12 medium-4 large-1-5 columns progress-block">
								<?php if($transport['home-block1-title']):?>
									<h3 class="home-block-title"><?php echo $transport['home-block1-title']; ?></h3>
								<?php endif;?>
								<?php if($transport['home-block1-description']): ?>
									<div class="home-block-description">
										<?php echo apply_filters('the_content', $transport['home-block1-description']);?>
									</div>
								<?php endif;?>
							</div>
							<div class="small-12 medium-4 large-1-5 columns progress-block">
								<?php if($transport['home-block2-title']):?>
									<h3 class="home-block-title"><?php echo $transport['home-block2-title']; ?></h3>
								<?php endif;?>
								<?php if($transport['home-block2-description']): ?>
									<div class="home-block-description">
										<?php echo apply_filters('the_content', $transport['home-block2-description']);?>
									</div>
								<?php endif;?>
							</div>
							<div class="small-12 medium-4 large-1-5 columns progress-block">
								<?php if($transport['home-block3-title']):?>
									<h3 class="home-block-title"><?php echo $transport['home-block3-title']; ?></h3>
								<?php endif;?>
								<?php if($transport['home-block3-description']): ?>
									<div class="home-block-description">
										<?php echo apply_filters('the_content', $transport['home-block3-description']);?>
									</div>
								<?php endif;?>
							</div>
							<div class="small-12 medium-4 large-1-5 columns progress-block">
								<?php if($transport['home-block4-title']):?>
									<h3 class="home-block-title"><?php echo $transport['home-block4-title']; ?></h3>
								<?php endif;?>
								<?php if($transport['home-block4-description']): ?>
									<div class="home-block-description">
										<?php echo apply_filters('the_content', $transport['home-block4-description']);?>
									</div>
								<?php endif;?>
							</div>
							<div class="small-12 medium-4 large-1-5 columns progress-block">
								<?php if($transport['home-block5-title']):?>
									<h3 class="home-block-title"><?php echo $transport['home-block5-title']; ?></h3>
								<?php endif;?>
								<?php if($transport['home-block5-description']): ?>
									<div class="home-block-description">
										<?php echo apply_filters('the_content', $transport['home-block5-description']);?>
									</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
				<div class="white-block news-block">
					<div class="row">
						<div class="small-12 medium-6 columns">
							<h3 class="section-title"><?php _e('Новости GPS', 'transport'); ?></h3>
							<?php
							global $post, $wp_query;
							$args = array(
								'posts_per_page'   => 3,
								'category_name'    => 'news-gps',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_status'      => 'publish'
							);
							$query = new WP_Query( $args ); 
							if ( $query->have_posts() ):
								while (  $query->have_posts() ) :
									$query->the_post();
								?>
									<div class="row news-item">
										<div class="small-12 medium-3 columns image">
											<?php if(has_post_thumbnail()): ?>
												<?php the_post_thumbnail('blog-widget'); ?>
											<?php endif; ?>
										</div>
										<div class="small-12 medium-9 columns post-data">
											<?php/*<div class="post-date"><?php the_time('j F Y'); ?></div>*/?>
											<div class="post-title"><h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4></div>
											<div class="post-text"><?php transport_excerpt('transport_blog_widget'); ?></div>
										</div>
									</div>
								<?php
								endwhile;
							endif; 
							wp_reset_query();
							?>
							<div><a href="<?php echo get_category_link(get_cat_ID('Новости GPS')); ?>" class="btn float-right"><?php _e('Все Новости', 'transport'); ?></a></div>
						</div>
						<div class="small-12 medium-6 columns">
						<h3 class="section-title"><?php _e('Новости Компании', 'transport'); ?></h3>
							<?php
							$args = array(
								'posts_per_page'   => 3,
								'category_name'    => 'news-company',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'post_status'      => 'publish'
							);
							$query = new WP_Query( $args ); 
							if ( $query->have_posts() ):
								while (  $query->have_posts() ) :
									$query->the_post();
								?>
									<div class="row news-item">
										<div class="small-12 medium-3 columns image">
											<?php if(has_post_thumbnail()): ?>
												<?php the_post_thumbnail('blog-widget'); ?>
											<?php endif; ?>
										</div>
										<div class="small-12 medium-9 columns post-data">
											<?php/*<div class="post-date"><?php the_time('j F Y'); ?></div>*/?>
											<div class="post-title"><h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4></div>
											<div class="post-text"><?php transport_excerpt('transport_blog_widget'); ?></div>
										</div>
									</div>
								<?php
								endwhile;
							endif;  
							wp_reset_query();
							?>
							<div><a href="<?php echo get_category_link(get_cat_ID('Новости Компании')); ?>" class="btn float-right"><?php _e('Все Новости', 'transport'); ?></a></div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php echo add_companies_slider(); ?>
				</div>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Извините, нет ничего для отображения.', 'transport' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</div>

		</section>
	</main>


<?php get_footer(); ?>
