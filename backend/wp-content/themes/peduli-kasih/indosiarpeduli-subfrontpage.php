<?php
/**
 *Template Name: indosiarpeduli-subfront
 *
 * @package OnePress
 */

get_header(); ?>
<div id="content" class="site-content generic">
	<main id="main" class="site-main" role="main">
		<div class="container">
				<?php if( has_post_thumbnail( $post->post_parent ) ) { ?>
					<a href="<?php echo get_permalink( $post->post_parent); ?>"><?php echo get_the_post_thumbnail( $post->post_parent, 'site_logo_med' ); ?></a>
				<?php } ?>
			<div class="row">
				<aside class="submenu col-xs-12 col-sm-3">
					<?php get_template_part('inc/template/content', 'submenu') ?>
				</aside>
				<div class="user-content <?php is_child(); ?>">
					<h3>Daftar Donatur</h3>
					<table class="table">
					    <thead>
					        <tr>
					            <th>Nama</th>
					            <th>Kota</th>
					            <th>Donasi</th>
					        </tr>
					    </thead>
					    <tbody id="donatur-data">
					    </tbody>
					</table>
				</div>

			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>