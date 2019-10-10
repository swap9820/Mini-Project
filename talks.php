

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
  <?php include 'footer.php' ?>
   