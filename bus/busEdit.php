<?php 
include('navbar.php');
include('database.php');
	if (isset($_GET['edit'])) {
		$query = "CALL bus_edit('".$_GET["edit"]."')";
        $record = mysqli_query($con, $query);  

		 // if(count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$code = $n['code'];
			$name = $n['name'];
			$bus_from = $n['bus_from'];
		    $bus_to = $n['bus_to'];
		    $bus_date = $n['bus_date'];
		    $bus_time = $n['bus_time'];
		    $bus_class = $n['bus_class'];
		    $seat_number = $n['seat_number'];
		    $price = $n['price'];
		 // }

	}
?>

<div class="container">

  <h2>Bus Edit Form</h2>
  <form action="busUpdate.php" method="POST">
  	<input type="hidden" name="code" value="<?php echo $code; ?>">
    <div class="form-group">
      <label for="name">Bus Name :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter bus Name" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
      <label for="bus_from">Bus From :</label>
      <input type="text" class="form-control" id="bus_from" placeholder="Enter bus from" name="bus_from" value="<?php echo $bus_from; ?>">
    </div>
    <div class="form-group">
      <label for="bus_to">Bus To :</label>
      <input type="text" class="form-control" id="bus_to" placeholder="Enter bus to" name="bus_to" value="<?php echo $bus_to; ?>">
    </div>
    <div class="form-group">
      <label for="bus_date">Bus Date :</label>
      <input type="Date" class="form-control" id="bus_date" placeholder="Enter bus date" name="bus_date" value="<?php echo $bus_date; ?>">
    </div>
    <div class="form-group">
      <label for="bus_time">Bus Time :</label>
      <input type="Time" class="form-control" id="bus_time" placeholder="Enter bus time" name="bus_time" value="<?php echo $bus_time; ?>">
    </div>
    <div class="form-group">
      <label for="bus_class">Bus class :</label>
      <input type="text" class="form-control" id="bus_class" placeholder="Enter bus class" name="bus_class" value="<?php echo $bus_class; ?>">
    </div>
    <div class="form-group">
      <label for="seat_number">Bus Seat Number :</label>
      <input type="text" class="form-control" id="seat_number" placeholder="Enter bus seat number" 
              name="seat_number" value="<?php echo $seat_number; ?>">
    </div>
    <div class="form-group">
      <label for="price">Bus Seat Number :</label>
      <input type="text" class="form-control" id="price" placeholder="Enter bus price" name="price" value="<?php echo $price; ?>">
    </div>
    <div class="form-group">
      <button type="submit" name="update" id="update" class="btn btn-success">Update</button>
    </div>
      
  </form>

</div>
