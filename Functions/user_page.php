<?php

session_start();

include "product_class.php";
$session_id = $_SESSION['admin']['id'];

$Products = new Products();
$display = $Products->displayProduct();
$message = '';





if (isset($_GET["action"])) 
{
    if ($_GET["action"] == "delete") {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
        $cart_data = json_decode($cookie_data, true);
        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]['item_id'] == $_GET["id"] && $cart_data[$keys]['session_id'] == $session_id) {
                unset($cart_data[$keys]);
                $item_data = json_encode($cart_data);
                setcookie("shopping_cart", $item_data, time() + (86400 * 30));
                header("location:user_page.php?remove=1");
            }
        }
    }
if ($_GET["action"] == "clear") {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
        $cart_data = json_decode($cookie_data, true);
        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]['session_id'] == $session_id) {
                unset($cart_data[$keys]);
                $item_data = json_encode($cart_data);
                setcookie("shopping_cart", $item_data, time() + (86400 * 30));
                header("location:user_page.php?clearall=1");
            }
        }

    }
}


if (isset($_GET["success"])) {
    $message = '

 <div class="alert alert-success alert-dismissible fade show" role="alert">
 Item Added into Cart
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
  style="cursor:pointer;margin-left: 210px;border: #d4edda;background: #d4edda;cursor: pointer;color: #155724">
  <i class="fa fa-times"></i>
  </button>
</div>
 ';
}


if (isset($_GET["remove"])) {
    $message = '
 
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
 Item removed from Cart
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
  style="margin-left: 190px;border: #f8d7da;background: #f8d7da;cursor: pointer;color: #721c24;">
  <i class="fa fa-times"></i>
  </button>
</div>
 ';
}


if (isset($_GET["clearall"])) {
    $message = '
 
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
 Your Shopping Cart has been clear...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
  style="cursor:pointer;margin-left: 120px;border: #f8d7da;background: #f8d7da;cursor: pointer;color: #a5678e;">
  <i class="fa fa-times"></i>
  </button>
</div>
 ';
}

?>





<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Shop</title>
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
    
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">-->
    <title>Shop</title>
    <style>
        .img-s {
            opacity: 0;
            transition: 0.3s;
        }

        .card:hover .img-s {
            opacity: 1;
        }
    </style>
</head>

