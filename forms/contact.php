<?php

  $name = $_POST['full_name'];

  $visitor_email = $_POST['email'];

  $subject = $_POST['subject'];

  $message= $_POST['message'];


  $email_from = $visitor_email;

  $to = "info@sreenivasaminfotech.com";  //can include more than one recipients seperated by ','

  $email_subject = "CONTACT | From: $name | Reg: $subject";

  $email_body = "From: $name \n".
                "Email: $visitor_email \n".
                "Query: $message";
 
  mail($to,$email_subject,$email_body);

  $location = 'http://sreenivasaminfotech.com/sreenivasam_infotech_support.html';
  header("Location: $location");

?>

