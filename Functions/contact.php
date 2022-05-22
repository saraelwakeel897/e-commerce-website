<?php 
include "product_class.php";
session_start();

if (empty($_SESSION['admin'])) {
    header('location: ../login/Login.php');
}
if ($_SESSION['admin']['role'] == 'user') {
    header('location: Index.php');
}

$fb = new Products();

$display = $fb->displayFeedback();

?>

<!DOCKTYPE HTML>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Contact</title>
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
    <header >
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
                           <i class="material-icons" style="font-size:25px;color:white">add_box</i>
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
           <h1 class="display-4" style="font-size: 50px">Contact us data</h1>
               <hr>
           <br>

            <div style="overflow-x:scroll;">
            <table class="table table-bordered table-hover table-striped" style="font-size:18px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (count($display)) {
                        foreach ($display as $row) {
                    ?>
                    
                    <tr>
              
                <td><?php echo $row['id'] ?></td>
                <td><?php echo ucfirst($row['name']) ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td> 
                <td><?php echo $row['feedback'] ?></td>
              
                    </tr>
              
             <?php }} ?>
                </tbody>
            </table>
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