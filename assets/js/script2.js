////////////////////////////// Newsletter form
$("form#newsletter_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    console.log(formData);
    $.ajax({
        url: 'mail_newsletter.php?i=newsletter',
        type: 'POST',
        data: formData,
        beforeSend: function(){
            // $('#spin').fadeIn("slow").html('<p>Sending...</p>');
            $('form#newsletter_form').find('input[type=submit]').prop('disabled', true);
        },
        complete: function(){
            // $('#spin').fadeIn("slow").html('');
            $('form#newsletter_form').find('input[type=submit]').prop('disabled', false);
        },
        success: function (response) {
            var aa = $.trim(response);
            // console.log(aa);
            // alert(aa);
            if ( aa === "true" ){
                $('form#newsletter_form').find("input[type=email]").val("");
                $('.newsletter_response').fadeIn("slow").html('<div class="section-heading"><p class="response">Thank you for subscription!.</p></div>');
                setTimeout(function(){ 
                    $('.newsletter_response').fadeIn("slow").html(''); 
                }, 10000);
                $('.newsletter_error').fadeIn("slow").html('');
              // window.location = web_url+'home.php';
              // $("#cform")[0].reset();
            } else {
            //   $('.newsletter_error').fadeIn("slow").html('<div class="section-heading"><p class="response">Something went wrong, plz try after sometime !!!.</p></div>');
            //   setTimeout(function(){ 
            //         $('.newsletter_error').fadeIn("slow").html(''); 
            //     }, 10000);
                $('form#newsletter_form').find("input[type=email]").val("");
                $('.newsletter_response').fadeIn("slow").html('<div class="section-heading"><p class="response">Thank you for subscription!.</p></div>');
                setTimeout(function(){ 
                    $('.newsletter_response').fadeIn("slow").html(''); 
                }, 10000);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});
////////////////////////////// contact form
$("form#contact_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    console.log(formData);
    $.ajax({
        url: 'mail_contact.php?id=contactform',
        type: 'POST',
        data: formData,
        beforeSend: function(){
            // $('#spin').fadeIn("slow").html('<p>Sending...</p>');
            $('form#contact_form').find('input[type=submit]').prop('disabled', true);
        },
        complete: function(){
            // $('#spin').fadeIn("slow").html('');
            $('form#contact_form').find('input[type=submit]').prop('disabled', false);
        },
        success: function (response) {
            var aa = $.trim(response);
            // console.log(aa);
            // alert(aa);
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
            //   $('.contact_formErr').fadeIn("slow").html('<div class="section-heading"><p class="response">Something went wrong, plz try after sometime !!!.</p></div>');
            //   setTimeout(function(){ 
            //         $('.contact_formErr').fadeIn("slow").html(''); 
            //     }, 10000);
                $('form#contact_form').find("input[type=text],input[type=email], textarea").val("");
                $('.response-message').fadeIn("slow").html('<div class="section-heading"><i class="fa fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Thank you for reaching out. We’ll get back to you shortly!.</p></div>');
                setTimeout(function(){ 
                    $('.response-message').fadeIn("slow").html(''); 
                }, 10000);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});
////////////////////////////// Sales form
$("form#contact_sales").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    console.log(formData);
    $.ajax({
        url: 'mail_sales.php?id=contactsales',
        type: 'POST',
        data: formData,
        beforeSend: function(){
            // $('#spin').fadeIn("slow").html('<p>Sending...</p>');
            $('form#contact_sales').find('input[type=submit]').prop('disabled', true);
        },
        complete: function(){
            // $('#spin').fadeIn("slow").html('');
            $('form#contact_sales').find('input[type=submit]').prop('disabled', false);
        },
        success: function (response) {
            var aa = $.trim(response);
            // console.log(aa);
            // alert(aa);
            if ( aa === "true" ){
                $('form#contact_sales').find("input[type=text],input[type=email], textarea, select").val("");
                $('.contact_sales_response').fadeIn("slow").html('<div class="section-heading"><i class="fa fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Thank you for reaching out. We’ll get back to you shortly!.</p></div>');
                setTimeout(function(){ 
                    $('.contact_sales_response').fadeIn("slow").html(''); 
                }, 10000);
                $('.contact_salesErr').fadeIn("slow").html('');
              // window.location = web_url+'home.php';
              // $("#cform")[0].reset();
            } else {
            //   $('.contact_salesErr').fadeIn("slow").html('<div class="section-heading"><p class="response">Something went wrong, plz try after sometime !!!.</p></div>');
            //   setTimeout(function(){ 
            //         $('.contact_salesErr').fadeIn("slow").html(''); 
            //     }, 10000);
                $('form#contact_sales').find("input[type=text],input[type=email], textarea, select").val("");
                $('.contact_sales_response').fadeIn("slow").html('<div class="section-heading"><i class="fa fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Thank you for reaching out. We’ll get back to you shortly!.</p></div>');
                setTimeout(function(){ 
                    $('.contact_sales_response').fadeIn("slow").html(''); 
                }, 10000);
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});