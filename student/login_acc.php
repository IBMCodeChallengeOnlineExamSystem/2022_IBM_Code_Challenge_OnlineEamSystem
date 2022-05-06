 <?php
                            include '../connect.php';
                            session_start();
                            $id = $_SESSION['id'];
                            $myuser = $_POST['username'];
                                $mypass = $_POST['password'];


                                $sql = "SELECT login.loginid,login.status,student.college FROM login  join student  on login.loginid = student.loginid WHERE login.username = '$myuser' and login.password = '$mypass' and login.type1='student'";
                                    $result = mysqli_query($con, $sql);
                                    $row=mysqli_fetch_assoc($result);
                                    echo $row['loginid'];
                                    echo $row['status'];
                                    if ($row['status'] == 1) {
                                        # code...
                                    $COUNT = mysqli_num_rows($result);
                                    if ($COUNT > 0 && $row['college'] == $id) {
                                    
                                        // echo $row['loginid'];
                                        $_SESSION['sid']=$row['loginid'];
                                        $_SESSION['start'] = time(); // Taking now logged in time.
                                         // Ending a session in 30 minutes from the starting time.
                                         // $_SESSION['expire'] = $_SESSION['start'] + (3);
                                        header("location:student_home.php");

                                    }
                                    else {

                                        echo "<script> alert('incorrect password or email'); window.location.href='student_login.php';</script>";
                                        }
                                    }
                                    else
                                    
                                     {  echo "<script> alert('you are not approved'); window.location.href='student_login.php';</script>";
                                    }
                                    ?>

