<?php $page ="Join Our Team";
include("meta_tags.php"); 
include("header.php"); ?>
<style>
#checkboxDropdown {
    display: none;
    position: absolute;
    max-height: 250px;
    min-width: 50%;
    overflow-y: scroll;
    font-size: 14px;
    background-color: #f9f9f9;
    /*min-width: 100px;*/
    border: 1px solid #ccc;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    padding: 8px;
    z-index: 1;
}
</style>
		<section class="page-title p_relative pt_40 " style="background-color: #fff;">
            <div class="auto-container">
                <div class="content-box">
                    <!-- <h1 class="d_block fs_30 lh_40 fw_medium">Join Our Team</h1> -->
                    <!-- <hr> -->
                </div>
            </div>
        </section>
		<section class="event-details p_relative pb_40 ">
            <div class="auto-container">
                <div class="lower-content p_relative d_block shadow pr_20 pl_20 pt_30 pb_50">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                            <div class="content-box centred">
                                <h4 class="d_block fs_20 lh_34 fw_medium mb_35">If you would like to join our team, please fill the form below.</h4>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 form-column">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-12 form-column">
	                        <div class="form-inner">
	                            <form action="#" method="post" class="booking-form default-form" id="joining_form">
	                                <div class="row clearfix">
	                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                            <label for="txt_fname">First Name</label><br>
                                            <input type="text" id="txt_fname" name="txt_fname" placeholder="" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                            <label for="txt_lname">Last Name</label><br>
                                            <input type="text" id="txt_lname" name="txt_lname" placeholder="" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                            <label for="txt_email">Email</label><br>
                                            <input type="email" id="txt_email" name="txt_email" placeholder="" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                            <label for="txt_contact">Telephone number</label><br>
                                            <input type="text" id="txt_contact" name="txt_contact" oninput="validateNumberInput(this)" placeholder="" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                            <label for="txt_role">What role would you like at SFR Medical?</label><br>
                                            <input type="text" id="txt_role" onclick="toggleCheckboxDropdown()" value="" placeholder=""  readonly="">
                                            <div id="checkboxDropdown">
                                                <label for="checkbox01"><input type="checkbox" id="checkbox01" name="txt_role[]" onclick="updateInputField(this)" value="Medical Transcriber"> Medical Transcriber</label><br>
                                                <label for="checkbox02"><input type="checkbox" id="checkbox02" name="txt_role[]" onclick="updateInputField(this)" value="Dental Transcriber"> Dental Transcriber</label><br>
                                                <label for="checkbox03"><input type="checkbox" id="checkbox03" name="txt_role[]" onclick="updateInputField(this)" value="Expert witness (for shorter reports only; MG22Cs)"> Expert witness (for shorter reports only; MG22Cs)</label><br>
                                                <label for="checkbox04"><input type="checkbox" id="checkbox04" name="txt_role[]" onclick="updateInputField(this)" value="Expert witness (for longer reports only; full expert witness reports)"> Expert witness (for longer reports only; full expert witness reports)</label><br>
                                                <label for="checkbox05"><input type="checkbox" id="checkbox05" name="txt_role[]" onclick="updateInputField(this)" value="Expert witness (for both shorter and longer reports; MG22Cs and full expert witness reports)"> Expert witness (for both shorter and longer reports; MG22Cs and full expert witness reports)</label><br>
                                                <label for="checkbox06"><input type="checkbox" id="checkbox06" name="txt_role[]" onclick="updateInputField(this)" value="IT team member"> IT team member</label><br>
                                                <label for="checkbox006"><input type="checkbox" id="checkbox006" name="txt_role[]" onclick="updateInputField(this)" value="Urgent Request Coordinator"> Urgent Request Coordinator</label><br>
                                                <label for="checkbox07"><input type="checkbox" id="checkbox07" name="txt_role[]" onclick="updateInputField(this)" value="Other"> Other</label><br>
                                            </div>
                                        </div>
                                        <div id="role_other" class="col-lg-12 col-md-12 col-sm-12 form-group mb_20" style="display: none;">
                                            <label for="txt_role_other">What other role would you like at SFR Medical?</label><br>
                                            <input type="text" id="txt_role_other" name="txt_role_other" placeholder="" value="">
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 form-group mb_20">
                                            <label for="txt_clinical_training">If you are interested in joining the SFR Medical team and are a medical doctor, what level of clinical training are you currently at?</label><br>
                                            <textarea id="txt_clinical_training" name="txt_clinical_training" rows="2" placeholder=""></textarea>
                                        </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20" style="display: none;">
                                            <label for="txt_workarea">Area of work</label><br>
	                                        <input type="text" id="txt_workarea" name="txt_workarea" placeholder="" value="Application for expert witness">
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20" style="display: none;">
                                            <label for="txt_subject">Subject</label><br>
	                                        <input type="text" id="txt_subject" name="txt_subject" placeholder="" value="">
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
	                                    	<label for="txt_attachement">Please upload your CV</label><br>
	                                        <input type="file" accept=".doc, .docx, .pdf" id="txt_attachement" name="txt_attachement" placeholder="Please upload your CV*" value="" ><br><small> Doc type: pdf, doc, docx</small>
	                                    </div>
	                                    <div class="col-lg-12 col-md-6 col-sm-12 form-group mb_20">
                                            <label for="txt_message">Message</label><br>
	                                        <textarea id="txt_message" name="txt_message" rows="4" placeholder=""></textarea>
	                                    </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center">
	                                    	<input type="hidden" name="txt_emailto" value="expert.witness@sfrmedical.com">
	                                        <button type="submit" class="theme-btn btn-dark"><span id="spin">Submit</span></button>
	                                    </div>
	                                </div>
	                                <div class="row clearfix">
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
		                                	<div class="response-message text-center" style="color:green"></div>
	                                        <div class="contact_formErr text-center" style="color:red"></div>
	                                    </div>
                                    </div>
	                                <div class="row clearfix">
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
		                                	<p class="text-center" style="font-size: 13px;">You can also email <a href="mailto:expert.witness@sfrmedical.com">expert.witness@sfrmedical.com</a> and we’ll get back to you within one business day, <br> or talk to a member of our team Monday - Friday between 9:00 – 17:00 by calling <a href="tel:+441234943111">+44 1234 943 111</a></p>
	                                    </div>
                                    </div>
	                            </form>
	                        </div>
                    	</div>
                        
                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php"); ?>
