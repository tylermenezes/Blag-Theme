<?php
	$args = array(
		'numberposts' => '1',
		'orderby' => 'post_date',
		'order' => 'desc'
		);
	$posts = wp_get_recent_posts( $args );
	$url = get_permalink($posts[0]->id);
	header("Location: $url", TRUE, 307);