<body>
    
    <!--Strat Header-->
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

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php" style="color:#a5678e ">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
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
                                <li><a href="user_page.php">Shop</a></li>
                                <li><a href="WishList.php">WishList</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>

                
                
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                   
                    
                    <ul>
                        
                        <!--Search bar---------------------------------------------------------------->
                        <li class="search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </li>
                        
                        
                        <!--Cart----------------------------------------------------------------------->
                        <li class="nav-item me-3 pe-3">
                            <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:black;border: 0px;background: transparent;margin-top: 25px;margin-left: 10px;color:Black;">
                                <i class="fa fa-shopping-cart"></i> 

                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill"
                                      style="background-color: #a5678e ;">


                                <?php

                                    if (isset($_COOKIE["shopping_cart"])) {
                                        $cookie_data = stripslashes($_COOKIE['shopping_cart']);

                                        $cart_data = json_decode($cookie_data, true);
                                    } else {
                                        $cart_data = array();
                                    }

                                    $session = array_column($cart_data, 'session_id');
                                    if(in_array($session_id,$session))
                                    {
                                        echo array_count_values($session)[$session_id];
                                    } else {
                                        echo "0";
                                    }

                                ?>

                                </span>
                            </button>
                        </li>
                        
                        
                        <!--Peofile--------------------------------------------------------------------->
                        <li class="nav-item me-2 dropdown">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="border: 0px;background: transparent;margin-top: 25px;margin-left: 10px;color:Black;">
                                    <i class="fa fa-user"></i>
                                </button>
                                <ul class="dropdown-menu" style="display: none;opacity: 1;margin-left: 15px;">
                                    <li><a class="dropdown-item" href="changePassword.php">Change Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logoutadmin.php">Long Out</a></li>
                                </ul>
                            </div>
                        </li>

                        
                    </ul>
                    
                    
                </div>
                <!-- End Atribute Navigation -->
            </div>
        </nav>
    </header>
    <!--End Header-->
    
    
    <!-- Start Top Search ---->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" id="search_button" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- Start Top Search ---->    
    
    
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb" style="background:#a5678e ">
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    
    <!--Start Products---------------------------------------------->
    <main class="mt-5 shop-box-inner" style="padding:20px;">
        <div class="container">
            <div class="row">
                
                <!--Category Check box------------------------------------------------>
                <div class="col-sm-12 col-md-5 col-lg-3  p-3">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            
                            
                            
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: WHITE;background: #a5678e ;margin-bottom: -10px;padding: 10px;width: 253px;text-align: left;border-style: none;display: inline-block;cursor: pointer;">
                                    Category
                                </button>
                            </h2>
                            
                            
                            <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    
                                    <!--Caregory-->
                                    <?php
                                    if (count($display)) {
                                        $events = array();
                                        foreach ($display as $row) {
                                            $events[] = $row['model'];
                                            $events = array_unique($events);
                                        }
                                        foreach ($events as $e) {
                                    ?>
                                            <div class="list-group-item checkbox">
                                                <label><input type="checkbox" class="common_selector brand" value="<?php echo $e ?>"> <?php echo ucfirst($e) ?></label>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-sm-12 col-md-7 col-lg-9  p-3">
                    <div class="container  mb-5" style="margin-top: -60px;">
                    </div>
                    
                    <!--Page Contant----Add to Chart------------------------------------------------->
                    <div class="container">
                    <div class="row filter_data">


                        <?php
                        if (isset($display) && !empty($display)) {
                            foreach ($display as $row) {
                        ?>
                        <?php
                            }
                        }
                        ?>


                    </div>
                    </div>

                    <!-- Shopping Card Content -------------------------------------------------------------->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        
                        
                        <div class="modal-dialog">
                           
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                    
                                    <h3 class="modal-title" id="exampleModalLabel">Handy Cart</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                            style="border:white;background:white;cursor:pointer;">
                                    <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <?php echo $message; ?>
                                        <div align="right">

                                            <a href="user_page.php?action=clear" class="btn btn-danger btn-sm mb-1" style="background: #a5678e;border:#a5678e"><b>Clear Cart <i class="fa fa-trash-alt"></i></b></a>
                                        </div>
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="40%">Item Name</th>
                                                <th width="10%">Quantity</th>
                                                <th width="20%">Price</th>
                                                <th width="15%">Total</th>
                                                <th width="5%">Action</th>
                                            </tr>
                                            <?php
                                            if (isset($_COOKIE["shopping_cart"])) {

                                                //    echo "<pre>";
                                                //   print_r($_COOKIE["shopping_cart"]);

                                                $total = 0;
                                                $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                                                $cart_data = json_decode($cookie_data, true);
                                             

                                                $session_ID = array_column($cart_data, 'session_id');
                                                if (in_array($session_id, $session_ID)) {
                                                    foreach ($cart_data as $keys => $values) {
                                                        if($cart_data[$keys]["session_id"] ==  $session_id){



                                            ?>
                                                        <tr>
                                                            <td>
                                                            
                                                            <?php echo $values["item_name"]; ?></td>
                                                            <td><?php echo $values["item_quantity"]; ?></td>
                                                            <td>$ <?php echo $values["item_price"]; ?></td>
                                                            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                                            <td><a href="user_page.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class="fa fa-trash"></i></span></a></td>
                                                        </tr>
                                                <?php
                                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                                    }
                                                    }
                                                }

                                                ?>
                                                <tr>
                                                    <td colspan="3" align="right">Total</td>
                                                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                                    <td></td>
                                                </tr>
                                            <?php
                                            } else {
                                                echo '<tr>
                                                      <td colspan="5" align="center">No Item in Cart</td>
                                                      </tr>
                                                     ' ;
                                            }?>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        
                        </div>
                    
                    
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </main>
    <!--End Products---------------------------------------------->
    
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
    
    
    
    <a href="#" id="back-to-top" title="Back to top" style="display: none; background:#a5678e;">&uarr;</a>

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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var radio = $(this).val();
                console.log(radio);
                $.ajax({
                    url: "fetch_radio.php",
                    method: "POST",
                    data: {
                        radio: radio

                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            });
            filter_data();
            load_data();

            function filter_data() {
                var action = 'fetch_data';
                var brand = get_filter('brand');
                var hardware = get_filter('hardware');
                var display = get_filter('display');


                $.ajax({
                    url: "fetch_data.php",
                    method: "POST",
                    data: {
                        action: action,
                        brand: brand,
                        hardware: hardware,
                        display: display
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            function load_data(query) {
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('.filter_data').html(data);
                    }
                });
            }
            $('#search_button').keyup(function() {
                var search = $(this).val();

                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
            $('.common_selector').click(function() {
                filter_data();
            });



        });
    </script>

</body>

</html>