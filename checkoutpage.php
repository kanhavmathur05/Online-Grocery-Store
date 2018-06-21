<?php
session_start();
date_default_timezone_set("Asia/Calcutta");
$orderdate=date("Y-m-d");
$conn=mysqli_connect("localhost","root","","EGroceryStore1");
if($conn==false)
{
	die("ERROR;Could not connect to database".mysqli_connect_error());
}
$uid=$_SESSION["user_id"];
$sa="SELECT user_address FROM Users WHERE user_id=$uid";
$result=$conn->query($sa);
$row=$result->fetch_assoc();
$shippingaddress=$row['user_address'];
//echo $shippingaddress;
foreach($_SESSION["shopping_cart"] as $key => $values)
{

	$itemprice=$values['item_price'];
	$itemid=$values['item_id'];

//$sql="INSERT INTO OrderDetails (user_id) Values ('$uid')";	
$sql="INSERT INTO OrderDetails (user_id,product_id,price,order_date,shipping_address) Values ('$uid','$itemid','$itemprice','$orderdate','$shippingaddress')";	
$result2=$conn->query($sql);
	//$sql="SELECT * FROM USERS";		
	//echo $itemid;
	//echo $itemprice;

//	 echo "<img src='ProductImages/".$values['item_image']."'width=232 height=200>";
//	 echo $values['item_name'];
	 
//	 echo $values['item_price'];
}
header("Location:checkout.php");

//header("Location:index.php");  //Change it accordingly
?>