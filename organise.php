<?php
session_start();
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
        <a class="nav-link " href="event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="organise.php">Organise</a>
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

  <span class="border ">
   <form  class="container form-horizontal" action="includes/organiser.inc.php" enctype="multipart/form-data" method="post">
     <div class="form-row">
      <div class="form-group col-sm-6 ">
        <label class="control-label col-sm-4" for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
      
        <div class="form-group col-sm-6">
          <label class="control-label col-sm-4" for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">  
        </div>
    </div> 

  <div class="form-row">
    <div class="form-group col-sm-6">
      <label class="control-label col-sm-4" for="en">Event Name:</label>
          <input type="text" class="form-control" name="event" placeholder="Enter Event Name">
    </div>

	      <div class="form-group col-sm-6">
          <label class="control-label col-sm-4" for="Category">Category:</label>  
          <select class="form-control" id="Category" name="category">
            <option value="" selected disabled>Please select category</option>
            <option>Workshops</option>
            <option>Art</option>
            <option>Sports tournaments</option>
            <option>Educational talks</option>
            <option>Treks</option>
            <option>NGOs</option>
            <option>Competitions</option>
            <option>Others</option>
          </select>
         </div>
  </div>

     <div class="form-group">
        <label class="control-label col-sm-2" for="desc">Description:</label>
        
          <!-- <input type="text" class="form-control" id="desc" placeholder="Enter Event Description"> -->
          <textarea class="form-control" rows="3" name="desc"></textarea>
        </textarea>
      </div>

   <div class="d-inline-flex"> 
        <div class="form-group col-sm-10 ">
          <label  for="date">Date :</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group col-sm-4 ">
          <label  for="time">From :  </label>
          <input type="time" class="form-control" id="time" name="from">
        </div>
        <div class="form-group col-sm-4">
          <label for="duration">To :  </label>
          <input type="time" class="form-control" id="duration" name="to">
          </div>
    </div>

<span class="container form-horizontal">


      <div class="form-group">
        <label class="control-label col-sm-2" for="venue">Venue:</label>
          <input type="text" class="form-control" id="venue" placeholder="Enter Venue" name="venue">
      </div>

      <div class="form-group">
          <label class="control-label col-sm-2" for="price">Ticket price:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Ticket's Price" name="price">
        </div>
  
     <div class="form-group">
            <label class="control-label col-sm-2" for="img" >Cover image:</label>
              <input type="file" class="form-control" id="img" placeholder="Upload image" name="image">
          </div> 
        
       <div class="form-group"> 
         <div class="col-sm-offset-2 col-sm-10">
         <button type="file" class="btn btn-dark border-dark" name="insert-data">Submit</button>
         
         </div>
        </div>
  </span>
  </form>
    </span>
    <?php include 'footer.php' 
    ?>
 