<script>
const toggleInput = document.getElementById('checkbox07');
const roleOtherField = document.getElementById('role_other');
const txtRoleOtherField = document.getElementById('txt_role_other');

toggleInput.addEventListener('change', function() {
    if (this.checked) {
        roleOtherField.style.display = 'block';
        txtRoleOtherField.required = true; // Add required attribute
    } else {
        roleOtherField.style.display = 'none';
        txtRoleOtherField.required = false; // Remove required attribute
    }
});

function validateNumberInput(input) {
    // Remove non-numeric characters using regular expression
    input.value = input.value.replace(/[^0-9]/g, '');
}

function toggleCheckboxDropdown() {
    var checkboxDropdown = document.getElementById("checkboxDropdown");
    if (checkboxDropdown.style.display === "none" || checkboxDropdown.style.display === "") {
        checkboxDropdown.style.display = "block";
    } else {
        checkboxDropdown.style.display = "none";
    }
}

function updateInputField(checkbox) {
    var inputField = document.getElementById("txt_role");
    var checkedValues = [];
    var checkboxes = document.querySelectorAll('input[name="txt_role[]"]:checked');
    checkboxes.forEach(function(checkbox) {
        checkedValues.push(checkbox.value);
    });
    inputField.value = checkedValues.join(", ");
    if (inputField.value == 'Other') {}
}

function stopPropagation(event) {
    event.stopPropagation();
}

// Close the dropdown if the user clicks outside of it or the input field
window.onclick = function(event) {
    if (!event.target.matches('#txt_role') && !event.target.matches('#checkboxDropdown') && !event.target.matches('input[type="checkbox"]') && !event.target.matches('label')) {
        var checkboxDropdown = document.getElementById("checkboxDropdown");
        if (checkboxDropdown.style.display === "block") {
            checkboxDropdown.style.display = "none";
        }
    }
}
</script>
<script>
////////////////////////////// joining form
$("form#joining_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    // console.log(formData);
    $.ajax({
        url: 'mail_joining.php?id=joining_form',
        type: 'POST',
        data: formData,
        beforeSend: function(){
            $('#spin').fadeIn("slow").html('Submitting...');
            $('form#joining_form').find('input[type=submit]').prop('disabled', true);
        },
        complete: function(){
            $('#spin').fadeIn("slow").html('submit');
            $('form#joining_form').find('input[type=submit]').prop('disabled', false);
        },
        success: function (response) {
            var aa = $.trim(response);
            // console.log(aa);
            // alert(aa);
            if ( aa === "true" ){
                $('form#joining_form').find("input[type=text], input[type=email], input[type=file], select, textarea").val("");
                $('input[type="checkbox"]').prop('checked', false);
                document.getElementById('role_other').style.display = 'none';
                document.getElementById('txt_role_other').required = false;
                document.getElementById("joining_form").reset();
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
                $('form#joining_form').find("input[type=text], input[type=email], input[type=file], select, textarea").val("");
                $('input[type="checkbox"]').prop('checked', false);
                document.getElementById('role_other').style.display = 'none';
                document.getElementById('txt_role_other').required = false;
                document.getElementById("joining_form").reset();
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
    
    </script>