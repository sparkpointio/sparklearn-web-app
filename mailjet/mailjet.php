<?php
include("./php-mailjet-v3-simple.class.php");
//include('php-mailjet.class-mailjet-0.1.php');

$apiKey = '67aa883ca6db9450ccca857983ba983b';
$secretKey = '740ea5b02c92252385278f399be9bf07';

$mj = new Mailjet($apiKey, $secretKey);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo('name:'.$name.' email:'.$email.' message:'.$message);
    $params = array(
        'method' => 'POST',
        'from' => $email,
        'to' => 'christianrosales.salvadora@bicol-u.edu.ph',
        'subject' => 'Connect with Us',
        'text' => $message
    );
    
    $result = $mj->sendEmail($params);

}
?>