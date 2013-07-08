<?php get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
				<?php if ( have_posts() ) : ?>

	                <h1 class="title single-header"><?php _e( 'Search Results for: ', 'hbd-theme' ); ?><span><?php the_search_query(); ?></span></h1>


				<?php while ( have_posts() ) : the_post() ?>

	                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="preview-header">
									<h1 class="title search-header">
										<a class="no-underline" href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h1>
								</div>

				<?php if ( $post->post_type == 'post' ) { ?>
								<h6 class="meta">
									by <a class="meta-link no-underline" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a>
									on <?php the_time( get_option( 'date_format' ) ); ?>
					            </h6>
				<?php } ?>

			                    <div class="content preview-content">
								<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  ); ?>
								<a class="continue" href="<?php the_permalink(); ?>">Continue Reading</a>
			                    </div>

	                </div>

				<?php endwhile; ?>

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				                    <?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?>
				                    <?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?>
				<?php } ?>            

				<?php else : ?>

				                <div id="post-0" class="post no-results not-found">
				                    <h2 class="entry-title"><?php _e( 'Nothing Found', 'hbd-theme' ) ?></h2>
			                        <h6 class="meta"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'hbd-theme' ); ?></h6>
				                </div>

				<?php endif; ?>           
	
		</div>
	</div>
</div>
<?php get_footer(); ?>
