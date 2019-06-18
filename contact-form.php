<?php

if  (isset($POST["submit"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["mail"];
    $message = $_POST["message"];

    $mailTo ="concretefox@outlook.com";
    $headers ="From: ".$mailFrom;
    $txt ="You have received an e-amil from " .$name.".\n\n".$message;

    mail( $mailTo, $subject,  $txt,  $headers);
    header("Location: index.php?mailsend");

}

?>