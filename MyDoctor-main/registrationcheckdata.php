<?php
// Insert user into user.txt file
function insertUser($user)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/regidata.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[0] == $user['name']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return false;
    } else {
        $file = fopen('regidata.txt', 'a');
        $user = $user['name'] . '|' . $user['email'] . '|' . $user['dob'] . '|' . $user['mobile_number'] . '|' . $user['gender'] . '|' . $user['blood_group'] . "|" .$user['division'] . '|' .$user['city'] . '|' .$user['address'] . '|' .$user['password'] . '|' .$user['confirm_password'] .'|' .$user['type'] . "|" . "\n";
        fwrite($file, $user);
        fclose($file);
        return true;
    }
}
// Validate user
function validateUser($name, $password)
{
    $dir = dirname("regidata.txt");
    $file = fopen($dir . 'regidata.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[1] == $password && $user_data[2] == $name) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return true;
    } else {
        return false;
    }
}
// Get user name
function userName($name)
{
    $dir = dirname("regidata.txt");
    $file = fopen($dir . 'regidata.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $name) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data[0];
    } else {
        return false;
    }
}

// get user type
function userType($name)
{
    $dir = dirname("regidata.txt");
    $file = fopen($dir . 'regidata.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $name) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data[5];
    } else {
        return false;
    }
}

// get all doctors
function getAllDoctors()
{
    $dir = dirname("regidata.txt");
    $file = fopen($dir . 'regidata.txt', 'r');
    $doctors = [];
    while (!feof($file)) {
        $data = fgets($file);
        array_push($doctors, $data);
    }
    fclose($file);
    return $doctors;
}
// Reservation
function insertReservation($doctor, $date, $time, $email, $r_status)
{
   $dir = dirname("regidata.txt");
   $file = fopen($dir . 'regidata.txt', 'a');
    $reservation = $doctor . '|' . $date . '|' . $time . '|' . $email . "|" . $r_status . "|" . "\n";
    fwrite($file, $reservation);
    fclose($file);
    return true;
}
// get user by name
function getUserByname($name)
{
    $dir = dirname(__FILE__);
    $file = fopen($dir . '/regidata.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[0] == $name) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        return $user_data;
    } else {
        return false;
    }
}
// Get all user
function getAllUser()
{

    $dir = dirname("regidata.txt");
    $file = fopen($dir . 'regidata.txt', 'r');
    $users = [];
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[0] != "") {
            array_push($users, $user_data);
        }
    }
    fclose($file);
    return $users;
}
// update user
function updateUser($user)
{
    $dir = dirname("regdata.txt");
    $file = fopen($dir . 'regdata.txt', 'r');
    $finduser = false;
    while (!feof($file)) {
        $data = fgets($file);
        $user_data = explode('|', $data);
        if ($user_data[2] == $user['name']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);
    if ($finduser) {
        $file = fopen('regdata.txt', 'w');
        $user = $user['name'] . '|' . $user['email'] . '|' . $user['dob'] . '|' . $user['mobile_number'] . '|' . $user['gender'] . '|' . $user['blood_group'] . "|" .$user['division'] . '|' .$user['city'] . '|' .$user['address'] . '|' .$user['password'] . '|' .$user['confirm_password'] .'|' .$user['type'] . "|" . "\n";
        fwrite($file, $user);
        fclose($file);
        return true;
    } else {
        return false;
    }
}

