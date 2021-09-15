<?php
session_start();

if (!isset($_SESSION['uName'])) {
    echo 'you are not log in';
    header('Location: ../../index.html');
    
}
else
{
    $user =  $_SESSION['uName'];
    $mail = $_SESSION['uEmail'];
    include 'singlebranch.php';
}
?>