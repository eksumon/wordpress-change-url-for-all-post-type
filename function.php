<?php

add_filter( 'register_post_type_args', 'ek_post_type_args', 20, 2 );
function ek_post_type_args( $args, $post_type ) {
	if ( $post_type == "post" ) {  
		$args['rewrite'] = array(
			'slug' => 'blog',
		);
	}

  	return $args;
}

add_filter('pre_post_link', 'ek_prepend_post_link', 10, 3);
function ek_prepend_post_link($permalink, $post) {   
	if (get_post_type($post) == 'post') {
		return "/blog" . $permalink;
	}
	return $permalink;
}

?>
