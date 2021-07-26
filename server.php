<?php


// code here:

# An if satement that checks if:...
if (isset($_POST['submit'])) {
    // find user input
    $name = $_POST['name'];
    $mail = $_Post['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // variables for actual code
    $mailTo = "youremail@email.com";
    $headers = "From: " . $mail;
    $txt = "You Have Gotten an Email From: " .$mail.".\n\n".$message;

    // this does the stuff
    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}