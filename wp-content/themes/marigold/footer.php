<?php
/** 
 * The theme footer.
 * 
 * @package bootstrap-basic4
 */
?>
            </div><!--.site-content-->

            <section id="discover" class="home b-white t-secondary p150t p150b">
                <div class="arc twos ftop"></div>
                <div class="container">
                    <div class="row justify-content-center p50b">
                        <div class="col-8 text-center">
                            <h2>Discover more</h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                        $footer_posts = get_field('footer_discover','option');
                        $ID = get_the_ID();
                        shuffle( $footer_posts );
                        $count = 0;
                        foreach($footer_posts as $footer_post):
                            if(($footer_post['link'] != $ID) && $count < 3):
                        ?>
                            <div class="col col-12 col-md-4">
                                <a href="<?=get_permalink($footer_post['link']);?>">
                                    <div class="image has-image" style="background-image: url(<?=$footer_post['image'];?>")>
                                        <div class="arc ones fbottom arc-small"></div>
                                    </div>
                                    <div class="content m50t m50b row t-secondary">
                                        <h3><?=$footer_post['title'];?></h3>
                                        <p><?=$footer_post['text'];?></p>
                                    </div>
                                </a>
                            </div>
                        <?php
                            $count++;
                            endif;
                        endforeach; ?>
                        
                    </div>
                </div>
            </section>

            <?php get_template_part('elements/element','register'); ?>

            <footer class="t-secondary">
                <div class="arc threes ftop"></div>
                <div class="top p150t b-primary">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <div class="enquiries p30b">
                                    <div>Sales enquiries</div>
                                    <div><a class="ahref t-secondary" href="tel:1300888181">1300 888 181</a></div>
                                    <div><a class="ahref t-secondary" href="mailto:info@marigold.com.au">info@marigold.com.au</a></div>
                                </div>
                                <div class="office p30b">
                                    <div>Sales office</div>
                                    <div>1030 Dohertys Road Tarneit VIC 3029</div>
                                    <div>Opening Soon</div>
                                </div>
                                <div class="m15b">Follow Us</div>
                                <div class="smedia p80b">
                                    <a href="https://www.facebook.com/Marigold-by-Growland-446310415776994/" target="_blank" class="d-inline m10r"><svg class="svg-inline--fa fa-facebook fa-w-14 fa-2x" aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="#ff7673" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path></svg></a>

                                    <a href="https://www.instagram.com/growlandau/" target="_blank" class="d-inline"><svg class="svg-inline--fa fa-instagram fa-w-14 fa-2x" aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="#ff7673" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>

                                </div>
                                <div class="growland p50t p50b">
                                    <img src="/wp-content/uploads/2018/08/logo-gl@2x.png" draggable="false">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom b-primary p20t p20b">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <a class="has-endnote t-secondary" data-fancybox data-animation-duration="700" data-src="#policy-footer" href="javascript:;" data-touch="false">Privacy Policy</a> / <a class="has-endnote t-secondary" data-touch="false" data-fancybox data-animation-duration="700" data-src="#disclaimer-footer" href="javascript:;">Disclaimer</a> / <a class="has-endnote t-secondary" data-touch="false" data-fancybox data-animation-duration="700" data-src="#diligence-footer" href="javascript:;">Due Diligence</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </div><!--.page-container-->

        <div id="policy-footer" class="policy-popup" style="display: none;">
            <div class="container">
                <!-- <div class="policy-logo"><img src="<?=get_field('policy_logo','option');?>" alt=""></div> -->
                    <div class="policy-title"><h2><?=get_field('policy_title','option');?></h2></div>
                    <?php if(get_field('policy_subtitle','option')):?>
                    <div class="policy-subtitle"><?=get_field('policy_subtitle','option');?></div>
                    <?php endif;?>
                    <div class="policy-body" class="p30t">
                    <?php the_field('policy_content', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
                                
        <div style="display: none">
            <div id="disclaimer-footer" class="policy-popup">
                <div class="container">
                    <!-- <div class="policy-logo"><img src="<?=get_field('policy_logo','option');?>" alt=""></div> -->
                    <div class="policy-title"><h2><?=get_field('disclaimer_title','option');?></h2></div>
                    <?php if(get_field('disclaimer_title','option')):?>
                    <div class="policy-subtitle"><?=get_field('disclaimer_subtitle','option');?></div>
                    <?php endif;?>
                    <div class="policy-body" class="p30t">
                        <?php the_field('disclaimer_content', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: none">
            <div id="diligence-footer" class="policy-popup">
                <div class="container">
                    <!-- <div class="policy-logo"><img src="<?=get_field('policy_logo','option');?>" alt=""></div> -->
                    <div class="policy-title"><h2><?=get_field('diligence_title','option');?></h2></div>
                    <?php if(get_field('diligence_title','option')):?>
                    <div class="policy-subtitle"><?=get_field('diligence_subtitle','option');?></div>
                    <?php endif;?>
                    <div class="policy-body" class="p30t">
                        <?php the_field('diligence_content', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- slick -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

        <!-- fancybox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

        <!--wordpress footer-->
        <?php wp_footer(); ?> 
        <!--end wordpress footer-->
    </body>
</html>
