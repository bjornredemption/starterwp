<?php
/** 
 * The page template file.<br>
 * This file works as display land-for-sale & house-and-land's 
 * page content (post type "page") and its comments.
 * Template name: Insite
 * 
 * @package marigold
 */


// begins template. -------------------------------------------------------------------------
get_header();
// get_sidebar();
?> 
                <main id="main" role="main">
                    <?php
                    if (have_posts()) {
                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'insite');
                            echo "\n\n";

                            $Bsb4Design->pagination();
                            echo "\n\n";

                        }// endwhile;

                        
                        unset($Bsb4Design);
                    } else {
                        get_template_part('template-parts/section', 'no-results');
                    }// endif;
                    ?> 
                </main>
<?php
get_sidebar('right');
get_footer();