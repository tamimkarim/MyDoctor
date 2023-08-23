<?php
require_once '../model/db.php';
if(isset($_POST['submit'])){

   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $problem=$_POST['problem'];
   $doctor=$_POST['doctor'];

   $con = getConnection();
   $sql="insert into `medical` (name,phone,problem,doctor) 
   values('$name','$phone','$problem','$doctor')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/medicaldb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html lang="en">
<head>
    <title>Doctor Form</title>
</head>

<body>

    <div class="signup-content">
        <div class="error"></div>
        <form  method="POST">
            <h1>Notice Upload Form</h1>
            <table>
                <tr>
                    <td>
                        <label for="name"> Patient Name</label><br />
                        <input type="text" name="name" />
                    </td>
                </tr>
                <td>
                    <label for="phone">Phone</label><br />
                    <input type="phone" name="phone" />
                </td>
            </tr>
            <tr>
            </tr>
                <td>
                    <label for="problem">Problem</label><br />
                    <input type="problem" name="problem" />
                </td>
            </tr>
         <h5>Select Doctor</h5>
  <select name="doctor">
    <option>Tamim Karim</option>
    <option>Karim</option>
    <option>Nihal</option>
    </select>
    </td>
  </tr><hr>
            </table><hr>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>   
        </form>
</body>
</html>