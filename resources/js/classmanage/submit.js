 

function validateForm() {
    let x = document.forms["myForm"]["cid"].value;
    let y = document.forms["myForm"]["sid"].value;
    let z = document.forms["myForm"]["date"].value;
    let q = document.forms["myForm"]["time"].value;
    let r = document.forms["myForm"]["handler"].value;
    let s = document.forms["myForm"]["link"].value;
    if (x == "" || y == "" || z == "" || q == "" || r == "" || s == "") {
      alert("Please fill all required field");
      return false;
    }
  }

   


