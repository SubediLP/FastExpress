<?php include '../db_connection.php';

$sid = $_POST['sid'];
$b_name = $_POST['staffname'];

$sql = "UPDATE add_item SET Staff = '$b_name' WHERE ID = '$sid' ";


if ($conn->query($sql) === TRUE){
    echo "<h1>Sucessfully Updated</h1>";
    header('location:../../branchs/singlebranch_login.php');
}
else{
    echo"Error";
}

$conn->close();

?>