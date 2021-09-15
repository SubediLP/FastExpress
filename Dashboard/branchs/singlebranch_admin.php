<?php

if (!isset($_GET['view'])) {
    header('Location: ../branch.php');
}
 else {

    include '../database/db_connection.php';

    $sn = $_GET['view'];

    $sql = "SELECT * FROM acctable WHERE ID = '$sn'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $user= $row['Names'];
    $mail= $row['Email'];

    include 'singlebranch.php';
}
?>