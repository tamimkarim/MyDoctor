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
        <h1>welcome people!</h1>
        <h3>Doctor list</h3>

        <table border="1">
        <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Educational Backgroud</th>
                <th>Certified</th>
                <th>Specialist</th>
                <th>Experience</th>
                <th>Phone Number</th>
            </tr>
        <?php 
            $dir = dirname(__FILE__);
            $file = fopen($dir . '/cardiologistlist.txt', 'r');
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
                <td><?=$user[4]?></td>
                <td><?=$user[5]?></td>
                <td><?=$user[6]?></td>
                
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table></br>
 <button><a href="homepage.php"> Back </a></button>
</body>
</html>

