<?php
include '../model/db.php';

    
    $con = getConnection();
    $sql = "DELETE FROM `doctor` ";
    $result = mysqli_query($con, $sql);

    if ($result) {
    $msg = "Doctor has been deleted.";
    } else {
    $msg = "Error deleting doctor with ID: " . mysqli_error($con);
    }
    header("Location: ../model/doctorlistdb.php?msg=" . urlencode($msg));
    exit();
    ?>