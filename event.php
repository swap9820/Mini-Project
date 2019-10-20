

<main>
<header>
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
         <a class="nav-link  " href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="event.php">Events</a>
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



<section>
<div class="container pt-5">
<div class="row card-deck">
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="images/workshop.jpg" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title">Workshops</h5>
          <p class="card-text">Workshops that are led by experienced graduate students, faculty and staff from departments throughout the University.</p>
          <a href="workshop.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="images/competitions.jpg" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title">Competitions</h5>
          <p class="card-text">For knowing the capability of the students, various competitions for the students will be held in different cities across India.</p>
          <a href="competitions.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <div class="card text-center" >
        <img class="card-img-top" src="images/trek.jpg" alt="Card image cap" style="height:12rem;">
        <div class="card-body">
          <h5 class="card-title">Trek</h5>
          <p class="card-text">If you are adventurer and looking for treks that will not only give you an adrenaline rush but also excellent photo opportunities.</p>
          <a href="trek.php" class="btn btn-primary stretched-link">Explore</a>
        </div>
      </div>
    </div>
    
    
   </div>
</div>
<div class="container pt-5">
    <div class="row card-deck">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/ngo.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">NGO</h5>
              <p class="card-text">If you want to do something for your society on a broad scale then NGOs play a critical part in developing society, improving communities.</p>
              <a href="ngo.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/talks.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Talks</h5>
              <p class="card-text">If you are looking for inspiration then this is the right platform where you'll find talks on every topic you need.</p>
              <a href="talks.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card text-center" >
            <img class="card-img-top" src="images/paint.jpg" alt="Card image cap" style="height:12rem;">
            <div class="card-body">
              <h5 class="card-title">Art</h5>
              <p class="card-text">Art is often considered the process of deliberately arranging elements in a way that appeals the senses so this is the platform where you can explore your creativity.</p>
              <a href="art.php" class="btn btn-primary stretched-link">Explore</a>
            </div>
          </div>
        </div>
       </div>
    </div>
    <div class="container pt-5 pb-3">
        <div class="row card-deck ">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card text-center image  " >
                <img class="card-img-top " src="images/cycle.jpg" alt="Card image cap" style="height:12rem;">
                <div class="card-body ">
                  <h5 class="card-title">Sports</h5>
                  <p class="card-text">If you want to play some amazing sports and show your talent to others then this is the right platform.</p>
                  </div>
                  </div>
                  <a href="sports.php" class="btn btn-primary stretched-link middle">Buy</a>
                  </div>
           </div>
        </div>
        
        
  </section>
  <?php include 'footer.php' ?>
</main>