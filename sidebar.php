 <!--  Dynamic sidebar -->
<div class="sidebar">
	<ul class="list_unstyled">
	<?php
		if(is_active_sidebar('blog-sidebar')){
			dynamic_sidebar('blog-sidebar');

		}
		
	
	?>
	</ul>
</div>

