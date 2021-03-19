<?php

   include("header.php");
   $products = $product->getData($table= 'product',$limit = 4,$Gender='M');
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
   }
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['order'])){
        $Cart->Order($_SESSION['cartid'],$_SESSION['userid']);
    }
   }
?>
<main id="main-site">

<!-- Shopping cart section  -->
<section id="cart" class="py-3">

    <div class="container-fluid w-75 justify-content-center align-items-center">
    <h5 class="font-baloo font-size-20">Shopping Cart</h5>
    
        <div class="row">
            <div class="col-sm-9">
            <?php
                foreach ($Cart->getDetailCart($_SESSION["userid"]) as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] =  array_map(function($item){
            ?>
                <!-- cart item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                        <div class="img-box"> <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image1']?>"  class="card-img-top img-fluid" alt="product"></a></div>
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20"><?php echo $item['item_name'];?></h5>
                            <small>by Online Store</small>
                            <!-- product rating -->
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                  </div>
                            </div>
                            <!--  !product rating-->

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>

                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                            &#8377<span class="product_price"><?php echo $item['item_price'];?></span>
                            </div>
                        </div>
                    </div>
                <!-- !cart item -->
                <?php 
                         return $item['item_price'];
                     },$cart);
                    endforeach;
                ?>
            </div>
        </div>
    </div>
    <!-- subtotal section-->
    <div class="container">
      <div class="sub-total border text-center mt-2">
          <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Order now</h6>
          <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">&#8377<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <form method="post">
                             <button type="submit"  name="order" class="btn btn-warning mt-3">Order Now</button>
                        </form>
          </div>
      </div>
  </div>
  <!-- !subtotal section-->
</section>
<!-- !Shopping cart section  -->

</main>

<div class="text-center mt-5"><h3>Other products</h3></div>
<div class="container-fluid d-flex flex-row justify-content-around mb-5 mt-5">
    <?php

    foreach($products as $item){

    ?>
    <div class="item text-center ml-3">
        <div class="img-box"> <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image1']?>"  class="card-img-top img-fluid" alt="product"></a></div>
            <div>
            <p class="mb-1">Men's fasion</p>
            <h5><?php echo $item['item_name']?></h5>
            <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
            </div>
        </div>
    <?php  }?>
</div> 

<?php
    include("footer.php");

?>
 