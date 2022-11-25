<?php

    include("database.php");

    $get_lrn = $_GET['lrn'];

    $sql = "DELETE FROM students WHERE lrn = $get_lrn";
    if(mysqli_query($connection, $sql)) {
        echo "<script> alert('Student has been deleted from the database'); window.location='select.php'; </script>";
    } else {
        echo "<script> alert('Cannot remove student from the database'); window.location='select.php'; </script>";
    }
?>