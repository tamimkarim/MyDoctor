<?php
include '../model/db.php';

    
    $con = getConnection();
    $sql = "DELETE FROM `notice` ";
    $result = mysqli_query($con, $sql);

    if ($result) {
    $msg = "Notice has been deleted.";
    } else {
    $msg = "Error deleting notice : " . mysqli_error($con);
    }
    header("Location: ../model/noticedb.php?msg=" . urlencode($msg));
    exit();
    ?>