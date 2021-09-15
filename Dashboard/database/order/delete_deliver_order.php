<?php include '../db_connection.php';

if (isset($_GET['del'])) {
    $sn = $_GET['del'];
	$sql = "DELETE FROM add_item WHERE ID = '$sn' ";
    if ($conn->query($sql) === TRUE) {
        header('location:../../order_action.php');
    }
}

if (isset($_GET['deliver'])) {
    $sn = $_GET['deliver'];
	$sql = "UPDATE add_item SET P_Status = 'Delivered' WHERE ID = '$sn' ";
    if ($conn->query($sql) === TRUE) {
        header('location:../../order_action.php');
    }
}

?>