<?php
require_once '../model/db.php';
if(isset($_POST['submit'])){
   $number=$_POST['number'];
   $pin=$_POST['pin'];
   $amount=$_POST['amount'];

   $con = getConnection();
   $sql="insert into `payment` (number,pin,amount) 
   values('$number','$pin','$amount')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/bkashdb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html>
    <body>
      <style>
        .Payment {
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"] {
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
  width: 200px;
}

hr {
  border: none;
  border-top: 1px solid #ddd;
  margin-top: 20px;
  margin-bottom: 20px;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

      </style>
    <form method="post" action="" enctype="">
    <h4><u> Payment Procedure</u></h4>                         
<tr>
  <td><label for="text">Enter Your Account Number</label></td>
  <td><input type="text" name="number" id="number" placeholder="Enter your account number"></td>
</tr>
<tr>
  <td><label for="text">Enter your Pin</label></td>
  <td><input type="text" name="pin" id="pin" placeholder="Enter your account number"></td>
</tr>
<tr>
  <td><label for="text">Enter Amount</label></td>
  <td><input type="text" name="amount" id="amount" placeholder="Enter Amount"></td>
    </tr>
     <tr>
        <td>        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>  
        </td>
     </tr>
      </form>
   </body>
</html>