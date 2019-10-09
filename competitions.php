<?php
include 'header.php';

?>

<main>
<header>
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
         <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="event.php">Events</a>
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
      
     </ul>
   </div>
  </div>
  </nav>

<?php include 'includes/event.inc.php'; ?>
  <?php include 'footer.php' ?>
   