<?php
include '../connect.php';
$co = $_GET['co'];
$sq = "SELECT * FROM subject where course = '$co'";
$res = mysqli_query($con,$sq);

echo '<td style="color: cornsilk;"><label>Subject</label>  </td><td><select name="subject"  class="form-control">
<option selected="" value="">Select subject</option>';
	while ($row = mysqli_fetch_assoc($res))
	 {
		echo '<option value="'.$row['subject_id'].'">'.$row['subject'].'</option>';
									 
									 

	}
echo "	</select></td>";
?>