<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Home</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./logo.png">

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
        .slides-pagination a.current 
        {
        background: #a5678e;
            border: 2px solid #a5678e;
        }
        
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
                        <li class="nav-item active" ><a class="nav-link" href="Index.php" style="color:#a5678e ">Home</a></li>
                        <li class="nav-item" ><a class="nav-link" href="About.php" >About Us</a></li>
                        <li class="dropdown megamenu-fw" >
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
                                <li><a href="user_page.php">shop</a></li>
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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HaNdy Website</strong></h1>
                            <p class="m-b-40">There are a lot of hobbies involved in HandMade work.In this website, we`re going to show some of these HandMade work<br> so that everyone can benefit from them and share them.</p>
                            <p><a class="btn hvr-hover" href="user_page.php" style="background: linear-gradient(to top, #a5678e 139%, #e8b7d4 100%);">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HaNdy Website</strong></h1>
                            <p class="m-b-40">There are a lot of hobbies involved in HandMade work.In this website, we`re going to show some of these HandMade work<br> so that everyone can benefit from them and share them.</p>
                            <p><a class="btn hvr-hover" href="user_page.php" style="background: linear-gradient(to top, #a5678e 139%, #e8b7d4 100%);">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HaNdy Website</strong></h1>
                            <p class="m-b-40">There are a lot of hobbies involved in HandMade work.In this website, we`re going to show some of these HandMade work<br> so that everyone can benefit from them and share them.</p>
                            <p><a class="btn hvr-hover" href="user_page.php" style="background: linear-gradient(to top, #a5678e 139%, #e8b7d4 100%);">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation" >
            <a href="#" class="next" style="background: linear-gradient(to top, #a5678e 139%, #e8b7d4 100%);"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"style="background: linear-gradient(to top, #a5678e 139%, #e8b7d4 100%);"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    
    
    
    
    
    <!-- Start Videos  -->
    <div class="categories-shop" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Product's Videos</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" style="border-radius: 20px;border: 1px solid #ffffff;">
                        <!--<img class="img-fluid" src="images/PicsArt_12-16-12.54.01.jpg" alt="" />-->
                        <video controls muted 
                               style="width: 354px;height: 198px;margin-left: -4px;margin-top: -3px;margin-bottom: 31px;">
                            <source src="../Videos/box.mp4" type="video/mp4">
                        </video>
                        <a class="btn hvr-hover" href="Boxes.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Boxes</a>
                    </div>
                    <div class="shop-cat-box" style="border-radius: 20px;border: 1px solid #ffffff;">
                        <!--<img class="img-fluid" src="images/PicsArt_12-16-12.54.18.jpg" alt="" />-->
                        <video controls muted 
                               style="width: 350px;height: 200px;margin-left: -4px;margin-top: -3px;margin-bottom: 31px;">
                            <source src="../Videos/cards.mp4" type="video/mp4">
                            </video>
                        <a class="btn hvr-hover" href="Cards.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Cards</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" style="border-radius: 20px;border: 1px solid #ffffff;">
                        <!--<img class="img-fluid" src="images/PicsArt_12-16-12.53.46.jpg" alt="" />-->
                        <video controls muted 
                               style="width: 350px;height: 202px;margin-left: -4px;margin-top: -6px;margin-bottom: 31px;">
                            <source src="../Videos/mandela.mp4" type="video/mp4">
                            </video>
                        <a class="btn hvr-hover" href="Mandela.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Mandala</a>
                    </div>
                    <div class="shop-cat-box" style="border-radius: 20px;border: 1px solid #ffffff;">
                        <!--<img class="img-fluid" src="images/PicsArt_12-16-12.54.38.jpg" alt="" />-->
                        <video controls muted
                               style="width: 350px;height: 205px;margin-left: -4px;margin-top: -6px;margin-bottom: 28px;">
                            <source src="../Videos/animation.mp4" type="video/mp4">
                            </video>
                        <a class="btn hvr-hover" href="Animation.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Animation</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" style="border-radius: 20px;border: 1px solid #ffffff;">
                        <!--<img class="img-fluid" src="images/PicsArt_12-16-12.55.09.jpg" alt="" />-->
                        <video controls muted
                               style="width: 349px;height: 205px;margin-left: -4px;margin-top: -7px;margin-bottom: 28px;">
                            <source src="../Videos/drawing.mp4" type="video/mp4">
                            </video>
                        <a class="btn hvr-hover" href="Animation.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Drawing</a>
                    </div>
                    <div class="shop-cat-box" style="border-radius: 20px;border: 1px solid #ffffff;">
                        <!--<img class="img-fluid" src="images/PicsArt_12-16-12.55.09.jpg" alt="" />-->
                        <video controls muted
                               style="width: 349px;height: 205px;margin-left: -4px;margin-top: -7px;margin-bottom: 28px;">
                            <source src="../Videos/portrait.mp4" type="video/mp4">
                            </video>
                        <a class="btn hvr-hover" href="Animation.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Portriat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Videos -->

    <!-- Start Page  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*" >All</button>
                            <button data-filter=".top-featured"style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Top featured</button>
                            <button data-filter=".best-seller" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale"style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Sale</p>
                            </div>
                          <img src="images/PicsArt_12-16-12.55.48.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                </ul>
                                <a class="cart" href="user_page.php"style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Buy Now</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Memory Box</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="images/PicsArt_12-16-12.54.55.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                </ul>
                                <a class="cart" href="user_page.php"style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Buy Now</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Animation</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Sale</p>
                            </div>
                            <img src="images/PicsArt_12-16-12.55.23.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                </ul>
                                <a class="cart" href="user_page.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Buy Now</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Memory Box</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale"style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Sale</p>
                            </div>
                            <img src="images/PicsArt_12-16-12.56.18.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" style="background: #6c3658;" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                </ul>
                                <a class="cart" href="user_page.php" style="background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">Buy Now</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Mandala</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page  -->

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
                            <h4 >Contact Us</h4>
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

    

    <a href="#" id="back-to-top" title="Back to top" style="display: none;background: linear-gradient(to top, #6c3658  139%, #e8b7d4 100%);">&uarr;</a>

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
    <script src="js/contact-form-script.js"></script>
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