<?php
/** 
 * The single post.<br>
 * This file works as display full post content page and its comments.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
//get_sidebar();
?> 
                <!-- <main id="main" class="col-md-<?php echo \BootstrapBasic4\Bootstrap4Utilities::getMainColumnSize(); ?> site-main" role="main"> -->

                <main id="main" class="site-main" role="main">
                    <section class="b-primary t-secondary p100t p100b">
                        <div class="row justify-content-center">
                            <div class="col-10 col-md-8 col-lg-6 col-xl-4 align-self-center text-left">
                                <h1 class="entry-title">Latest news</h1>
                                    Keep up to date with latest community news and events and ensure you are first to hear about Marigold sales releases and construction updates.
                            </div>
                        </div>
                        <div class="arc halfa fbottom">
                    </section>

                    <section class="b-light-grey">
                        <!-- <div class="container"> -->
                                    <?php
                                        if (have_posts()) {
                                            $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                                            while (have_posts()) {
                                                the_post();
                                                get_template_part('template-parts/content', get_post_format());
                                                echo "\n\n";

                                                $Bsb4Design->pagination();
                                                echo "\n\n";

                                                // If comments are open or we have at least one comment, load up the comment template
                                                if (comments_open() || '0' != get_comments_number()) {
                                                    comments_template();
                                                }
                                                echo "\n\n";
                                            }// endwhile;

                                            
                                            unset($Bsb4Design);
                                        } else {
                                            get_template_part('template-parts/section', 'no-results');
                                        }// endif;
                                    ?> 
                        </div>
                    <!-- </section> -->
                </main>
<?php
//get_sidebar('right');
get_footer();