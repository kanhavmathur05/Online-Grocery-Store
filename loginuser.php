<?php
session_start();
$useremailid=$_POST["useremailid"];
$userpassword=$_POST["userpassword"];
$conn=mysqli_connect("localhost","root","","EGroceryStore1");
if($conn==false)
{
	die("Error: Could not connect");
}
$sql="SELECT * FROM Users";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		if($row["user_email"]==$useremailid && $row["user_password"]==$userpassword)
		{
			$_SESSION["user_id"]=$row["user_id"];
			echo $_SESSION["user_id"];
			header("Location:index.php");
		}
		else{
			echo "<script>alert('Invalid Username & Password')</script>";
			header("Refresh:1;login.php");
		}
	}
}
?>