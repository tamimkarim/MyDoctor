<?php

require_once("registrationcheckdata.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile_number = $_POST['mobile_number'];
    $gender = $_POST['gender'];
    $experience = $_POST['experience'];
    $blood_group = $_POST['blood_group'];
    $division = $_POST['division'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if Inputs are Null or Not
    if (empty($name) || empty($email) ||empty($dob) ||empty($mobile_number) ||empty($gender) ||empty($experience) ||empty($blood_group) ||empty($division) ||empty($city) ||empty($address) || empty($password) || empty($confirm_password)) {
        echo "null value found...";
    }
    // If inputs are not Null
    else {
        if (strlen($name) > 3) {
            if (strlen($password) > 4) {
                // Check if password and re-password are same
                if ($password == $confirm_password) {
                    $user = [
                        'name' => $name,
                        'email' => $email,
                        'dob' => $dob,
                        'mobile_number' => $mobile_number,
                        'gender' => $gender,
                        'experience' => $experience,
                        'blood_group' => $blood_group,
                        'division' => $division,
                        'city' => $city,
                        'address' => $address,
                        'password' => $password,
                        'confirm_password' => $confirm_password,
                        'type' => 'admin',
                    ];
                    // Calling Text Insert User Operation Function
                    $status = insertUser($user);
                    // Insert Function will send Database Operation Status,If Status True..Redirect to Login Page
                    if ($status) {
                        header('location: login.php');
                    }
                    // If Operation Failed. 
                    else {
                        echo "error..try again";
                    }
                } else {
                    echo "password & confirm password mismatch...";
                }
            } else {
                echo "Password must be more than 4 letters";
            }
        } else {
            echo "Username must be More than 3 letters";
        }
    }
}
else{
  echo "Error";
}
