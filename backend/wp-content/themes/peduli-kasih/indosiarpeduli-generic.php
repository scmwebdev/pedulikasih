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
				<?php if( has_post_thumbnail( $post->post_parent ) ) { ?>
					<a href="<?php echo get_permalink( $post->post_parent); ?>"><?php echo get_the_post_thumbnail( $post->post_parent, 'site_logo_med' ); ?></a>
				<?php } ?>
			<div class="row">
				<aside class="submenu col-xs-12 col-sm-3">
					<?php echo wpb_list_child_pages(); ?>
				</aside>
				<div class="user-content col-xs-12 col-sm-9">
					<?php  
						global $post;
						
						if ( is_page() && $post->post_parent ) { ?>
							<?php $getParentLink = get_permalink( $post->post_parent ); ?>
							<h1><?php the_title(); ?></h1>
							<div class="__spacepad">
								<?php the_content(); ?>
							</div>
					<?php } ?>
				</div>

			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>