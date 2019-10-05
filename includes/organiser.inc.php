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
  $image= $_POST['image'];

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
?>