<?php
require("class.phpmailer.php");
$mail = new PHPMailer();

function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     //$data = mysql_real_escape_string($data);
     $data = htmlspecialchars($data);
     //$data = htmlentities($data);
     $data = str_replace("'", "&#039;", $data);
     return $data;
}
  
  
function test_textarea($data) {
     $data = str_replace("'", "&#039;", $data);
     return $data;
}
/////////////////////////////////////////////////////////////////////////////////
///////////////////////Contact form ////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

if(isset($_GET['id']) && $_GET['id'] =="contactform"){
        $result = "";
      $web_title = "SFR Medical";
      $web_url = "https://sfrmedical.com/";
      $name = test_input($_POST['txt_name']);
      $emailfrom = test_input($_POST['txt_email']);
      $contact = test_input($_POST['txt_contact']);
      $subject1 = test_input($_POST['txt_subject']);
      $message = test_input($_POST['txt_message']);
    //   $emailto = test_input($_POST['txt_emailto']);
      $emailto = 'vikas.chourasia@nhs.net';
    //   $emailto = 'contact@sfrmedical.com';
    //   $emailto = 'johann.g@sfrmedical.com';
      
      if (!empty($name) && !empty($emailfrom) ) {
              
          $subject = 'Enquiry email from website!' ;
        //   $subject = $subject1.' - From : '.$web_title.' website' ;
          $body = '<div   style="background-color:rgb(241, 241, 243) !important;margin:0;padding:0;width:100%!important"><div class="adM">
                      </div><div style="font-size:1px;color:rgb(241, 241, 243) !important;display:none;overflow:hidden">Contact us </div>

                      <table width="100%" style="background-color:rgb(241, 241, 243) !important" border="0" cellpadding="0" cellspacing="0"><tbody>
                        <tr>
                          <td>
                            <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0"   style="background-color:rgb(241, 241, 243) !important;width:600px"><tbody><tr>
                              <td class="m_1180830658322787617web" align="right" style="color:#999999;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:11px;line-height:13px;padding-top:12px;padding-bottom:9px"> &nbsp; </td>
                            </tr></tbody></table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table class="m_1180830658322787617email-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff;width:600px;box-shadow: 0 3px 40px rgba(2, 6, 32, 0.2);"><tbody><tr>
                              <td>
                                
                                <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0"  style="width:600px">
                                  <tbody>
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-text" align="left" style="color:#3A4583;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:15px;line-height:20px;padding-top:20px"> 

                                      From: '.ucfirst($name).' <br> Contact: '.$contact.'<br> Email: '.$emailfrom.'<br> Subject: '.$subject1.'<br> Message: '.$message.'<br><br>

                                      </td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-text" valign="top" align="left" style="color:#ffffff;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:10px;padding-bottom:30px">&nbsp;</td>
                                      <td class="m_1180830658322787617mobile-spacer" width="30" style="width:30px">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                          </table>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table class="m_1180830658322787617full-width" align="center" width="600" border="0" cellpadding="0" cellspacing="0"   style="background-color:rgb(241, 241, 243) !important;width:600px"><tbody><tr>
                              <td class="m_1180830658322787617web" align="right" style="color:#999999;font-family:adobe-clean,Arial,Helvetica,sans-serif;font-size:11px;line-height:13px;padding-top:12px;padding-bottom:9px"> &nbsp; </td>
                            </tr></tbody></table>
                          </td>
                        </tr>
                      </tbody>
                      </table>
                      </div>';

          
        // $data = json_encode(array("emailid" =>$emailto, "contents"=>$body, "subject"=>$subject));
        // echo $data;
        // ************* Call API:
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, "https://sfrtracker.azurewebsites.net/webresources/msemailer/sendEmail_webmail");
        // curl_setopt($ch, CURLOPT_POST, 1);// set post data to true
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);   // post data
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $json = curl_exec($ch);
        // curl_close ($ch);
        
        // returned json string will look like this: {"code":1,"data":"OK"}
        // "code" may contain an error code and "data" may contain error string instead of "OK"
        // $obj = json_decode($json);
        
        // print_r($json); 
        
        // if ($obj->{'status'} == 'success')
        // {
        //   $result = "true";  
        // }else{
        //   $result = "Something went wrong, plz try after sometime !!!.";
        // }
          
               
        //   $body =  "<div style='background:#0089e2;padding:18px;color:#fff;font-size:18px; max-width:700px; width:100%;margin:0 auto;'><p>".$message." <br/><br/> From : ".$name.'<br>'.$emailfrom.'</p></div>'; 
        //   $mail->sendnoreplyMail($emailto,$emailfrom,$body,$subject);
        //   $mail = new PHPMailer();
        if ($mail->sendnoreplyMail($emailfrom,$emailto,$body,$subject))
        {
          $result = "true";  
        }else{
          $result = "false";
        }
          
      }
      else
      { 
        $result = "All fields are required!!!.";
      } 
          

    echo $result;
}
