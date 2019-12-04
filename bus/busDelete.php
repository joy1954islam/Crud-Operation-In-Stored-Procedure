<?php 
include('database.php'); 

if (isset($_GET['del'])) {
  		$query = "CALL bus_delete('".$_GET["del"]."')";
        mysqli_query($con, $query);  
        echo 'Data Deleted';  
        header("location: busView.php");
  }
     
?>

