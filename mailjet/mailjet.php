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
        'from' => 'loboysalvadora.26@gmail.com',
        'to' => 'christianrosales.salvadora@bicol-u.edu.ph',
        'subject' => 'Connect with Us',
        'text' => "Fullname: $name\r\nEmail: $email\r\nMessage: $message"
    );
    
    $result = $mj->sendEmail($params);
}
header('Location: '.$CFG->wwwroot);
?>