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

<?php echo "HELLO WORLD" ?>

    <div class="container">
        <form class="was-validated" action="">
            <div class="form-group">
                <label for="fname">First Name<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="fname" placeholder="First name" required>
                <div class="invalid-feedback">The first name cannot be empty.</div>
                <div class="valid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="lname">Last Name<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="lname" placeholder="Last name" required>
                <div class="invalid-feedback">The last name cannot be empty.</div>
                <div class="valid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="mailid">Email ID<span style="color: red">*</span></label> :
                <input type="email" class="form-control" name="mailid" placeholder="Email ID" required>
                <div class="invalid-feedback">The Email ID cannot be empty.</div>
                <div class="valid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="addressl1">Address Line 1<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="addressl1"
                    placeholder="Address line 1 (Flat no., House No,Building,etc)" style="width: 400px" required>
                <div class="invalid-feedback">The address cannot be empty.</div>
                <div class="valid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="addressl2">Address Line 2<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="addressl2" placeholder="Address line 2 (Locality)"
                    style="width: 400px" required>
                <div class="invalid-feedback">The address cannot be empty.</div>
            </div>
            <div class="from-group">
                <label for="addressl3">Address Line 3<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="addressl3" placeholder="Address line 3 (city)"
                    style="width: 400px" required>
                <div class="invalid-feedback">The address cannot be empty.</div>
            </div>
            <div class="form-group">
                <label for="city">City<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="city" required>
                <div class="invalid-feedback">The city name cannot be empty.</div>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> I agree to the terms and
                    conditions.
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>
