<?php
require_once '../model/db.php';
if(isset($_POST['submit'])){
   $number=$_POST['number'];
   $category=$_POST['category'];
   $brand=$_POST['brand'];
   $description=$_POST['description'];
   $stock=$_POST['stock'];
   
   $con = getConnection();
   $sql="insert into `inventory` (number,category,brand,description,stock) 
   values('$number','$category','$brand','$description','$stock')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/inventorydb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html>
    <body>
      <style>
form {
  width: 80%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  font-size: 16px;
}

h4 {
  margin-top: 20px;
  margin-bottom: 10px;
}

label {
  display: inline-block;
  width: 150px;
  font-weight: bold;
}

input[type="text"],
select {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 20px;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button[type="submit"]:hover {
  background-color: #0069d9;
}


      </style>
    <form method="post" action="" enctype="">
    <div class="inventory"></div> 
    <h4><u>Inventory List</u></h4>  
    <tr>
  <td><label for="number">Serial Number</label></td><br>
  <td><input type="text" name="number" id="number" placeholder=" "></td>
    </tr><br><hr>
     <tr>                       
     <tr>
	<td>
		 <h5>Select category</h5>
  <select name="category">
    <option>Select an option</option>
    <option>TV</option>
    <option>Refrigerator</option>
    <option>AC</option>
    <option>Chair</option>
    <option>Table</option>
    </select>
    </td>
  </tr><hr>
  <tr>
	<td>
		 <h5>Select Brand</h5>
  <select name="brand">
    <option>Select an option</option>
    <option>HTC</option>
    <option>Toshiba</option>
    <option>Samsung</option>
    <option>Sharp</option>
    <option>Motorola</option>
    </select>
    </td>
  </tr><hr>
<tr>
  <td><label for="text">Item Description</label></td><br>
  <td><input type="text" name="description" id="description" placeholder=""></td>
    </tr><br><hr>
     <tr>
     <tr>
  <td><label for="text">Stock</label></td><br>
  <td><input type="text" name="stock" id="stock" placeholder=""></td>
    </tr><br><hr>
     <tr>
        <td>        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>  
        </td>
     </tr>
      </form>
   </body>
</html>