<?php
include('../config.php');
include("./php-mailjet-v3-simple.class.php");
//include('php-mailjet.class-mailjet-0.1.php');

$mj = new Mailjet($CFG->mailjet_user, $CFG->mailjet_key);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $params = array(
        'method' => 'POST',
        'from' => 'no-reply@sparkpoint.io',
        'to' => 'bootcamp@sparkpoint.io',
        'subject' => 'Connect with Us',
        'text' => "Fullname: $name\r\nEmail: $email\r\nMessage: $message"
    );
    
    $result = $mj->sendEmail($params);
}else{
    echo('error');
}
header('Location: '.$CFG->wwwroot);
?>