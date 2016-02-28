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
						<a href="<?php echo site_url().'/kita-peduli'; ?>">
							<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/kitapeduli_logo.png'; ?>" alt="program - kita peduli">
						</a>
					</div>
					<div class="program-list program-list-pedulikasih col-xs-6 col-sm-4 disabled">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikasih_logo_lowopacity.png'; ?>" alt="program - peduli kasih">
					</div>
					<div class="program-list program-list-pedulikomunitas <?php frontPage_ismobile() ?> disabled">
						<img class="img-responsive center-block" src="<?php echo get_stylesheet_directory_uri().'/inc/images/pedulikomunitas_logo_lowopacity.png'; ?>" alt="program - peduli komunitas">
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
