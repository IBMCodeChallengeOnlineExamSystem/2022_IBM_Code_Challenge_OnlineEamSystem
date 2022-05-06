<?php
session_start();
 include '../connect.php';
  $id = $_GET['id'];
    $sq = "DELETE FROM college WHERE loginid = '$id'";
    mysqli_query($con, $sq);
 
   	$sql = "DELETE FROM login WHERE loginid = '$id'";
    mysqli_query($con, $sql);
    echo "<script> alert('Rejected'); window.location.href='admin_college.php';</script>";
    
?>