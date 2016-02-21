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
				
					<!-- <div class="__right __spacepad">
						<a href="<?php echo $getParentLink ?>"><button type="button" class="btn btn-primary btn-back">back</button></a>
					</div> -->
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
	</main>
</div>
<?php get_footer(); ?>