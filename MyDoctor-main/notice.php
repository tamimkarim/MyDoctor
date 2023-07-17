<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
<title>Notice and Information</title>
</head>
<body>        
<tr>    
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>welcome Admin! <?=$_SESSION['username']?></h1>
        <h3>News and Information</h3>

        <table border="1">
            <tr>
                <th>Title</th>
                <th>Details</th>
                <th>Description</th>

            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/information.txt', 'r');
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
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table></br>
        <tr>
       <td>        <form method="POST" action="upload.php" enctype="multipart/form-data">
            Notice :   <input type="file" name="myfile" value=""/>
                            <input type="submit" name="submit" value="submit"/>
        </form></td></tr>
            <hr>
 <button><a href="welcome.php"> Back </a></button>
</body>
</html>

<?php 
    }else{
        header('location: Homepage.php'); 
    }
?>