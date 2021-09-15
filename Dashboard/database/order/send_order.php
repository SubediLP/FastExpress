<?php include '../db_connection.php';

$sid = $_POST['sid'];
$b_name = $_POST['branchname'];

$sql = "UPDATE add_item SET Branch = '$b_name' WHERE ID = '$sid' ";

$data = "INSERT INTO $b_name (order_id, order_status) VALUES ('$sid', '$b_name') ";

if ( ($conn->query($sql) === TRUE) and ($conn->query($data) === TRUE) ) {
    echo "<h1>Sucessfully Updated</h1>";
    header('location:../../order_action.php');
}
else{
    echo"Error";
}

$conn->close();

?>