function valid_pass() {
    var v1 = document.forms["registernew"]["pswd"].value;
    var v2 = document.forms["registernew"]["cnfpswd"].value;
    console.log("V1 is "+v1);
    console.log("V2 is "+v2);
    if (v1 == v2) {
      console.log("Equal");
      document.getElementById('not-equal').style.color = 'green';
      document.getElementById('not-equal').innerHTML = 'matching';
    } else {
      console.log("Not equal")
      document.getElementById('not-equal').style.color = 'red';
      document.getElementById('not-equal').innerHTML = 'not matching';
    }
  }