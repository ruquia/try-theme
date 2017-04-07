
<?php
	get_header();

	if(have_posts()){
		while(have_posts()){
			the_post();
			if (has_post_thumbnail()){
				get_template_part('content-templates/article','featured-image');
			}else{
			get_template_part('content-templates/article','');
			}
		}

	} else{
		_e('sorry couldnt find that post for you','try');
	}

	get_footer();
?>
