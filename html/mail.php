<?php
extract($_POST)
$to = "nishihitesh@gmail.com";
$subject = "Farm house inquiry";
$txt = "Hello! I'm $name. $msg. My email id: $email";
$headers = "From: admin@silverwingtechnologies.com" . "\r\n" .

mail($to,$subject,$txt,$headers);
header("Location: index.html");
?>