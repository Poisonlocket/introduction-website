<?php

if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $question = $_POST['question'];
    $emailfrom = $_POST['email'];
    $subject = $_POST['subject'];

    $mailto = 'loribono@gmx.ch';
    $headers = 'From: '.$emailfrom;
    $txt = 'You have a recieved an e-mail from'.$firstname.".$lastname.\n\n".$question;

    mail($mailto, $subject, $question, $headers);
    header('Location: index.php?mailsend');

}

?>