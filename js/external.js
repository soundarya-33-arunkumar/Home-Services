
// For dashboard page
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


// index.php
function register(){

  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var email = document.getElementById("email").value;
  var pass = document.getElementById("mypassword").value;

  // Function validation for input from users
  if(fname == ""){
    alert("Please enter full name");
    return false; // Prevent form submission
  }
  else if(lname == ""){
    alert("Please enter last name");
    return false; 
  }
  else if (email == ""){
    alert("Please enter your email");
    return false;
  }
  else if(pass == ""){
    alert("Please enter your password");
    return false;
  }
  else{
    return true; // Allow form submission
  }

  
}

// To show password
function showpassword() {
  var x = document.getElementById("mypassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// login.html
function login(){

  var email = document.getElementById("email").value;
  var pass = document.getElementById("mypassword").value;

  // Function validation for input from users
  if (email == ""){
    alert("Please enter your email");
    return false;
  }
  else if(pass == ""){
    alert("Please enter your password");
    return false;
  }
  
}

// profile
function validateForm(){
  var fname = document.getElementById("fname").value;
  var fusername = document.getElementById("fusername").value;
  var faddress = document.getElementById("faddress").value;
  var email = document.getElementById("email").value;
  var fpassword = document.getElementById("fpassword").value;
  var phone = document.getElementById("phone").value;


  if (fname == ""){
    alert("Please enter your first name");
  }


}


// Booking slot

function booking(){

  var descbook = document.getElementById("descbook").value;

  // Display a confirmation dialog
  var userConfirmed = window.confirm("Are you sure you want to submit the form?");
  
  
    if(descbook == ""){
      alert("Please fill in the field");
      return false;
    }
    else if (userConfirmed) {
      return true; // Assuming you want to proceed with the form submission
    } else {
        // User clicked "Cancel" in the confirmation dialog
        return false; // Cancel the form submission
    }


}

function service(val){
  return val;
}

function timeserv(val){
  return val;
}


// Feedback

function validatefeedback(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;

  if (name == ""){
    alert("Please enter your name");
    return false;
  }
  else if (email == ""){
    alert("Please enter your email");
    return false;
  }
  else if (message == ""){
    message = "-";
  }
  else{
    alert("Feedback successfully submitted");
    return true;
  }


}

// sendbookslot.php for service selector
function service(val){
    
  location.href = val;
}
 