<?php
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email format invalid.";
die();
}
}
if ($subject === ''){
echo "Subject cannot be empty.";
die();
}
if ($message === ''){
echo "Message cannot be empty.";
die();
}
$content="Email: $email \nMessage: $message";
$recipient = "lineupbarbershoppe@gmail.com";
mail($recipient, $subject, $content) or die("Error!");
echo "Email sent!";
?>