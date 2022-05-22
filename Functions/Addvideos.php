<?php
include "class.php";
session_start();
if (empty($_SESSION['admin'])) {
    header('location: ../login/Login.php');
}
if ($_SESSION['admin']['role'] == 'user') {
    header('location: user_page.php');
}


if (isset($_POST['add_video'])) 
{
    $title = $_POST['title']; 
    $model = $_POST['model'];
    $price = $_POST['price'];
    
    $filename = $_FILES["file"]["name"]; 
    $tempname = $_FILES["file"]["tmp_name"];     
    $folder = "image/".$filename; 
     move_uploaded_file($tempname, $folder);
    
    $desc = $_POST['desc'];
    
    $con = mysqli_connect("localhost", "root", "", "phpoop");
    $query = "INSERT INTO videos (title,model,price,desc,filename) 
        VALUES ('$title','$model','$price','$desc','$filename')";
        $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        echo'<script>alert("video Added Successfully");
            window.location.assign("Addvideos.php");</script>';
    }
    else
    {
        echo'<script>alert("Something went wrong!!");
                    window.location.assign("Addvideos.php");</script>';
    }
        
}
?>

<!DOCKTYPE HTML>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Add Videos</title>
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
                  <li><a href="#"><i class="material-icons" style="font-size:20px">logout</i>&nbsp;Logout</a></li>
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
                           <i class="material-icons" style="font-size:25px;color:white">people</i>
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
        
        <section class="working-panel">
           <div class="container-fluid">
           <h1 class="display-4" style="font-size: 40px"><span class="glyphicon glyphicon-tag" ></span>&nbsp;Add Videos</h1>
               <hr>
               <div class="row">
         
              
                   <div class="panel-body" style="background-color:ghostwhite;width:165%;">
                       <div class="col-lg-7">
                        <div class="well" >
                    
                    
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  name="form" enctype="multipart/form-data" >
                                <p>Title</p>
                                    <input class="input-lg thumbnail form-control" type="text" name="title" id="video_name" autofocus style="width:100%" placeholder="video Name" required>
                                <p>Description</p>
                                    <textarea class="thumbnail form-control" name="desc" id="details" style="width:100%; height:100px" placeholder="write here..." required></textarea>
                                <p>Add Video</p>
                                   <div style="background-color:#CCC">
                                       <input type="file" style="width:100%" name="file" class="btn thumbnail" id="video" >
                                   </div>


                                <h3>Pricing</h3>
                                 <p>Price</p>
                                     <div class="input-group">
                                         <div class="input-group-addon">Rs</div>
                                <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
                                    </div><br>
                                
                               <h3>Category</h3>  
                                       <p>Video type</p>
                                           <input type="text" name="model" list="exampleList" class="form-control">
                                                    <datalist id="exampleList">
                                                       <option value="Mandella">  
                                                       <option value="Cards">
                                                       <option value="Boxes">
                                                       <option value="Drawing">
                                                    </datalist>
                                                        <br>

                                 <div align="center">
                                <button type="submit" name="add_video" id="add_video" class="btn btn-danger"  style="font-size: 25px;"> Add Video</button>
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