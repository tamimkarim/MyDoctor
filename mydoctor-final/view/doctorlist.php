<?php
require_once '../model/db.php';
if(isset($_POST['submit'])){

   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $specialist=$_POST['specialist'];
   $institution=$_POST['institution'];
   $salary=$_POST['salary'];

   $con = getConnection();
   $sql="insert into `doctor` (name,phone,specialist,institution,salary) 
   values('$name','$phone','$specialist','$institution','$salary')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/doctorlistdb.php');
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

<style>
* {
    margin: 0;
    padding: 0;
}

body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    font-size: 16px;
}

form {
    width: 80%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
    vertical-align: top;
}

input[type="text"],
input[type="phone"],
input[type="specialist"],
input[type="institution"],
input[type="salary"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease-in-out;
}

input[type="text"]:focus,
input[type="phone"]:focus,
input[type="specialist"]:focus,
input[type="institution"]:focus,
input[type="salary"]:focus {
    border-color: #555;
}  

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #008080;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

button[type="submit"]:hover {
    background-color: #006666;
}
  
</style>

    <div class="signup-content">
        <div class="error"></div>
        <form  method="POST">
            <h1>Doctor Register Form</h1>
            <table>
                <tr>
                    <td>
                        <label for="name">Name</label><br />
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
                    <label for="specialist">Specialist</label><br />
                    <input type="specialist" name="specialist" />
                </td>
            </tr>
            <tr>
            </tr>
                <td>
                    <label for="institution">Institution</label><br />
                    <input type="institution" name="institution" />
                </td>
            </tr>
            </tr>
                <td>
                    <label for="salary">Salary</label><br />
                    <input type="salary" name="salary" />
                </td>
            </tr>
            </table><hr>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>   
        </form>
</body>
</html>