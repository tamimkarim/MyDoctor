<?php

require_once '../model/db.php';
if(isset($_POST['submit'])){

   $adminname=$_POST['adminname'];
   $notice=$_POST['notice'];
   $con = getConnection();
   $sql="insert into `notice` (adminname,notice) 
   values('$adminname','$notice')";
   $result=mysqli_query($con, $sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: ../model/noticedb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>

<html lang="en">
<head>
    <title>Notice Board</title>
<style>
    .signup-content {
  width: 50%;
  margin: auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 10px;
}

h1 {
  text-align: center;
}

table {
  width: 100%;
  margin: 20px 0;
  border-collapse: collapse;
}

table td {
  padding: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="notice"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

a.notice-button {
  background-color: #008CBA;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
}

a.notice-button:hover {
  background-color: #006080;
}

</style>
</head>



<body>

    <div class="signup-content">
        <form  method="POST">
            <h1>Notice Upload Form</h1>
            <table>
                <tr>
                    <td>
                        <label class="notice-button" for="adminname">Admin name</label><br />
                        <input type="text" name="adminname" />
                    </td>
                </tr>
                <td>
                  <label class="notice-button" for="adminname">Notice</label><br />
                <input type="text" name="notice" id="notice" value="" onkeyup="getUser()">
        
        <p id="msg"></p>
            <h1></h1>
            <script>

function change(){
    
    let obj = document.getElementsByTagName('h1')[0];
        obj.innerHTML = "TEST....";
        obj.style.color = 'red';
}

function ajax(){
    let notice = document.getElementById('notice').value;
    let xhttp = new XMLHttpRequest();
    //xhttp.open('get', 'abc.php?notice='+notice, true);
    xhttp.open('post', '../controller/notice.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('notice='+notice);

    xhttp.onreadystatechange = function(){
        
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementsByTagName('h1')[1].innerHTML = this.responseText;
        }
    }

}

function getUser(){
    let notice = document.getElementById('notice').value;
    //alert(notice);

    if(notice == ""){
        document.getElementById('msg').innerHTML = "null value";
        document.getElementById('msg').style.color= "blue";
    }else{
        document.getElementsByTagName('h1')[0].innerHTML = notice;
    }

}
</script>
                </td>
            </tr>
            <tr>
                    <!-- <td>
                    <a class="notice-button" href= registation.php>Admin Register Form</a>
                    </td> -->
                </tr><hr>
            </table><hr>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>   
                <td>
                    <a class="notice-button" href= registation.php>Admin Register Form</a>
                    </td>
        </form>
</body>
</html>