<html lang="en">
<head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
      <title>cardiologist List</title>
      <link rel="stylesheet" href="homepage.css">
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
<a class="link-button" href="homepage.php"> Back </a>
</body>
</html>

