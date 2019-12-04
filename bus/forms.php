<?php 
include('navbar.php');
include('database.php');


 ?>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bus Form</h2>
  <form action="busInsert.php" method="POST">
    <!-- <div class="form-group">
      <label for="code">Bus Code:</label>
      <input type="text" class="form-control" id="code" placeholder="Enter bus code" name="code">
    </div> -->
    <div class="form-group">
      <label for="name">Bus Name :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter bus Name" name="name">
    </div>
    <div class="form-group">
      <label for="bus_from">Bus From :</label>
      <input type="text" class="form-control" id="bus_from" placeholder="Enter bus from" name="bus_from">
    </div>
    <div class="form-group">
      <label for="bus_to">Bus To :</label>
      <input type="text" class="form-control" id="bus_to" placeholder="Enter bus to" name="bus_to">
    </div>
    <div class="form-group">
      <label for="bus_date">Bus Date :</label>
      <input type="Date" class="form-control" id="bus_date" placeholder="Enter bus date" name="bus_date">
    </div>
    <div class="form-group">
      <label for="bus_time">Bus Time :</label>
      <input type="Time" class="form-control" id="bus_time" placeholder="Enter bus time" name="bus_time">
    </div>
    <div class="form-group">
      <label for="bus_class">Bus class :</label>
      <input type="text" class="form-control" id="bus_class" placeholder="Enter bus class" name="bus_class">
    </div>
    <div class="form-group">
      <label for="seat_number">Bus Seat Number :</label>
      <input type="text" class="form-control" id="seat_number" placeholder="Enter bus seat number" name="seat_number">
    </div>
    <div class="form-group">
      <label for="price">Bus Seat Number :</label>
      <input type="text" class="form-control" id="price" placeholder="Enter bus price" name="price">
    </div>
    <button type="submit" name="insert" id ="insert" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
