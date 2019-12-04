<?php 
  session_start();
  include('database.php');
  // initialize variables
  $name = "";
  $bus_from = "";
  $bus_to = "";
  $bus_date = "";
  $bus_time = "";
  $code = 1;
  $bus_class = "";
  $seat_number = "";
  $price = "";
  if (isset($_POST['update'])) {

    $code = $_POST['code'];
    $name=$_POST['name'];
    $bus_from=$_POST['bus_from'];
    $bus_to=$_POST['bus_to'];
    $bus_date=$_POST['bus_date'];
    $bus_time=$_POST['bus_time'];
    $bus_class=$_POST['bus_class'];
    $seat_number=$_POST['seat_number'];
    $price=$_POST['price'];

    mysqli_query($con, "CALL bus_Update('".$code."','".$name."','".$bus_from."','".$bus_to."','".$bus_date."','".$bus_time."','".$bus_class."','".$seat_number."','".$price."')");
  
    header('location: busView.php');
  }
  ?>