<section id="blocksoftwo" class="b-grey p150t p150b">
	<div class="container">
		<div class="row">
			<?php 
			    $count=1;
			    if( have_rows('block') ) :
			    while ( have_rows('block') ) : the_row(); 

			    	// vars
			    	$buttone = get_sub_field('button-wborder');	
			    	$butttwo = get_sub_field('button-wline');	

			    	?>

			    <div class="col-12 col-md-6 text-center m30b">
			    	<a data-fancybox href="<?php the_sub_field('image'); ?>" class="image has-image m50b" style="background-image: url(<?php the_sub_field('image'); ?>);"></a>
			    	<div class="content t-secondary m50b">
			    		<h3><?php the_sub_field('heading'); ?></h3>
			    		<p><?php the_sub_field('text'); ?></p>
			    	</div>
			    	<div class="cta">
			    		<a data-fancybox href="<?php echo $buttone['button-link']; ?>" class="ahref has-radius bordered"><?php echo $buttone['button-text']; ?></a>
			    		<br/>
			    		<a href="<?php echo $butttwo['button-link']; ?>" class="ahref line m25t"><?php echo $butttwo['button-text']; ?></a>
			    	</div>
			    </div>

			<?php $count++; endwhile; else : endif; ?>
		</div>
	</div>
</section>