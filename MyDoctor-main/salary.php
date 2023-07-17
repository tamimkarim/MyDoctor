<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
<title>Document</title>
</head>
<body>
     
<div class="container" style="width:1200px;">              
<div class="table-responsive"> 
<table class="table table-bordered">  
<tr>    
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Salary  <?=$_SESSION['username']?></h1>
        <h3>Doctor list</h3>

        <table border="1">
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Account Number</th>
                 <th>Specialist</th>
                 <th>Option</th>
            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/salary.txt', 'r');
            $sr=1;

            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if(count($user) > 1){
        ?>
            <tr>
                <td><?=$sr?></td>
                <td><?=$user[0]?></td>
                <td><?=$user[1]?></td>
                <td><?=$user[2]?></td>
                <td><?=$user[3]?></td>
                <td>
                    <a href="payment.php"> Pay</a> 
                </td>
            
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table></br>

        <hr><hr>

        <table>   
          <h1>Salary  <?=$_SESSION['username']?></h1>
        <h3>Receptionist list</h3>

        <table border="1">
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Account Number</th>
                 <th>Specialist</th>
                 <th>Option</th>
            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/salary.txt', 'r');
            $sr=1;

            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if(count($user) > 1){
        ?>
            <tr>
                <td><?=$sr?></td>
                <td><?=$user[0]?></td>
                <td><?=$user[1]?></td>
                <td><?=$user[2]?></td>
                <td><?=$user[3]?></td>
                <td>
                    <a href="payment.php"> Pay</a> 
                </td>
            
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table></table>
 <button><a href="Welcome.php"> Back </a></button>
</body>
</html>

<?php 
    }else{
        header('location: Homepage.php'); 
    }
?>