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
					<div class="program-list program-list-kitapeduli col-xs-6 col-sm-4">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/kitapeduli_logo.png'; ?>" alt="program - kita peduli">
					</div>
					<div class="program-list program-list-pedulikasih col-xs-6 col-sm-4">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikasih_logo.png'; ?>" alt="program - peduli kasih">
					</div>

					<?php if(wp_is_mobile()) { ?>
					<div class="program-list program-list-pedulikomunitas">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikomunitas_logo.png'; ?>" alt="program - peduli komunitas">
					</div>
					<?php } else { ?>
					<div class="program-list program-list-pedulikomunitas col-xs-6 col-sm-4">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikomunitas_logo.png'; ?>" alt="program - peduli komunitas">
					</div>
					<?php } ?>
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
