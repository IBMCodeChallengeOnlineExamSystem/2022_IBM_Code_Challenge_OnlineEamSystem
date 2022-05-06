<?php
include '../connect.php';
	if (isset($_POST['submit']))
	{
								
	$course = $_POST['course'];		
	$subject = $_POST['subject'];		
	$e_name = $_POST['e_name'];		
	$e_date = $_POST['e_date'];		
	$s_time = $_POST['s_time'];		
	$e_time = $_POST['e_time'];		
	// $t_qns = $_POST['t_qns'];		
	// $t_score = $_POST['t_score'];		
	$sq = "INSERT INTO exam (course,subject,e_name,e_date,s_time,e_time) VALUES ('$course','$subject','$e_name','$e_date','$s_time','$e_time')";
	$re = mysqli_query($con,$sq);
	 echo "<script> alert('Exam added'); window.location.href='create_exam.php';</script>";
	}
								
?>

