<html>
    <head>
        <title>Admin Registation</title>
    </head>
    <body  style="background-color:skyblue;">
    	        <center>
<?php 

session_start();
$nameErr = $emailErr = $genderErr = $bloodGroupErr = $dateOfBirthErr = $degreeErr =$dobErr = $mobile_numberErr = "";
$name = $email = $gender = $bloodGroup = $dateOfBirth = $degree = $cityErr = $addressErr = $passwordErr = $confirm_passwordErr = "";

if (isset($_SESSION['username'])){header("location:welcome.php");}
else{  require 'bar/top1.php';}
require 'registationcheck.php';
?>
 <form method="post" action="registationcheck.php" enctype="">
            <fieldset>
            	 <legend>Registation Form</legend>
                 <h1>HMS | Admin registation</h1>
                <p><u>Sign Up</u></p>

                <table>
                	    <tr>
                    <td><label for="text">Name:</label></td>
                      <td><input type="text" name="name" id="name" placeholder="Enter your Name"></td>
                        <span class="error"> <?php echo $nameErr;?></span>

                </tr>

                <tr>
                    <td><label for="text">Email:</label></td>

                    <td><input type="text" name="email" id="email" placeholder="Enter your Email"></td>
                    <span class="error"> <?php echo $emailErr;?></span>

                </tr>

                <tr>
                    <td><label for="birthdate">Date Of Birth</label></td>

                    <td><input type="date" name="dob" id="birthday" placeholder="Enter your birthdate"></td>
                    <span class="error"> <?php echo $dobErr;?></span>

                </tr>

                <tr>
                    <td><label for="text">Mobile number:</label></td>

                    <td><input type="text" name="mobile_number" id="mobile_number" placeholder="Enter your Mobile number"></td>
                    <span class="error"> <?php echo $mobile_numberErr;?></span>

                </tr>
                <tr>
                    <td><label for="text">Gender:</label></td>

                    <td><select name="Gender" id="Gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Others">Other</option>
                            <span class="error"> 
                                <?php echo $genderErr;?></span>


                        </select></td>

                <tr>
                    <td><label for="text">Blood Group:</label></td>

                    <td><select name="select_bloodgroup" id="select_bloodgroup">
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <span class="error"> <?php echo $blood_groupErr;?></span>

                        </select></td>

                </tr>

                <tr>
                    <td><label for="text">Division:</label></td>

                    <td><select name="select_division" id="select_division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>
                            <span class="error"> <?php echo $DivisionErr;?></span>

                        </select></td>
                </tr>


                <tr>
                    <td><label for="text">City:</label></td>

                    <td><input type="text" name="city" id="city" placeholder="Enter your City"></td>
                    <span class="error"> <?php echo $cityErr;?></span>

                </tr>

                <tr>
                    <td><label for="address">Address:</label></td>

                    <td><textarea name="add" id="address"placeholder="Address here"></textarea> </td>
                    <span class="error"> <?php echo $addressErr;?></span>
                </tr>
                <tr>
                    <td><label for="password">password:</label></td>

                    <td><input type="password" name="password" id="password" placeholder="Enter your password"></td>
                    <span class="error"> <?php echo $passwordErr;?></span>
                </tr>

                    <tr>
                    <td><label for="confirm_password"> Confirm password:</label></td>
                    <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your Confirm password"></td>
                    <span class="error">  <?php echo $confirm_passwordErr;?> </span>
                               
            </table>
                   <tr>
                    <td>        
                    <input type="submit" name="" value="Submit">
                    <input type="reset" name="" value="reset">
                  </td>
                </tr>
        </fieldset> 
        </center>
        </form>
                <tr>
        	<td>                	
             <a href="Homepage.php"><input type="Submit" name="" value="Back"></a>
            </td>  
        </tr>
                  <br>
    </body>
</html>