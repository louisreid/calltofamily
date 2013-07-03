<?php
/*
Template Name: Archive
*/
get_header(); ?>
	<?php the_post(); ?>
	<h1 class="title cat-header"><?php the_title(); ?></h1>
	
	<ul class="cat-desc">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
<?php get_footer(); ?>

