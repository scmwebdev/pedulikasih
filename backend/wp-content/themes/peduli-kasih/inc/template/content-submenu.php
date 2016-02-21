<!-- <ul class="__nodot"> -->
	<!-- <li class="">
		<a href="<?php echo get_permalink( $post->post_parent ).'sejarah'; ?>" title="">Sejarah</a>
	</li>
	<li class="">
		<a href="" title="">Kegiatan</a>
	</li>
	<li class="">
		<a href="" title="">Donatur</a>
	</li>
	<li class="">
		<a href="" title="">Laporan Audit</a>
	</li>
	<li class="">
		<a href="" title="">Laporan Tahunan</a>
	</li>
	<li class="">
		<a href="" title="">Kontak</a>
	</li> -->
<!-- </ul> -->
<?php //wpb_list_child_pages(); ?>

<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
        <div id="parent-<?php the_ID(); ?>" class="parent-page">
            <p class="lead title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
        </div>
    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>