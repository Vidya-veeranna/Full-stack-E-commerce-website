<?php
  
   include("header.php");
  
   $products = $product->getData($table= 'product',$limit = 4,$Gender='M');
   $item_id = $_GET['item_id'] ?? 1;
   
   if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['submit'])){
      $Cart->addToCart($_POST['user_id'],$_POST['item_id'],$_POST['cart_id']);
      }
  }

    foreach ($product->getDetail($table= 'product') as $item) :
        if ($item['item_id'] == $item_id) :
           

?>
<!--------Products------------>

<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mt-5 product-image">
              <div class="d-flex justify-content-center w-100">
                <img src="<?php echo $item['item_image1']; ?>" alt="product" class="img-fluid w-75 h-75" id="product-img">
                </div>
                <div class="small-img-row w-100 h-20 mt-3">
                  <div class="small-img-col"><img src="<?php echo $item['item_image1']; ?>" alt="" class="small-img w-100 h-100"></div>
                  <div class="small-img-col"><img src="<?php echo $item['item_image2']; ?>" alt="" class="small-img w-100 h-100"></div>
                  <div class="small-img-col"><img src="<?php echo $item['item_image3']; ?>" alt="" class="small-img w-100 h-100"></div>
              </div>
                <div class="form-row pt-4 font-size-16 font-baloo mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getDetail('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                            }else{
                        ?>
                           <form method="post">
                                <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                                <button name="submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>
                            </form>
                        <?php
                       }
                       ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5 mt-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo ("Online Store"); ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P: &#8377</td>
                        <td><strike><?php echo $item['item_price'] ?? 0 ?></strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">&#8377 <span><?php echo $product->getSub($item['item_price']);; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">&#8377 200.00</span></td>
                    </tr>
                </table>
                <!---    !product price       -->
                 <!-- size -->
               <div class="size my-3">
                   <h6 class="font-baloo">Size :</h6>
                   <div class="d-flex w-75">
                       <div class="font-rubik border ml-2 p-2">
                           <button class="btn p-0 font-size-14">S</button>
                       </div>
                       <div class="font-rubik border ml-2 p-2">
                           <button class="btn p-0 font-size-14">M</button>
                       </div>
                       <div class="font-rubik border ml-2 p-2">
                           <button class="btn p-0 font-size-14">X</button>
                       </div>
                   </div>
               </div>
           <!-- !size -->

                <!-- !size -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                 <!-- order-details -->
                 <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery within : 5 days</small>
                    <small>Sold by online store</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - on time</small>
                </div>
                <!-- !order-details -->

            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<div class="text-center"><h3>Other products</h3></div>
<div class="container-fluid d-flex flex-row justify-content-around mt-5 mb-5">
    <?php

        foreach($products as $item){
        
    ?>
    <div class="item text-center">
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
        endif;
        endforeach;
        include("footer.php");
?>