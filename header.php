
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Adamina&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/0e6745b2a3.js"></script>
    <script src="https://kit.fontawesome.com/f0fe6fadbc.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
       #error_msg{color:red; font-weight:bold;}
      *{
        margin: 0%; padding: 0%;  font-family: 'Adamina', serif;


      }
      .scroll {

  overflow-x:scroll; 
}
.list
{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.login
{
 float:right;
}

</style>
<script>
  function alertUser(msg){
    alert(msg);
  }
</script>
    
</head>
<!-- NAVBAR -->
<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="images/logo3.jpg" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon bg-dark "></span>
      <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
      <li>
         <a class="nav-link active " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="organise.php">Organise</a>
      </li>
     
      
        
      <?php

          if (isset($_SESSION['userUId'])) 
           {
             
           echo '<li class="nav-item logout" data-toggle="modal" data-target="#exampleModalLong">
            <a class="nav-link" href="includes/logout.inc.php" >Logout</a>
           </li>';
           }
          else
           {
          echo'
         
          <li class="nav-item signup" data-toggle="modal" data-target="#exampleModalLong1">
          <a class="nav-link"  >Sign Up</a>
        </li>
        <li class="nav-item login" data-toggle="modal" data-target="#exampleModalLong2">
          <a class="nav-link" >Login</a>
        </li>';
          }
          ?>

      
      
        
        
        
          <li class="dropleft">
            <button class="bg-dark border-dark" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-map-marker-alt" style="font-size: 24px;color: white"> </i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Mumbai</a>
              <a class="dropdown-item" href="#">New Delhi</a>
              <a class="dropdown-item" href="#">Chennai</a>
              <a class="dropdown-item" href="#">Bangalore</a>
              <a class="dropdown-item" href="#">Pune</a>
              <a class="dropdown-item" href="#">Kolkata</a>
              <a class="dropdown-item" href="#">Hyderabad</a>
              <a class="dropdown-item" href="#">Ahmedabad</a>
            </div>
          </li>
         
      
     </ul>
   </div>
  </div>
  </nav>
  </header>
  
    <!-- signup form -->
    <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign Up Page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="id01">
                  <form id="basic-form" name="vform" action="includes/signup.inc.php" class="needs-validation" onsubmit="return Validate()" method="post" novalidate>
                   
                    <div class="form-group" id="username_div">
                        <label for="inputUserName"><b>Username</b></label> <br>
                        <input type="text" name="uid" class="textInput form-control" id="inputUserName" placeholder="Enter Username" required>
                        <div id="name_error"></div>
                      </div>
                      <div class="form-group" id="email_div">
                        <label for="inputEmail"><b>Email</b></label> <br>
                        <input type="email" name="mail" class="textInput form-control" id="inputEmail" placeholder="Enter Email" required>
                        <div id="email_error"></div>
                      </div>
                      <div class="form-group" id="password_div">
                        <label for="password_div"><b>Password</b> </label><br>
                        <input type="password" name="pwd" class="textInput form-control" placeholder="Enter Password" required>
                      </div>
                      <div class="form-group" id="pass_confirm_div">
                         <label for="pass_confirm_div"><b>Password confirm</b></label> <br>
                         <input type="password" name="pwd-repeat" class="textInput form-control" placeholder="Re-Enter Password" required>
                         <div id="password_error"></div>
                      </div>
                      <div class="form-group">
                          <label class="form-check-label"><input type="checkbox"> Remember me</label>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" onclick="clearFields()" data-dismiss="modal">Cancel</button>
                      <button type="submit" name="signup-submit" value="Register" class="btn btn-primary align-content-md-between">Sign Up</button>
                      </div>
                    </form>
                </div>
              </div>
          </div>
          </div>
      </div>
 


       <!-- LOGIN FORM    -->
      <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Login page</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
                  <form id="basic-form" action="includes/login.inc.php" class="needs-validation" method="post" novalidate>
                  <div class="form-group">
                      <label for="inputUserName"><b>Username/E-mail</b></label>
                      <input type="text" class="form-control" name="mailuid" id="inputUserName" placeholder="Username" required>
                  </div>  
                  <div class="form-group">
                  <label for="psw3"><b>Password</b></label>
                  <input type="password" class="form-control" name="pwd" id="psw1" placeholder="Password" required>
                  <div class="invalid-feedback">Please enter your password to continue.</div>
                </div>
                     
                <div class="form-group">
                <label class="form-check-label"><input type="checkbox"> Remember me</label>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary"  onclick="clearFields()" data-dismiss="modal">Cancel</button>
            <button type="submit" name="login-submit" class="btn btn-primary align-content-md-between">Login</button>
        </div>
             
            </div>
          </div>
        
      </div>
      </div>
    </form>
            
     

<script>
 (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            
             // SELECTING ALL TEXT ELEMENTS
var username = document.forms['vform']['username'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
// SETTING ALL EVENT LISTENERS
username.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
// validation function
function Validate() {
  // validate username
  if (username.value == "") {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username is required";
    username.focus();
    return false;
  }
  // validate username
  if (username.value.length < 3) {
    username.style.border = "1px solid red";
    document.getElementById('username_div').style.color = "red";
    name_error.textContent = "Username must be at least 3 characters";
    username.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email is required";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Password is required";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "The two passwords do not match";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (username.value != "") {
   username.style.border = "1px solid #5e6e66";
   document.getElementById('username_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email_div').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	document.getElementById('password_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === password_confirm.value) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('pass_confirm_div').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}

function clearFields() {

  document.getElementById('inputUserName').value = '';
  document.getElementById('inputEmail').value = '';
}
   
  </script>

  
<body>