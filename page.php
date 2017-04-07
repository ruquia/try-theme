<?php

	get_header();
	

	if(have_posts()){
		while(have_posts()){
			the_post();
			if(has_post_thumbnail()){
				get_template_part('content-templates/page','with-featured-image');
			} else{
			get_template_part('content-templates/page','');
			}
		}
	} else{
		_e('sorry couldnt find that page for you','try');
	}

	get_footer();
?>
