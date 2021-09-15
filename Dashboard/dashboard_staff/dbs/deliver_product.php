
<?php include'../../database/db_connection.php';

if (isset($_GET['deliver'])) {
    $sn = $_GET['deliver'];
	$sql = "UPDATE add_item SET P_Status = 'Delivered' WHERE ID = '$sn' ";
    if ($conn->query($sql) === TRUE) {
        header('location:../singlestaff.php');
    }
}

?>

