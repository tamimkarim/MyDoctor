
<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
</head>
<body>
<table class="table table-bordered">  
<tr>  
<th>Name</th> 
<th>phone_number</th> 
<th>E-mail</th>  
<th>User name</th>   
<th>Gender</th>   
<th>Date of birth</th> 
<th>booking_date</th>
<th>Vacancies</th>
<th>Hospital's seats</th>
<th>Hospital name</th> 
</tr>  

<?php 
                                  
$data = file_get_contents("patientbookeddata.txt");  
$data = explode($data, true);  
$index=0;
foreach($data as $row)  
{  
echo '<tr>
<td>'.$row["name"].'</td>
<td>'.$row["phone_number"].'</td>
<td>'.$row["e-mail"].'</td>
<td>'.$row["username"].'</td>
<td>'.$row["gender"].'</td>
<td>'.$row["dob"].'</td>
<td>'.$row["booking_date"].'</td>
<td>'.$row["seats_books"].'</td>
<td>500</td>
<td>'.$row["Hospital_name"].'</td>
</tr><br><br>'; 

if((isset($_POST["Hospital_name"]) == $row["Hospital_name"]) && isset($_POST["submit"]))
{
     if ($_POST["Hospital_name"] == $row["Hospital_name"] && isset($_POST["submit"]))
     {
     $current_data = file_get_contents('approved_data.json');  
	$data = explode($current_data, true);
     $extra = array(  
     'name'               =>     $row['name'],  
     'phone_number'       =>     $row['phone_number'],
     'e-mail'             =>     $row["e-mail"],  
     'username'           =>     $row["username"],  
     'gender'             =>     $row["gender"],  
     'dob'                =>     $row["dob"] ,
     'booking_date'       =>     $row["booking_date"],
     'seats_books'        =>     $row["seats_books"] ,
     'Hospital_name'      =>     $row["Hospital_name"]); 
      array_push($data, $extra);                         
      $final_data = json_encode($data); 
      if(file_put_contents('Json/approved_data.json', $final_data))  
      {  
      echo "Information Updated Successfully";
      }                                       
      else  
      {  
      echo "File not exits";  
      }
     }
     $index++;   
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {
     if (empty($_POST["Hospital_name"])) 
     {
     $nameErr = "Hospital name is required";
     } 
     else 
     {
     $name = test_input($_POST["Hospital_name"]);                                
     }
     }               
     } 
}   
     function test_input($data) 
     {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
     }
     ?>
     </table> 
     </div>
 </div>              
</body>
</html>