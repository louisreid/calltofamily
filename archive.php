<?php
/*
Template Name: Archive
*/
get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-page" id="post-<?php the_ID(); ?>">

			<h2>Archives by Title:</h2>
			<ul>
			    <?php wp_get_archives('type=alpha');?>
			</ul>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

