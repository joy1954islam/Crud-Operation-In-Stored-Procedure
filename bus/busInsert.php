<?php
include('database.php');
if(isset($_POST['insert']))
{
	// $code=$_POST['code'];
	$name=$_POST['name'];
	$bus_from=$_POST['bus_from'];
	$bus_to=$_POST['bus_to'];
	$bus_date=$_POST['bus_date'];
	$bus_time=$_POST['bus_time'];
	$bus_class=$_POST['bus_class'];
	$seat_number=$_POST['seat_number'];
	$price=$_POST['price'];

	// Code for execute the Store Procedure
	$sql=mysqli_query($con,"CALL bus_Insert('$name','$bus_from','$bus_to','$bus_date','$bus_time','$bus_class','$seat_number','$price')");
if($sql)
{
echo "<script>alert('Data Inserted');</script>";
header('location: forms.php');
}
else
{
echo "<script>alert('not inserted');</script>";
}
 }
?>