<?php

if (isset($_POST['submit'])) {

$name = $_POST['name'];

$subject = $_POST['subject'];

$mailform = $_POST['mail'];

$message = $_POST['message'];

$mailTO = "simonmajor@hotmail.se";
$heders = "From: ".$mailform;
$txt = "You have recived an e-mail from".$name.".\n\n".$message;

mail($mailTO, $subject, $txt, $heders);

header("Location: index.php?mailsend");
}
