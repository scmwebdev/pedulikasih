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
			<?php 

				/* grabs parent thumbnail (works for the parent itself)  	*/
				if( has_post_thumbnail( $post->post_parent ) ) { 
				  echo get_the_post_thumbnail( $post->post_parent, 'site_logo_med' );
				}
			?>
			<div class="row">
				<aside class="submenu col-xs-12 col-sm-3">
					<?php get_template_part('inc/template/content', 'submenu') ?>
				</aside>
				<div class="user-content <?php is_child(); ?>">
					<?php  
						global $post;
						
						if ( is_page() && $post->post_parent ) { ?>
							<?php $getParentLink = get_permalink( $post->post_parent ); ?>
							<h1><?php the_title(); ?></h1>
							<div class="__spacepad">
								<?php the_content(); ?>
							</div>
							<div class="__right __spacepad">
								<a href="<?php echo $getParentLink ?>"><button type="button" class="btn btn-primary btn-back">back</button></a>
							</div>
						<?php } else { 
							the_content();
						}
					?>

				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>