<?php
/**
 *Template Name: indosiarpeduli-page
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
					<?php  
						global $post;
						if ( is_page() && $post->post_parent ) { ?>
							<?php $getParentLink = get_permalink( $post->post_parent ); ?>

							<h1><?php the_title(); ?></h1>
							<div class="__spacepad">
								<?php 

									$parent_title = strtolower(get_the_title($post->post_parent));
									$title = strtolower(get_the_title());
									$query = new WP_Query( array( 'category_name' => $parent_title.'+'.$title ) ); //get 2 cat at the same time
									while ($query->have_posts()) : $query->the_post();
										get_template_part( 'inc/template/content', 'kegiatan' );
									endwhile;
								?>
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