<?php include '../db_connection.php';

$s_Name = $_POST["sname"];
$s_Address = $_POST["saddress"];
$s_Phone = $_POST["sphone"];
$date = $_POST["sdate"];
$r_Name = $_POST["rname"];
$r_Address = $_POST["raddress"];
$r_Phone = $_POST["rcontact"];
$about = $_POST["aboutitem"];
$paid = $_POST["receivedpay"];
$unpaid = $_POST["remainingpay"];

$id=$_POST['id'];

$sql = "UPDATE add_item SET S_Name='$s_Name',S_Address='$s_Address',S_Phone='$s_Phone',Dates='$date',R_Name='$r_Name',R_Address='$r_Address',R_Phone='$r_Phone',about='$about',paid_payment='$paid',rem_payment='$unpaid' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Sucessfully Updated</h1>";
    header('location:../../order_action.php');
  }

  $conn->close();
?>