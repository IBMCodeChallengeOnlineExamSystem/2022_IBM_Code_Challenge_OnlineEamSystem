

      <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Online Examination</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
    
    function val()
    {

      var ee=getElementById("email").value;
        var atpos=ee.indexOf("@");
        var dotpos=ee.lastIndexOf("."); 

      if (document.getElementById("name").value==""|| (!(isNaN(document.getElementById("name").value))))  {

        alert("Enter correct name");
        document.getElementById("name").value="";
        document.getElementById("name").focus();
        return false;
      }

      else if (document.getElementById("college").value=="" ) {

        alert("Enter correct college ");
        document.getElementById("college").value="";
        document.getElementById("college").focus();
        return false;
      }
      else if(atpos<1||dotpos<atpos+2||dotpos+2>=ee.length)
        
         {
        alert("please enter a valid email id") ;
        document.getElementById("email").value="";
        document.getElementById("email").focus();
        return false;
      }
      else if (document.getElementById("qualification").value=="") {
        alert("please enter qualification");
        document.getElementById("qualification").focus() ;
        return false;

      }
      else if (document.getElementById("experiance").value=="") {
        alert("please enter experiance");
        document.getElementById("experiance").focus() ;
        return false;

      }
      
      else if (document.getElementById("username").value=="") {
        alert("please enter username");
        document.getElementById("username").focus() ;
        return false;

      }
      else if (document.getElementById("password").value=="") {
        alert("please enter password");
        document.getElementById("password").focus() ;
        return false;

      }
       else if (document.getElementById("password").value!=document.getElementById("confirm_password").value) {
        alert("please re-enter password correctly");
        document.getElementById("password").focus() ;
        return false;

      }
        else
          return true;
    
  }
        
  </script>
    </head>
  <body>

    <!-- Header -->
    <header id="header" class="transparent-nav">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          
          <!-- /Logo -->

          <!-- Mobile toggle -->
          <button class="navbar-toggle">
            <span></span>
          </button>
          <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
          <h2 style="color: tomato;">Online Examination</h2>
          <ul class="main-menu nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="college_registration.php">College register</a></li>
            <li><a href="teacher_registration.php">Teacher register</a></li>
           <li><a href="student_registration.php">Student register</a></li>
          </ul>
        </nav>
        
        <!-- /Navigation -->

      </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.png)"></div>
      <!-- /Backgound Image -->

      <div class="home-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
             <form name="sentMessage" id="contactForm" onsubmit="return val()"  action="teacher_registrationAcc.php" method="post"  >
        <div class="row" align="center">
<table align="center">
  <th><h2 style="color: cornsilk;">Teacher registration</h2></th>
          <tr><td style="color: cornsilk;">Name</td>
            <td><div class="form-group">
              <input type="text" id="name" class="form-control" name = "name"placeholder="name" required="required" style="
    width: auto" >
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
           <tr><td style="color: cornsilk;">College</td><td><select name="college" class="form-control" id="college" required="" style="width: 200px" >
                    <option selected="" value=""  >Select College</option>
                      <?php
                      include 'connect.php';
                      
                      $sq =  "SELECT * FROM college";
                      $re =mysqli_query($con,$sq);

                      while($row = mysqli_fetch_assoc($re))
                      {

                        echo '<option value=" ' . $row['college_id'] . '" >' . $row['college_name'] . '</option>';
                      }

                      ?>

                    </select></td></tr>
           <!-- <tr><td style="color: cornsilk;">Department</td><td><select name="department" class="form-control" id="dept" required="">
                    <option selected="" value="">Select Department</option>
                      <?php
                      include 'connect.php';
                      
                      $sq =  "SELECT * FROM department";
                      $re =mysqli_query($con,$sq);

                      while($row = mysqli_fetch_assoc($re))
                      {

                        echo '<option value=" ' . $row['dept_id'] . '" >' . $row['department'] . '</option>';
                      }

                      ?>

                    </select></td></tr> -->
                    <tr><td style="color: cornsilk;">Email</td>
            <td><div class="form-group">
              <input type="email" id="email" class="form-control" name="email" placeholder="email" required="required" style="width: auto">
              <p class="help-block text-danger"></p>
            </div>
          </td></tr>
           <tr><td style="color: cornsilk;">Qualification</td>
            <td><div class="form-group">
              <input type="text" id="qualification" class="form-control" name="qualification" placeholder="qualification" required="required" style="width: auto">
              <p class="help-block text-danger"></p>
            </div>
          </td></tr>
           <tr><td style="color: cornsilk;">Experiance</td>
            <td><div class="form-group">
              <input type="number" id="experiance" class="form-control" name="experiance" placeholder="Experiance" required="required" style="width: auto">
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
           <tr><td style="color: cornsilk;">Username</td>
            <td><div class="form-group">
              <input type="password" id="username" class="form-control" name="username" placeholder="Username" required="required" style="width: auto">
              <p class="help-block text-danger"></p>
            </div>
          </td></tr>
           <tr><td style="color: cornsilk;">Password</td>
            <td><div class="form-group">
              <input type="password" id="password" class="form-control" name="password" placeholder="password" required="required" style="
    width: auto">
              <p class="help-block text-danger"></p>
            </div>
          </td></tr>
          <tr><td style="color: cornsilk;"> Confirm Password</td>
            <td><div class="form-group">
              <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="confirm password" required="required" style="
    width: auto">
              <p class="help-block text-danger"></p>
            </div>
          </td></tr>
<tr><td><input type="submit" class="main-button icon-button" value="Register"></td></tr>
        


</table>
        </div>
        <div id="success"></div>
        
      </form>
             
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    

    <!-- Footer -->
    <footer id="footer" class="section">

      <!-- container -->
      <div class="container">

        <!-- row -->
        <div class="row">

          <!-- footer logo -->
          <div class="col-md-6">
            <div class="footer-logo">
              
            </div>
          </div>
          <!-- footer logo -->

          <!-- footer nav -->
          <div class="col-md-6">
            <ul class="footer-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div>
          <!-- /footer nav -->

        </div>
        <!-- /row -->

        <!-- row -->
        <div id="bottom-footer" class="row">

          <!-- social -->
          <div class="col-md-4 col-md-push-8">
            <ul class="footer-social">
              <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <!-- /social -->

          <!-- copyright -->
          <div class="col-md-8 col-md-pull-4">
            <div class="footer-copyright">
              </div>
          </div>
          <!-- /copyright -->

        </div>
        <!-- row -->

      </div>
      <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'><div class='preloader'></div></div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
