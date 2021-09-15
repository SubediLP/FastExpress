<?php

include "config.php";
session_start();
if($_POST)
{
	$name=$_SESSION['uName'];
    $msg=$_POST['msg'];
    
	// $sql="INSERT INTO `chat`(`name`, `message`) VALUES ('".$name."', '".$msg."')";
	$sql="INSERT INTO chat(name,message) VALUES ('$name', '$msg')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: ../chat.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>