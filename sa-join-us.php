<?php $page ="SA-Expetwitness";
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
                    <h1 class="d_block fs_30 lh_40 fw_medium">Register as an Expert</h1>
                    <hr>
                </div>
            </div>
        </section>
		<section class="event-details p_relative pb_40 ">
            <div class="auto-container">
                <div class="lower-content p_relative d_block shadow pr_20 pl_20 pt_30 pb_50">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                            <div class="content-box centred">
                                <h4 class="d_block fs_20 lh_34 fw_medium mb_35">If you would like to join us, please fill the form below.</h4>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-12 form-column">&nbsp;</div>
                        <div class="col-lg-10 col-md-10 col-sm-12 form-column">
	                        <div class="form-inner">
	                            <form action="#" method="post" class="booking-form default-form" id="sa_joining_form">
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
                                            <label for="txt_experties">Area of Expertise</label><br>
                                            <input type="text" id="txt_experties" onclick="toggleCheckboxDropdown()" value="" placeholder="" readonly="">
                                            <div id="checkboxDropdown">
                                                <label for="checkbox01"><input type="checkbox" id="checkbox01" name="txt_speciality[]" onclick="updateInputField(this)" value="A&E / Emergency Medicine"> A&E / Emergency Medicine</label><br>
                                                <label for="checkbox02"><input type="checkbox" id="checkbox02" name="txt_speciality[]" onclick="updateInputField(this)" value="Cardiology"> Cardiology</label><br>
                                                <label for="checkbox03"><input type="checkbox" id="checkbox03" name="txt_speciality[]" onclick="updateInputField(this)" value="Cardiothoracic Surgery"> Cardiothoracic Surgery</label><br>
                                                <label for="checkbox04"><input type="checkbox" id="checkbox04" name="txt_speciality[]" onclick="updateInputField(this)" value="Child Abuse"> Child Abuse</label><br>
                                                <label for="checkbox05"><input type="checkbox" id="checkbox05" name="txt_speciality[]" onclick="updateInputField(this)" value="Critical Care"> Critical Care</label><br>
                                                <label for="checkbox06"><input type="checkbox" id="checkbox06" name="txt_speciality[]" onclick="updateInputField(this)" value="Dentist"> Dentist</label><br>
                                                <label for="checkbox07"><input type="checkbox" id="checkbox07" name="txt_speciality[]" onclick="updateInputField(this)" value="DNA"> DNA</label><br>
                                                <label for="checkbox08"><input type="checkbox" id="checkbox08" name="txt_speciality[]" onclick="updateInputField(this)" value="Ear prints"> Ear prints</label><br>
                                                <label for="checkbox09"><input type="checkbox" id="checkbox09" name="txt_speciality[]" onclick="updateInputField(this)" value="Ear, Nose & Throat (ENT)"> Ear, Nose & Throat (ENT)</label><br>
                                                <label for="checkbox10"><input type="checkbox" id="checkbox10" name="txt_speciality[]" onclick="updateInputField(this)" value="Facial Mapping and Video Evidence"> Facial Mapping and Video Evidence</label><br>
                                                <label for="checkbox11"><input type="checkbox" id="checkbox11" name="txt_speciality[]" onclick="updateInputField(this)" value="Fingerprints"> Fingerprints</label><br>
                                                <label for="checkbox12"><input type="checkbox" id="checkbox12" name="txt_speciality[]" onclick="updateInputField(this)" value="Footwear Impressions"> Footwear Impressions</label><br>
                                                <label for="checkbox13"><input type="checkbox" id="checkbox13" name="txt_speciality[]" onclick="updateInputField(this)" value="Forensic Anthropology"> Forensic Anthropology</label><br>
                                                <label for="checkbox14"><input type="checkbox" id="checkbox14" name="txt_speciality[]" onclick="updateInputField(this)" value="Forensic Archaeology"> Forensic Archaeology</label><br>
                                                <label for="checkbox15"><input type="checkbox" id="checkbox15" name="txt_speciality[]" onclick="updateInputField(this)" value="Forensic Pathology"> Forensic Pathology</label><br>
                                                <label for="checkbox16"><input type="checkbox" id="checkbox16" name="txt_speciality[]" onclick="updateInputField(this)" value="Forensic Psychiatry"> Forensic Psychiatry</label><br>
                                                <label for="checkbox17"><input type="checkbox" id="checkbox17" name="txt_speciality[]" onclick="updateInputField(this)" value="Forensic Toxicology"> Forensic Toxicology</label><br>
                                                <label for="checkbox18"><input type="checkbox" id="checkbox18" name="txt_speciality[]" onclick="updateInputField(this)" value="Gait analysis"> Gait analysis</label><br>
                                                <label for="checkbox19"><input type="checkbox" id="checkbox19" name="txt_speciality[]" onclick="updateInputField(this)" value="Gastroenterology"> Gastroenterology</label><br>
                                                <label for="checkbox20"><input type="checkbox" id="checkbox20" name="txt_speciality[]" onclick="updateInputField(this)" value="General Medicine"> General Medicine</label><br>
                                                <label for="checkbox21"><input type="checkbox" id="checkbox21" name="txt_speciality[]" onclick="updateInputField(this)" value="General Physician"> General Physician</label><br>
                                                <label for="checkbox22"><input type="checkbox" id="checkbox22" name="txt_speciality[]" onclick="updateInputField(this)" value="General Practitioner"> General Practitioner</label><br>
                                                <label for="checkbox23"><input type="checkbox" id="checkbox23" name="txt_speciality[]" onclick="updateInputField(this)" value="General Surgery"> General Surgery</label><br>
                                                <label for="checkbox24"><input type="checkbox" id="checkbox24" name="txt_speciality[]" onclick="updateInputField(this)" value="Genito-urinary"> Genito-urinary</label><br>
                                                <label for="checkbox25"><input type="checkbox" id="checkbox25" name="txt_speciality[]" onclick="updateInputField(this)" value="Geriatric Medicine"> Geriatric Medicine</label><br>
                                                <label for="checkbox26"><input type="checkbox" id="checkbox26" name="txt_speciality[]" onclick="updateInputField(this)" value="Gynaecology"> Gynaecology</label><br>
                                                <label for="checkbox27"><input type="checkbox" id="checkbox27" name="txt_speciality[]" onclick="updateInputField(this)" value="Haematology Experts"> Haematology Experts</label><br>
                                                <label for="checkbox28"><input type="checkbox" id="checkbox28" name="txt_speciality[]" onclick="updateInputField(this)" value="Handwriting"> Handwriting</label><br>
                                                <label for="checkbox29"><input type="checkbox" id="checkbox29" name="txt_speciality[]" onclick="updateInputField(this)" value="Histopathology Expert"> Histopathology Expert</label><br>
                                                <label for="checkbox30"><input type="checkbox" id="checkbox30" name="txt_speciality[]" onclick="updateInputField(this)" value="Hypnosis"> Hypnosis</label><br>
                                                <label for="checkbox31"><input type="checkbox" id="checkbox31" name="txt_speciality[]" onclick="updateInputField(this)" value="Infectious Disease Experts"> Infectious Disease Experts</label><br>
                                                <label for="checkbox32"><input type="checkbox" id="checkbox32" name="txt_speciality[]" onclick="updateInputField(this)" value="Internal Medicine Experts"> Internal Medicine Experts</label><br>
                                                <label for="checkbox33"><input type="checkbox" id="checkbox33" name="txt_speciality[]" onclick="updateInputField(this)" value="Medical"> Medical</label><br>
                                                <label for="checkbox34"><input type="checkbox" id="checkbox34" name="txt_speciality[]" onclick="updateInputField(this)" value="Neonatology"> Neonatology</label><br>
                                                <label for="checkbox35"><input type="checkbox" id="checkbox35" name="txt_speciality[]" onclick="updateInputField(this)" value="Nephrology"> Nephrology</label><br>
                                                <label for="checkbox36"><input type="checkbox" id="checkbox36" name="txt_speciality[]" onclick="updateInputField(this)" value="Neurology"> Neurology</label><br>
                                                <label for="checkbox37"><input type="checkbox" id="checkbox37" name="txt_speciality[]" onclick="updateInputField(this)" value="Neuropsychologist"> Neuropsychologist</label><br>
                                                <label for="checkbox38"><input type="checkbox" id="checkbox38" name="txt_speciality[]" onclick="updateInputField(this)" value="Neurosurgery"> Neurosurgery</label><br>
                                                <label for="checkbox39"><input type="checkbox" id="checkbox39" name="txt_speciality[]" onclick="updateInputField(this)" value="Non Accidental Head Injury (NAHI)"> Non Accidental Head Injury (NAHI)</label><br>
                                                <label for="checkbox40"><input type="checkbox" id="checkbox40" name="txt_speciality[]" onclick="updateInputField(this)" value="Nursing"> Nursing</label><br>
                                                <label for="checkbox41"><input type="checkbox" id="checkbox41" name="txt_speciality[]" onclick="updateInputField(this)" value="Nutrition"> Nutrition</label><br>
                                                <label for="checkbox42"><input type="checkbox" id="checkbox42" name="txt_speciality[]" onclick="updateInputField(this)" value="Obstetrics and Gynaecology (Obs-Gyn)"> Obstetrics and Gynaecology (Obs-Gyn)</label><br>
                                                <label for="checkbox43"><input type="checkbox" id="checkbox43" name="txt_speciality[]" onclick="updateInputField(this)" value="Occupational Medicine"> Occupational Medicine</label><br>
                                                <label for="checkbox44"><input type="checkbox" id="checkbox44" name="txt_speciality[]" onclick="updateInputField(this)" value="Old Age Psychiatrists"> Old Age Psychiatrists</label><br>
                                                <label for="checkbox45"><input type="checkbox" id="checkbox45" name="txt_speciality[]" onclick="updateInputField(this)" value="Oncology"> Oncology</label><br>
                                                <label for="checkbox46"><input type="checkbox" id="checkbox46" name="txt_speciality[]" onclick="updateInputField(this)" value="Ophthalmology (Eye specialist)"> Ophthalmology (Eye specialist)</label><br>
                                                <label for="checkbox47"><input type="checkbox" id="checkbox47" name="txt_speciality[]" onclick="updateInputField(this)" value="Oral Surgery (Maxillo-facial surgeon)"> Oral Surgery (Maxillo-facial surgeon)</label><br>
                                                <label for="checkbox48"><input type="checkbox" id="checkbox48" name="txt_speciality[]" onclick="updateInputField(this)" value="Orthopaedic Surgery"> Orthopaedic Surgery</label><br>
                                                <label for="checkbox49"><input type="checkbox" id="checkbox49" name="txt_speciality[]" onclick="updateInputField(this)" value="Paediatrics"> Paediatrics</label><br>
                                                <label for="checkbox50"><input type="checkbox" id="checkbox50" name="txt_speciality[]" onclick="updateInputField(this)" value="Parasomnia"> Parasomnia</label><br>
                                                <label for="checkbox51"><input type="checkbox" id="checkbox51" name="txt_speciality[]" onclick="updateInputField(this)" value="Pathology"> Pathology</label><br>
                                                <label for="checkbox52"><input type="checkbox" id="checkbox52" name="txt_speciality[]" onclick="updateInputField(this)" value="Physiotherapy"> Physiotherapy</label><br>
                                                <label for="checkbox53"><input type="checkbox" id="checkbox53" name="txt_speciality[]" onclick="updateInputField(this)" value="Plastic Surgery"> Plastic Surgery</label><br>
                                                <label for="checkbox54"><input type="checkbox" id="checkbox54" name="txt_speciality[]" onclick="updateInputField(this)" value="Psychiatry"> Psychiatry</label><br>
                                                <label for="checkbox55"><input type="checkbox" id="checkbox55" name="txt_speciality[]" onclick="updateInputField(this)" value="Psychological Autopsies"> Psychological Autopsies</label><br>
                                                <label for="checkbox56"><input type="checkbox" id="checkbox56" name="txt_speciality[]" onclick="updateInputField(this)" value="Psychologist"> Psychologist</label><br>
                                                <label for="checkbox57"><input type="checkbox" id="checkbox57" name="txt_speciality[]" onclick="updateInputField(this)" value="Radiology, General"> Radiology, General</label><br>
                                                <label for="checkbox58"><input type="checkbox" id="checkbox58" name="txt_speciality[]" onclick="updateInputField(this)" value="Radiology, Neuro"> Radiology, Neuro</label><br>
                                                <label for="checkbox59"><input type="checkbox" id="checkbox59" name="txt_speciality[]" onclick="updateInputField(this)" value="Radiology, Paediatric"> Radiology, Paediatric</label><br>
                                                <label for="checkbox60"><input type="checkbox" id="checkbox60" name="txt_speciality[]" onclick="updateInputField(this)" value="Respiratory Physician"> Respiratory Physician</label><br>
                                                <label for="checkbox61"><input type="checkbox" id="checkbox61" name="txt_speciality[]" onclick="updateInputField(this)" value="Rheumatology"> Rheumatology</label><br>
                                                <label for="checkbox62"><input type="checkbox" id="checkbox62" name="txt_speciality[]" onclick="updateInputField(this)" value="Sexual Health"> Sexual Health</label><br>
                                                <label for="checkbox63"><input type="checkbox" id="checkbox63" name="txt_speciality[]" onclick="updateInputField(this)" value="Sexually Transmitted Infections (STI)"> Sexually Transmitted Infections (STI)</label><br>
                                                <label for="checkbox64"><input type="checkbox" id="checkbox64" name="txt_speciality[]" onclick="updateInputField(this)" value="Toxicology"> Toxicology</label><br>
                                                <label for="checkbox65"><input type="checkbox" id="checkbox65" name="txt_speciality[]" onclick="updateInputField(this)" value="Trauma Surgeon"> Trauma Surgeon</label><br>
                                                <label for="checkbox66"><input type="checkbox" id="checkbox66" name="txt_speciality[]" onclick="updateInputField(this)" value="Urology"> Urology</label><br>
                                                <label for="checkbox67"><input type="checkbox" id="checkbox67" name="txt_speciality[]" onclick="updateInputField(this)" value="Vascular Surgery"> Vascular Surgery</label><br>
                                                <label for="checkbox68"><input type="checkbox" id="checkbox68" name="txt_speciality[]" onclick="updateInputField(this)" value="Voice Recognition"> Voice Recognition</label><br>
                                                <label for="checkbox69"><input type="checkbox" id="checkbox69" name="txt_speciality[]" onclick="updateInputField(this)" value="Wound Care Expert"> Wound Care Expert</label><br>
                                                <label for="checkbox70"><input type="checkbox" id="checkbox70" name="txt_speciality[]" onclick="updateInputField(this)" value="Other"> Other</label><br>
                                            </div>
	                                    </div>
                                        <div id="expertise_other" class="col-lg-12 col-md-12 col-sm-12 form-group mb_20" style="display: none;">
                                            <label for="txt_role_other">Description of your Other area of expertise</label><br>
                                            <input type="text" id="txt_speciality_other" name="txt_speciality_other" placeholder="" value="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                            <label for="txt_nationality">Select Nationality</label><br>
                                            <select class="wide" id="txt_nationality" name="txt_nationality" placeholder="Select Nationality" required="">
                                                <option value="">Select Nationality</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Réunion">Réunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
	                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20 ">
	                                    	<label for="txt_attachement">Please upload your CV (optional)</label><br>
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
	                            </form>
	                        </div>
                    	</div>
                        
                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php"); ?>
