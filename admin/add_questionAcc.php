
<?php
session_start();
    include '../connect.php';
    $exam = $_POST['exam'];
    $question = $_POST['question'];
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $answer = $_POST['answer'];
    $id = $_SESSION['id'];
    // $s = "SELECT * FROM teacher WHERE loginid = '$id'";
    // $r = mysqli_query($con,$s);
    // $ro = mysqli_fetch_assoc($r);
    // $tid = $ro['teach_id'];
    // $department = $ro['department'];
    //  $sql = "SELECT * FROM department WHERE department = '$department'";
    // $r = mysqli_query($con,$sql);
    // $ro = mysqli_fetch_assoc($r);
    // $did = $ro['dept_id'];
    $sql = mysqli_query($con,"SELECT * FROM question ");
    $row = mysqli_fetch_assoc($sql);
    if ($row['status'] ==0) {
        # code...
      $sq = "INSERT INTO question (exam,question,option_a,option_b,option_c,option_d,answer,status) VALUES ('$exam','$question','$option_a','$option_b','$option_c','$option_d','$answer','0')";
   // echo $sq;
    $re = mysqli_query($con,$sq);
      echo "<script> alert('Questions added');window.location.href='add_questions.php';</script>";
}
else
{
        echo "<script> alert('Cannot add questions now');window.location.href='add_questions.php';</script>";

}
?>
