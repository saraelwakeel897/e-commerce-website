<?php 
include "class.php";
session_start();
$forgotPassword = new Crud();

if (isset($_POST['submit'])) {
  $forgotPassword->forgotPassword($_POST);
  $get_errors_login = $forgotPassword->get_errors_login_all();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./logo.png">

    
    <!-- Title Page-->
    <title>Forget Password</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <style>
     .form-gap {
    padding-top: 70px;
}
 </style>
</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" 
                     style="background: url(../images/7.jpg) top left/cover no-repeat;display: table-cell;width: 50%;">
    <div class="form-gap"></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 ">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="text-center">
                      <h3><i class="fa fa-lock fa-4x"></i></h3>
                      <h2 class="text-center">Forgot Password?</h2>
                      <p>You can reset your password here.</p>
                      <?php
                                if (isset($get_errors_login)) {
                                    foreach ($get_errors_login as $e) { ?>
                                        <div class='alert alert-danger alert-dismissible col-md-10 ml-4 mt-1'>
                                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                            <?php echo $e; ?>
                                        </div>
                                <?php }
                                } ?>
                                   <?php
                                if (!empty($_SESSION['info'])) {
                                ?>

                                    <div class='alert alert-success alert-dismissible col-md-12'>
                                        <button class='close' type="submit" name="unset_session" data-dismiss='alert'>&times;</button>
                                        <?php echo $_SESSION['info']; ?>
                                    </div>
                                <?php
                                }
                                ?>
                      <div class="panel-body">

                        <form id="register-form" role="form" autocomplete="off" class="form"method="POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                              <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <input  name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                          </div>


                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
            </div>
        </div>
    </div>
    </div>
    
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>
    
    
</body>
</html>