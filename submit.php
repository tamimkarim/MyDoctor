<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<h3>You Order/salary is Confirm/given</h3>

</body>
<button><a href="Welcome.php"> Back </a></button>
</html>
<?php 
    }else{
        header('location: welcome.php'); 
    }
?>