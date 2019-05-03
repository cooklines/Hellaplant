<?php
    // variables start
  $email = "";

  $email =  trim($_POST['email']);
  // variables end

  // email address starts
  $emailAddress = 'ali@cooklines.com';
  // email address ends

  $subject = "Hellaplant Newsletter Signup";
  $message = "<strong>Email:</strong> $email ;

  $headers .= 'From: '. 'Hellplant' . '<' . $email . '>' . "\r\n";
  $headers .= 'Reply-To: ' . $email . "\r\n";

  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  //send email function starts
  mail($emailAddress, $subject, $message, $headers);
  //send email function ends
?>
