

<?php
session_start();
 include '../connect.php';
  $id=$_GET['id'];
    
     $sq = "SELECT * FROM login WHERE loginid = '$id'";
    $re=mysqli_query($con,$sq);
	$row = mysqli_fetch_assoc($re);
	if ($row['type1']=="college") {
	$sq = "DELETE FROM college WHERE loginid = '$id'";
    mysqli_query($con, $sq);
 
   	  $sql = "DELETE FROM login WHERE loginid = '$id'";
    mysqli_query($con, $sql);
    echo "<script> alert('Rejected'); window.location.href='admin_college.php';</script>";

	}
	else if ($row['type1']=="teacher") {
		$sq = "DELETE FROM teacher WHERE loginid = '$id'";
    mysqli_query($con, $sq);
 
   	  $sql = "DELETE FROM login WHERE loginid = '$id'";
    mysqli_query($con, $sql);
    echo "<script> alert('Rejected'); window.location.href='admin_teacher.php';</script>";
	}
	else
	{
		$sq = "DELETE FROM student WHERE loginid = '$id'";
    mysqli_query($con, $sq);
 
   	  $sql = "DELETE FROM login WHERE loginid = '$id'";
    mysqli_query($con, $sql);
    echo "<script> alert('Rejected'); window.location.href='admin_student.php';</script>";

	}

?>