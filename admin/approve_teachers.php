<?php
session_start();
 include '../connect.php';
  $id=$_GET['id'];

  $sql = "UPDATE login SET status='1'WHERE loginid='$id'";
    mysqli_query($con, $sql);
    $sq = "SELECT * FROM login WHERE loginid = '$id'";
    $re=mysqli_query($con,$sq);
	$row = mysqli_fetch_assoc($re);
	if ($row['type1']=="college") {
		echo "<script> alert('Approved'); window.location.href='admin_college.php';</script>";

	}
	else if ($row['type1']=="teacher") {
		echo "<script> alert('Approved'); window.location.href='admin_teacher.php';</script>";
	}
	else
	{
		echo "<script> alert('Approved'); window.location.href='admin_student.php';</script>";

	}


?>