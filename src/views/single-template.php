<?php 

get_header();

while ( have_posts() ) :

	the_post();

	// $content = apply_filters('cpt_amp_transforms', $post->post_content);
	$content = the_content();
	$meta 	 = get_post_meta($post->ID);
	$image   = get_the_post_thumbnail_url($post);

	// -------------------------- TEMPLATE START ------------------------------
	?>

	<article class="bg-white text-night">

		<div class="flex py-3"> 

			<div class="w-full overflow-hidden pb-40">

				<?php echo $content;  ?>   

			</div>

		</div>

	</article>


	<?php
	// -------------------------- TEMPLATE END --------------------------------


endwhile;

get_footer();