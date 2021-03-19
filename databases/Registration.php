
<?php

// php Registration class
class Registration
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    public  function insertIntoUSer($params = null){
        if ($this->db->con != null){
            if ($params != null){
              
                 $query_string = sprintf("INSERT INTO `user`(`cart_id`,%s,%s,%s,%s,%s,%s,`%s`,`%s`,`%s`) VALUES(autoInc(),'%s','%s','%s','%s','%s',%s,'%s', '%s','%s')", array_keys($params)[0], array_keys($params)[1], array_keys($params)[2], array_keys($params)[3], array_keys($params)[4], array_keys($params)[5], array_keys($params)[6], array_keys($params)[7], array_keys($params)[8],array_values($params)[0],array_values($params)[1],array_values($params)[2],array_values($params)[3],array_values($params)[4],array_values($params)[5],array_values($params)[6],array_values($params)[7],array_values($params)[8]);
                 
                // execute query
                $result = $this->db->con->query($query_string);
                
                return $result;
            }
        }
        
    }

    // insert into user table
    public  function addToUser($firstname, $lastname, $gender, $email, $password, $number,$state,$city, $streetname){
        if (isset($firstname) && isset($lastname)){
            $params = array(
                "firstname" => $firstname,
                "lastname" => $lastname ,
                "gender" => $gender,
                "email" =>  $email,
                "password" => $password,
                "number" => $number,
                "state-name" => $state,
                "city-name" => $city,
                "street-name" => $streetname
            );
         
            // insert data into cart
            $result = $this->insertIntoUSer($params);
          
            if ($result){
                // Reload Page  
                
                echo "<script>alert('Successfully Registered. Log in to continue');";
                echo "window.location.href='login.php';</script>";
            }
        }
    }
    public  function Login($email,$password){
        if (isset($email) && isset($password)){
            $query_string = sprintf("SELECT email,password,firstname,user_id,cart_id from `user` where email='$email' and password='$password'");
              $result=mysqli_query($this->db->con,$query_string) or die(mysql_error());
              $rows = mysqli_num_rows($result);
              if($rows==1){
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['name']=$row['firstname'];
                    $_SESSION['userid']=$row['user_id'];
                    $_SESSION['cartid']=$row['cart_id'];
                }
                echo "<script>alert('Successfully Loged in');";
                echo "window.location.href='index.php';</script>";
              }else{
                  echo "<div class='text-center'><h3>Email / password is incorrect.</h3></div>";
              }
        }
    }
    
}
?>
