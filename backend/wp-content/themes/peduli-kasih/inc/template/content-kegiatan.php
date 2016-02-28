<div class="item-list article clearfix row">
	<div class="item-list-name col-xs-12">
		<h3><?php the_title(); ?></h3>
	</div>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="item-list-img col-xs-12 col-sm-3">
			<?php the_post_thumbnail('square_small'); ?>
		</div>
		<div class="item-list-text col-xs-12 col-sm-9">
			<?php the_excerpt(); ?>
		</div>
		<div class="item-list-btn __right">
			<a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Baca selanjutnya</button></a>
		</div>
	<?php } else { ?>
		<div class="item-list-text col-xs-12 col-sm-12">
			<?php the_content(); ?>
		</div>
		<div class="item-list-btn __right">
			<a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Baca selanjutnya</button></a>
		</div>
	<?php } ?>
</div>
<div class="__spacepad __spacemar">
	<hr>
</div>
