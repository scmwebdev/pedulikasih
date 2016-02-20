<?php
/**
 *Template Name: indosiarpeduli-frontpage
 *
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content frontpage">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="program clearfix">
					<div class="program-list col-xs-4">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/kitapeduli_logo.png'; ?>" alt="">
					</div>
					<div class="program-list col-xs-4">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikasih_logo.png'; ?>" alt="">
					</div>
					<div class="program-list col-xs-4">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikomunitas_logo.png'; ?>" alt="">
					</div>
				</div>
				<div class="user-content __spacemar">
					<div class="user-content-title">
						<h1>Tentang Kami</h1>
					</div>
					<div class="user-content-post">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #content -->

<?php get_footer(); ?>
