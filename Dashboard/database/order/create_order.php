<?php include'../db_connection.php';

//insert Data
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

$status = "Active";


$sql = "INSERT INTO add_item (S_Name, S_Address, S_Phone, Dates, R_Name, R_Address, R_Phone, about, paid_payment, rem_payment, P_Status)
 VALUES ('$s_Name','$s_Address', '$s_Phone', '$date','$r_Name', '$r_Address','$r_Phone', '$about', '$paid', '$unpaid', '$status')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>New record created successfully</h1>";
  header('location:../../main_order.php');  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
