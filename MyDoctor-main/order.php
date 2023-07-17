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
	<h2>Your amount is 2000</h2>
	<input type="text" name=""></input>
   <a href="payment.php">Payment</a>
	

</body><br/><br/>
<button><a href="Welcome.php"> Back </a></button>
</html>
<?php 
    }else{
        header('location: welcome.php'); 
    }
?>