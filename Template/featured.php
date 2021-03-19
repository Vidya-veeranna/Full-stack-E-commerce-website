<?php

$products_men = $product->getData($table= 'product',$limit = 2,$Gender='M');
$products_women = $product->getData($table= 'product',$limit = 2,$Gender='F');
$products_kid = $product->getData($table= 'product',$limit = 2,$Gender='K');

if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['featured_btn'])){
    $Cart->addToCart($_POST['user_id'],$_POST['item_id'],$_POST['cart_id']);
    }
}


?>


<!-----------Featured product----------->
<div id="featured" class="text-center m-5">
          <h2>Featured Product</h2>
      </div>
      <div class="container">
          
          <div class="row row-cols-1 row-cols-md-3 text-center">
            <?php

               foreach($products_men as $item){
                
            ?>
              <div class="col mb-4">
                <div class="card">
                <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="img-box"><img src="<?php echo $item['item_image1']?>"  class="card-img-top" alt="product"><p class="m-1"></a>
                  <div class="card-body p-0">
                    <p class="mb-1">Men's fasion</p>
                    <h5><?php echo $item['item_name']?></h5>
                    <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
                    <form method="post">
                    <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                       <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                        <button name="featured_btn" class="pl-3 pr-3 pt-1 pb-1">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
              
              <?php  }?>
              
              <?php

               foreach($products_women as $item){
                
              ?>
                <div class="col mb-4">
                  <div class="card">
                  <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="img-box"><img src="<?php echo $item['item_image1']?>"  class="card-img-top" alt="product"><p class="m-1"></a>
                    <div class="card-body p-0">
                      <p class="mb-1">Women's fasion</p>
                      <h5><?php echo $item['item_name']?></h5>
                      <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
                      <form method="post">
                      <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                       <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                        <button name="featured_btn" class="pl-3 pr-3 pt-1 pb-1">Add to Cart</button>
                    </form>
                    </div>
                  </div>
                </div>
                
              <?php  }?>

              <?php

               foreach($products_kid as $item){
                
              ?>
                <div class="col mb-4">
                  <div class="card">
                  <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="img-box"><img src="<?php echo $item['item_image1']?>"  class="card-img-top" alt="product"><p class="m-1"></a>
                    <div class="card-body p-0">
                      <p class="mb-1">kid's fasion</p>
                      <h5><?php echo $item['item_name']?></h5>
                      <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
                      <form method="post">
                      <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                       <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                        <button name="featured_btn" class="pl-3 pr-3 pt-1 pb-1">Add to Cart</button>
                    </form>
                    </div>
                  </div>
                </div>
                
              <?php  }?>
            </div>
      </div>
      <!---------End Featured product--------->
