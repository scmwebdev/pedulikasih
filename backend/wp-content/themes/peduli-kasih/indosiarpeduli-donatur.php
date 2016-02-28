<?php
/**
 *Template Name: indosiarpeduli-donatur
 *
 * @package OnePress
 */

get_header(); ?>
<div id="content" class="site-content donatur">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="">
					<?php if( has_post_thumbnail( $post->post_parent ) ) { ?>
						<a href="<?php echo get_permalink( $post->post_parent); ?>"><?php echo get_the_post_thumbnail( $post->post_parent, 'site_logo_med' ); ?></a>
					<?php } ?>
				
					<div class="row">
						<aside class="submenu col-xs-12 col-sm-3">
							<?php echo wpb_list_child_pages(); ?>
						</aside>
						<div class="user-content col-xs-12 col-sm-9">
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
			</div>
	</main>
</div>
<?php get_footer(); ?>