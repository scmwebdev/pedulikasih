<?php
/**
 *Template Name: indosiarpeduli-generic
 *
 * @package OnePress
 */

get_header(); ?>
<div id="content" class="site-content generic">
	<main id="main" class="site-main" role="main">
		<div class="container">

			<?php the_post_thumbnail('site_logo_med'); ?>
			<div class="row">
				<aside class="submenu col-xs-12 col-sm-3">
					<?php get_template_part('inc/template/content', 'submenu') ?>
				</aside>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>