<?php

// code here:

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_Post['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "omarsumon1030@gmail.com";
    $headers = "From: " . $mail;
    $txt = "You Have Gotten an Email From: " .$mail.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}