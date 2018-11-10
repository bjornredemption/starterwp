<?php get_header();?>

<section id="hero" class="home">
	<div class="banners has-slider-noarrows">
	<?php 

	$images = get_field('home-gallery');
	if( $images ): ?>

		<?php foreach( $images as $image ): ?>
			
		<div class="has-image" style="background-image: url(<?php echo $image['url']; ?>);">
			<div class="overlay has-overlay"></div>
			<div class="container d-flex h-100">
				<div class="row justify-content-center align-self-end">
					<div class="col text-center">
						<h1 class="t-white"><?php echo $image['caption']; ?></h1>
						<a href="#intro-video" class="ahref solid has-radius white">discover more</a>
					</div>
					
				</div> 
			</div>
		</div>
		
		<?php endforeach; ?>

	<?php endif; ?>
	</div>
</section>

<section id="intro" class="home b-primary t-secondary p50b">
	<div class="arc threes ftop"></div>
	<div class="container p150t">
		<div class="row justify-content-center p100b">
			<div class="col-10 col-md-8 col-lg-6 text-left">
				<p>Discover your future at Marigold – Melbourne’s most beautiful new address.</p>
				<p>Encompassing 900 lots carefully masterplanned across 60 hectares, Marigold is a perfectly timed opportunity for families living in untouched Tarneit North.</p>
				<p>Experience life’s everyday pleasures at your new home, brought to you by leading developer Growland.</p>
			</div>
		</div>
		<div id="intro-video" class="row justify-content-center h-100 p100b">
			<div class="col-12 video text-center has-image" style="background-image: url(/wp-content/uploads/2018/08/home-video.jpg);">
				<div class="overlay has-overlay"></div>
				<div class="absolute-xy">
					<a href="https://player.vimeo.com/video/294696025" data-fancybox class="ahref solid has-radius secondary">Watch video</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>