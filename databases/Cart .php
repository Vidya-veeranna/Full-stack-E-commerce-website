<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null){
        if ($this->db->con != null){
            if ($params != null){
                
                // get table columns
                $columns = implode(',', array_keys($params));
               
                // create sql query
                $query_string = sprintf("INSERT INTO `Cart`(%s) VALUES(%s,%s,%s)", $columns,array_values($params)[0],array_values($params)[1],array_values($params)[2]);

                print_r($query_string);
                // execute query
                $result = $this->db->con->query($query_string);

                return $result;
            }
        }
        
    }

    // to get user_id and item_id and insert into cart table
    public  function addToCart($userid, $itemid,$cartid){
        if (isset($userid) && isset($itemid) && isset($cartid)){
            $params = array(
                "cart_id" => $cartid,
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
        else{
            echo "<script>alert('Log in to continue ');";
                echo "window.location.href='login.php';</script>";
        }
    }

    // delete cart item using cart item id
    public function deleteCart($item_id = null){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM `Cart` WHERE item_id='{$item_id}'");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get item_id of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }
    public function getDetailCart(){
        $result = $this->db->con->query('SELECT * FROM Cart WHERE user_id='.$_SESSION['userid']);
       $resultArray = array();

       // fetch product data one by one
       while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }

       return $resultArray;
   }
   
   public  function Order($cartid,$userid){
        if ($this->db->con != null){
                // create sql query
                
                $query_string = sprintf("INSERT INTO `order` (`cart_id`,`user_id`) VALUES(%s,%s)", $cartid,$userid);
                
                // execute query
                $result=mysqli_query($this->db->con,$query_string);
                if($result){
                    echo "<script>alert('Ordered successfully');";
                    echo "window.location.href='index.php';</script>";
                }
            
        }
        
    }
}