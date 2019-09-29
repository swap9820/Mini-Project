<?php
require "header.php";

?>

<main>
<body>
  <!-- <! Image slider/carousel >   -->
  
  <div id="slides" class="carousel slide  " data-ride="carousel" >
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>
        <li data-target="#slides" data-slide-to="4"></li>
        <li data-target="#slides" data-slide-to="5"></li>
      </ul>
      <div class="carousel-inner" >
          <div class="carousel-item active">
              <img style="width: 100% ;max-height: 350px" src="images/competitions.jpg" >
            </div>
        <div class="carousel-item">
          <img style="width: 100% ;max-height: 350px" src="images/kids.jpg" >
        </div>
        <div class="carousel-item">
          <img style="width: 100% ;max-height: 350px" src="images/wisdom.jpg" >
        </div>
        <div class="carousel-item">
          <img style="width: 100% ;max-height: 350px" src="images/longboard.jpg" >
        </div>
          <div class="carousel-item">
              <img style="width: 100% ;max-height: 350px" src="images/workshop.jpg" >
            </div>
            <div class="carousel-item">
                <img style="width: 100% ;max-height: 350px" src="images/cycle.jpg" >
            </div>
                  
      </div>

     
    </div>
    <p>You are logged in</p>
    <p>You are logged out</p>


  <section>
    <!-- POPULAR EVENTS -->
    <div class="container pb-3">
      <h1 class="text-capitalize pt-5">popular events around you</h1>
      <hr>

 
    
    <!-- EVENT CARDS -->
    <div class="container-fluid scroll">
     
      <div class="d-flex flex-row flex-nowrap">
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/workshop.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Workshops</h5>
              <p class="card-text">Workshops that are led by experienced graduate students, faculty and staff from departments throughout the University.</p>
              <a href="workshop.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/competitions.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Competitions</h5>
              <p class="card-text">Knowing the capability of the students different competitions will be held.</p>
              <a href="competitions.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
          <div class="card text-center" >
            <img class="card-img-top" src="images/trek.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Trek</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="trek.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/ngo.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">NGO</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="ngo.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/talks.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Talks</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="talks.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/cycle.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Sports</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sports.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/paint.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Art</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="art.html" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  
     
 </section>

  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about"></div>
        <h1 class="logo-text"><span>Pol</span>Aris</h1>
        <p>
          PolAris is website created by a group of people.
        </p>
        <div class="contact">
          <span><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; 123-456-789</span>
          <span><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; infopolaris@gmail.com</span>
        </div>
        <div class="socials">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          
        </div>
      <div class="footer-section links"></div>
      <div class="footer-section contact-form"></div>
    </div>

    <div class="footer-bottom">
      &copy;
    </div>
  </div> 
    

 
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

  
   
</body>
</html>
<script type="scripts.js"></script>
</main>
