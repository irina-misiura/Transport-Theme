<!-- sidebar -->
<aside class="sidebar right-sidebar" role="complementary">

	<div class="sidebar-widget">
		<?php 
		if(function_exists('dynamic_sidebar') && is_active_sidebar('right-sidebar')):
			dynamic_sidebar('right-sidebar');
		endif; 
		?>
	</div>

</aside>
<!-- /sidebar -->
