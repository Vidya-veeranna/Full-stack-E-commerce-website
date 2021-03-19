<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>

    <!--Bootstrap cDN-->
    <link rel="stylesheet" href="./assets/bootstrap.min.css">

    <!--CSS link-->
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script-->

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/179bd1eb00.js" crossorigin="anonymous"></script>
    <?php
   // session_start();
    require("functions.php");
    //error_reporting(0);
    ?>

</head>
<body>
    
<header>
  <!--NAvigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <h2 class="navbar-brand text-white pl-3">Online Store</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse header-links justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link text-white hover-border" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link text-white hover-border" href="#featured">Features</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#collection" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <p class="hover-border">Collections</p> 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#womencollection">Women Collections</a>
                    <a class="dropdown-item" href="#mencollection">Men Collections</a>
                    <a class="dropdown-item" href="#kidcollection">Kids Collections</a>
                  </div>
              </li>
              <li class="nav-item mt-2">
                  <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span><a href="cart.php"><i class="fa fa-shopping-basket text-white"></i></a></span>
                    <span class="px-3 py-1 rounded-pill text-dark bg-light"><?php echo count($Cart->getDetailCart('Cart')); ?></span>
                  </a>
              </li>
              <li class="nav-item">
                  <?php    
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        if(isset($_POST['logout'])){
                          session_destroy();
                          echo "<script>window.location.href='login.php';</script>";
                  ?>
                          <a class="nav-link text-white hover-border" href="login.php">Log in</a>
                  <?php
                          $Cart->getDetailCart('');
                            }
                      }
                    else if($_SESSION['name']==true){
                  ?>
                      <div class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['name']; ?>
                        </a>

                        <form method='Post' class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <button name='logout' class="dropdown-item" href="#">Log out</button>
                        </div>
                      </form>
                      </div>
                  <?php
                    }
                  ?>
                  
              </li>
              
            </ul>
        </div>
      </nav>
  <!--------End NAvigation bar------->
</header>
    

<main>