<?php
include '../model/db.php';
$con = getConnection();
$sql = "SELECT * FROM `doctor` WHERE 1";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {

  die("Doctor with ID $id does not exist.");
}

$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {

  $name =$_POST['name'];
  $phone =$_POST['phone'];


  $sql = "UPDATE `doctor` SET `phone` = '$phone',`name` = '$name' WHERE 1";

  $result = mysqli_query($con, $sql);

  if ($result) {

    $msg = "doctor with ID $id has been updated.";
  } else {

    $msg = "Error updating doctor with ID $id: " . mysqli_error($con);
  }

  header("Location: ../model/doctorlistdb.php?msg=" . urlencode($msg));

  exit();
}
?>
<style>
  .form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="name"],
input[type="text"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button[type="submit"] {
  padding: 10px 20px;
  font-size: 18px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}

</style>

<form method="post">
  
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="name" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label><br>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
  </div><hr>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
