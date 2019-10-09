<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'organiser');


if(isset($_POST['insertdata']))
{
  $name= $_POST['name'];
  $email= $_POST['email'];
  $event= $_POST['event'];
  $category= $_POST['category'];
  $desc= $_POST['desc'];
  $date= $_POST['date'];
  $from= $_POST['from'];
  $to= $_POST['to'];
  $venue= $_POST['venue'];
  $price= $_POST['price'];
  $target ="images/".basename( $_FILES['image']['name']);   
  $image= $_FILES['image']['name'];
 

 if(empty($name) || empty($email) || empty($event) || empty($category) || empty($date) || empty($from) || empty($to) || empty($venue) || empty($price) || empty($image))
    {
        header("Location: ../index.php?error=emptyfields&name=".$name."&email=".$event."&event=".$category."&category=".$date."&date=".$from."&from=".$from."&to=".$to."&venue=".$venue."&price=".$price."&image=".$image);
        exit();

    }

   else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name )){
      header("Location: ../index.php?error=invalidemail&name");
    exit();


   }
     
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  { 
    header("Location: ../index.php?error=invalidemail&name=".$name);
    exit();
  }

   elseif(!preg_match("/^[a-zA-Z0-9]*$/", $name ))
   { 
      header("Location: ../index.php?error=invaliduid&mail=".$email);
      exit();
      
   }
  
else{
  $query = "INSERT INTO organise (`name`,`email`,`event`,`category`,`desc`,`date`,`from`,`to`,`venue`,`price`,`image`) VALUES ('$name','$email','$event','$category','$desc','$date','$from','$to','$venue','$price','$image')";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
      echo '<script> alert("Data Saved");</script>';
      header('Location: ../index.php');
  }
  else{
    echo '<script> alert("Data Not Saved");</script>';
  }
}
}
?>