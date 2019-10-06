<?php
session_start();
include 'header.php';

?>

<main>
<?php

if (isset($_SESSION['userUId'])) {
  echo '<p> You are logged in</p>';
}
else {
  echo'<p>You are logged out</p>';
}
?>
<!-- <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="images/logo3.jpg"></a>
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
      <li class="nav-item login" data-toggle="modal" data-target="#exampleModalLong">
          <a class="nav-link" >Login</a>
        </li>
      <li class="nav-item signup" data-toggle="modal" data-target="#exampleModalLong1">
          <a class="nav-link"  >Sign Up</a>
        </li>
        <li class="dropleft">
            <button class="bg-dark border-dark" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-map-marker-alt" style="font-size: 24px;color:white"> </i>
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
  </nav> -->

<body >
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
              <a href="workshop.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/competitions.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Competitions</h5>
              <p class="card-text">Knowing the capability of the students different competitions will be held.</p>
              <a href="competitions.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
          <div class="card text-center" >
            <img class="card-img-top" src="images/trek.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Trek</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="trek.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/ngo.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">NGO</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="ngo.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/talks.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Talks</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="talks.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/cycle.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Sports</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="sports.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/paint.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Art</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="art.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  
     
 </section>


  
   
</body>
</html>
<script type="scripts.js"></script>
<?php include 'footer.php' ?>
</main>
