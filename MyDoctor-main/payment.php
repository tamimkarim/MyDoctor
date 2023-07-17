<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><meta charset="utf-8"></title>
</head>
<body>

</body>
</html>
    <body>
                     <form method="post" action="" enctype="">
                      <div class="Payment"></div>  
                                     <h4> Payment Procedure</h4>
                                   
                                            <!-- <tr>
                                        <td><label for="text"></label></td>
                                          <td><input type="text" name="name" id="name" placeholder="Enter your Name"></td>
                                       </tr> -->

                                         <td>
                                         <button><Ul><li><a href="bkash.php"> Bkash</a></li></Ul></button><br/>
                                         <button><Ul><li><a href="bkash.php"> Rocket</a></li></Ul></button><br/>

                                         <button><Ul><li><a href="bkash.php"> Nagad</a></li></Ul></button><br/>

                                        </td>
                                     <tr>
                            </form>
                        </body>
                         <button><a href="Welcome.php"> Back </a></button>
                    </html>
                    <?php 
    }else{
        header('location: welcome.php'); 
    }
?>