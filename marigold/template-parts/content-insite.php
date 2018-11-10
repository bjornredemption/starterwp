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

    <!-- additional layout customisation -->
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
    ?>

    <section class="b-light-grey p100t p100b">
        <?php the_content();?>
    </section>
    

</article>
<?php unset($Bsb4Design); ?> 