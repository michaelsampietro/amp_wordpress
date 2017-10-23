<?php while(amp_loop('start')): ?>
<div class="loop-post container">
	
    <?php amp_loop_title(); ?>
    <?php amp_loop_category(); ?>

	<div class="row">
		<?php amp_loop_image(); ?>
	</div>

    <?php amp_loop_excerpt(); ?>
    <?php amp_loop_date(); ?>
</div>
<hr class="divider" align="center"/>
<?php endwhile; amp_loop('end');  ?>
<?php amp_pagination(); ?>