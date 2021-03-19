<!DOCTYPE html>
<html>
<head>
<title>Log in</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale=1.0">

    <!--Bootstrap cDN-->
<link rel="stylesheet" href="./assets/bootstrap.min.css">

<!--CSS link-->
<link rel="stylesheet" href="style.css">

<!--Font Awesome-->
<script src="https://kit.fontawesome.com/179bd1eb00.js" crossorigin="anonymous"></script>

<style>
        body{
            position: relative;
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url('./assets/login-bg.jpg') no-repeat center/cover;
        }
        .login-popup.show{
            visibility:visible;
            opacity: 1;
        }   
        .main{
        position: relative;
        width:100%;
        height:100vh;
        display:flex;
        justify-content: center;
        align-items: center;
        }
        .box-login {
         background-color: white;
        display: grid;
        grid-template-columns: repeat(2,1fr);
        width:700px;
        height:450px;
        }
        .box-login.img{
        justify-content: center;
        align-items: center;
        }
        .box-login .img{
        background: url("/web projects/flower.jpeg") no-repeat center;
        width: 300px;
        height: 450px;
        background-size: cover;
        }
        .box-login .img img{
            width: 100%;
            height: 100%;
        }
        .content-login{
        margin-top: 30px;
        text-align: center;
        padding:0 20px;
        }
        .content-login input{
        margin:10px;
        padding:10px;
        width: 300px;

        }
        .link{
        padding-top: 0;
        margin-top: 0;
        margin-bottom: 3em;
        }
        .content-login input[type="password"]{
        margin-bottom: 0;
        }
        .submit{
        border-radius: 30px;
        width:150px;
        height:40px;
        color:#fff;
        background-color: black;
        font-size: 1.3em;
        }
        .submit:hover{
        background-color:gray;
        }
        .link a:hover{
        color:red;
        }
        @media screen and(max-width:880px){
        .box-login{
            grid-template-columns: 1fr;
        }
        .box-login .img{
            height:200px;
        }
        }
</style>
<?php 
require("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['submitL'])){
        $reg->Login($_POST['email'],$_POST['password']);
    }
}
?>
</head>
<body>
    <div class="main">
    <div class="box-login login-popup">
        <div class="img"> <img src="./assets/login.jpg" alt=""> </div>
        <form id="form" method="post" class="content-login needs-validation" novalidate>
            <h1>Log in </h1>
            <div class="form-group">
                <input type="text" placeholder="Enter your Email" id="email" name="email" onkeydown="validation()" required>
                <div id="text"></div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <input id="password" name="password" type="password"  placeholder="Enter your password" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="link" >
              <a href="registration.php" > New USer? Sign up</a>
            </div>
            <div>
                 <input type="submit" name="submitL" value="Log in" class="submit btn btn-primary">
            </div>
        </form>  
        </div>
    </div>
<script src="./assets/jquery-3.5.1.min.js"></script>
<script src="./assets/bootstrap.bundle.js"></script>
<script>
 
function validation(){
        var form=document.getElementById("form");
        var email=document.getElementById("email").value;
        var text=document.getElementById("text");
        var pattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(email.match(pattern)){
            form.classList.add("valid");
            form.classList.remove("invalid");
            text.innerHTML="Your Email Address is valid";
            text.style.color="green";
        }
        else{
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML="Please Enter valid Email Address";
            text.style.color="red";
        }
        if(email==""){
            form.classList.remove("valid");
            form.classList.remove("invalid");
            text.innerHTML="";
        }
    }
// Disable form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
    });
}, false);
})();

</script>
    </body>
</html>