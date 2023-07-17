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
        <h3><u>Medicial history Tracing</u></h3>

        <table border="1">
            <tr>
                <th>Serial No.</th>
                <th>Patient Name</th>
                <th rowspan="7">Appointment Details<th>ID-Date-Time-Status-Reason</th></th>
                 <th>Suggestions</th>
                 <th>Option</th>
                 <th>Doctors Name</th>
            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/approvedlist.txt', 'r');
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
                    <a href="delete.php"> DELETE </a>
                </td>
                <td><?=$user[3]?></td>
                

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