<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
    <body>
                     <form method="post" action="" enctype="">
                      <div class="Payment"></div> 
                                     <h4><u> Payment Procedure</u></h4>
                                   
                                            <tr>
                                        <td><label for="text">Enter Your Account Number</label></td><br>
                                          <td><input type="text" name="number" id="number" placeholder="Enter your account number"></td>
                                        </tr><br><hr>
                                        <tr>
                                        <td><label for="text">Enter your Pin</label></td><br>
                                          <td><input type="text" name="number" id="number" placeholder="Enter your account number"></td>
                                        </tr><br><hr>
                                         <tr>
                                        <td><label for="text">Enter amount</label></td><br>
                                          <td><input type="text" name="amount" id="amount" placeholder="Enter amount"></td>
                                        </tr><br><hr>
                                        <tr>
                                        <td>        
                                        <a href="submit.php">submit</a>
                                      </td>
                                    </tr>

                            </form>
                        </body>
                         <button><a href="Welcome.php"> Back </a></button>

                    </html>
                    <?php 
    }else{
        header('location: welcome.php'); 
    }
?>