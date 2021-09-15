<?php include '../db_connection.php';
if (isset($_POST['upload'])) {

  $image = $_FILES['image']['name'];

  // image file directory
  $target_img = "images/".basename($image);

  $id = $_POST['sid'];
  $names = $_POST["name"];
  $addresss = $_POST["address"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $phone = $_POST["phone_no"];
  $positions = $_POST["positions"];
  $emails = $_POST["email"];
  $pass = $_POST["password"];
  $password = md5($pass);
  
  $sql = "UPDATE acctable SET Names='$names', Addresss='$addresss', Dob='$dob', Gender='$gender', Phone='$phone', Positions='$positions', Email='$emails', Passwords='$password', Images='$image' WHERE ID='$id'";
  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }

  if ($conn->query($sql) === TRUE) {
    echo "<h1>Sucessfully Updated</h1>";
    header('location:../../admin_accounts.php');
  }

  $conn->close();
}
?>