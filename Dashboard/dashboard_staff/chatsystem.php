<?php

$servername = "localhost";
$username = "root";
$password = "";
$select_db = "fast_express";

// Create connection
$conn = new mysqli($servername, $username, $password, $select_db);

if($_POST)
{
	$name=$_POST['name'];
    $msg=$_POST['msg'];
    
	// $sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";
	$sql="INSERT INTO chat(name,message) VALUES ('$name', '$msg')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: singlestaff.php#chats');
	}
	else
	{
		echo "Something went wrong";
	}
	
}

?>