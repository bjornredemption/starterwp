	<?php 
		// vars
    	$left = get_sub_field('rowleft');	
    	$right = get_sub_field('rowright');	
	;?>

<section id="rowofthree" class="b-primary t-secondary">
	<div class="arc twos ftop"></div>
	<div class="p200t p200b">
		<div class="container">
			<div class="row align-items-center m80b">
				<div class="col-6">
					<div class="has-slider-noarrows has-slider-noarrows-1">
						<?php 
						$images = $left['carousel-top'];
						if( $images ): ?>

							<?php foreach( $images as $image ): ?>

							<div class="has-image" style="background-image: url(<?php echo $image['url']; ?>);">
							</div>

							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-6 has-content">
					<div class="arc twos ftop"></div>
					<p><?php echo $right['text'];?></p>
				</div>
			</div>
			<div class="row align-items-center m80b">
				<div class="col-6">
					<div class="has-slider-noarrows has-slider-noarrows-2">
						<?php 
						$images = $left['carousel-mid'];
						if( $images ): ?>

							<?php foreach( $images as $image ): ?>

							<div class="has-image" style="background-image: url(<?php echo $image['url']; ?>);">
							</div>

							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-6">
					<div class="has-slider-noarrows has-slider-noarrows-3">
						<?php 
						$images = $right['carousel-mid'];
						if( $images ): ?>

							<?php foreach( $images as $image ): ?>

							<div class="has-image" style="background-image: url(<?php echo $image['url']; ?>);">
							</div>

							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="row align-items-center">
				<div class="col-6 has-content">
					<div class="arc twos fbottom"></div>
					<p><?php echo $left['text'];?></p>
				</div>
				<div class="col-6">
					<div class="has-slider-noarrows has-slider-noarrows-4">
						<?php 
						$images = $right['carousel-bottom'];
						if( $images ): ?>

							<?php foreach( $images as $image ): ?>

							<div class="has-image" style="background-image: url(<?php echo $image['url']; ?>);">
							</div>

							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>