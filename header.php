<?php 
// $url = 'https://sfrmedical.com/'; 
$url = 'https://localhost/sfrweb/'; 
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js" manifest="demo.appcache">
<head>
    <meta http-equiv="content-type" content="application/xhtml+xml" content-type="text/html" charset="utf-8" />
    <title><?php echo @$pageTitle;?> | SFR Medical </title>
    <meta http-equiv="Cache-control" content="private">
    <meta name="title" content="<?php echo @$pageTitle; ?> | SFR Medical" />
    <meta name="description" content="<?php echo @$pageDesc; ?>" />
    <meta name="keywords" content="<?php echo @$pageKeys; ?>" />
    <meta name="author" content="SFR Medical" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0" />
    <link rel="alternate" href="<?php echo $url; ?>" hreflang="en-US">
    <link rel="canonical" href="<?php echo @$url.@$pageUrl; ?>" />
    
    <!--FB Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo @$url.@$pageUrl; ?>" />
    <meta property="og:title" content="<?php echo @$pageTitle; ?> | SFR Medical" />
    <meta property="og:description" content="<?php echo @$pageDesc; ?>" />
    <meta property="og:image" content="<?php echo @$url.@$pageImage; ?>" />
    
    <!--Twitter Meta-->
    <meta name="twitter:title" content="<?php echo @$pageTitle; ?> | SFR Medical" />
    <meta name="twitter:description" content="<?php echo @$pageDesc; ?>" />
    <meta name="twitter:image" content="<?php echo @$url.@$pageImage; ?>" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $url;?>assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $url;?>assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url;?>assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $url;?>assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url;?>assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $url;?>assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $url;?>assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $url;?>assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url;?>assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $url;?>assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url;?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $url;?>assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url;?>assets/favicon/favicon-16x16.png">
    <!-- <link rel="manifest" href="<?php echo $url;?>assets/favicon/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $url;?>assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="<?php echo $url;?>assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $url;?>assets/favicon/favicon.ico" type="image/x-icon">
    
    <link rel='stylesheet' id='theme-fonts-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin-ext%2Chebrew%2Clatin%2Ccyrillic%2Cdevanagari&amp;ver=5.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-components-css' href='<?php echo $url;?>assets/css/components8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-css' href='<?php echo $url;?>assets/css/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='theme-css' href='<?php echo $url;?>assets/css/custom.css?ver=1.0.0' type='text/css' media='all' />
    
    <link rel='stylesheet' id='dw-megamenu-front-end-style-css' href='<?php echo $url;?>assets/dw-mega-menu/assets/css/dw-megamenuaead.css?ver=5.0.3' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='<?php echo $url;?>assets/revslider/public/assets/css/settingsdd22.css?ver=5.4.7.2' type='text/css' media='all' />
    <?php if($page != 'Home' && $page != 'Privacy & Policy' ){ ?> 
    <style type="text/css">
        #main-content {
            width: calc(100% - 350px);
        }
        .main-sidebar {
            width: 350px;
            padding-left: 25px;
        }
    </style>
    <?php } ?>
    <link rel='stylesheet' id='js_composer_front-css' href='<?php echo $url;?>assets/js_composer/assets/css/js_composer.min40df.css?ver=5.6' type='text/css' media='all' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <?php if($page == 'Home' ){ ?> 
    <script type='text/javascript' src='<?php echo $url;?>assets/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.4.7.2'></script>
    <script type='text/javascript' src='<?php echo $url;?>assets/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.7.2'></script>
    <script type="text/javascript" src="<?php echo $url;?>assets/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>assets/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>assets/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript">
    function setREVStartSize(e) {
        try {
            e.c = jQuery(e.c);
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };
    </script>
    <?php } ?>
    <style type="text/css" data-type="vc_custom-css">
        /*.site-header.site-header-classic.header-shadow {
            box-shadow: none;
            -o-box-shadow: none;
            -ms-box-shadow: none;
            background: none;
        }*/
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_heading {
            font-family: Poppins;
            font-weight: 600;
            color: #273272;
            text-transform: none;
            font-size: 30px;
            line-height: 42px;
            text-align: center;
        }
        .vc_custom_sub_heading{
            text-align: center;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
        }
        .section-seperator{
            border-bottom: 1px solid rgba(2, 6, 32, 0.1);
        }
        .section-hide{
            display: none;
        }
        .slider-text{
            z-index: 5; white-space: nowrap; 
            font-size: px; 
            line-height: px; 
            font-weight: 400; 
            color: #ffffff; 
            letter-spacing: 0px;
            font-family:Poppins;
        }
        .site-topbar .topbar-text{
            text-align: center;
            color:#fff;
        }
        .site-header-sticky .topbar-text{
            color: #fff; 
            background-color: #273272; 
            text-align: center; 
            padding: 10px 20px;
        }
        .site-header-sticky .header-brand{
            align-items: center; display: flex; flex-direction: row;
        }
        .site-header-sticky .header-widget{align-items: center; display: flex; flex-direction: row; justify-content: space-between; border-left: 1px solid rgba(2, 6, 32, 0.1); margin-left: 18px; padding-left: 18px;
        }
        .site-header-sticky .social-icons{
            margin-left: 0;
        }
        .link-color{color: rgb(84 98 175);}
        .rev_slider_wrapper{
            margin:0px auto;
            background:transparent;
            padding:0px;
            margin-top:0px;
            margin-bottom:0px;
        }
        .mobile-menu-text{color:#fff;font-size: 16px;}
        
        .single-nproject .project-featured-image {
            margin: 0 0 40px 0;
        }
        body .site-content .content-header {
            padding-top: 120px;
        }
        #site .scrollslider .swiper-container .swiper-pagination .swiper-pagination-bullet::after,
        #site .vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tabs-container ul.vc_tta-tabs-list {
            background-color: #273272;
        }
        .vc_custom_1518405675791 {
            /*padding-top: 40px ;*/
            /*background:#fff  url(assets/bg.png) !important;*/
            background-position: center ;
            background-repeat: no-repeat ;
            background-size: cover ;
        }

        .vc_custom_1520173517266 {
            padding-top: 65px ;
            padding-bottom: 65px ;
            background-color: #e9eaee !important ;
            /*background-color: rgb(2, 6, 32) ;*/
        }

        .vc_custom_1512720851261 {
            background: #010521 url(assets/BG_07_V2.jpg);
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1519786088813 {
            background: #97237c url(assets/upload/mask.png) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1510028822927 {
            margin-top: 20px ;
            margin-bottom: 50px ;
        }
        .vc_custom_1515641149869 {
            background-color: #00a914 !important;
        }
        .vc_custom_1515641141835 {
            background-color: #1e73be !important;
        }
    </style>
    <noscript>
    <style type="text/css">
        .wpb_animate_when_almost_visible {
            opacity: 1;
        }
    </style>
    </noscript>

    <!-- Facebook Pixel Code -->
    <!-- <script>
    //   !function(f,b,e,v,n,t,s)
    //   {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    //   n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    //   if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    //   n.queue=[];t=b.createElement(e);t.async=!0;
    //   t.src=v;s=b.getElementsByTagName(e)[0];
    //   s.parentNode.insertBefore(t,s)}(window, document,'script',
    //   'https://connect.facebook.net/en_US/fbevents.js');
    //   fbq('init', '114267959894402');
    //   fbq('track', 'PageView');
    </script> -->
    <!-- <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=114267959894402&ev=PageView&noscript=1" />
    </noscript> -->
    <!-- End Facebook Pixel Code -->

    
</head>

<body class="home page-template-default page page-id-500 woocommerce-no-js sliding-desktop-off sliding-overlay layout-frame <?php if($page != 'Home' && $page != 'Test'){ echo 'sidebar-right'; }else{ echo'sidebar-none'; }?> wpb-js-composer js-comp-ver-5.6 vc_responsive" itemscope="itemscope" itemtype="http://schema.org/WebPage">

    <div id="site-content" class="site wrap header-position-top">

        <div id="site-topbar" class="site-topbar">
            <div class="site-topbar-inner wrap">
                <div class="topbar-text" style="">
                    <!-- COVID-19 crisis: SFR Medical remains open and fully operational – please reach out if you need any help getting medical evidence. We are here to support all NHS staff and UK Police officers.<br>
                    All SFRs where the victim works for a UK police force, the CPS, or the NHS are free of charge. It’s our way of saying thank you to all front-line workers. -->

                </div>
                <!-- <div class="site-topbar-flex">
                    <div class="topbar-left">
                         <a title="" href="#" data-target="off-canvas-left" class="off-canvas-toggle">
                            <span></span>
                        </a> 

                        <div class="topbar-menu">
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="topbar-text" style="text-align: center;">
                            <span style="color:#fff;">
                            </span>
                            <br><i class="fa fa-phone"></i>Need help? Talk to an expert <a title="" href="tel:+441234943111">+44 1234 943 111</a>
                            <a title="" href="https://portal.sfrmedical.co.uk/" target="_blank">Client Login</a> 
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div id="site-header" class="site-header site-header-classic header-brand-left header-full header-shadow header-transparent" style="background-color: rgba(255, 255, 255, 0.95);">
            <div class="site-header-inner wrap">
                <div class="header-content">
                    <div class="header-brand">
                        <a title="SFR Medical" href="<?php echo $url;?>">
                            <img src="assets/logo.png" alt="SFR Medical" title="SFR Medical" class="logo logoDefault" /> 
                        </a>
                        <div class="header-widget">
                            <div id="custom_html-2" class="widget_text widget-odd widget-last widget-first widget-1 widget widget_custom_html">
                                <div class="textwidget custom-html-widget">
                                    <!-- <div class="info-box">
                                        Want to learn more?<br>Get in touch! <br>
                                        <a title="" class="contact-info" href="mailto:contact@sfrmedical.com">contact@sfrmedical.com</a> <br>or <a title="" class="contact-info" href="tel:+441234943111">+44 1234 943 111</a>
                                    </div> -->
                                    <div class="social-icons">
                                        <a title="SFR Medical" href="https://www.facebook.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                        <a title="SFR Medical" href="https://twitter.com/sfrmedical" data-tooltip="" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <!--<a title="SFR Medical" href="https://www.instagram.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-instagram"></i></a>-->
                                        <a title="SFR Medical" href="https://www.linkedin.com/company/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <!--<a title="SFR Medical" href="https://sfrmedical.tumblr.com/" data-tooltip="" target="_blank"><i class="fa fa-tumblr"></i></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navigator">
                        <ul id="menu-main-menu" class="menu menu-primary dw-mega-menu-transition-default">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-551"><a title="SFR Medical" href="<?php echo $url;?>">HOME <!-- <i class="fa fa-angle-down"></i> --></a>
                                <!-- <ul class="dw-sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-941"><a title="SFR Medical" href="<?php echo $url;?>#who-we-are">Who we are</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-942"><a title="SFR Medical" href="<?php echo $url;?>#working-with-us">Working with us</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-943"><a title="SFR Medical" href="<?php echo $url;?>#our-solution">Our solution</a></li>
                                </ul> -->
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-552"><a title="" href="#">WHAT WE DO <i class="fa fa-angle-down"></i></a>
                                <ul class="dw-sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police" href="#">For police</a>
                                        <ul class="dw-sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police our purpose" href="<?php echo $url;?>for-police-our-purpose">Our purpose </a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police our solution" href="<?php echo $url;?>for-police-our-solution">Our solution</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police our products" href="<?php echo $url;?>for-police-our-products">Our products</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public" href="#">For public</a>
                                        <ul class="dw-sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public our purpose" href="<?php echo $url;?>for-public-our-purpose">Our purpose </a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public our solution" href="<?php echo $url;?>for-public-our-solution">Our solution</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public our products" href="<?php echo $url;?>for-public-our-products">Our products</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For solicitors" href="<?php echo $url;?>for-solicitors">For solicitors</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-553"><a title="About us" href="#">ABOUT US <i class="fa fa-angle-down"></i></a>
                                <ul class="dw-sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-953"><a title="Our team" href="<?php echo $url;?>our-team">Our team</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="Awards & recognition" href="<?php echo $url;?>awards-and-recognition">Awards & recognition</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="News & posts" href="<?php echo $url;?>news-and-posts">News & posts</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-950"><a title="Testimonials" href="<?php echo $url;?>testimonials">Testimonials </a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-553"><a title="Partner with us" href="#">PARTNER WITH US <i class="fa fa-angle-down"></i></a>
                                <ul class="dw-sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-953"><a title="Contracting process" href="<?php echo $url;?>contracting-process">Contracting process</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="Procurement process" href="<?php echo $url;?>procurement-process">Procurement process</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="Governance & compliance" href="<?php echo $url;?>governance-and-compliance">Governance & compliance</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-7 item-564"><a title="Contact us" href="<?php echo $url;?>contact-us">CONTACT US</a>
                            </li>
                        </ul>
                        <div class="extras">
                            <ul class="menu menu-extras">
                                <li class="search-box">
                                    <!-- <a title="" href="#"><i class="sl-magnifier "></i></a> -->
                                    <div class="widget widget_search" >
                                        <!-- <form role="search" method="get" class="search-form" action="#">
                                            <label>
                                                <span class="screen-reader-text">Search for:</span>
                                                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                            </label>
                                            <input type="submit" class="search-submit" value="Search">
                                        </form> -->
                                        <!--<a title="" href="https://portal.sfrmedical.co.uk/" target="_blank" >CLIENT LOGIN</a>-->
                                    </div>
                                </li>
                            </ul>
                            <!-- <div class="social-icons">
                                <a title="SFR Medical" href="https://www.facebook.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a title="SFR Medical" href="https://twitter.com/sfrmedical" data-tooltip="" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a title="SFR Medical" href="https://www.instagram.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a title="SFR Medical" href="https://www.linkedin.com/company/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a title="SFR Medical" href="https://sfrmedical.tumblr.com/" data-tooltip="" target="_blank"><i class="fa fa-tumblr"></i></a>
                            </div> -->
                        </div>

                        <a title="" href="#" data-target="off-canvas-right" class="off-canvas-toggle">
                            <span></span>
                        </a>

                    </nav>

                </div>
            </div>
            <!-- /.site-header-inner -->
        </div>
        
        <div id="site-header-sticky" class=" site-header-sticky header-brand-left header-shadow">
            <div class="topbar-text" style="">
               <!--  COVID-19 crisis: SFR Medical remains open and fully operational – please reach out if you need any help getting medical evidence. We are here to support all NHS staff and UK Police officers.<br>
                All SFRs where the victim works for a UK police force, the CPS, or the NHS are free of charge. It’s our way of saying thank you to all front-line workers. -->
            </div>
            <div class="site-header-inner wrap">
                <div class="header-brand" style="">
                    <a title="SFR Medical" href="<?php echo $url;?>">
                        <img src="assets/logo.png" alt="SFR Medical" title="SFR Medical" class="logo logoDark" /> 
                    </a>
                    <div class="header-widget" style="">
                        <div id="custom_html-2" class="widget_text widget-odd widget-last widget-first widget-1 widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <!-- <div class="info-box">
                                    Want to learn more?<br>Get in touch! <br>
                                    <a title=""  class="contact-info" href="mailto:contact@sfrmedical.com">contact@sfrmedical.com</a> 
                                    <br><a title=""  class="contact-info" href="tel:+441234943111">or +44 1234 943 111</a>
                                </div> -->
                                <div class="social-icons">
                                    <a title="SFR Medical" href="https://www.facebook.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                    <a title="SFR Medical" href="https://twitter.com/sfrmedical" data-tooltip="" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <!--<a title="SFR Medical" href="https://www.instagram.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-instagram"></i></a>-->
                                    <a title="SFR Medical" href="https://www.linkedin.com/company/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <!--<a title="SFR Medical" href="https://sfrmedical.tumblr.com/" data-tooltip="" target="_blank"><i class="fa fa-tumblr"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navigator" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <ul id="menu-main-menu-1" class="menu menu-primary dw-mega-menu-transition-default">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-551"><a title="SFR Medical" href="<?php echo $url;?>">HOME <!-- <i class="fa fa-angle-down"></i> --></a>
                            <!-- <ul class="dw-sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-941"><a title="" href="<?php echo $url;?>#who-we-are">Who we are</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-942"><a title="" href="<?php echo $url;?>#working-with-us">Working with us</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-943"><a title="" href="<?php echo $url;?>#our-solution">Our solution</a></li>
                            </ul> -->
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-552"><a title="What we do" href="#">WHAT WE DO <i class="fa fa-angle-down"></i></a>
                            <ul class="dw-sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police" href="#">For police</a>
                                    <ul class="dw-sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police our purpose" href="<?php echo $url;?>for-police-our-purpose">Our purpose </a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police our solution" href="<?php echo $url;?>for-police-our-solution">Our solution</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For police our products" href="<?php echo $url;?>for-police-our-products">Our products</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public" href="#">For public</a>
                                    <ul class="dw-sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public our purpose" href="<?php echo $url;?>for-public-our-purpose">Our purpose </a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public our solution" href="<?php echo $url;?>for-public-our-solution">Our solution</a></li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For public our products" href="<?php echo $url;?>for-public-our-products">Our products</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-945"><a title="For solicitors" href="<?php echo $url;?>for-solicitors">For solicitors</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-553"><a title="About us" href="#">ABOUT US <i class="fa fa-angle-down"></i></a>
                            <ul class="dw-sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-953"><a title="Our team" href="<?php echo $url;?>our-team">Our team</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="Awards & recognition" href="<?php echo $url;?>awards-and-recognition">Awards & recognition</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="News & posts" href="<?php echo $url;?>news-and-posts">News & posts</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-950"><a title="Testimonials" href="<?php echo $url;?>testimonials">Testimonials </a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-flyout dw-mega-menu-hover item-553"><a title="Partner with us" href="#">PARTNER WITH US <i class="fa fa-angle-down"></i></a>
                            <ul class="dw-sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-953"><a title="Contracting process" href="<?php echo $url;?>contracting-process">Contracting process</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="Procurement process" href="<?php echo $url;?>procurement-process">Procurement process</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page dw-mega-menu-hover item-951"><a title="Governance & compliance" href="<?php echo $url;?>governance-and-compliance">Governance & compliance</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-7 item-564"><a title="Contact us" href="<?php echo $url;?>contact-us">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="extras">
                        <ul class="menu menu-extras">
                            <li class="search-box">
                                <!--<a title="" href="https://portal.sfrmedical.co.uk/" target="_blank">CLIENT LOGIN</a>-->
                                <!-- <div class="widget widget_search" > 
                                    <form role="search" method="get" class="search-form" action="#">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                                        </label>
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                    <a title="" href="#" >Portal Login</a>
                                </div> -->
                            </li>
                        </ul>
                        <!-- <div class="social-icons">
                            <a title="" href="https://www.facebook.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a title="" href="https://twitter.com/sfrmedical" data-tooltip="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a title="" href="https://www.instagram.com/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a title="" href="https://www.linkedin.com/company/sfrmedical/" data-tooltip="" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a title="" href="https://sfrmedical.tumblr.com/" data-tooltip="" target="_blank"><i class="fa fa-tumblr"></i></a>
                        </div> -->
                    </div>
                    <a title="" href="#" data-target="off-canvas-right" class="off-canvas-toggle">
                        <span></span>
                    </a>
                </nav>

            </div>
            <!-- /.site-header-inner -->
        </div>