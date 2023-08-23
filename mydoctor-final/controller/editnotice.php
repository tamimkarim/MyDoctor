<?php
include '../model/db.php';

$con = getConnection();
$sql = "SELECT * FROM `notice`";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {

  die("Notice does not exist.");
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

  $adminname =$_POST['adminname'];
  $notice =$_POST['notice'];


  $sql = "UPDATE `notice` SET `notice` = '$notice'";

  $result = mysqli_query($con, $sql);

  if ($result) {

    $msg = "Notice has been updated.";
  } else {

    $msg = "Error updating Notice with ID $id: " . mysqli_error($con);
  }

  header("Location: ../model/noticedb.php?msg=" . urlencode($msg));

  exit();
}
?>

<form method="post">
  <style>
    form {
  max-width: 600px;
  margin: auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}

form label {
  font-weight: bold;
}

form input[type=text],
form input[type=adminname] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

form button[type=submit] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

form button[type=submit]:hover {
  background-color: #0069d9;
}

.alert {
  max-width: 600px;
  margin: auto;
  margin-bottom: 20px;
  padding: 10px;
  border-radius: 5px;
}
.alert-success {
  background-color: #d4edda;
  color: #155724;
  border-color: #c3e6cb;
}

  </style>
  
  <div class="form-group">
    <label for="adminname">Admin Name</label><br>
    <input type="adminname" class="form-control" id="adminname" name="adminname" value="<?php echo $row['adminname']; ?>">
  </div>
  <div class="form-group">
    <label for="notice">Notice</label><br>
    <input type="text" class="form-control" id="notice" name="notice" value="<?php echo $row['notice']; ?>">
  </div><hr>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
