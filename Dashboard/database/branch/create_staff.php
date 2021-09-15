<?php include '../db_connection.php';


  $image = $_FILES['image']['name'];
  // image file directory
  $target_img = "../accounts/images/" . basename($image);

  $names = $_POST["name"];
  $addresss = $_POST["address"];
  $phone = $_POST["contact"];
  $positions = "Staff";
  $emails = $_POST["email"];
  $pass = $_POST["password"];
  $password = md5($pass);
    
  $branch = $_POST['branch'];

  $sql = "INSERT INTO acctable (Names, Addresss, Phone, Positions, Email, Passwords, Images, branch_name) Values ('$names','$addresss','$phone','$positions','$emails','$password','$image','$branch')";
  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }
  if ($conn->query($sql) === TRUE) {
    echo "<h1>Sucessfully Added</h1>";
    header('location:..\..\branchs\singlebranch_login.php');
  }
  $conn->close();
?>
