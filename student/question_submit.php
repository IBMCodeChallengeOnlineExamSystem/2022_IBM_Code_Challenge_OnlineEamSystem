<?php
session_start();

include '../connect.php';       
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$a1 = $_POST['1'];
$a2 = $_POST['2'];
$a3 = $_POST['3'];
$a4 = $_POST['4'];
$a5 = $_POST['5'];
$a6 = $_POST['6'];
$a7 = $_POST['7'];
$a8 = $_POST['8'];
$a9 = $_POST['9'];
$a10 = $_POST['a10'];
$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$a14 = $_POST['a14'];
$a15 = $_POST['a15'];
$question = array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15);
$answer = array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15);
 $sid = $_SESSION['id'];
 $f = 0;
 $score = 0;
while ($f < 15) {
# code... 
$s = "SELECT * FROM question WHERE question_id = '$question[$f]' ";
$re = mysqli_query($con,$s);
$row = mysqli_fetch_assoc($re);
if ($row['answer'] == $answer[$f])
{
	$score = $score + 1;
}
	$f++;
}
	
echo $score;
$sql = "INSERT INTO answer (q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,sid,score) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$sid','$score')";
mysqli_query($con,$sql);

header('location:student_home.php');






?>