<?php
include '../connect.php';
$s = $_GET['s'];
if ($s == 1) {
$sql = "UPDATE question  SET status='1'";
    mysqli_query($con, $sql);
echo "<script> alert('Examination Started'); window.location.href='admin_home.php';</script>";

}
else{
	$sql = "UPDATE question  SET status='0'";
    mysqli_query($con, $sql);
echo "<script> alert('Examination Stopped'); window.location.href='admin_home.php';</script>";

	}
?>