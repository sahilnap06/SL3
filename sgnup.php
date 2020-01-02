<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup form</title>
    <style>
        #error{
            colour: red;
        }
    </style>
</head>

<body>
<?php
    $fname = "";
    $fnameErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
          $fnameErr = "Name is required";
        } else {
          $fname = test_input($_POST["fname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            $fnameErr = "Only letters and white space allowed";
          }
        }
    }
?>


    <div>
        <form name="signupform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="fname">First name : </label>
        <input type="text" name="fname" placeholder="First name">
        <input type="submit" value="Sign up" onclick="showfname()"><span id="error"><?php echo $fnameErr; ?></span>
        </form>
    </div>
</body>

</html>