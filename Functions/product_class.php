<?php


class Products {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "phpoop";
    public $con;
    public $errors = [];

    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->con;
        }
    } 
    
    public function add_Products($post)
    {
        $model = $this->con->escape_string($_POST['model']); 
        $filename = $_FILES["file"]["name"]; 
        $tempname = $_FILES["file"]["tmp_name"];     
        $folder = "image/".$filename; 
         move_uploaded_file($tempname, $folder);
        
        $title = $this->con->escape_string($_POST['title']);
        $price = $this->con->escape_string($_POST['price']);
        $desc = $this->con->escape_string($_POST['desc']);
        $qty =  $this->con->escape_string($_POST['qty']);
        $query = "INSERT INTO `products` (`model`,`title`,`price`,`desc`, `qty`, `images`) VALUES ('$model','$title','$price','$desc','$qty','$filename')";
        $sql = $this->con->query($query);
        if ($sql == true) {
        /*echo "ok";*/
            echo'<script>alert("Product Added Successfully");
                                    window.location.assign("Addproduct.php");</script>';
                                
        }else{
            
        }
    }
    
    /*public function add_Users($post)
    {
        $name = $this->con->escape_string($_POST['name']); 
        $email = $this->con->escape_string($_POST['email']);
        $phone = $this->con->escape_string($_POST['phone']);
        $pass = $this->con->escape_string($_POST['pass']);
        
        $query = "INSERT INTO `users` (`name`,`email`,`phone`,`pass`) 
        VALUES ('$name','$email','$phone','$pass')";
        $sql = $this->con->query($query);
        if ($sql == true) {
            echo'<script>alert("User Added Successfully");
                    window.location.assign("Addproduct.php");</script>';
                                
        }else{
            
        }
    }*/
    
    public function displayProduct()
    {
        $query = "SELECT * FROM products";
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] =  $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }
    
    public function displayWishList()
    {
        $query = "SELECT * FROM wishlist";
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] =  $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }

    public function WisListData($id, $session)
    {/*
        $cquery = "SELECT * FROM wishlist WHERE user_id='$session' AND id = '$id' "; 
        $check = $this->con->select($cquery);
        if($check)
        {
            echo'<script>alert("Already Added");
                                    window.location.assign("WishList.php");</script>';
        }
        */
        $query = "SELECT * FROM products WHERE id='$id'";
        $result = $this->con->select($query)->fetch_assoc();
        if($result)
        {
            $id = $result['id'];
            $product_name = $result['product_name'];
            $price = $result['price'];
            $image = $result['image'];
            
            $dquery = "INSERT INTO wishlist (product_id, product_name, price, image) 
            VALUES ($id','$product_name','$price','$image' )";
            
            $insert = $this->con->insert($dquery);
            if($insert)
            {
                echo'<script>alert("Product Added Successfully");
                    window.location.assign("WishList.php");</script>';
            }
            else
            {
                echo'<script>alert("Something Went Wrong");
                    window.location.assign("WishList.php");</script>';
            }
        }
    }
    
    
    public function displayUsers()
    {
        $query = "SELECT * FROM users WHERE role = 'user'";
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] =  $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }

    public function displayFeedback()
    {
        $query = "SELECT * FROM feedback";
        $result = $this->con->query($query);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] =  $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }
    
    // Display  a product for update
      
    public function displyaRecordById($id)
    {
        $query = "SELECT * FROM products WHERE id= '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }
    
    // Update product data into  table
    public function updateRecord($postData)
    {
      $model = $this->con->real_escape_string($_POST['model']);
      $title = $this->con->real_escape_string($_POST['title']);
      $desc = $this->con->real_escape_string($_POST['desc']);
      $qty = $this->con->real_escape_string($_POST['qty']);   
      $price = $this->con->real_escape_string($_POST['price']);

      $id = $this->con->real_escape_string($_POST['id']);
      if (!empty($id) && !empty($postData)) {
          $query = "UPDATE products SET model = '$model', title = '$title', desc = '$desc' , qty = '$qty', price = '$price' WHERE id = '$id'";
          $sql = $this->con->query($query);
          if ($sql == true) {
              header("Location:dashboard.php?msg4=update");
          } else {
              echo "Information updated failed try again!";
          }
      }
    }
    
     // Delete customer data from customer table
     public function delete($id)
     {
         $query = "DELETE FROM products WHERE id = '$id'";
         $sql = $this->con->query($query);
         if ($sql == true) {
             header("Location:dashboard.php?msg3=delete");
         } else {
             echo "Information deleted failed try again!";
         }
     }
    
    public function user_delete($id)
     {
         $query = "DELETE FROM users WHERE id = '$id'";
         $sql = $this->con->query($query);
         if ($sql == true) {
             header("Location:manageusers.php?msg3=delete");
         } else {
             echo "Information deleted failed try again!";
         }
     }
    
    public function changePassword($change,$id)
    {

        $oldpassword  = $this->con->escape_string($_POST['password']);
        $newpassword  = $this->con->escape_string($_POST['Newpassword']);
        $cnewpassword  = $this->con->escape_string($_POST['CNewpassword']);
        $id = $id;
        $sql = "SELECT * from users";
        $res = $this->con->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $oldpass = $row['password'];
                if(password_verify($oldpassword, $oldpass)){

                   if($newpassword == $cnewpassword){
                      $password = password_hash($newpassword, PASSWORD_BCRYPT);
                      $query = "UPDATE users SET password = '$password' WHERE id = '$id'";
                      $sql = $this->con->query($query);
                      if ($sql == true) {
                          header("Location:dashboard.php?msg2=change");
                      } else {
                          $this->errors[] = "Registration updated failed try again!";
                      }
                   }else{
                      $this->errors[] = "Password and Confirm password doesn't match!";
                   }
                }else{
                  $this->errors[] = "Old Password faild!";
                }
            }
        }
     }
    
     public function get_errors()
    {
      return  $this->errors;
    }
    
    
}