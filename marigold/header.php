<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */

$container_class = apply_filters('bootstrap_basic4_container_class', 'container');
if (!is_scalar($container_class) || empty($container_class)) {
    $container_class = 'container';
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        
        <!-- 
        Start of global snippet: Please do not remove
        Place this snippet between the <head> and </head> tags on every page of your site.
        -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98853591-43"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
         
          gtag('config', 'UA-98853591-43');
          gtag('config', 'AW-786179628');
        </script>
        <!-- End of global snippet: Please do not remove -->

        <!-- 
        Start of global snippet: Please do not remove
        Place this snippet between the <head> and </head> tags on every page of your site.
        -->
        <!-- Global site tag (gtag.js) - Google Marketing Platform -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=DC-5683625"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'DC-5683625');
        </script>
        <!-- End of global snippet: Please do not remove -->

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '178231955890916');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=178231955890916&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <?php
        if($_GET["salesforceSubmit"] == 'success'):
        ?>
        <!--
        Event snippet for Botania on http://www.botania.com.au: Please do not remove.
        Place this snippet on pages with events you’re tracking.
        Creation date: 07/24/2018
        -->
            <script>
                fbq('track', 'Lead');

                // Event snippet for Conversion conversion page
                gtag('event', 'conversion', {'send_to': 'AW-786179628/2nSVCKWYlIoBEKzM8PYC'});
                gtag('event', 'conversion', {
                    'allow_custom_scripts': true,
                    'send_to': 'DC-5683625/marig0/marig0+unique'
                });
            </script>
            <noscript>
                <img src="https://ad.doubleclick.net/ddm/activity/src=5683625;type=marig0;cat=marig0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1;num=1?" width="1" height="1" alt=""/>
            </noscript>
            <!-- End of event snippet: Please do not remove -->
            
        <?php endif; ?>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!-- slick -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">

        <!-- fancybox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />

        <!--wordpress head-->
        <?php wp_head(); ?> 
        <!--end wordpress head-->
    </head>
    <body <?php body_class(); ?>>
        <div class="page-container">
            <header>
                <div class="site-branding">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center h-100">
                            <div class="align-self-center">
                                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                    <img src="/wp-content/uploads/2018/08/GL-M-logo@2x.png" alt="<?php bloginfo('name'); ?>" />
                                </a>
                            </div>
                            <div id="header-right-button">
                                <a id="salesfroce-form-trigger" href="#register" class="ahref has-radius solid gold">Register Now</a>
                            </div>
                        </div><!--.site-branding-->
                    </div>
                </div>
                <?php if (has_nav_menu('primary') || is_active_sidebar('navbar-right')) { ?> 
                <div class="main-navigation b-secondary">
                    <div class="container">
                        <div class="row justify-content-center">

                            <nav class="navbar navbar-expand-lg align-self-center">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bootstrap-basic4-topnavbar" aria-controls="bootstrap-basic4-topnavbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'bootstrap-basic4'); ?>">
                                    <span class="navbar-toggler-icon">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </span>
                                </button>
                                <div id="bootstrap-basic4-topnavbar" class="collapse navbar-collapse">
                                    <?php 
                                    wp_nav_menu(
                                        array(
                                            'depth' => '2',
                                            'theme_location' => 'primary', 
                                            'container' => false, 
                                            'menu_id' => 'primary',
                                            'menu_class' => 'navbar-nav mr-auto', 
                                            'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                                        )
                                    ); 
                                    ?> 
                                    <div class="phonemenu-bottom">
                                        <!-- <div class="reg-btn text-center">
                                                <a href="" class="ahref has-radius secondary">Register Now</a>
                                        </div> -->
                                        <div class="policy-text col text-center m30t t-secondary">
                                            <a class="has-endnote t-secondary" data-fancybox data-animation-duration="700" data-src="#policy-footer" href="javascript:;" data-touch="false">Privacy Policy</a> / <a class="has-endnote t-secondary" data-touch="false" data-fancybox data-animation-duration="700" data-src="#disclaimer-footer" href="javascript:;">Disclaimer</a> / Due Diligence
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!--.navbar-collapse-->
                                <div class="clearfix"></div>
                            </nav>
                        </div>
                    </div>
                </div><!--.main-navigation-->
                <?php } else { ?> 
                <!-- the navigation is skipped due to there is no menu or active widgets on navbar-right. -->
                <?php }// endif; ?> 
            </header>

            <!-- <div style="display: none;" id="register" class="has-popup t-primary">
                <div>
                    <h2>Register your interest today</h2>
                    <p>To take your first step towards a beautiful life at Marigold, simply complete the following details. We’ll keep you updated about our forthcoming and release, so you have the opportunity to be first in line on the day.</p>
                    <?php //echo do_shortcode( '[contact-form-7 id="29" title="Register Your Interest"]' ); ?>
            
                    <?php echo do_shortcode('[saleforce-form projectid="' . get_field('project_id_in_salesforce_crm') . '"]'); ?>
                    <p><a class="has-endnote" data-fancybox data-animation-duration="700" data-src="#policy-footer" href="javascript:;">Privacy Policy</a> / <a class="has-endnote" data-fancybox data-animation-duration="700" data-src="#disclaimer-footer" href="javascript:;">Disclaimer</a></p>
                </div>
            </div> -->


            <div id="content" class="site-content">