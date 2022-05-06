<?php
include '../connect.php';
$id = $_GET['dept_id'];
$sq = "SELECT * FROM subjects WHERE dept_id = '$id'";
$re = mysqli_query($con,$sq);
if(!empty($re)){
	echo 'Select Subject <select class="form-control" name ="subject" required> <option selected = "" value ="" ></option>';
while($row = mysqli_fetch_assoc($re))
{
	echo '<option value = "'.$row['subject_id'].'">'.$row['subject'].'</option>';
}
echo '</select>';
}

?>