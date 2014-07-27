<?php

  //Email information
  $admin_email = "mriveras@gmail.com";
  // $email = $_REQUEST['email'];
  // $message = $_REQUEST['name'] || " : " || $_REQUEST['message'];
  
  $email = "c20024070@gmail.com";
  $message = "PRUEBA";
  $subject = "CONTACT FROM WEBSITE";
  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting me!";
 
?>