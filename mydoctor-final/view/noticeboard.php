<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.notice {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.notice-button {
  display: inline-block;
  padding: 10px 20px;
  margin: 0 10px;
  background-color: #008080;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: all 0.2s ease-in-out;
}

.notice-button:hover {
  background-color: #005656;
  color: #fff;
  transform: scale(1.1);
}


 </style>
    <title>Notice Board</title>
</head>
<body>
    <div class="notice">
   <a class="notice-button" href="notice.php"> Notice Post</a>
   <a class="notice-button" href="viewnoticeboard.php"> View Notice</a>
</div> 
</body>
</html>