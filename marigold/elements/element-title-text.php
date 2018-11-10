<section id="title-text" class="b-primary t-secondary p150t">
    <div class="container">
        <div class="row justify-content-center p150b">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 align-self-center text-left">
                <h2 class="entry-title m15b"><?php the_sub_field('title');?></h2>
                <?php the_sub_field('text');?>
            </div>
            <div class="col-12 buttons text-center">
            	<?php foreach (get_sub_field('buttons') as $button) : ?>
            		<a class="ahref has-radius secondary m30r m50t" target="_blank" href="<?=$button['link'];?>"><?=$button['text'];?></a>
            	<?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="arc halfa fbottom">
</section>