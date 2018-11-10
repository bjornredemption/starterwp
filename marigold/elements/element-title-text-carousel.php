<section id="title-text-carousel" class="b-primary t-secondary p150b">
    <div class="container">
        <div class="row justify-content-center p150b">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 align-self-center text-left">
                <h2 class="entry-title m15b"><?php the_sub_field('title');?></h2>
                <?php the_sub_field('text');?>
            </div>
        </div>
        <div class="row justify-content-center has-slider">
            <div class="arc os ftop"></div>
            <div class="col has-slider-warrows">
                <?php 

                $images = get_sub_field('carousel');
                if( $images ): ?>

                    <?php foreach( $images as $image ): ?>
                    <div>
                        <div class="has-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                        <div class="has-description"><?php echo $image['description']; ?></div>
                        <div class="has-caption"><?php echo $image['caption']; ?></div>
                    </div>
                    
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>