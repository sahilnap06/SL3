var valid_pass = function() {
    if (document.getElementById('pswd').value == document.getElementById('cnfpswd').value) {
      document.getElementById('not-equal').style.color = 'green';
      document.getElementById('not-equal').innerHTML = 'matching';
    } else {
      document.getElementById('not-equal').style.color = 'red';
      document.getElementById('not-equal').innerHTML = 'not matching';
    }
  }