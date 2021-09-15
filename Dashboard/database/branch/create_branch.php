<?php include '../db_connection.php';

$b_name = $_POST['branchname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$password = md5($pass);
$address = $_POST['address'];
$manager = $_POST['manager'];
$contact = $_POST['contact'];


$sql = "INSERT INTO acctable (Names, Branch_Manager, Addresss, Phone, Positions, Email, Passwords) Values ('$b_name', '$manager', '$address', '$contact','branch','$email','$password')";

// create table
$tbl = "CREATE TABLE branch_$b_name (
    ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_id INT(50),
    order_status VARCHAR(20)
)";


if (($conn->query($sql) === TRUE) and ($conn->query($tbl) === TRUE)) {
    echo "<h1>Sucessfully Added</h1>";
    header('location:../../branch.php');
}
$conn->close();
?>
