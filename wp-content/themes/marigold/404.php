<?php
/** 
 * File not found or web page not found template file.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();

/* @var $wp_widget_factory \WP_Widget_Factory */
global $wp_widget_factory;
?> 
                <main id="main" class="container site-main m100t m100b" role="main">
                    <section class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'bootstrap-basic4'); ?></h1>
                        </header><!-- .page-header -->
                        <div class="page-content">
                            <p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bootstrap-basic4'); ?></p>

                            <!--search form-->
                            <div class="row-with-vspace">
                                <?php get_template_part('template-parts/partial', 'search-form'); ?> 
                            </div>

                            
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->
                </main>
<?php
get_footer();