<div class="item-list clearfix row">
	<div class="item-list-name col-xs-12">
		<h3><?php the_title(); ?></h3>

	</div>
	<div class="item-list-img col-xs-12 col-sm-2">
		<?php the_post_thumbnail('square_small'); ?>
	</div>
	<div class="item-list-text col-xs-12 col-sm-10">
		<?php the_date('Y-m-d', '<span class="item-list-date "><small><i>', '</i></small></span>'); ?>
		<?php the_excerpt(); ?>
	</div>

	<div class="item-list-btn __right">
		<a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Baca selanjutnya</button></a>
	</div>
</div>
<div class="__spacepad __spacemar">
	<hr>
</div>
