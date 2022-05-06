						<?php
							include '../connect.php';
							if (isset($_POST['submit']))
							 {
								
								$course = $_POST['course'];		
								$sq = "INSERT INTO course (course) VALUES ('$course')";
								$re = mysqli_query($con,$sq);
								 echo "<script> alert('Course added'); window.location.href='add_course.php';</script>";

							}
								
							?>

