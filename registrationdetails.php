<?php
	$conn=mysqli_connect("localhost","root","","EGroceryStore1");
	if($conn==false)
	{
		die("Could not connect to database".mysqli_connect_error());
	}
	$user_firstname=$_POST['user_firstname'];
	$user_lastname=$_POST['user_lastname'];
	$user_contactno=$_POST['user_contactno'];
	$user_address=$_POST['user_address'];
	$user_city=$_POST['user_city'];
	$user_state=$_POST['user_state'];
	$user_email=$_POST['user_email'];
	$user_password=$_POST['user_password'];

	$sql="INSERT INTO Users (user_firstname,user_lastname,user_contactno,user_address,user_city,user_state,user_email,user_password) VALUES ('$user_firstname','$user_lastname','$user_contactno','$user_address','$user_city','$user_state','$user_email','$user_password')";

	if(mysqli_query($conn,$sql))
	{
		echo "Not Registered";
		header('Location:index.php');
	}
	else
	{
		
		header('Location:index.php');
	}
?>