						<?php
							include '../connect.php';
							if (isset($_POST['submit']))
							 {
								
								$subject = $_POST['subject'];		
									$course = $_POST['course'];		
							$sq = "INSERT INTO subject (subject,course) VALUES ('$subject','$course')";
								$re = mysqli_query($con,$sq);
								 echo "<script> alert('Subject added'); window.location.href='add_subject.php';</script>";

							}
								
							?>

