<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">

        <title>WELCOME</title>


</head>
<body>
    
<?php 
    session_start();
    if (isset($_SESSION['username'])){require 'bar/top1.php';}
    else{require 'Homepage.php';}
 ?>

    <section class="welcome">
        <div class="half-width">
            <h1 class="div">YOUR JOURNEY TO WELLNESS STARTS HERE </h1>
            <p>Welcome to our doctor's portal! Our platform is designed to provide medical professionals like you with a secure and efficient way to manage your practice and provide the best possible care to your patients.</p>
        </div>
    
        <div class="half-width">
            <img class="p" src="image/pexels-vidal-balielo-jr-1250655.jpg"  >
        </div>
           
    </section>
    
<?php require 'bar/footer.php';?>

</body>
</html>