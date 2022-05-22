<?php
include "product_class.php";
session_start();

if (empty($_SESSION['admin'])) {
    header('location: ../login/Login.php');
}
if ($_SESSION['admin']['role'] == 'user') {
    header('location: Index.php');
}
$addProducts = new Products();

$display = $addProducts->displayProduct();

// Update product in  table
if (isset($_POST['update'])) {
    $addProducts->updateRecord($_POST);
}
if (isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $addProducts->delete($deleteId);
}
?>


<!DOCKTYPE HTML>
<html lang="en">
    
    
<head>
    
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!--css files-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_panel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link rel="shortcut icon" href="../logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./logo.png">

    
    
</head>
    
    
<body>
    <!--header section-->
    <header>
        <div class="container-fluid">
           <div class="header-content" style="font-size: 20px">
               <!--sider place of header--> 
                 <div class="side-head">
                      <span class="text-white" >Admin panel</span>&nbsp;&nbsp;<i class="material-icons" style="font-size:30px;color:white" >	reorder</i>
                     
                  </div>
               <!--header navigation bar-->
                     <div class="header-nav"></div>
                    <ul>
                 
                  <li><a href="manageusers.php"><i class="material-icons" style="font-size:20px">account_circle</i>&nbsp;Users</a></li>
                  <li><a href="logoutadmin.php"><i class="material-icons" style="font-size:20px">logout</i>Logout</a></li>
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
           <h1 class="display-4">Welcome To Dashboard</h1>
               <hr>
               <div class="row">
                   
                   <!--category widget-->
                   <div class="col-md-3">
                       <div class="card  bg-orange-g text-white">
                           <div class="card-body">
                               <h4 class="font-weight-light"><i class="fas fa-dolly"></i> All Products</h4>
                               <hr>
                               <?php 
                                   
                                   $con = mysqli_connect("localhost", "root", "", "phpoop");
                                   $query = "SELECT  id FROM products ORDER BY id";
                                   $query_run = mysqli_query($con, $query);
                                   $row = mysqli_num_rows($query_run);
                                   echo '<h3> '.$row.'</h3>';
                                   
                                ?>
                           </div>
                       </div>
                   </div>
                    <!--All Brands-->
                   <div class="col-md-3">
                       <div class="card  bg-green-g text-white">
                           <div class="card-body">
                               <h4 class="font-weight-light"><i class="fas fa-dolly-flatbed"></i>All Users</h4>
                               <hr>
                               <?php 
                                   
                                   $con = mysqli_connect("localhost", "root", "", "phpoop");
                                   $query = "SELECT  id FROM users ORDER BY id";
                                   $query_run = mysqli_query($con, $query);
                                   $row = mysqli_num_rows($query_run);
                                   echo '<h3> '.$row.'</h3>';
                                   
                                ?>
                           </div>
                       </div>
                   </div>
                    <!--All users-->
                   <div class="col-md-3">
                       <div class="card  bg-primary-g text-white">
                           <div class="card-body">
                               <h4 class="font-weight-light"><i class="fas fa-users"></i>All Videos</h4>
                               <hr>
                               <?php 
                                   
                                   $con = mysqli_connect("localhost", "root", "", "phpoop");
                                   $query = "SELECT  id FROM videos ORDER BY id";
                                   $query_run = mysqli_query($con, $query);
                                   $row = mysqli_num_rows($query_run);
                                   echo '<h3> '.$row.'</h3>';
                                   
                                ?>
                           </div>
                       </div>
                   </div>
                     <!--All orders-->
                   <div class="col-md-3">
                       <div class="card  bg-golden-g text-white">
                           <div class="card-body">
                               <h4 class="font-weight-light"><i class="fas fa-truck"></i>All Feedback</h4>
                               <hr>
                               <?php 
                                   
                                   $con = mysqli_connect("localhost", "root", "", "phpoop");
                                   $query = "SELECT  id FROM feedback ORDER BY id";
                                   $query_run = mysqli_query($con, $query);
                                   $row = mysqli_num_rows($query_run);
                                   echo '<h3> '.$row.'</h3>';
                                   
                                ?>
                           </div>
                       </div>
                   </div>
               </div>
               
               
               
               
               <!--all product table-->
       <div class="all-order mt-5">

           <h2>All Products</h2>
           <hr>
           <?php
            if (isset($_GET['msg3']) == "delete") {
                    echo "
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Product deleted successfully
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                         </div>

                        ";
}
            elseif (isset($_GET['msg4']) == "update") {
                    echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Product update successfully
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                     </div>";
}
           ?>
                   
                   
        <table id="example" class="table table-bordered table-hover ">
        <thead>
          <tr class="bg-primary text-white">
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Decsriprion</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
            
            
        <tbody>
            
            <?php
                if (count($display)) {
                foreach ($display as $row) {
            ?>

            
          <tr>
              
                <td><?php echo ucfirst($row['title']) ?></td>
                <td><?php echo $row['price'] ?> $</td>
                <td><?php echo $row['desc'] ?></td> 
                <td><?php echo $row['qty'] ?></td>
              
                <td>
                                                            
                <!--<button type="button" class="btn btn-primary btn-sm edit_data" id="<?php echo $row["id"]; ?>"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa fa-edit"></i>
                    Update
                </button>
                &nbsp;-->

                <a href="dashboard.php?deleteId=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm" onclick="confirm('Are you sure want to delete this record')">
                    <i class="fas fa-trash-alt"></i> 
                    Delete
                </a>
            </td>
              
            <td>
                <?php $result = $row['images'] ?>
                <img src="image/<?php echo $result ?>" class="img-responsive" width="50" height="50">

            </td>
          </tr>
            <?php }} ?>
          
        </tbody>
            
            
      </table>
           
           <!--update table-->
           
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <!--<div class="modal-dialog">
    <div class="modal-content">
    <form action="dashboard.php" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update the product </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa fa-times"></i></button>
      </div>
      <div class="modal-body" id="update_details">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary" id="update">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div> -->  
           
           
           
           
     </div>

               
               
               
                 </div>
        
    </div>
           </section>
    </div>
    
    
    
    
    
    <!--this is for JS files-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">-->
    
    
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                "scrollX": true,
                "paging": true,
                "ordering": true,
                "info": false,

                "lengthMenu": [
                    [10, 15, 20, -1],
                    [10, 15, 20, "All"]
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search..."
                }

            });
            $(document).on("click", '.edit_data', function() {
            var edit_id = $(this).attr('id');
            console.log(edit_id);
            $.ajax({
                url: "update_product.php",
                type: "post",
                data: {
                    edit_id: edit_id
                },
                success: function(data) {
                    $('#update_details').html(data);
                    $('#exampleModal').modal('show');
                }
            });

        });



        });
    </script>
    
    
</body>
</html>