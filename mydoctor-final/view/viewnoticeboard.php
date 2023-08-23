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
    <link rel="stylesheet" href="../CSS/homepage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 1rem;
  background-color: #fff;
  color: #333;
}

th, td {
  padding: 0.5rem;
  text-align: center;
  border: 1px solid #ccc;
}
thead th {
  background-color: #2F4F4F;
  color: white;
  font-weight: bold;
  text-align: center;
  padding: 10px;
}

th {
  background-color: #eee;
}
button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  cursor: pointer;
  margin-top: 1rem;
}

button a {
  color: #fff;
  text-decoration: none;
}

button:hover {
  background-color: #0069d9;
}

  </style>


    <div class="container">
<table class="table table-striped table-bordered" border="1">
  <thead>
    <tr>
      <th>Serial No.</th>
      <th>Name</th>
      <th>Notice</th>
    </tr>
  </thead> 
  <tbody>
    <?php
      $con = getConnection();
      $sql="select * from `notice`";
      $result=mysqli_query($con,$sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["adminname"] . "</td>";
        echo "<td>" . $row["notice"] . "</td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="../bar/top1.php">Back</a></button>

</body>
</html>
