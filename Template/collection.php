<?php

$products_men = $product->getData($table= 'product',$limit = 4,$Gender='M');
$products_women = $product->getData($table= 'product',$limit = 4,$Gender='F');
$products_kid = $product->getData($table= 'product',$limit = 4,$Gender='K');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['collection'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id'],$_POST['cart_id']);
        }
  }
 
?>
<!-------------Collection---------------->
      <div id="collections" class="text-center m-5">
                <h2>Collections </h2>
      </div>
      <!------------Women collections--------->

          <div id="womencollection" class="container-fluid collection d-flex">
              <div class="image">
                  <img src="./assets/collection_women1.jpg" alt="">
                  <div class="texts text-center">
                      <h3>Women's</h3>
                      <form method="post" action="All_product.php">
                    <button name="all_women" class="storebtn">Discover more</button>
                </form>
                  </div>
              </div>
              <div class="content">
                <h4 class="text-center">Women's collections</h4>
                <div class="slider2 d-flex justify-content-around text-center">
                <?php

                  foreach($products_women as $item){
 
                ?>
                  <div class="item">
                      <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="img-box"><img src="<?php echo $item['item_image1']?>"  class="card-img-top" alt="product"><p class="m-1"></a>
                      <p class="mb-1">Women's fasion</p>
                      <h5><?php echo $item['item_name']?></h5>
                      <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
                      <form method="post">
                      <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                       <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                        <button  name="collection">
                        <div class="product-header">
                          <span class="border rounded-circle mx-3 icon">
                              <i class="fas fa-shopping-basket p-2"></i>
                          </span>
                      </div></button>
                    </form>
                  </div>
                <?php  }?>
                </div>    
              </div>
          </div>

      <!------------End Women collections--------->

      <!-----------------Deal------------------>

            <div class="container deal d-flex justify-content-around flex-row">
              <div class="deal-content text-center">
                <h4>Deal of The Week</h4>
                <h5>White Solid Top</h5>
                <h5 class="text-warning">&#8377 659</h5>
                <div class="container m-3" id="deal">

                  <div class="box-deal">
                      <div class="hours">
                          <h1 id="hours">8</h1>
                      </div>
                      <h1>hours</h1>
                  </div>


                  <div class="box-deal">
                      <div class="minutes">
                          <h1 id="minutes">8</h1>
                      </div>
                      <h1>minutes</h1>
                  </div>


                  <div class="box-deal">
                      <div class="seconds">
                          <h1 id="seconds">8</h1>
                      </div>
                      <h1>seconds</h1>
                  </div>

                  <div class="box-deal">
                      <div class="amorpm">
                          <h1 id="amorpm">8</h1>
                      </div>
                      <h1>am or pm</h1>
                  </div>
              </div>
              <div id='demo'></div>
                  </div>
                  <div class="deal-img">
                    <img src="./assets/Women_Top6.1-removebg.png" alt="">
                  </div>
            </div>

      <!-----------------End Deal------------------>

      <!------------men collections--------->

      <div id="mencollection" class="container-fluid collection d-flex">
        <div class="image">
            <img src="./assets/collection_men.jpg" alt="">
            <div class="texts text-center">
                <h3>Men's</h3>
                <form method="post" action="All_product.php">
                    <button name="all_men" class="storebtn">Discover more</button>
                </form>
            </div>
        </div>
        <div class="content">
          <h4 class="text-center">Men's collections</h4>
          <div class="slider2 d-flex justify-content-around text-center">
          <?php

          foreach($products_men as $item){

          ?>
          <div class="item">
              <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="img-box"><img src="<?php echo $item['item_image1']?>"  class="card-img-top" alt="product"><p class="m-1"></a>
              <p class="mb-1">Men's fasion</p>
              <h5><?php echo $item['item_name']?></h5>
              <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
              <form method="post">
              <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                <button name="collection">
                <div class="product-header">
                    <span class="border rounded-circle mx-3 icon">
                        <i class="fas fa-shopping-basket p-2"></i>
                    </span>
                </div></button>
              </form>
          </div>
          <?php  }?>
          </div>    
        </div>
      </div>

      <!------------End men collections--------->

      <div class="container-fluid">
         <div class="bg"></div>
      </div>
      <!-----------Kid collections--------->

      <div id="kidcollection"  class="container-fluid collection d-flex">
        <div class="image">
            <img src="./assets/collection_kid.jpg" alt="">
            <div class="texts text-center">
                <h3>Kid's</h3>
                <form method="post" action="All_product.php">
                        <button name="all_kid" class="storebtn">Discover more</button>
                    </form>
            </div>
        </div>
        <div class="content">
          <h4 class="text-center">Kid's collections</h4>
          <div class="slider2 d-flex justify-content-around text-center">
          <?php

              foreach($products_kid as $item){

          ?>
          <div class="item">
              <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>" class="img-box"><img src="<?php echo $item['item_image1']?>"  class="card-img-top" alt="product"><p class="m-1"></a>
              <p class="mb-1">Kid's fasion</p>
              <h5><?php echo $item['item_name']?></h5>
              <h5 class="text-warning">&#8377 <?php echo $item['item_price']?></h5>
              <form method="post">
                <input type="hidden" name="cart_id" value="<?php echo $_SESSION['cartid'];?>">
                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid'] ;?>">
                <button name="collection">
                <div class="product-header">
                    <span class="border rounded-circle mx-3 icon">
                        <i class="fas fa-shopping-basket p-2"></i>
                    </span>
                </div></button>
              </form>
          </div>
          <?php  }?>
          </div>    
        </div>
      </div>

      <!------------End kid collections--------->

      <!-------------End Collection---------------->
      <script>
     
var deadline=new Date("feb 5,2021 23:59:59").getTime();
var x = setInterval(function() {
  var now=new Date().getTime();
  var t = deadline - now;
  var hours=Math.floor((t%(1000*60*60*24))/(1000*60*60));
  var minutes=Math.floor((t%(1000*60*60))/(1000*60));
  var seconds=Math.floor((t%(1000*60))/1000);
  let amorpm = hours >= 12 ? 'pm' : 'am';

    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    document.getElementById("amorpm").innerHTML = amorpm;
    if(t<0){
      clearInterval(x);
      document.getElementById("demo").innerHTML="TIME UP";
      document.getElementById("hours").innerHTML = 0;
    document.getElementById("minutes").innerHTML = 0;
    document.getElementById("seconds").innerHTML = 0;
    }
}, 1000);
</script>