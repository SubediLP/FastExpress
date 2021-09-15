<?php include '../db_connection.php';

if (isset($_GET['del'])) {
    $sn = $_GET['del'];
	$sql = "DELETE FROM acctable WHERE ID = '$sn' ";
    if ($conn->query($sql) === TRUE) {
        header('location:..\..\branchs\singlebranch_login.php');
    }
}

?>