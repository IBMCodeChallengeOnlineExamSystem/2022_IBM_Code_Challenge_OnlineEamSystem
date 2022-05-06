
<?php
include '../connect.php';
        session_start();
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM teacher WHERE loginid = '$id'";
        $res = mysqli_query($con,$sql);
        $row1 = mysqli_fetch_assoc($res);
        $exp = $row1['experiance'];

        if($exp > 10)
        {
          header("location:add_questions.php");
        }
        else
        {
          echo "<script> alert('Cannot add questions'); window.location.href='teacher_home.php';</script>";
        }
        ?>
