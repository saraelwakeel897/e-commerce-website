<?php
include "product_class.php";
session_start();
if (empty($_SESSION['admin'])) {
    header('location: ../login/Login.php');
}
if ($_SESSION['admin']['role'] == 'user') {
    header('location: user_page.php');
}
$addProducts = new Products();

if (isset($_POST['submit'])) {
    $addProducts->add_Products($_POST);
}
?>

<!DOCKTYPE HTML>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Add Products</title>
    <!--css files-->
    <link rel="stylesheet" href="fa/svg-with-js/css/fa-svg-with-js.css">
    <link rel="stylesheet" href="css/admin_panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./logo.png">

    
    
    
</head>
<body>
    <!--header section-->
    <header>
        <div class="container-fluid">
           <div class="header-content" style="color: beige ;font-size: 20px">
               <!--sider place of header--> 
                 <div class="side-head">
                       <span class="text-white" >Admin panel</span>&nbsp;&nbsp;<i class="material-icons" style="font-size:30px;color:white" >	reorder</i>
                     
                  </div>
               <!--header navigation bar-->
             <div class="header-nav"></div>
        <ul>
            <li><a href="manageusers.php"><i class="material-icons" style="font-size:20px">account_circle</i>&nbsp;Users</a></li>
            <li><a href="logoutadmin.php"><i class="material-icons" style="font-size:20px">logout</i>&nbsp;Logout</a></li>
        </ul>  

    </div>
            
        
        </div>
    </header>
    
    
    <div class="wrapper" style="font-size: 20px">
    <!--this is sidebar-->
       <section class="sidebar">
            <ul class="nav-bar">
                <li><a href="dashboard.php">
                    <i class="material-icons" style="font-size:25px;color:white">dashboard</i>
                    Dashboard</a> 
                </li>
                
                 <li>
                     <a href="Addproduct.php">	
                         <i class="material-icons" style="font-size:25px;color:white">add_box</i>
                         Add Product
                     </a>
                </li>
                
                 <li>
                     <a href="Addvideos.php">
                         <i class="material-icons" style="font-size:25px;color:white">video_library</i>
                         Add videos
                     </a>
                   </li>
                
                   <li>
                       <a href="manageusers.php">
                           <i class="material-icons" style="font-size:25px;color:white">add_box</i>
                           Manage Users
                       </a>
                   </li>
                       <li>
                           <a href="add_user.php">
                           <i class="material-icons" style="font-size:25px;color:white">people</i>
                           Add Users
                           </a>
                      </li>
                    
                    <li>
                        <a href="changePassword.php">
                            <i class="material-icons" style="font-size:25px">account_circle</i>
                            profile
                        </a>
                </li>
                
                    <li>
                        <a href="contact.php">
                            <i class="material-icons" style="font-size:25px;color:white">contacts</i>
                            Contact Us data
                        </a> 
                </li>
                    <li>
                        <a href="logoutadmin.php">
                            <i class="material-icons" style="font-size:20px">logout</i>
                            logout
                        </a> 
                </li>
           
           </ul>
        </section>
        
        <!--this is page content-->
        <section class="working-panel">
           <div class="container-fluid">
                <h1 class="display-4" style="font-size: 40px">
                   <span class="glyphicon glyphicon-tag" ></span>
                   &nbsp;Add Product
               </h1>
               <hr>
               <div class="row">
         
              
                <div class="panel-body" style="background-color:ghostwhite;width: 165%;">
		       <div class="col-lg-7">
                   
                <div class="well" >
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" name="form" >
                        
                        <label for="inputCity">Title</label>
                        <input class="input-lg thumbnail form-control" type="text" name="title" autofocus style="width:100%" placeholder="Product Name" id="inputCity" required>
                                    
                        <label for="inputZips">Description</label>
                        <textarea class="thumbnail form-control" name="desc" id="nputZips" style="width:100%; height:100px" placeholder="write here..." required></textarea>

                        <label for="formFileMultiple">Add Image</label>
                        <div style="background-color:#CCC">
                            <input style="width:100%" class="btn thumbnail" name="file" type="file" id="formFileMultiple" multiple >
                        </div>
                          
                
                    <h3>Pricing</h3>
                    <label for="inputZip">Price</label>
                    <div class="input-group">
                        <div class="input-group-addon">Rs</div>
                        <input type="number" class="form-control" name="price" id="inputZip"  placeholder="0.00" required>
                    </div>
                    
                    <br>
                    
                    <label for="inputZip">Quantity</label>
                    <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="number" name="qty" id="inputZip" class="form-control" placeholder="0" required>
                    </div>
                    
                    <h3>Category</h3>  
                        <label for="inputCity">Product type</label>
                        <input type="text" name="model" list="exampleList" class="form-control" id="inputCity">
                        <datalist id="exampleList">
                            <option value="Mandella">  
                            <option value="Cards">
                            <option value="Boxes">
                            <option value="Drawing">
                        </datalist>
                        <br>
                   

                <div align="center">
                    <button name="submit" type="submit" id="submit" class="btn btn-danger" style="font-size: 25px;"> Add Product</button>
                </div>
                    </form>
               </div>
            </div>  
                    
                    
                 
                        
        
                   </div>
               </div>
            </div>

            
        </section>
    </div>
    
    
    <!--this is for JS files-->
    <script src="js/jquery.js"></script>
    <script src="fas/svg-with-js/css/fontawesome.css"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>

