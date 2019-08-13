function validateForm() {
    var x = document.forms["signupform"]["fname"].value;
    if (x == "") {
        document.getElementById("fname").innerHTML = "The first name cannot be empty";
        return false;
    } else {
        document.getElementById("fname").innerHTML = "";
    }

    x = document.forms["signupform"]["lname"].value;
    if (x == "") {
        document.getElementById("lname").innerHTML = "The last name cannot be empty";
        return false;
    } else {
        document.getElementById("lname").innerHTML = "";
    }

    x = document.forms["signupform"]["mailid"].value;
    if (x == "") {
        document.getElementById("mailid").innerHTML = "The Mail ID cannot be empty";
        return false;
    } else {
        document.getElementById("mailid").innerHTML = "";
    }

    x = document.forms["signupform"]["addressl1"].value;
    if (x == "") {
        document.getElementById("addressl1").innerHTML = "The field cannot be empty";
        return false;
    } else {
        document.getElementById("addressl1").innerHTML = "";
    }

    x = document.forms["signupform"]["addressl2"].value;
    if (x == "") {
        document.getElementById("addressl2").innerHTML = "The field cannot be empty";
        return false;
    } else {
        document.getElementById("addressl2").innerHTML = "";
    }
    x = document.forms["signupform"]["addressl3"].value;
    if (x == "") {
        document.getElementById("addressl3").innerHTML = "The field cannot be empty";
        return false;
    } else {
        document.getElementById("addressl3").innerHTML = "";
    }

    x = document.forms["signupform"]["city"].value;
    if (x == "") {
        document.getElementById("city").innerHTML = "The city name cannot be empty";
        return false;
    } else {
        document.getElementById("city").innerHTML = "";
    }
    x = document.forms["signupform"]["pincode"].value;
    if (x == "") {
        document.getElementById("pincode").innerHTML = "The pincode cannot be empty";
        return false;
    } else {
        document.getElementById("pincode").innerHTML = "";
    }
    x = document.forms["signupform"]["phone"].value;
    if (x == "") {
        document.getElementById("phone").innerHTML = "The phone number cannot be empty";
        return false;
    } else {
        document.getElementById("phone").innerHTML = "";
    }

    x = document.forms["signupform"]["acceptTNC"].checked;
    if (x == "on") {
        document.getElementById("tnc").innerHTML = "";
    } else {
        document.getElementById("tnc").innerHTML = "You must accept the Terms and condition";
        return false;
    }
}