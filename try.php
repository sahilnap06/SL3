<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>

<body>
    <div class="header-container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="img-brand" style="width: 15%; text-align: center;">
                    <img src="images/logo.png" alt="Pulse Electronics" width="150" height="150">
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="brand-name" style="width: 100%;text-align: center;padding-top: 25px;">
                    <h1>Pulse Online Store</h1>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3"></div> 
        </div>
    </div>

    <div class="container">
        <form action="post">
        <div class="form-group">
                <label for="fname">First Name<span style="color: red">*</span></label> :
                <input type="text" class="form-control" name="fname" placeholder="First name">
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
                <a class="btn btn-outline-primary">Submit</a>
            </div>
        </form>
    </div>
</body>

</html>