<div class="item-list article clearfix col-xs-6">
	<div class="item-list-name">
		<p class="__bold"><?php the_title(); ?></p>
	</div>
	<div class="item-list-text">
		<?php the_excerpt(); ?>
	</div>
	<div class="item-list-btn __right">
		<a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Baca</button></a>
	</div>
</div>
