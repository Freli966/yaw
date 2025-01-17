<?php


$name = $_post['name'];
$email = $_post['email'];
$services = $_post['services'];
$message = $_post['message'];



$mailheader = "From:" .$name. "<".$email. ">\r\n";

$recipient = "yawchase7@gmail.com";


mail($recipient, $services, $message, $mailheader)
or die("Error!");


echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>

</head>
<body>
    <div class="container">
        <h1>Thank you for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</body>
</html>








';


?>