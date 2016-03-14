<?php global $transport; ?>
</div>			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="footer-blocks">
					<div class="row">
						<div class="small-3 medium-3 large-3 columns">
							<?php if(is_active_sidebar('footer-widget-1')):?>
								<?php dynamic_sidebar('footer-widget-1'); ?>
							<?php endif; ?>
						</div>
						<div class="small-3 medium-3 large-3 columns">
							<?php if(is_active_sidebar('footer-widget-2')):?>
								<?php dynamic_sidebar('footer-widget-2'); ?>
							<?php endif; ?>
						</div>
						<div class="small-3 medium-3 large-3 columns">
							<?php if(is_active_sidebar('footer-widget-3')):?>
								<?php dynamic_sidebar('footer-widget-3'); ?>
							<?php endif; ?>
						</div>

						<div class="small-3 medium-3 large-3 columns">
							<div class="socials-block">
								<?php if($transport['social-facebook-url']): ?>
									<a href="<?php echo $transport['social-facebook-url']?>" class="socials facebook"></a>
								<?php endif; ?>

								<?php if($transport['social-youtube-url']): ?>
									<a href="<?php echo $transport['social-youtube-url']?>" class="socials youtube"></a>
								<?php endif; ?>

								<?php if($transport['social-linkedin-url']): ?>
									<a href="<?php echo $transport['social-linkedin-url']?>" class="socials linkedin"></a>
								<?php endif; ?>
							</div>
							<?php if($transport['footer-testing-url']): ?>
								<a href="<?php echo $transport['footer-testing-url']?>" class="transparent-btn testing">
									<?php _e('Заказать тестирование');?>
								</a>
							<?php endif; ?>
							
							<?php if(is_active_sidebar('newsletter-subscribe')):?>
								<div class="newsletter-wrap">
									<?php dynamic_sidebar('newsletter-subscribe'); ?>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div>

				<div class="copyright">
					<div class="row">
						<?php if($transport['footer-copyright']):?>
							<div class="copyright-text float-left">
								<?php echo $transport['footer-copyright']; ?>
							</div>
						<?php endif;?>
						<div class="float-right">
							<?php if($transport['footer-link1-text'] && $transport['footer-link1-url']):?>
								<a href="<?php echo $transport['footer-link1-url']; ?>" class="link1">
									<?php echo $transport['footer-link1-text']; ?>
								</a>
							<?php endif;?>
							<?php if($transport['footer-link2-text'] && $transport['footer-link2-url']):?>
								<a href="<?php echo $transport['footer-link2-url']; ?>" class="link2">
									<?php echo $transport['footer-link2-text']; ?>
								</a>
							<?php endif;?>
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
