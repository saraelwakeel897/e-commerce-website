<?php


include "product_class.php";

$update = new Products();

if (isset($_POST["edit_id"])) {
  $editId = $_POST["edit_id"];
  $product = $update->displyaRecordById($editId);
}

?>

  <div class="row g-3 mb-4">
  <div class="col-sm-6">
  <label for="inputCity">Category</label>
    <input type="text" class="form-control" name="model" value="<?php echo $product['model']; ?>" >
  </div>
  <div class="col-sm">
  <label for="inputCity">Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $product['title']; ?>">
  </div>
</div>
<div class="row g-3 mb-4">
  <div class="col-sm-4">
  <label for="inputZips">Description</label>
    <input type="text" class="form-control" name="desc" value="<?php echo $product['desc']; ?>">
  </div>
  
  <div class="col-sm">
  <label for="inputZip">Quantity</label>
    <input type="text" class="form-control" name="qty" value="<?php echo $product['qty']; ?>">
  </div>
</div>

  
  <div class="col-sm">
  <label for="inputZip">Price</label>
    <input type="text" class="form-control"  name="price" value="<?php echo $product['price']; ?>">
  </div>
  

  <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

  </div>
