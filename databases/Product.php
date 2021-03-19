<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table, $limit = 64,$Gender='M'){
    $result = $this->db->con->query("SELECT * FROM `{$table}` WHERE Gender='{$Gender}' LIMIT {$limit}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
    // fetch product detail using getDetail Method
     public function getDetail($table){
         $result = $this->db->con->query("SELECT * FROM `{$table}`");
      
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
    
    // get product using item id
    public function getProduct($item_id = null){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM `product` WHERE item_id='{$item_id}'");
            
            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
    public function getsub($a){
        if(isset($a)){
                $sub = $a - 200;
            }
            return sprintf('%.2f' , $sub);
    }
   
        
         
}