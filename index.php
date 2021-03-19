
<?php
    ob_start();
    include("header.php");
    if(empty($_SESSION['name'])):
      header('Location:login.php');
    endif;
?>

</script>
</body>
</html-->
<?php
    include("./Template/banner.php");

    include("./Template/featured.php");

    include("./Template/collection.php");

?> 
    
<?php

  include("footer.php");

?>