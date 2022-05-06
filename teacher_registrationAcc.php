
<?php
    include 'connect.php';
    //$cno = $_REQUEST['con_no'];
    $name = $_POST['name'];
    $college = $_POST['college'];
    $email = $_POST['email'];
    $qualification = $_POST['qualification'];
    $experiance = $_POST['experiance'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $s = "SELECT * FROM login WHERE username = '$username'";
    $result1 = mysqli_query($con, $s);
    $row1=mysqli_fetch_assoc($result1);
    $uname=$row1['username'];


echo $password;
    if($uname=="")
    {
            if($password===$confirm_password)
            {
            $sq = "INSERT INTO login (username,password,type1,status) VALUES ('$username','$password','teacher','0')";
            
             mysqli_query($con, $sq);

              $sqll = "SELECT * FROM login WHERE username = '$username' and password = '$password' and type1 = 'teacher'";
             $result = mysqli_query($con, $sqll);
            $no=mysqli_num_rows($result);
        
            if($no > 0)
            {
             $row=mysqli_fetch_assoc($result);
             $loid=$row['loginid'];
             $sql = "INSERT INTO teacher (name,college,email,qualification,experiance,loginid) VALUES ('$name','$college','$email','$qualification','$experiance','$loid')";
             mysqli_query($con, $sql);
              echo "<script> alert('Registration successfull'); window.location.href='index.php';</script>";
             }
         }
         else
            echo "<script> alert('please enter password correctly'); window.location.href='teacher_registration.php';</script>";
}
else
echo "<script> alert('please enter another username'); window.location.href='teacher_registration.php';</script>";



?>