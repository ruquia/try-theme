<?php
/*
Template Name: Left Sidebar
*/

	get_header();

?>


<div class="container">
	<div class="row">

		<div class="col-md-3">
			<?php
				get_sidebar();
			?>
		</div>
		<div class="col-md-8 col-md-offset-1">

			<?php
				if(have_posts()){
					while(have_posts()){
						the_post();
						get_template_part('content-templates/page','');
					}
				} else{
					_e('sorry couldnt find that page for you','try');
				}
			?>

		</div>

	

<?php

	get_footer();
?>
