<?php 
include('navbar.php');
include('database.php');
?>
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <?php $result = mysqli_query($con, "CALL bus_View()"); ?> 

  <table class="table table-bordered table-dark">
    <center><h1>Bus View</h1></center>
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">bus_from</th>
        <th scope="col">bus_to</th>
        <th scope="col">bus_date</th>
        <th scope="col">bus_time</th>
        <th scope="col">bus_class</th>
        <th scope="col">seat_number</th>
        <th scope="col">price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
              <!-- <td><?php echo $row['code']; ?></td> -->
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['bus_from']; ?></td>
              <td><?php echo $row['bus_to']; ?></td>
              <td><?php echo $row['bus_date']; ?></td>
              <td><?php echo $row['bus_time']; ?></td>
              <td><?php echo $row['bus_class']; ?></td>
              <td><?php echo $row['seat_number']; ?></td>
              <td><?php echo $row['price']; ?></td>
             
              <td>
                <a href="busEdit.php?edit=<?php echo $row['code']; ?>" name="edit" class="edit_btn" >Edit</a>
              </td>
              <td>
                   <a href="busDelete.php?del=<?php echo $row['code']; ?>" class="delete_btn" >delete</a>
              </td>
          </tr>
        <?php } ?>
      </tr>
      
    </tbody>
  </table>

