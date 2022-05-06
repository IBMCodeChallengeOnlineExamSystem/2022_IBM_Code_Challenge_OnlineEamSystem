<?php
							include '../connect.php';
   							$eid= $_GET['ex'];
   							$sqll="SELECT answer.score,student.name FROM answer  join student on student.loginid = answer.sid  WHERE answer.exam_id = '$eid' ";
       						 $rs = mysqli_query($con,$sqll);
       					echo '<h2 style="color: aliceblue"; align= "center" ;margin-left=400px >Result</h2>';
        				echo"<table style='color: black'; border='2px' align=center class='table table-bordered' ><th> Student Name</th><th>Score</th>";
   						while($row1=mysqli_fetch_assoc($rs))
   						{
                		
		                    echo "<tr><td>" . $row1['name'] . "</td>";
		                    echo "<td>" . $row1['score'] . "</td>";
		                    echo "</tr>";
               
           				 }
             			echo "</table>";
                ?>
                