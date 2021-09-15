<?php include '../db_connection.php';

$paid = $_POST["receivedpay"];
$unpaid = $_POST["remainingpay"];
$id=$_POST['id'];

$sql = "UPDATE add_item SET  paid_payment='$paid',rem_payment='$unpaid' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Sucessfully Updated</h1>";
    header('location:../../total_payment.php');
  }

  $conn->close();
?>