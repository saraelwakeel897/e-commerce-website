<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Contact Us</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
       a .navbar-header .navbar-brand 
        {
            color: #a5678e;
        }
    </style>

</head>

<body>


    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                     <a class="navbar-brand" href="Index.php" ><img src="../logo.png" class="logo" alt="" style="width: 80px;"/></a>
                            
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="Index.php" style="color:#a5678e ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Category</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Drawing</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="Animation.php">Animation</a></li>
                                                    <li><a href="Mandela.php">Mandalla</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Crafts</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="Boxes.php">Boxes</a></li>
                                                    <li><a href="Cards.php">Cards</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="../Functions/user_page.php">shop</a></li>
                                <li><a href="WishList.php">WishList</a></li>
                                <!--<li><a href="CheckOut.php">Checkout</a></li>
                                <li><a href="MyAccount.php">My Account</a></li>
                                <li><a href="ShopDetails.php">Shop Detail</a></li>-->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- /.navbar-collapse -->

                <!-- Start Attribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        
                        <li class="shopping-cart">
                            <a href="user_page.php"><i class="fa fa-shopping-cart"></i> </a>
                        </li>
                        
                        <li class="dropdown">
                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false" 
                                        style="border: 0px;background: transparent;margin-top: 27px;margin-left: 10px;" >
                                    <a href="#" >
                                        <i class="fa fa-user" data-bs-toggle="dropdown" ></i>
                                    </a>
                                </button>
                                <ul class="dropdown-menu" style="display: none;opacity: 1;margin-left: 15px;">
                                    <li><a class="dropdown-item" href="../Functions/changePassword.php">Change Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../Functions/logoutadmin.php">Log Out</a></li>
                                </ul>
                            
                        </li>
                        
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" id="search_button" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb"style="background:#a5678e ">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="noo-sh-title" style="font-style: normal;font-size: 30px;">We are HANDY Website </h2>
                    <p style="font-size: 20px;">There are a lot of hobbies involved in HandMade work.In this website, we`re going to show some of these
                                HandMade work so that everyone can benefit from them and share them.</p>
                    <p style="font-size: 20px;">If you like to change and think outside the box and be creative about buying gifts. You`ll enjoy the site and find out what you want.
                        </p>
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="images/hhhh.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                    </div>
                </div>
            </div>
            
            
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title" style="font-style: normal;font-size: 30px;">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/r.jpeg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Sara Ali</h3> <span class="post">Web Developer <br> Back-End</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                
                            </ul>
                            <div class="icon"style="background:#a5678e "> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/PicsArt_12-02-08.28.05.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Rana Ashraf</h3> <span class="post">Web Developer <br> Front-End (Customer Panel)</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                
                            </ul>
                            <div class="icon"style="background:#a5678e "> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/IMG_20210921_040513_034.webp" alt="" />
                            <div class="team-content">
                                <h3 class="title">Sarah Magdy</h3> <span class="post">Web Developer <br> Front-End (Admin Panel)</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                
                            </ul>
                            <div class="icon"style="background:#a5678e "> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                           
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->
    
    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.52.38.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.52.23.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.51.49.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.51.31.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.51.13.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.52.53.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.53.30.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/PicsArt_12-16-12.53.18.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="owl-nav">
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About HANDY Website</h4>
                            <p>There are a lot of hobbies involved in HandMade work.In this website, we`re going to show some of these
                                HandMade work so that everyone can benefit from them and share them.
                                </p>
                            <ul>
                                <li><a href="https://www.facebook.com"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.twitter.com"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.gmail.com"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.pinterest.com"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="https://web.whatsapp.com"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Kafr El Sheikh <br> Faculty of Computer & Information </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+201227348209</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">handyy@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

  
    <a href="#" id="back-to-top" title="Back to top" style="display: none;background:#a5678e ">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
            $('#search_button').keyup(function() {
                var search = $(this).val();

                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
    </script>
</body>

</html>