<?php
session_start();
require_once('registationcheckdata.php');
$name= $_SESSION['username'];
$user = getUserByname($name);
?>
    <h1>Edit Profile</h1>
    <form action="editprofile.php" method="POST">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $user[0]; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $user[1]; ?>"></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><input type="date" name="dob" value="<?php echo $user[2]; ?>"></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mobile_number" value="<?php echo $user[3]; ?>"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value="<?php echo $user[4]; ?>"></td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td><input type="text" name="blood_group" value="<?php echo $user[5]; ?>"></td>
            </tr>
            <tr>
                <td>Division</td>
                <td><input type="text" name="division" value="<?php echo $user[6]; ?>"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" value="<?php echo $user[7]; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $user[8]; ?>"></td>
            </tr>

            <tr hidden>
                <td>Password</td>
                <td><input type="password" hidden name="password" value="<?php echo $user[9]; ?>"></td>
            </tr>
            <tr hidden>
                <td> Confirm Password</td>
                <td><input type="confirm_password" hidden name="confirm_password" value="<?php echo $user[10]; ?>"></td>

            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</div>

