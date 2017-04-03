<?php

function try_custom_excerpt_length($length){
	return 60;
}

add_filter('excerpt_length','try_custom_excerpt_length');


function try_excerpt_more($more){
	return sprintf('<br /> <a class="read-more btn btn-primary" href ="%1$s">%2$s</a>',
		get_permalink( get_the_ID()),
		__( 'Read More', 'try' )
	);
}
add_filter('excerpt_more', 'try_excerpt_more');

