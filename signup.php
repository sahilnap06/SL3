<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pulse Electronics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/newCustomer.css">
    <link rel="icon" type="images/png" href="images/logo.png">
</head>

<body>
    <div class="card container" style="margin-top: 30px; width: 70%; margin-bottom: 35px;">
        <h2 style="text-align: center; margin: 30px;">Sign Up form</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
                <label for="fname">First Name<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="fname" placeholder="First name">
                <div class="invalid-feedback"><?php echo $fnameErr; ?></div>
                <div class="valid-feedback"></div>
            </div>
            <div>
                <label for="lname">Last Name<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="lname" placeholder="Last name">
                <div class="invalid-feedback"><?php echo $lnameErr; ?></div>
                <div class="valid-feedback"></div>
            </div>
            <div>
                <label for="mailid">Email ID<span style="color: red">*</span></label> :
                <input type="email" class="form-control" name="mailid" placeholder="Email ID">
                <div class="invalid-feedback"><?php echo $mailidErr; ?></div>
                <div class="valid-feedback"></div>
            </div>
            <div>
                <label for="website">Website<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="website"
                    placeholder="Enter your website address">
                <div class="invalid-feedback">The website cannot be empty.</div>
                <div class="valid-feedback"></div>
            </div>
           
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> I agree to the <a href="tnc.html"> terms and
                    conditions.</a>
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>

            <div style="text-align: center;"><button type="submit" class="btn btn-outline-primary">Submit</button></div>

        </form>

    </div>
</body>

<script>
    // Disable form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
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

<?php
// define variables and set to empty values
$fname = $lname = $mailid = $addressl1 = $addressl2 = $addressl3 = $state =  "";
$fnameErr = $lnameErr = $mailidErr = $addressl1Err = $addressl2Err = $addressl3Err = $stateErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["fname"])){
        $fnameErr = "First Name is required";
    }
    else{ 
        $fname = test_input($_POST["fname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
            $fnameErr = "The first name does not contain number and special characters!!";
        }   
    }

    if(empty($_POST["lname"])){
        $lnameErr = "First Name is required";
    }
    else{ 
        $fname = test_input($_POST["lname"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
            $lnameErr = "The last name does not contain number and special characters!!";
        }   
    }

    if(empty($_POST["mailid"])){
        $mailidErr = "Email ID is required";
    }
    else{ 
        $mailid = test_input($_POST["mailid"]);
        if(filter_var($_POST["mailid"],FILTER_VALIDATE_EMAIL)){

        }
        else{
            $mailidErr = "The email ID is not valid.";
        }
    }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</html>
<!-- Theory 
1. What is PHP
2. What is use of PHP
3. Limitation(4) and advantages(4) of PHP
4. Difference between PHP and JS(5 - 6)
5. PHP variable declaration (syntax)
6. PHP functions (syntax)
7. GET method (syntax)
8. POST method (syntax) and difference
9. Error message (syntax)
10. PHP form validations (form, action, attribute for method i.e. post and get, validate URL and Email) write all the function syntax
-->