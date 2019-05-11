<?php
if($_POST){
    $contactName = $_POST['contactName'];
    $contactEmail = $_POST['contactEmail'];
    $contactSubject = $_POST['contactSubject'];
    $contactMessage = $_POST['contactMessage'];

//send email
    mail("prvnsp9@gmail.com", "This is an email from:" .$email, $contactSubject, $message);
}
?>