<script>
const toggleInput = document.getElementById('checkbox70');
const expertiseOtherField = document.getElementById('expertise_other');
const txtSpecialityOtherField = document.getElementById('txt_speciality_other');

toggleInput.addEventListener('change', function() {
    if (this.checked) {
        expertiseOtherField.style.display = 'block';
        txtSpecialityOtherField.required = true; // Add required attribute
    } else {
        expertiseOtherField.style.display = 'none';
        txtSpecialityOtherField.required = false; // Remove required attribute
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
    var inputField = document.getElementById("txt_experties");
    var checkedValues = [];
    var checkboxes = document.querySelectorAll('input[name="txt_speciality[]"]:checked');
    checkboxes.forEach(function(checkbox) {
        checkedValues.push(checkbox.value);
    });
    inputField.value = checkedValues.join(", ");
}

function stopPropagation(event) {
    event.stopPropagation();
}

// Close the dropdown if the user clicks outside of it or the input field
window.onclick = function(event) {
    if (!event.target.matches('#txt_experties') && !event.target.matches('#checkboxDropdown') && !event.target.matches('input[type="checkbox"]') && !event.target.matches('label')) {
        var checkboxDropdown = document.getElementById("checkboxDropdown");
        if (checkboxDropdown.style.display === "block") {
            checkboxDropdown.style.display = "none";
        }
    }
}
</script>
<script>
////////////////////////////// joining form
$("form#sa_joining_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);
    // console.log(formData);
     // alert(formData);
    $.ajax({
        url: 'mail_sajoining.php?id=joining_us_form',
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
                $('form#sa_joining_form').find("input[type=text], input[type=email], input[type=file], select, textarea").val("");
                document.getElementById('expertise_other').style.display = 'none';
                document.getElementById('txt_speciality_other').required = false;
                $('input[type="checkbox"]').prop('checked', false);
                document.getElementById("sa_joining_form").reset();
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
                $('form#sa_joining_form').find("input[type=text], input[type=email], input[type=file], select, textarea").val("");
                document.getElementById('expertise_other').style.display = 'none';
                document.getElementById('txt_speciality_other').required = false;
                $('input[type="checkbox"]').prop('checked', false);
                document.getElementById("sa_joining_form").reset();
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