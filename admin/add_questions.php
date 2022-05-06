<?php
session_start();
if (! empty($_SESSION['logged_in'])) {
  # code...
?>

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
    <style type="text/css">
      
      h1{
        color: white;
        text-align: center;
        margin-top: 150px;
      }
      #label{
        color: white;
      }
      input[type="submit"]{

        text-align: center;
        margin-left: 300px;
        margin-top: 20px;
      }
      td{
        margin-left: 20px;
      }
      select{
        margin-bottom: 20px;
        height: 50px;
      }

    </style>
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
        <?php
        include 'header.php';
        ?>
        <!-- /Navigation -->

      </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area" style="height: 800px;">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
      <!-- /Backgound Image -->

      <div class="home-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1>Add questions</h1>
             <form name="sentMessage" id="contactForm"  action="add_questionAcc.php" method="post"  >
        <div class="row" align="center">
<table align="center">
   <tr><td style="color: cornsilk;">Examination</td><td><div><select name="exam" class="form-control" id="dept" required="">
                    <option selected="" value="">Select Exam</option>
                      <?php
                      include '../connect.php';
                      
                      $sq =  "SELECT * FROM exam";
                      $re =mysqli_query($con,$sq);

                      while($row = mysqli_fetch_assoc($re))
                      {

                        echo '<option value="'. $row['exam_id'] . '" >' . $row['e_name'] . '</option>';
                      }

                      ?>


                    </select></div></td></tr>
          <tr><td id="label">Question:</td>
            <td><div class="form-group">
              <textarea  id="name" class="form-control" name = "question" placeholder="question" required="required" style="
    width:800px" ></textarea>
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
          <tr><td id="label">Option A:</td>
            <td><div class="form-group">
              <textarea  id="name" class="form-control" name = "option_a" placeholder="Option A" required="required" style="
    width:800px" ></textarea>
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
          <tr><td id="label">Option B:</td>
            <td><div class="form-group">
              <textarea  id="name" class="form-control" name = "option_b" placeholder="Option B" required="required" style="
    width:800px" ></textarea>
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
          <tr><td id="label">Option C:</td>
            <td><div class="form-group">
              <textarea  id="name" class="form-control" name = "option_c" placeholder="Option C" required="required" style="
    width:800px" ></textarea>
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
          <tr><td id="label">Option D:</td>
            <td><div class="form-group">
              <textarea  id="name" class="form-control" name = "option_d" placeholder="Option D" required="required" style="
    width:800px" ></textarea>
              <p class="help-block text-danger"></p>
            </div></td>
          </tr>
          <tr>
            <td id="label">Answer:</td><td><select name="answer" style="
    width:800px" required="required">
              <option selected="" value="">(Enter answer)</option>
              <option value="a">Option A</option>
              <option value="b">Option B</option>
              <option value="c">Option C</option>
              <option value="d">Option D</option>
            </select></td>
          </tr>
        <tr><td></td>
        <td><input type="submit" name="submit" class="main-button icon-button" value="Add"></td></tr>
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
              
              </a>
            </div>
          </div>
          <!-- footer logo -->

          <!-- footer nav -->
          <div class="col-md-6">
            <ul class="footer-nav">
              <li><a href="">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
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

<?php
}
else
header('location:../login.php');
?>