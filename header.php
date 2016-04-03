<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<?php global $transport; ?>

		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				<div class="off-canvas position-right" id="offCanvas" data-off-canvas data-position="right">

					<div class="search-wrap">
						<?php get_template_part('searchform'); ?>
					</div>
					<div class="mobile-menu">
						<?php transport_nav(); ?>
					</div>
				</div>
				<!-- wrapper -->
				<div class="off-canvas-content wrapper" data-off-canvas-content>

					<!-- header -->
					<header class="header" role="banner">
						<div class="nav-wrap">
							<div class="row">

								<!-- logo -->
								<div class="logo">
									<a href="<?php echo home_url(); ?>">
										<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
										<?php if($transport['site-logo']['url']):?>
											<img src="<?php echo $transport['site-logo']['url']; ?>" alt="Logo" class="logo-img">
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo" class="logo-img">
										<?php endif; ?>
									</a>
								</div>
								<!-- /logo -->

								<div class="float-right show-for-large search-wrap">
									<?php get_template_part('searchform'); ?>
								</div>

								<div class="float-right hide-for-large">
									<button type="button" class="mobile-btn" data-toggle="offCanvas"><span class="dashicons dashicons-menu"></span></button>
								</div>
							</div>
							<div class="row show-for-large">
								<!-- nav -->
								<nav class="float-right nav" role="navigation">
									<?php transport_nav(); ?>
								</nav>
								<!-- /nav -->
							</div>
						</div>
					</header>
					<!-- /header -->
					<div class="container">
