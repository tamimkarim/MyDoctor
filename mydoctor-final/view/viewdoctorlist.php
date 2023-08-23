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
  margin-bottom: 20px;
}

th, td {
  padding: 10px;
  text-align: left;
  vertical-align: top;
}

th {
  background-color: #008B8B;
  font-weight: bold;
  border-bottom: 2px solid #ddd;
}

td {
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #F0F8FF;
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
    </tr>
  </thead> 
  <tbody>
    <?php
      $con = getConnection();
      $sql="select * from `doctor`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["specialist"] . "</td>";
        echo "<td>" . $row["institution"] . "</td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="../bar/top1.php">Back</a></button>
</body>
</html>
