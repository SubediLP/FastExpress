<?php include '../db_connection.php';
if (isset($_POST['upload'])) {

  $image = $_FILES['image']['name'];
  $otherfile = $_FILES['file']['name'];
  // image file directory
  $target_img = "images/".basename($image);
  $target_file = "images/".basename($otherfile);

  $names = $_POST["name"];
  $addresss = $_POST["address"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $phone = $_POST["phone_no"];
  $positions = $_POST["positions"];
  $emails = $_POST["email"];
  $pass = $_POST["password"];
  $password = md5($pass);

  $sql = "INSERT INTO acctable (Names, Addresss, Dob, Gender, Phone, Positions, Email, Passwords, Images, OFile) Values ('$names','$addresss','$dob','$gender','$phone','$positions','$emails','$password','$image','$otherfile')";
  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }
  if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    $msg = "File uploaded successfully";
  } else {
    $msg = "Failed to upload File";
  }

  if ($conn->query($sql) === TRUE) {
    echo "<h1>Sucessfully Added</h1>";
    header('location:../../admin_accounts.php');
  }

  $conn->close();
}
?>
