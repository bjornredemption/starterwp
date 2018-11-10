<?php
/** 
 * Display the page content for post type "page".
 * This will be use in full page display.
 * 
 * @package marigold
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?> 
<article id="post-<?php the_ID(); ?>" class="subpage">
<?php if(is_page('location')):?>

    <section id="title-text" class="b-primary t-secondary p150t">
        <div class="container">
            <div class="row justify-content-center p150b">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 align-self-center text-left">
                    <h2 class="entry-title m15b">An enviable location and <br>everyday convenience</h2>
                    Marigold’s position at the heart of rapidly growing Tarneit North ensures a convenient lifestyle close to essential local amenities and Melbourne’s CBD, which is just 25km away.
                </div>
                <div class="col-12 buttons text-center"></div>
            </div>
        </div>
        <div class="arc halfa fbottom"></div>
    </section>

    <div id="location-map" class="b-grey">
        <div class="container p150t p150b">
            <div class="row justify-content-center">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Location map</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Aerial map</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-location-tab">
                        
                        <?php $interactivemap = get_field('interactivemap'); ?>
                        <section class="layout interactive p80t">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8 order-2 order-lg-1">
                                    <img id="map-image" src="<?=$interactivemap[0]['map_info']['map_image'];?>" alt="">
                                </div>
                                <div class="map-nav-wrap col-12 col-lg-4 line-primary-top line-primary-bottom p40b order-1 order-lg-2">
                                        <div class="row map-nav p20t">
                                            <?php
                                            $count = 0;
                                            foreach ($interactivemap as $map) :?>
                                            <div class="map-nav-item col-4 col-sm-4 col-md-2 col-lg-6 color-<?=$count;?> <?=($count == 0)?'active':'';?> m25b" data-mapimg="<?=$map['map_info']['map_image'];?>" data-id="map-list-<?=$count;?>">
                                                <img src="<?=$map['map_info']['icon'];?>" alt="">
                                                <div class="m5t"><?=$map['map_info']['heading'];?></div>
                                            </div>
                                            <?php 
                                            $count++;
                                            endforeach; ?>
                                        </div>
                                        <div class="row map-list line-primary-top p20t">
                                            <?php
                                            $count = 0;
                                            foreach ($interactivemap as $map) :?>
                                                <ul class="map-list-item map-list-<?=$count;?> <?=($count == 0)?'':'hide';?> color-<?=$count;?>">
                                                    <?php
                                                    foreach ($map['list'] as $maplist) : ?>
                                                        <li>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="map-list-icon">
                                                                            <?php if($maplist['number']): ?>
                                                                            <div class="circle text-center"><?=$maplist['number'];?></div>
                                                                            <?php else: ?>
                                                                             <img src="<?=$maplist['icon'];?>" alt="">
                                                                            <?php endif;?>
                                                                        </td>
                                                                        <td class="map-list-text font-italic"><?=$maplist['text'];?></td>
                                                                    </tr>
                                                                    </tbody>
                                                            </table>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php 
                                            $count++;
                                            endforeach; ?>
                                            
                                        </div>
                                        <div class="map-list-des">(mins)—Estimated  drive  time</div>
                                        
                                </div>
                                <div class="col-12 m50t order-3">
                                    <div class="text-center">
                                        <a id="location-map-download" href="<?=get_field('download_image');?>" class="ahref has-radius bordered" target="_blank">Download map</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        </section>

                    </div>


                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-aerial-tab">
                        <div class="col-12 text-center m30b p80t">
                            <a id="aeruak-map-img" data-fancybox="" href="<?=get_field('aerial_map_image');?>" class="image has-image m50b" style="background-image: url(<?=get_field('aerial_map_image');?>);"></a>
                            <div class="cta">
                                <a data="" data-fancybox="" href="<?=get_field('aerial_map_image');?>" class="ahref has-radius bordered m30r">Enlarge</a>
                                <a href="<?=get_field('aerial_map_image');?>" class="ahref has-radius bordered" target="_blank">Download Aerial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery('.map-nav-item').click(function(){
            jQuery('.map-list-item').addClass('hide');
            jQuery('.map-nav-item').removeClass('active');
            jQuery(this).addClass('active');
            console.log(jQuery(this).data('id'));
            jQuery('.'+jQuery(this).data('id')+'').removeClass('hide');
            jQuery('#map-image').attr('src',jQuery(this).data('mapimg'));
            //jQuery('#location-map-download').attr('href',jQuery(this).data('mapimg'))
        });
    </script>
    <?php endif; ?>


    <?php if( have_rows('layouts') ):
        // loop through the rows of data
        while ( have_rows('layouts') ) : the_row();

            if( get_row_layout() == 'title_text_carousel' ):

                get_template_part( 'elements/element', 'title-text-carousel' );

            elseif( get_row_layout() == 'title_text' ):

                get_template_part( 'elements/element', 'title-text' );

            elseif( get_row_layout() == 'blocksoftwo' ):

                get_template_part( 'elements/element', 'blocksoftwo' );

            elseif( get_row_layout() == 'rowsofthree' ):

                get_template_part( 'elements/element', 'rowsofthree' );

            elseif( get_row_layout() == 'text_image_each_side' ):

                get_template_part( 'elements/element', 'text_image_lr' );

            elseif( get_row_layout() == 'icons' ):

                get_template_part( 'elements/element', 'icons' );
                
            elseif( get_row_layout() == 'dashbord' ):

                get_template_part( 'elements/element', 'dashbord' );     

            elseif( get_row_layout() == 'map' ):

                get_template_part( 'elements/element', 'map' );     

            endif;
            
        endwhile;

    else :
    endif;


    if(is_page('Contact')){
        get_template_part( 'content', 'contact' );
    } ?>

    <?php if (is_page('News')):?>
    <section id="news" class="b-grey t-secondary p150t p150b">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php the_content(); ?> 
                    <div class="clearfix"></div>
                    <?php
                    /**
                     * This wp_link_pages option adapt to use bootstrap pagination style.
                     */
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic4') . ' <ul class="pagination">',
                        'after'  => '</ul></div>',
                        'separator' => ''
                    ));
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

</article><!-- #post-## -->
<?php unset($Bsb4Design); ?> 