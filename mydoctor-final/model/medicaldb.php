<?php
include '../model/db.php';
if (isset($_GET['msg'])) {
    $msg = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);
    echo "<div class='alert alert-success'>$msg</div>";
  }
  ?>
  <html lang="en">
  <head>
      <title>Medicine List</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  </head>
  <body>
  
      <div class="container">
        <br>
          <button><a href="medicalhistory.php">New Appointment</a></button><br><br>
<html lang="en">
<head>
    <title>Payment Received</title>
</head>
<body>

<table class="table table-striped table-bordered" border="1">
  <thead>
  <tr>

        <th>Patient Name</th>
        <th>Phone</th>
        <th>Problem</th>
        <th>Doctor Name</th>

    </tr>
  </thead> 
  <tbody>
    <?php
      $con = getConnection();
      $sql="SELECT * FROM `medical` WHERE 1" ;
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["problem"] . "</td>";
        echo "<td>" . $row["doctor"] . "</td>";
        echo "</tr>";
      }   
    ?>
  </tbody>
</table>
<button><a href="top1.php">Back</a></button>

</body>
</html>
