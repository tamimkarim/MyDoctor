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
        <h1>welcome Admin! <?=$_SESSION['username']?></h1>
        <h3>Doctor list</h3>

        <table border="1">
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Password</th>
                <th>College</th>
                <th>Option</th>
                 <th>Specialist</th>
            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/doctorlist.txt', 'r');
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
                <td>
                    <a href="details.php"> Details</a> |  | 
                    <a href="delete.php"> Delete </a>
                </td>
                <td><?=$user[3]?></td>
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table></br>




  <h3>Receptioist list</h3>

        <table border="1">
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Password</th>
                <th>College</th>
                <th>Option</th>
                 <th>Specialist</th>
            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/doctorlist.txt', 'r');
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
                <td>
                    <a href="details.php"> Details</a> |  | 
                    <a href="delete.php"> Delete </a>
                </td>
                <td><?=$user[3]?></td>
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table></br>
 <button><a href="Welcome.php"> Back </a></button>
</body>
</html>

<?php 
    }else{
        header('location: Homepage.php'); 
    }
?>