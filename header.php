<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta  -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- Google Analytics Here -->
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-41830426-2', 'calltofamily.co.uk');
			  ga('send', 'pageview');

			</script>
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<header role="banner">
			<div class="container-fluid full-width">
				<div class="row-fluid">
					<div class="span12 header-image">
						<a href="<?php bloginfo('url'); ?>"><span class="header-link"></span></a>
					</div>
				</div>
			</div>

			<div class="container-fluid content-width">
				<div class="row-fluid">
					<div class="span12 line line-red"></div>
				</div>
				<nav role="navigation">
					<div class="row-fluid">
						<div class="span8" >
							<?php
							    $category_writing_id = get_cat_ID( 'writing' );
							    $category_writing = get_category_link( $category_writing_id );
							    $category_music_id = get_cat_ID( 'music' );
							    $category_music = get_category_link( $category_music_id );
							?>
							<a href="<?php bloginfo('url'); ?>/about/" class="menu">ABOUT</a>
							<a href="<?php echo esc_url( $category_writing ); ?>" class="menu">WRITING</a>
							<a href="<?php echo esc_url( $category_music ); ?>" class="menu">MUSIC</a> 
							<a href="<?php bloginfo('url'); ?>/archive/" class="menu">ARCHIVE</a>
						</div>
						<div class="span4">
							<form action="<?php echo home_url( '/' ); ?>" method="get">
							    <fieldset>
										<input class="search" name="s" value="<?php the_search_query(); ?>" />
							    </fieldset>
							</form>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12 line line-orange"></div>
					</div>
				</nav>
			</div> <!-- end content-width !-->
		</header> <!-- end header -->
		<div class="container-fluid content-width">
