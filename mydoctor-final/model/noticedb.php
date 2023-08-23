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
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
}

thead th {
  background-color: #2F4F4F;
  color: white;
  font-weight: bold;
  text-align: center;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #f2f2;
}

td {
  text-align: left;
  padding: 10px;
  border: 1px solid #FFFACD;
}
button {
  background-color: #2F4F4F;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
button:hover {
  background-color: #3e8e41;
}

button a {
  color: white;
  text-decoration: none;
}
  </style>
    <div class="container">
        <button><a href=" ../view/notice.php">Add Notice</a></button><br><br>

<table class="table table-striped table-bordered" border="1">
  <thead>
    <tr>
      <th>Serial No.</th>
      <th>Name</th>
      <th>Notice</th>
      <th>Operation</th>
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
        echo "<td><a href='../controller/editnotice.php?id=" . $row["id"] . "'>Edit</a> | <a href='../controller/deletenotice.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
      }
      
    ?>
  </tbody>
</table>
<button><a href="../view/homepage.php">Back</a></button>

</body>
</html>
