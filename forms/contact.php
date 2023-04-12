<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  /*
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = '1sqftproptech@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/
  $to = "hello@nsqft.com";
  $subject = $_POST['subject'];
  
  $message = '<table width="100%" cellpadding="0" cellspacing="0" style="Margin-top: 0;font-family: Tahoma,sans-serif;font-size: 14px;">
  <tr>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#212121;"> Name </td>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#d10001;">'.$_POST['name'].'</td>
  </tr>
  <tr>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#212121;"> Email </td>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#d10001;">'.$_POST['email'].'</td>
  </tr>
  <tr>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#212121;"> Subject </td>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#d10001;">'.$_POST['subject'].'</td>
  </tr>   
  <tr>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#212121;"> Message </td>
  <td style="padding:10px 0; border-bottom:1px solid #ccc;color:#d10001;">'.$_POST['message'].'</td>
  </tr>   
    </table>';
  
  $header = "From:".$_POST['email']." \r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";
 
  $retval = mail ($to,$subject,$message,$header);
  
  if( $retval == true ) {
    echo "Message sent successfully.";
  }else {
    echo "Message could not be sent.";
  }
?>
