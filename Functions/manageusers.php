<?php
include "product_class.php";
include "class.php";
session_start();

if (empty($_SESSION['admin'])) {
    header('location: ../login/Login.php');
}
if ($_SESSION['admin']['role'] == 'user') {
    header('location: user_page.php');
}
$users = new Products();
$display = $users->displayUsers();

/*if (isset($_POST['delete'])) {
    $users->user_delete($_POST);
}*/

if (isset($_POST['delete'])) 
{
    $id = $_POST['id']; 
    
    $con = mysqli_connect("localhost", "root", "", "phpoop");
    $query = "DELETE FROM users WHERE id='$id'";
        $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        echo'<script>alert("User Added Successfully");
            window.location.assign("Addproduct.php");</script>';
        exit(0);
    }
    else
    {
        echo'<script>alert("Something went wrong!!");
                    window.location.assign("Addproduct.php");</script>';
        exit(0);
    }
        
}


?>

<!DOCKTYPE HTML>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Manage Users</title>
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
                  
                  <li><a href="logoutadmin.php"><i class="material-icons" style="font-size:20px">logout</i>&nbsp;Logout</a>
                  </li>
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
           <h1 class="display-4" style="font-size: 50px">Manage Users</h1>
               <hr>
           <br>
               <?php 
                  if (isset($_GET['msg3']) == "delete") {
                    echo "<div class='alert alert-danger alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert'>&times;</button>
                      Record deleted successfully
                    </div>";
                }
                ?>
               
               

               
<div style="overflow-x:scroll;">
    
<table id="example" class="table table-bordered table-hover table-striped" style="font-size:18px">
    <thead>
        <tr>        
            <th>ID</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Status</th>
            <th>Online</th>
            <th>Role</th>
            <!--<th>Action</th>-->
        </tr>
    </thead>
    <tbody>
        <?php

        if (count($display)) {
            foreach ($display as $row) {
        ?>
        <tr>

            <td><?php echo ucfirst($row['id']) ?></td>
            <td><?php echo ucfirst($row['name']) ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            
            <!--Created Date-->
            <td>
                <?php echo date("Y-m-d",strtotime($row['create_date'])); ?>
            </td>             
        
            <!--Status-->
           <td>
              <?php 
                 if($row['online'] == '0'){ ?>
            <div class="text-center">
            <i class="material-icons" style="color:red">account_circle</i>
            </div>
               <?php
                 }if($row['online'] == '1'){ ?>
                   <div class="text-center">
            <i class="material-icons" style="color:green">account_circle</i>
            </div>
              <?php
                 }
              ?>
          </td>
            
            <!--online-->
           <td class="text-center">
               <div class="form-check form-switch">
                <input type="checkbox"   id='<?php echo $row['id'] ?>' class="form-check-input " <?php echo $row['status']=='0'?'checked':'' ?> > 
               </div>
           </td> 
            
            <!--role-->
           <td><?php echo $row['role'] ?></td> 
            
            <!--Action-->
            <!--<td>
                <a href="" class="btn btn-success">Edit</a>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <button type="button" name="delete" href="manageusers.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="confirm('Are you sure want to delete this user?')" value="<?= $row['id']; ?>">Delete</button>
                    </form>
            </td>-->

        </tr>
        <?php }
        } ?>                   
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