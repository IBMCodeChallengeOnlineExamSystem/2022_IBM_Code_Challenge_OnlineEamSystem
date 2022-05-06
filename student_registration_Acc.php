<?php
    include 'connect.php';
  //  $cno = $_REQUEST['con_no'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $acc_year = $_POST['acc_year'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $s = "SELECT * FROM login WHERE username = '$email'";
    $result1 = mysqli_query($con, $s);
    $row1=mysqli_fetch_assoc($result1);
    $uname=$row1['username'];
    
    if($uname=="")
    {
            if($password===$confirm_password)
            {
            $sq = "INSERT INTO login (username,password,type1,status) VALUES ('$email','$password','student','0')";
            
             mysqli_query($con, $sq);

              $sqll = "SELECT * FROM login WHERE username = '$email' and password = '$password' and type1 = 'student'";
             $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
        
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $loid=$row['loginid'];
             echo $sql = "INSERT INTO student (name,address,email,phone,course,acc_year,gender, estatus,loginid) VALUES ('$name','$address','$email','$phone','$course','$acc_year','$gender','0','$loid')";
             mysqli_query($con, $sql);
               echo "<script> alert('Registration successfull'); window.location.href='index.php';</script>";
             }
         }
         else
            echo "<script> alert('please enter password correctly'); window.location.href='student_registration.php';</script>";
}
else
echo "<script> alert('please enter another username'); window.location.href='student_registration.php';</script>"





?>