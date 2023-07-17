
 <form method="post" action="registationcheck.php" enctype="">
            <fieldset>
            	 <legend>Registation Form</legend>
                 <h1>HMS |Registation</h1>
                <p><u>Sign Up</u></p>

                <table>
                	    <tr>
                    <td><label for="text">Name:</label></td>
                      <td><input type="text" name="name" id="name" placeholder="Enter your Name"></td>
                </tr>

                <tr>
                    <td><label for="text">Email:</label></td>

                    <td><input type="text" name="email" id="email" placeholder="Enter your Email"></td>

                </tr>

                <tr>
                    <td><label for="birthdate">Date Of Birth</label></td>

                    <td><input type="date" name="dob" id="birthday" placeholder="Enter your birthdate"></td>

                </tr>

                <tr>
                    <td><label for="text">Mobile number:</label></td>

                    <td><input type="text" name="mobile_number" id="mobile_number" placeholder="Enter your Mobile number"></td>

                </tr>
                <tr>
                    <td><label for="text">Gender:</label></td>

                    <td><select name="gender" id="Gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Others">Other</option>
                            <span class="error"> 


                        </select></td></tr>
                        <tr>
                    <td><label for="text">Experience</label></td>

                    <td><input type="text" name="experience" id="experience" placeholder="if any"></td>

                </tr>

                <tr>
                    <td><label for="text">Blood Group:</label></td>

                    <td><select name="blood_group" id="select_bloodgroup">
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>

                        </select></td>

                </tr>

                <tr>
                    <td><label for="text">Division:</label></td>

                    <td><select name="division" id="select_division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Chattogram">Chattogram</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Sylhet">Sylhet</option>
                        </select></td>
                </tr>


                <tr>
                    <td><label for="text">City:</label></td>

                    <td><input type="text" name="city" id="city" placeholder="Enter your City"></td>

                </tr>

                <tr>
                    <td><label for="address">Address:</label></td>

                    <td><textarea name="address" id="address"placeholder="Address here"></textarea> </td>
                </tr>
                <tr>
                    <td><label for="password">password:</label></td>

                    <td><input type="password" name="password" id="password" placeholder="Enter your password"></td>
                </tr>

                    <tr>
                    <td><label for="confirm_password"> Confirm password:</label></td>
                    <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Enter your Confirm password"></td>
                               
            </table>
                   <tr>
                    <td>        
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="reset">
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