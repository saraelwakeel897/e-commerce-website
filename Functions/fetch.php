
<?php

//fetch_data.php

include "product_class.php";
$display = new Products();

$WishList = new Products();

if(isset($_POST['wishlist']))
{
   $WishList->WisListData($id, $session);   
}

 if(isset($_POST["query"])){
    $search = $_POST["query"];
    $query = "
  SELECT * FROM products 
  WHERE title LIKE '%".$search."%'
  OR model LIKE '%".$search."%' 
 ";
 }
 else
 {
  $query = "
   SELECT * FROM products ORDER BY id
  ";
 }
 
 $res = $display->con->query($query);
 $result = $res->fetch_all(MYSQLI_ASSOC);

 $total_row = $res->num_rows;
 $output = '';
 if($total_row > 0)
 {
  foreach($res as $row)
  {
   $output .= '
<div class="col-md-3  col-lg-4 col-sm-6 col-md-6 col-xl-4">
    <form method="POST" action="add_to_card.php">
        <div class="products-single fix">
            <div class="box-img-hover card h-100 my-2">
                <div class="type-lb">
                    <p class="new">New</p>
                </div>    
            <img src="image/'. $row['images'] .'" class="img-fluid" alt="..." style="height: 250px;">
            
            <div class="mask-icon">
            <ul>
                <li>
                
                   <a href="showmore.php?action=show&id='. $row["id"] .'" data-toggle="tooltip" data-placement="right" style="background:#a5678e;" title="View" name="wishlist">
                     <i class="fas fa-eye"></i>
                   </a>
                   <form action="WishList.php" method="POST">
                   <a href="#" data-toggle="tooltip" data-placement="right" style="background:#a5678e;" title="Wishlist" name="wishlist">
                     <i class="fas fa-heart"></i>
                   </a>
                   </form>
               </li>
            </ul>
            <a class="cart">
               <button class="btn btn-sm px-4 ms-2" name="add_to_cart" type="submit" id="button-addon2" style="background: #a5678e ;position: absolute;bottom: 0;right: 0px;padding: 10px 20px;font-weight: 700;color: #ffffff;">
                    <i class="fas fa-cart-plus"></i> Add To Card
               </button>
               </a>
            </div>
         </div>
       
       <div class="card-body why-text">
           <h5 class="card-title">'. $row['title'] .'</h5>
           <h6 class="card-subtitle mb-2 text-muted">'. $row['price'] .' €</h6>
  
           <div class="input-group mb-3 ">
           <input type="number" name="quantity" class="form-control form-control-sm" value="1" aria-describedby="button-addon2">
           <input type="hidden" name="hidden_name" value="'.$row['title'].'">
          <input type="hidden" name="hidden_price" value='. $row["price"] .' />
          <input type="hidden" name="hidden_id" value='. $row["id"] .' />
        </div>
        </div>
    </div>
   </form>
</div>
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;



?>