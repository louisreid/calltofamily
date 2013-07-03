
<?php get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
			<?php the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="title single-header"><?php the_title(); ?></h1>
                <div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                </div><!-- .entry-content -->
            </div><!-- #post-<?php the_ID(); ?> -->           
		</div>
	</div>
</div>
<?php get_footer(); ?>
