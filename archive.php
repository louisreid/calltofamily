<?php
/*
Template Name: Archive
*/
get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
			<?php the_post(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">

			<?php wp_list_pages( 'title_li=' ); ?>

			<?php the_content(); ?>
			</div><!-- .entry-content -->

			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

