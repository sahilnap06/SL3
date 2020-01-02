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
    <link rel="icon" type="images/png" href="images/logo.png">
    <script src="javascript/regi.js"></script>
    <!-- <script src="javascript/validate.js"></script> -->
    <style>
        input[type="email"],
        input[type="password"] {
            width: 350px;
            margin-left: 25px;
            margin-right: 25px;
        }

        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            position: fixed;
            width: 550px;
            height: 500px;
            top: 40%;
            left: 50%;
            margin-top: -100px;
            /* Negative half of height. */
            margin-left: -250px;
            /* Negative half of width. */
        }

        button {
            position: fixed;
            left: 50%;
        }
    </style>
</head>

<body>
    <div class="header-container">
        <div class="row">
            <div class="col-sm-3">
                <div class="img-brand" style="width: 15%; text-align: center;">
                    <img src="images/logo.png" alt="Pulse Electronics" width="150" height="150"
                        alt="PULSE ELECTRONICS LOGO">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="brand-name" style="width: 100%;text-align: center;padding-top: 25px;">
                    <h1>Pulse Online Store</h1>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <h1 style="text-align: center;padding-top: 30px;">Register</h1>
                <form action="/validate.php" name="registernew" style="margin-left: 50px">
                    <div>
                        <label for="fname">First name :</label>
                        <input type="text" class="form-control" name="fname" placeholder="First name">
                        <span style="color: crimson"><?php echo $fnameErr; ?></span>
                    </div>

                    <div>
                        <input type="submit" class="btn btn-info" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>

<?php 
$fname = "";
$fnameErr = "";

if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>


</html>