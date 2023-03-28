<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "tankikingo@gmail.com";
$subject = "From: $name <$email>";
$body = "Name $name \nEmail: $email\nmessage: $message";
$sender = "From: $email";

if (mail($to, $subject, $body, $sender)) {
  echo "Email sent successfully";
} else {
  echo "there was an error sending your email";
}
