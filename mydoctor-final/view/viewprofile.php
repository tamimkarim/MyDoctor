<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
</head>  
<tbody>
    
  </tbody>
<body>

<?php

    require_once('../model/db.php');
    $conn = getConnection();
      $sql="SELECT * FROM `registration`";
      $result=mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['username'], "<br>" ;
        }

      }
    ?>


<div class="justLeft">
  <p>Name            :   <?php echo $row[0] ?> </p>
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