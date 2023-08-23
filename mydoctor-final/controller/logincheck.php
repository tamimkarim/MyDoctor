<?php 
    session_start();
    require_once('../model/usermodel.php');

    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "null data found...";
        }else{
           $result = auth($username, $password);
           echo $result;
            if($result){
                $_SESSION['flag'] = "true";
                header('location:  ../bar/top1.php');
            }else{
                echo "invalid user";
            }
        }
    }else{ 
        header('location:bar/login.php');
    }
?>