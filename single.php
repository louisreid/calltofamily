<?php get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
			<?php the_post(); ?>

	        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php /* an h1 title */ ?>
			<h1 class="preview-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
			</div><!-- .entry-utility -->
				

	        <div id="nav-below" class="navigation">
					<?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?> <span style="color: #bbb;">&#8226;</span> <?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?>
			</div><!-- #nav-below -->     
	    
	
		</div>
	</div>
</div>
<?php get_footer(); ?>
