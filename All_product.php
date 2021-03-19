<?php

   include("header.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
     if(isset($_POST['all_mens'])){
      $Cart->addToCart($_POST['user_id'],$_POST['item_id'],);
      }
  }
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['all_men'])){
      $products = $product->getData($table= 'product',$limit=40,$Gender='M');
    }
    if(isset($_POST['all_women'])){
      $products = $product->getData($table= 'product',$limit=40,$Gender='F');
    }
    if(isset($_POST['all_kid'])){
      $products = $product->getData($table= 'product',$limit=40,$Gender='K');
    }
}

 ?>
 <h3 class="text-center m-5">All Products</h3>
           <div class="container product-grid p-auto justify-content-center  mb-5 mt-5 align-items-center mb-5">
               <?php
                 foreach($products as $item){
               ?>
                   <div class="product text-center">
                       <div class="product-img">
                       <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image1']?>" alt="product"><p class="m-1"></a>
                       </div>
                       <p class="mb-1"> fasion</p>
                       <h5><?php echo $item['item_name']?></h5>
                       <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
                 </div>
                 <?php } ?>
               </div>
           </div>
 <?php
    include("footer.php");

?>