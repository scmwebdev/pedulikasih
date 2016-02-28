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
					<?php echo wpb_list_child_pages(); ?>
				</aside>
				<div class="user-content col-xs-12 col-sm-9">
					<h1>Ikhtisar</h1>
					<hr>
					<div class="__spacepad __spacemar">
						<h3>Artikel Terbaru</h3>
						<div class="row">
						<?php
							// set up or arguments for our custom query
							$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
							$parent_title = strtolower(get_the_title($post->post_parent));
							$title = strtolower(get_the_title());
							$query_args = array(
								'post_type' => 'post',
								'category_name' => $title.'+kegiatan',
								'posts_per_page' => 2,
								'paged' => $paged
							);
							// create a new instance of WP_Query
							$the_query = new WP_Query( $query_args );
						?>

						<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
						  <?php get_template_part( 'inc/template/partial', 'kegiatan' ); ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else: ?>
						    <h1>Sorry...</h1>
						    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
						</div>
					</div>
					<div class="__spacepad __spacemar">
						<h3>Donatur</h3>
						<div class="table-responsive">

							<table class="table table-hover table-bordered">
							    <thead>
							        <tr>
							            <th>Nama</th>
							            <th>Kota</th>
							            <th>Donasi</th>
							            <th>Tanggal</th>
							        </tr>
							    </thead>
							    <tbody>
									<?php
									  // set up or arguments for our custom query
									  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
									  $parent_title = strtolower(get_the_title($post->post_parent));
									  $title = strtolower(get_the_title());
									  $query_args = array(
									    'post_type' => 'post',
									    'category_name' => $title.'+donatur',
									    'posts_per_page' => 10,
									    'paged' => $paged
									  );
									  // create a new instance of WP_Query
									  $the_query = new WP_Query( $query_args );
									?>

									<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
									  <?php 
									  	get_template_part( 'inc/template/content', 'donation' ); 
									  	// echo the_title().the_content().the_excerpt();
									  ?>
									<?php endwhile; ?>
									<?php else: ?>
									  <article>
									    <h1>Sorry...</h1>
									    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
									  </article>
									<?php endif; ?>
							    </tbody>
							</table>
							<div class="__right">
								<a href="<?php echo current_page_url() .'donatur/' ?>"><button type="button" class="btn btn-primary">Pergi ke page</button></a>	
							</div>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>