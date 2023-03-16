<?php $page = "Contact";
include('meta_tags.php');
include('header.php');?>

        <div id="site-content" class="site-content">

            <div class="content-header content-header-inline content-header-featured wrap">
                <div class="content-header-inner wrap">
                    <h2 class="main-headig">Contact us</h2>
                </div>
            </div>

            <div id="content-body" class="content-body">
                <div class="content-body-inner wrap">
                     <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_custom_1510028822927  vc_custom_1510028822927"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span> 
                    </div>
                    <!-- The main content -->
                    <main id="main-content" class="main-content" itemprop="mainContentOfPage">
                        <div class="main-content-inner">
                            <div class="content text-content shadow content-padding">

                                <h3 style="text-align: center;">Talk to us!</h3>
                                <p style="text-align: center;">You have questions, and we’ve got answers. Reach out today. We’re here to help.</p>
                                <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div>
                                <div role="form" class="wpcf7" id="wpcf7-f59-p18-o1">
                                    <div class="screen-reader-response"></div>
                                    <form action="#" method="post" class="wpcf7-form" id="contact_form">
                                        <div class="form-request">
                                            <div class="row">
                                                <div class="columns columns-12"><span class="wpcf7-form-control-wrap text-131"><input type="text" name="txt_name" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Full Name*" required="" /></span></div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-6"><span class="wpcf7-form-control-wrap email-451"><input type="email" name="txt_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="Your Email*" required="" /></span></div>
                                                <div class="columns columns-6"><span class="wpcf7-form-control-wrap text-131"><input type="text" name="txt_contact" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Your Phone"  pattern="\d*" /></span></div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-12"><span class="wpcf7-form-control-wrap text-131"><input type="text" name="txt_subject" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Subject" /></span></div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-12"><span class="wpcf7-form-control-wrap textarea-551"><textarea name="txt_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea></span></div>
                                            </div>
                                            <div class="row">
                                                <div class="columns columns-12" style="text-align: center;">
                                                    <input type="hidden" name="txt_emailto" value="contact@sfrmedical.com">
                                                    <input type="submit" name="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" style="width: auto;" /><br><br>
                                                    <span id="spin" ></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output response-message text-center" style="color:green"></div>
                                        <div class="wpcf7-response-output contact_formErr text-center" style="color:red"></div>
                                    </form>
                                </div>
                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                <p style="text-align: center; font-size: 13px;">You can also email <a href="mailto:contact@sfrmedical.com">contact@sfrmedical.com</a> and we’ll get back to you within one business day, <br> or talk to a member of our team Monday - Friday between 9:00 – 17:00 by calling <a href="tel:+441234943111">+44 1234 943 111</a></p>


                                
                            </div>
                            <!-- /.content -->
                            
                        </div>
                        <!-- /.main-content-inner -->
                    </main>
                    <!-- /.main-content -->
                    <aside class="main-sidebar">
                        <div class="main-sidebar-inner">
                            
                            <?php include('sidebar.php');?>
                            
                        </div>
                    </aside>

                </div>
                <!-- /.content-body-inner -->
            </div>
            <!-- /.content-body -->
        </div>
        <!-- /.site-content -->

<?php include('footer.php');?>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script>
////////////////////////////// contact form

$("form#contact_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    console.log(formData);
    $.ajax({
        url: 'mail.php?id=contactform',
        type: 'POST',
        data: formData,
        beforeSend: function(){
            $('#spin').fadeIn("slow").html('<p>Sending...</p>');
            $('form#contact_form').find('input[type=submit]').prop('disabled', true);
        },
        complete: function(){
            $('#spin').fadeIn("slow").html('');
            $('form#contact_form').find('input[type=submit]').prop('disabled', false);
        },
        success: function (response) {
            var aa = $.trim(response);
            console.log(aa);
            if ( aa === "true" ){
                $('form#contact_form').find("input[type=text],input[type=email], textarea").val("");
                $('.response-message').fadeIn("slow").html('<div class="section-heading"><i class="fa fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Thank you for reaching out. We’ll get back to you shortly!.</p></div>');
                setTimeout(function(){ 
                    $('.response-message').fadeIn("slow").html(''); 
                }, 10000);
                $('.contact_formErr').fadeIn("slow").html('');
              // window.location = web_url+'home.php';
              // $("#cform")[0].reset();
            } else {
              $('.contact_formErr').fadeIn("slow").html("Something went wrong, plz try after sometime !!!.");
              setTimeout(function(){ 
                    $('.contact_formErr').fadeIn("slow").html(''); 
                }, 10000);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});
    </script>