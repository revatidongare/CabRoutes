<?php

if(isset($_POST['contact'])){
  

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
    $message = $_POST['message'];
  $to = $email;
  $subject = "Hi " . $name. " " . ", welcome to Cab Routes....!";
  $body = '
Dear ' . $name . ',
  Thank you for joining our site. Your request has been successfully submitted to our end our team will contact you shortly.
  Kind Regards,
Cab Routes.
  ';
  $headers = 'From: contact@journeyworlddmc.com';

  if (mail($to, $subject, $body, $headers)) {
    header('location:contact.php?p=3');
  }
  else{
    echo("email failed to sent to user whose email is " . $email);
  }

  // email end

  //self mail
$to_email1 = 'contact@journeyworlddmc.com';
  $subject1 = ' Cab Routes Site Response  ';
  $message1 = 'User_name: '.$name.
  "\n" . 'email: '.$email.
  "\n".
  'ph.no: '.$phone.
  "\n".
  'Message: '.$message.
  
  $headers1 = 'From: '.$email;
  mail($to_email1,$subject1,$message1,$headers1);
  //self email end

    }
    else{

      header("location:contact.php?q=101");
    }



?>

