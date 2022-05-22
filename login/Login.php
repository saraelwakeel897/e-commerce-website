<?php
include "../Functions/class.php";
session_start();
if (isset($_SESSION["admin"]) ? $_SESSION["admin"]['role'] == 'admin' : '') {
    header('location: ../Functions/dashboard.php');
}
if (isset($_SESSION["admin"]) ? $_SESSION["admin"]['role'] == 'user' : '') {
    header('location: ../Functions/Index.php');
}
$registerLogin = new Crud();
if (isset($_POST['register'])) {
    $registerLogin->register($_POST);
    $error = $registerLogin->get_errors();
}
if (isset($_POST['login'])) {
    $registerLogin->login($_POST);
    $get_errors_login = $registerLogin->get_errors_login_all();
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
    <title>Login</title>

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
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins" style=" background: linear-gradient(to top, #e4e4e4 0%, #ddd 100%);">
        <div class="wrapper wrapper--w780">
            <div class="card card-3" style="background: linear-gradient(to top, #a5678e 0%, #e8b7d4 100%);">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login Page</h2>
                    
                    
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                         
                        <?php 
                          if (isset($_GET['msg2']) == "newPassword") {
                            echo "
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            Password change successfully !
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>";
                        }
                        ?>
                        <?php
                        if (!empty($_SESSION['success'])) {
                        ?>
                            <div class='alert alert-success alert-dismissible col-md-10 ml-4 mt-1'>
                                <button class='close' type="submit" name="unset_session" data-dismiss='alert'>&times;</button>
                                <?php echo $_SESSION['success']; ?>
                            </div>
                        <?php
                        }
                        ?>
                        
                        <?php
                        if (!empty($_SESSION['status'])) {
                        ?>
                            <div class='alert alert-danger alert-dismissible col-md-10 ml-4 mt-1'>
                                <button class='close' type="submit" name="unset_session" data-dismiss='alert'>&times;</button>
                                <?php echo $_SESSION['status']; ?>
                            </div>

                        <?php
                        }
                        ?>
                        <?php
                        if (isset($get_errors_login)) {
                            foreach ($get_errors_login as $e) { ?>
                                <div class='alert alert-danger alert-dismissible col-md-10 ml-4 mt-1'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <?php echo $e; ?>
                                </div>
                        <?php }
                        }
                        ?>

                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email"
                                   value="<?php if (isset($_COOKIE["email"])) {echo $_COOKIE["email"];} ?>">
                        </div>
                        
                        <div class="input-group">
                            <input type="password" class="input--style-3" name="password" id="password" placeholder="Password"
                                   value="<?php if (isset($_COOKIE["password"])) {echo $_COOKIE["password"];} ?>">
                        </div>
                        
                        <div class="input-group">
                            <input type="checkbox" style="margin-bottom: 20px;" name="remember" class="form-check-input" id="exampleCheck1"
                                   <?php if (isset($_COOKIE["remember"])) { ?> checked <?php } ?> >
                            <p style="color: white;margin-left: 145px;margin-top: -36px;margin-bottom: 20px;font-size:15px;">Remember me</p>
                        </div>
                        
                        <!--<label class="form-check-label text-muted font-weight-bold" for="exampleCheck1"
                                   style="color: white;margin-left: 154px;">Remember me</label>-->
                       
                             
                        
                        <div class="p-t-10">
                            <input type="submit" id="login_now" name="login" class="btn btn--pill btn--green" value="Log In" style="    background: #623651">
                        </div>
                    </form>
                    
                    
                    <!--<p class="loginhere" style="margin-top: 22px;">
                        Do you forget your password ? 
                        <br>
                        <a href="../Functions/forgotPassword.php" class="loginhere-link" >Reset Password</a>
                    </p>-->
                    
                    
                    <p class="loginhere" style="margin-top: 22px;">
                        Don't have an account ? 
                        <br>
                        <a href="../Registration/Registration.php" class="loginhere-link">Register here</a>
                    </p>
                    
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
<!-- end document-->