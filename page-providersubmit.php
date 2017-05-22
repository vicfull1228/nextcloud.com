<?php
if(isset($_POST['email'])) { 
   function died($error) {
    // error code goes here
        echo "We are very sorry, but there were error(s) found with the form you submitted: ";
        echo "<br />";
        echo $error."<br />";
        echo  $hostingurl."<br />";
        echo "Please go back and fix these errors.<br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['organization']) ||
        !isset($_POST['yourname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['hostingurl']) ||
        !isset($_POST['targetcountries']) ||
        !isset($_POST['hosting']) ||
        !isset($_POST['free']) ||
        !isset($_POST['description']) ||
        !isset($_POST['image']))
        {
        died('We are sorry, but there appears to be a problem with the form you submitted - did you fill in all fields?'); }
    $organization= $_POST['organization']; // required
    $yourname = $_POST['yourname']; // required
    $phone= $_POST['phone']; // required
    $email_from = $_POST['email']; // required
    $targetcountries = $_POST['targetcountries']; // required
    $hosting = $_POST['hosting']; // required
    $free = $_POST['free']; // required
    $description = $_POST['description']; // required
    $image = $_POST['image']; // required
    $hostingurl= $_POST['hostingurl']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,10}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$yourname)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$organization)) {
    $error_message .= 'The organization you entered does not appear to be valid.<br />';
    }
    $string_exp = "/^((\+|00)\d{1,3})?(\d+|\s+)+\d$/";
  if(!preg_match($string_exp,$phone)) {
    $error_message .= 'The phone number you entered does not appear to be valid, did you add a country code like +49?<br />';
    }
  if(strlen($description) < 15) {
    $error_message .= 'Your description is really short! <br />';
  }
  if(strlen($targetcountries) < 2) {
    $error_message .= 'You did not enter any country code! <br />';
  }
  if(!filter_var($hostingurl, FILTER_VALIDATE_URL)) {
    $error_message .= 'The URL you entered does not appear to be valid.<br />';
  }
  if(strlen($image) < 7) {
    $error_message .= 'The link to an image you entered does not appear to be valid.<br />';
  }
  if(!filter_var($image, FILTER_VALIDATE_URL)) {
    $error_message .= 'The link to an image you entered does not appear to be valid.<br />';
  }
  if(RECAPTCHA_SECRET !== '' && isset($_POST['g-recaptcha-response'])) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_SECRET, 'response' => $_POST['g-recaptcha-response'])));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    $server_output = json_decode($server_output, true);
    curl_close($ch);
    if (!isset($server_output['success']) || $server_output['success'] !== true) {
      $error_message .= 'The captcha result was invalid.<br />';
    }
  } else {
    $error_message .= 'Captcha code is missing.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
        function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
// the app review mailing list address
    $email_to = "jos@nextcloud.com";
    $email_subject = "Provider_form";
    $email_message .= "Organization: ".clean_string($organization)."\n";
    $email_message .= "Contact name: ".clean_string($yourname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "URL to Nc: ".clean_string($hostingurl)."\n";
    $email_message .= "Hosting type: ".clean_string($hosting)."\n";
    $email_message .= "Target countries: ".clean_string($targetcountries)."\n";
    $email_message .= "Free plan or not: ".clean_string($free)."\n";
    $email_message .= "Description: ".clean_string($description)."\n";
    $email_message .= "Image: ".clean_string($image)."\n";
// create email headers
    $headers = 'From: no-reply@nextcloud.com'."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'Cc: '.$email_from;
// Send the email to the list
    @mail($email_to, $email_subject, $email_message, $headers);
// Second email to subscribe to the mailing list
//     @mail("frank@nextcloud.org", "website form", "website form", $headers);
 ?>

    <!-- success html here -->
<div class="page-header">
	<h1>Thanks for letting us know you're providing Nextcloud to users!</h1>
</div>
<p>We will add you to the provider page in the next few weeks. Note that this can take a while, we're getting a lot of requests! If you have not been added within 4 weeks, <a href="/contact">contact us</a>.</p>
<?php
}
?>
