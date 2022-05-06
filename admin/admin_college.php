<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
	# code...
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
			th{
				color: tomato;
			}
			h2{
				margin-left: 400px;
			}
				table{
					margin-left: 400px;
				}
			a{
				color: white;
			}
				#approve:hover{
					background-color:green;
				}
					#reject:hover{
					background-color: red;
				}


			</style>
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
					<h2 style="color: tomato;">Online Examination</h2>
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="admin_home.php">Home</a></li>
						<li><a href="admin_teacher.php">Teachers</a></li>
						<li><a href="admin_college.php">College</a></li>
						<li><a href="admin_student.php">Student</a></li>
						 <li><a href="../logout.php">Logout</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->
			</div>
		</header>
		<!-- /Header -->
		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<?php
include '../connect.php';
   // $id= $_SESSION['ID'];
        $rs = mysqli_query($con,"SELECT * FROM login WHERE status='0' and type1='college' " );
        echo '<h2 style="color: aliceblue"; align= "center" ;margin-left=400px >Manage Colleges</h2>';
        echo"<table border='2px' align=center style='color: cornsilk'><th>Name</th><th>Address</th><th>Email</th><th>Website</th><th colspan = 2>Action</th>";
   while($row1=mysqli_fetch_assoc($rs))
   			{
        		$logid=$row1['loginid'];
    
       			$cs = mysqli_query($con,"SELECT * FROM college WHERE loginid='$logid' " );
  
                while($row=mysqli_fetch_assoc($cs))
                {
                   $id=$row['college_id'];
                    echo "<tr><td>" . $row['college_name'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                     echo "<td>" . $row['website'] . "</td>";
                    echo "<td>" . "<a id=approve href='approve_teachers.php?id=$logid'> Approve</a>". "</td>";
                    echo "<td>" . "<a id=reject href='reject.php?id=$logid'> Reject</a>". "</td>";
                    echo "</tr>";
                }
               
            }
             echo "</table>";
                ?>
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

	</body>
</html>

<?php
}
else
header('location:../login.php');
?>