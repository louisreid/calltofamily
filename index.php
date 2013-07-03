<?php get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
		<?php /* Top post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

		<?php } ?>
		
		<?php /* The Loop — with comments! */ ?>
		<?php while ( have_posts() ) : the_post() ?>
	        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="preview-header">
					<h1 class="title">
						<a class="no-underline" href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>"><?php the_title(); ?></a>
					</h1>
				</div>
	            <div class="content preview-content">
			      	<?php the_excerpt(); ?> 
					<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
	                <span class="meta-prep meta-prep-author"><?php _e('by ', 'hbd-theme'); ?></span>
	                <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
	            </div><!-- .entry-content -->
	        </div><!-- #post-<?php the_ID(); ?> -->
			<div class="row-fluid">
				<div class="span12 line line-blue"></div>
			</div>
		<?php endwhile; ?>
		
		<?php /* Bottom post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
            <div id="nav-below" class="navigation">
                    <?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?> <span style="color: #bbb;">&#8226;</span> <?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?>
            </div><!-- #nav-below -->
		<?php } ?>
	
		</div>
	</div>
</div>
<?php get_footer(); ?>
