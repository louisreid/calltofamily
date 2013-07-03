<?php get_header(); ?>
<div role="main">
	<div class="row-fluid">
		<div class="span12">
			<?php the_post(); ?>

	        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="single-header">
				<h1 class="title">
					<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
				<h2 class="meta">
					by <a class="meta-link" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'hbd-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a>
					on <?php the_time( get_option( 'date_format' ) ); ?>
	            </h2>
			</div>
			
			<div class="content single-content">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
			</div>

			<div class="row-fluid">
				<div class="span12 line line-green"></div>
			</div>

	        <div class="nav-below">
					<?php previous_post_link( '%link', '<span class="meta">go back to</span> &#8220;%title&#8221;' ) ?> <span style="color: #bbb;"> &#8226; </span> <?php next_post_link( '%link', '<span class="meta">go on to</span> &#8220;%title&#8221;' ) ?>
			</div><!-- #nav-below -->     
	
		</div>
	</div>
</div>
<?php get_footer(); ?>
