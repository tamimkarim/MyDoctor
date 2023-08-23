<?php
include '../model/db.php';
if (isset($_GET['msg'])) {
  $msg = filter_var($_GET['msg'], FILTER_SANITIZE_STRING);
  echo "<div class='alert alert-success'>$msg</div>";
}
?>
<html lang="en">
<head>
    <title>Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style>
  table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
}

th, td {
  padding: 12px;
  text-align: left;
  border: 1px solid #2F4F4F;
}

th {
  background-color: #2F4F4F;
  color: #FFFFFF;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #F0F8FF;
}

button {
  margin-bottom: 20px;
  padding: 10px 20px;
  border: none;
  background-color: #2F4F4F;
  color: #F0F8FF;
  font-size: 16px;
  cursor: pointer;
}

a {
  color: #2F4F4F;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
button a {
  background-color: #2F4F4F;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
}

button a:hover {
  
  color: #fff;
}


</style>
    <div class="container">
<table class="table table-striped table-bordered" border="1">
  <thead>
    <tr>
      <th>Serial No.</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Specialist</th>
      <th>Institution</th>
      <th>salary</th>
    </tr>
  </thead> 
  <tbody>
    <?php
      $con = getConnection();
      $sql="select * from `doctor`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["specialist"] . "</td>";
        echo "<td>" . $row["institution"] . "</td>";
        echo "<td>" . $row["salary"] ."| <a href='payment.php'>Payment</a></td>";
        echo "</tr>";
      }  
    ?>
  </tbody>
</table>
<button><a href="../bar/top1.php">Back</a></button>
</body>
</html>
