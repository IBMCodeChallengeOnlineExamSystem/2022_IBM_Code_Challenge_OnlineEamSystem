<?php

session_start();
$sid = $_SESSION['sid'];
include '../connect.php';
$sq = "UPDATE student SET estatus = '1' WHERE loginid = '$sid'";
mysqli_query($con,$sq);
header('location:view_notification.php');
?>