<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!--Bootstrap cDN-->
    <link rel="stylesheet" href="./assets/bootstrap.min.css">

    <!--CSS link-->
    <link rel="stylesheet" href="style.css">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/179bd1eb00.js" crossorigin="anonymous"></script>
    
    <?php
        require("functions.php");
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(isset($_POST['submit'])){
                $reg->addToUser($_POST['firstname'],$_POST['lastname'],$_POST['gender'],$_POST['email'],$_POST['password'],$_POST['number'],$_POST['state'],$_POST['city'],$_POST['streetname']);
            }
        }
        include_once 'config.php';
        $query = "SELECT * FROM state";
        $result = $db->query($query);

            ?>
            <style>
            .fa-eye{
                color: #022255;
                cursor: pointer;
            }
            .fa-circle{
                font-size: 6px;  
            }
            .fa-check{
                color: #02b502;
            }
            #password:valid{
            background-image:none;
            }
    </style>

</head>
<body>
    
<h2 class="text-center">Registration form</h2>
<div class="container mt-5 mb-5">
    <form id="form" method="post" class="needs-validation" style="width: 50%; margin:0 auto;" novalidate>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text"  class="form-control" id="firstname" name="firstname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <div>
                <div>
                    <label for="male" class="radio-inline">
                        <input type="radio" name="gender" value="m" id="male"/><span class="ml-2">Male</span>
                    </label>
                </div>
                <div>
                    <label for="female" class="radio-inline">
                        <input type="radio"  name="gender" value="f" id="female"/><span class="ml-2">Female</span>
                    </label>
                </div>
                <div>
                    <label for="others" class="radio-inline">
                        <input type="radio" name="gender" value="o" id="others"/><span class="ml-2">Others</span>
                    </label>
                </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" pattern="[a-z0-9._%+-]+@+(gmail.com|email.com)" class="form-control" id="email" name="email" required>
            <span id="text"></span>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control input-md"
                    name="password" type="password" 
                    placeholder="Enter your password" required>
            <p>Requirements</p>
            <ul class="list-unstyled">
                <li>
                    <span class="low-upper-case">
                        <i class="fas fa-circle" aria-hidden="true"></i>
                        &nbsp;Lowercase &amp; Uppercase
                    </span>
                </li>
                <li>
                    <span class="one-number">
                        <i class="fas fa-circle" aria-hidden="true"></i>
                        &nbsp;Number (0-9)
                    </span> 
                </li>
                <li>
                    <span class="one-special-char">
                        <i class="fas fa-circle" aria-hidden="true"></i>
                        &nbsp;  Special Character (!@#$%^&*)
                    </span>
                </li>
                <li>
                    <span class="eight-character">
                        <i class="fas fa-circle" aria-hidden="true"></i>
                        &nbsp;Atleast 8 Character
                    </span>
                </li>
            </ul>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="number">Phone Number</label>
            <input type="tel"  pattern="[6-9]{1}[0-9]{9}" class="form-control" id="number" name="number" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please Enter valid 10-digit Number.</div>
        </div>
        <div class="form-group">
            <label for="email">State</label>
            <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
                <option value="">Select state</option>
            <?php
                if ($result->num_rows > 0 ) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value='.$row['state_name'].'>'.$row['state_name'].'</option>';
                }
                }
            ?> 
            </select>
        </div>
        <div class="form-group">
            <label for="pwd">city</label>
            <select name="city" id="city" class="form-control" required>
                <option>Select city</option>
            </select>
        </div>
        <div class="form-group">
            <label for="streetname">Street Name</label>
            <input type="text"  class="form-control" id="streetname" name="streetname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
</div>

    <script src="./assets/jquery-3.5.1.min.js"></script>
    <script src="./assets/bootstrap.bundle.js"></script>
   
    <script>
    function FetchCity(id){ 
       
    $('#city').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { state_name : id},
      success : function(data){
         $('#city').html(data);
      }

    })
  }
    let state = false;
    let password = document.getElementById("password");

    let lowUpperCase = document.querySelector(".low-upper-case i");
    let number = document.querySelector(".one-number i");
    let specialChar = document.querySelector(".one-special-char i");
    let eightChar = document.querySelector(".eight-character i");

    password.addEventListener("keyup", function(){
        let pass = document.getElementById("password").value;
        checkStrength(pass);
    });

    function checkStrength(password) {
        let strength = 0;

        //If password contains both lower and uppercase characters
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
            strength += 1;
            lowUpperCase.classList.remove('fa-circle');
            lowUpperCase.classList.add('fa-check');
        } else {
            lowUpperCase.classList.add('fa-circle');
            lowUpperCase.classList.remove('fa-check');
        }
        //If it has numbers and characters
        if (password.match(/([0-9])/)) {
            strength += 1;
            number.classList.remove('fa-circle');
            number.classList.add('fa-check');
        } else {
            number.classList.add('fa-circle');
            number.classList.remove('fa-check');
        }
        //If it has one special character
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            strength += 1;
            specialChar.classList.remove('fa-circle');
            specialChar.classList.add('fa-check');
        } else {
            specialChar.classList.add('fa-circle');
            specialChar.classList.remove('fa-check');
        }
        //If password is greater than 7
        if (password.length > 7) {
            strength += 1;
            eightChar.classList.remove('fa-circle');
            eightChar.classList.add('fa-check');
        } else {
            eightChar.classList.add('fa-circle');
            eightChar.classList.remove('fa-check');   
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