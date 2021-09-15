<?php include'../db_connection.php';

$b_name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$password = md5($pass);
$address = $_POST['address'];
$manager = $_POST['manager'];
$contact = $_POST['contact'];
$id = $_POST['id'];
$sql = "UPDATE acctable SET Names='$b_name', Email='$email', Passwords='$password', Addresss='$address', Branch_Manager='$manager', Phone='$contact' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Sucessfully Added</h1>";
    header('location:../../branch.php');
}
$conn->close();

?>