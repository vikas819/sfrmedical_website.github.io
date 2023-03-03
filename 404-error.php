<?php $page = "404 Error";
include('meta_tags.php');
include('header.php');?>

        <div id="site-content" class="site-content">

             <div class="content-header content-header-inline wrap">
                <div class="content-header-inner wrap ">
                    <h2></h2>
                    <h2 class="main-headig"></h2>
                    <div class="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            
                        </div>
                    </div>
                </div>
            </div> 

            <div id="content-body" class="content-body">
                <div class="content-body-inner wrap">
                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_custom_1510028822927  vc_custom_1510028822927">
                        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:rgb(2,6,32);border-color:rgba(2,6,32,0.1);" class="vc_sep_line"></span></span>
                        <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:rgb(2,6,32);border-color:rgba(2,6,32,0.1);" class="vc_sep_line"></span></span>
                    </div>
                    <!-- The main content -->
                    <main id="main-content" class="main-content" itemprop="mainContentOfPage" style="width: 100%;">
                        <div class="main-content-inner">
                            <div class="content text-content shadow content-padding text-center"><br><br>
                                <h1 style="font-size: 300px;">404</h1>
                                <h3>PAGE NOT FOUND</h3>
                                <p>Page you are looking for might has been removed<br>had its name changed or is temporarily unavailable</p>
                                <a class="button" href="<?php echo $url;?>">GO TO HOMEPAGE</a>
                                <br><br><br><br><br>
                            </div>
                        </div>
                        <!-- /.main-content-inner -->
                    </main>

                </div>
                <!-- /.content-body-inner -->
            </div>
            <!-- /.content-body -->
        </div>
        <!-- /.site-content -->

<?php include('footer.php');?>