<?php
/**
 *Template Name: indosiarpeduli-artikel
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
					  // set up or arguments for our custom query
					  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					  $parent_title = strtolower(get_the_title($post->post_parent));
					  $title = strtolower(get_the_title());
					  $query_args = array(
					    'post_type' => 'post',
					    'category_name' => $title.'+'.$parent_title,
					    'posts_per_page' => 5,
					    'paged' => $paged
					  );
					  // create a new instance of WP_Query
					  $the_query = new WP_Query( $query_args );
					?>

					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
					  <?php get_template_part( 'inc/template/content', 'kegiatan' ); ?>
					<?php endwhile; ?>

					<?php
				      if (function_exists(custom_pagination)) {
				        custom_pagination($the_query->max_num_pages,"",$paged);
				      } else {
				      	echo 'function does not exist!';
				      }
				    ?>


					<?php else: ?>
					  <article>
					    <h1>Sorry...</h1>
					    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					  </article>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>