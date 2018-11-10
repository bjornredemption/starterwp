<section id="icons" class="p150t p150b">
    <div class="container">
        <div class="p30b m20b border-bottom-secondary row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 align-self-center text-left t-secondary">
                <h2 class="entry-title m20b"><?php the_sub_field('title');?></h2>
                <?php the_sub_field('text');?>
            </div>
        </div>

        <div class="row text-center">
            <?php foreach (get_sub_field('icons') as $button) : ?>
            <div class="col-6 col-lg-3 m20b">
                <img class="m15b" src="<?=$button['icon']['url'];?>" alt="<?=$button['icon']['title'];?>">
                <div class="icon-text"><?=$button['text'];?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>