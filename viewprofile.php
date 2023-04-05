<?php
session_start();
require_once('registationcheckdata.php');
$name = $_SESSION['username'];
$user = getUserByname($name);
?>
<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
</head>  
<body>


<div class="div">
<fieldset>
<legend> VIEW PROFILE</legend>
<form action="bar/top1.php" method="post"></form>

<div class="justLeft">
  <p>Name            :   <?php echo $user[0] ?> </p>
  <p>Email           :   <?php echo $user[1] ?></p>
  <p>Date of Birth   :  <?php echo  $user[2] ?></p>
  <p>Mobile Number   :   <?php echo $user[3] ?></p>
  <p>gender          :   <?php echo $user[4] ?></p>
  <p>Blood Group     :   <?php echo $user[5] ?></p>
  <p>Division        :   <?php echo $user[6] ?></p>
  <p>City            :   <?php echo $user[7] ?></p>
  <p>Address         :   <?php echo $user[8] ?></p>
  <p>Password        :   <?php echo $user[9] ?></p>
  <p>Confirm Password:  <?php echo $user [10] ?></p>
</div> 
<br>
<a href="edit.php">Edit Profile</a>
</fieldset> 
</div>
<button><a href="Welcome.php"> Back </a></button>
<?php require 'Bar/footer.php';?>
</body>  
</html> 