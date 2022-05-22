<?php
session_start();

include "product_class.php";
include('connect.php');
$session_id = $_SESSION['admin']['id'];


$WishList = new Products();
$display = $WishList->displayWishList();

/*if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $WishList->delete($deleteId);
}*/

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../logo.png">

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
                        <li class="nav-item active"><a class="nav-link" href="Index.php" style="color:#a5678e;">Home</a></li>
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
                <input type="text" class="form-control" placeholder="Search">
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
                    <h2>WishList</h2>
                    <ul class="breadcrumb" style="background:#a5678e;">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">WishList</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    
    
    
    <!--BootStrap Model-->
    <!--<button class="btn hvr-hover" data-toggle = "modal" data-target = "#myModal"
          style="color: white;font-size: 25px;width: 200px;padding: 10px;">
        <b>SHOP NOW</b>
        </button>

    
    <div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-hidden = "true">
    
   <div class = "modal-dialog">
      <div class = "modal-content">
          
         <div class = "modal-header">
            <h4 class = "modal-title">
               Change Password
            </h4>
 
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
         </div>
          
         <div id = "modal-body">
            <?php
            if (isset($error)) {
                foreach ($error as $e) { ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $e; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            <?php }
            } ?>
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Old Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" name="password">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="Newpassword">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" name="CNewpassword">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-outline-primary" type="submit" name="submit">Change</button>
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">Cancel</button>
                </div>
            </form>
         
             
            
         </div>
          
      </div>
   </div>
    
</div>-->
    
    
    
    
    
    <!-- Start Wishlist -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        
                        
                        <?php
            if (isset($_GET['msg3']) == "delete") {
                    echo "
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Product deleted successfully
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                         </div>

                        ";}
           ?>
                        
                        <table class="table">
                            <thead>
                                <tr style="background:#a5678e;">
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price </th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                if (count($display)) {
                foreach ($display as $row) {
            ?>

            
          <tr>
              <td>
                <?php $result = $row['image'] ?>
                <img src="image/<?php echo $result ?>" class="img-responsive" width="50" height="50">

            </td>
              
                <td><?php echo ucfirst($row['product_name']) ?></td>
                <td><?php echo $row['price'] ?> $</td>
                
              
                <td>
                                                            
                

                <a href="WishList.php?deleteId=<?php echo $row['id'] ?>" 
                   class="btn btn-danger btn-sm" onclick="confirm('Are you sure want to delete this record')">
                    <i class="fas fa-trash-alt"></i> 
                    Delete
                </a>
            </td>
              
            
          </tr>
            <?php }} ?>
                                
                            </tbody>
                        </table>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist -->

    
    
    
    
    
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

    
    <a href="#" id="back-to-top" title="Back to top" style="display: none;background:#a5678e;">&uarr;</a>

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
</body>

</html>