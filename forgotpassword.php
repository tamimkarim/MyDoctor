<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['username'])){header("location:welcome.php");}
else{require 'Bar/top1.php';}
require 'getPassword.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="text" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit" class="btn btn-info">
 </fieldset>
</form> 

<?php 
echo $msg;?>
</div>

<?php require 'Bar/footer.php';?>
</body>
</html>