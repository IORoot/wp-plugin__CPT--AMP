<?php 

include( __DIR__ . '/template-parts/amp_header.php');

while ( have_posts() ) :

	the_post();

	// $content = apply_filters('cpt_amp_transforms', $post->post_content);
	$content = the_content();
	$meta 	 = get_post_meta($post->ID);
	$image   = get_the_post_thumbnail_url($post);

	// -------------------------- TEMPLATE START ------------------------------
	
		echo $content;

	// -------------------------- TEMPLATE END --------------------------------


endwhile;

include( __DIR__ . '/template-parts/amp_footer.php');