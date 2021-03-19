<!---------Slider------------->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-left" style="">
                    <h4 class="text-dark">MENS</h4>
                    <h1>NEW ARRIVALS</h1>
                    <form method="post" action="All_product.php">
                        <button name="all_men" class="storebtn py-2 px-3">Shop now</button>
                    </form>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="./assets/slide-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-left" style="">
                    <h4 class="text-dark">LOOKZ BRINGS</h4>
                    <h1>happiness</h1>
                    <form method="post" action="All_product.php">
                       <button name="all_women" class="storebtn py-2 px-3">Shop now</button>
                    </form>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/slider-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-left" style="">
                    <h4 class="text-dark">FAST & EASY</h4>
                    <h1>SHOPPING</h1>
                    <h4 class="text-dark">ON TO GO</h4>
                    <form method="post" action="All_product.php">
                         <button name="all_kid" class="storebtn py-2 px-3">Shop now</button>
                    </form>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
      <!---------End Slider------------->  

<!---------Store----------->

      <div class="container-fluid stores d-flex justify-content-around my-5">
          <div class="store  d-flex align-items-center">
              <div class="category text-white">
                  <h4>Shop for Men</h4>
                  <p>Worlds best brands</p>
                  <form method="post" action="All_product.php">
                    <button name="all_men" class="storebtn py-2 px-3">Shop now</button>
                </form>
              </div>
              <img src="./assets/men.jpg" alt="menstore">
          </div>
          <div  class="store  d-flex align-items-center">
              <div class="category text-white">
                  <h4>Shop for Women</h4>
                  <p>Worlds best brands</p>
                  
                  <form method="post" action="All_product.php">
                    <button name="all_women" class="storebtn py-2 px-3">Shop now</button>
                </form>
              </div>
              <img src="./assets/women.jpg" alt="menstore">
          </div>
          <div  class="store d-flex align-items-center">
              <div class="category text-white">
                  <h4>Shop for Kids</h4>
                  <p>Worlds best brands</p>
                  <form method="post" action="All_product.php">
                    <button name="all_kid" class="storebtn py-2 px-3">Shop now</button>
                </form>
              </div>
              <img src="./assets/children.jpg" alt="menstore">
          </div>
      </div>
<!---------End Store----------->