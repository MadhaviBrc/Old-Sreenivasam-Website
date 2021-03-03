<?php

  $name = $_POST['name'];

  $visitor_email = $_POST['email'];

  $interested_in = $_POST['interest'];

  $link_to_profile = $_POST['link'];

  $cover_note= $_POST['message'];


  $email_from = $visitor_email;

  $to = "careers@sreenivasaminfotech.com";  //can include more than one recipients seperated by ','

  $email_subject = "JOB APPLICATION | Candidate Name: $name";

  $email_body = "Candidate Name: $name \n".
                "Role: $interested_in \n".
                "Profile link: $link_to_profile \n".
                "Summary: $cover_note";


  mail($to,$email_subject,$email_body);

  $location = 'http://sreenivasaminfotech.com/sreenivasam_infotech_we-are-hiring.html';
  header("Location: $location");

?>

