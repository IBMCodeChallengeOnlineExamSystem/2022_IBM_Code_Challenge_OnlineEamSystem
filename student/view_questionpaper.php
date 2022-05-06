<?php
session_start();
$sid = $_SESSION['id'];
include '../connect.php';
echo $date = date('Y-m-d');
  $time = time();
// $sid = $_SESSION['sid'];
$eid = $_GET['eid'];
$sq = "SELECT * FROM exam WHERE exam_id = '$eid'";
$re=mysqli_query($con,$sq);
$row1 = mysqli_fetch_assoc($re);
$s = "SELECT * FROM status WHERE exam_id = '$eid' and student_id = '$sid'";
$res=mysqli_query($con,$s);
$c = mysqli_num_rows($res);
$e_date = $row1['e_date'];
$s_time = $row1['s_time'];
$e_time = $row1['e_time'];
echo $e_date;
if ($c > 0)
{
	 echo "<script> alert('You have already attented the exam'); window.location.href='view_notification.php';</script>";
}
elseif ($date == $e_date)

 	{
 	if ($time > strtotime($s_time) or $time < strtotime($e_time))
 	 {
 	 	
	$sql  = "INSERT into status (exam_id,student_id) values ('$eid','$sid')";
		mysqli_query($con,$sql);

// $estatus = $row1['estatus'];
// $sql = "SELECT * FROM question";
// $res = mysqli_query($con,$sql);
// $row2 = mysqli_fetch_assoc($res);
// $status = $row2['status'];
// if ($estatus==1) 
// {
// 	 echo "<script> alert('You have already attented the exam'); window.location.href='student_home.php';</script>";
// }
// elseif ($status==0)
// {
// 	echo "<script> alert('Examination has not started'); window.location.href='student_home.php';</script>";
// }
// else{
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Online Examination</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
		h2{

		}
			input{

				padding: 20px;
				margin: 20px;
				background-color: cyan;
			}
			table{
				height: 400px;
				width: 700px;
				color: black;
				margin-top: 50px;	
				margin-left:200px;
				background-color: white;
				opacity: 0.7;
				padding: 20px;
			}
			input[type="radio"]{

				  
				  border: 2px solid #AAAAAA;
				  border-radius: 50%;
				  height: 25px;
				  width: 25px;
				  top: 30px;
				  left: 20px;
				
			}
			
		</style>
		<script type="text/javascript">
			window.onload = function(){
			document.getElementById('timer').innerHTML =  5+ ":" + 0;
		startTimer();

		function startTimer() {
		  var presentTime = document.getElementById('timer').innerHTML;
		  var timeArray = presentTime.split(/[:]+/);
		  var m = timeArray[0];
		  var s = checkSecond((timeArray[1] - 1));
		  if(s==59){m=m-1}
		  if(m<0){
		  	alert('Alloted Examination is over');
			window.location.href='timeout.php';}
		  
		  document.getElementById('timer').innerHTML =
		    m + ":" + s;
		  setTimeout(startTimer, 1000);
		}
		function checkSecond(sec) {
		  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
		  if (sec < 0) {sec = "59"};
		  return sec;
		}
	}
		</script>
    </head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href=></a></li>
						<li><a href=""> </a></li>
						<li><a href=""></a></li>
						 <li><a href=""></a></li>
					</ul>
				</nav>
				<!-- /Navigation -->
			</div>
		</header>
		<!-- /Header --> 
		<!-- Home -->
		<div id="home" class="hero-area" style="height: 1000px;">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)">
				




			</div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
						<form action="question_submit.php" method="post">
								<table>
									<tr><td><div>Time left = <span id="timer" ></span></div></td></tr>
								<tr><td colspan="8"><h2 align = "center" style="color: tomato;">ONLINE EXAMINATION 2019-2020</h2></td></tr>
									<!-- <tr><td align="center" colspan="8" >Student Name:<?php echo $row1['name'] ?></td></tr> -->
								<tr><td align="left"><b>Time:5 mins</b></td><td colspan = 8 align="right"><b>Maximum  Marks : 15</b></td></tr>
								<?php
								include '../connect.php';
								
								
							$sq = "SELECT * FROM question where exam = '$eid'  ORDER BY rand() limit 15";
							$re = mysqli_query($con,$sq);
							
								$a =1;
								while($row = mysqli_fetch_assoc($re))
								{  
									echo '<tr><td><b> Question.'.$a.':</b></td><td colspan = 8> ' .$row['question'].'</td></tr><input type ="hidden" name = "q'.$a.'" value = "'.$row['question_id'].'"  ';
								echo '<tr><td></td><td>'.$row['option_a'].'</td><td><input type = "radio" name = "'.$a.'" value = "a" required></td><td>'.$row['option_b'].'</td><td><input type = "radio" name = "'.$a.'" value ="b" required ></td><td>'.$row['option_c'].'</td><td><input type = "radio" name = "'.$a.'" value = "c" required ></td><td>'.$row['option_d'].'</td><td><input type = "radio" name = "'.$a.'" value = "d" required ></td></tr>';
									$a++;
								}
								?>
							<tr><td></td><td colspan="8"><input type="submit" name=""  value="Submit" class="main-button icon-button"></td></tr>
							</table>
								</form>

					<div class="row">
						<div class="col-md-8" id="qp">
							
						</div>


					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
	function  printdiv(divname)
	{
		var printcontent = document.getElementById(divname).innerHTML;
		var orginalcontentpage = document.body.innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = orginalcontentpage;
	}
</script>
	</body>
</html>
<?php
	}

	 else{

 		echo "<script> alert('Examination has not started'); window.location.href='view_notification.php';</script>";
}
}
else{
	echo "<script> alert('Examination has not started'); window.location.href='view_notification.php';</script>";
}

?>
