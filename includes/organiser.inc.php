<?php

//$connection = mysqli_connect("localhost","root","");
//$db = mysqli_select_db($conn,'organiser');

/*
*/
if(isset($_POST['insert-data']))
{
  
  require 'dbh.inc.php';
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
  $target = $_FILES['image'];  

  $targetname = $_FILES['image']['name'];
  $targetTmpName = $_FILES['image']['tmp_name'];
  $targetSize = $_FILES['image']['size'];
  $targetError = $_FILES['image']['error'];
  $targetType = $_FILES['image']['type'];
  //$image= $_FILES['image']['name'];
  $targetExt=explode('.',$targetname);
  $targetActualExt= strtolower(end($targetExt));
  $allowed=array('jpg','jpeg','png');

  if (in_array( $targetActualExt ,$allowed )) {
    if ($targetError===0) {
      if ($targetSize<1000000) {
        
        $fileNameNew=uniqid('',true).".".$targetActualExt;
        $targetDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($targetTmpName,$targetDestination);
        if(empty($name) || empty($email) || empty($event) || empty($category) || empty($date) || empty($from) || empty($to) || empty($venue) || empty($price))
    {
        header("Location: ../index.php?error=emptyfields&name=".$name."&email=".$event."&event=".$category."&category=".$date."&date=".$from."&from=".$from."&to=".$to."&venue=".$venue."&price=".$price."&image=".$image);
        exit();

    }

   else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name )){
      header("Location: ../index.php?error=invalidemail&name");
    exit();


   }
     
  /*else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  { 
    header("Location: ../index.php?error=invalidemail&name=".$name);
    exit();
  }

   elseif(!preg_match("/^[a-zA-Z0-9]*$/", $email ))
   { 
      header("Location: ../index.php?error=invaliduid&mail=".$email);
      exit();
      
   }*/
  
 
  
   else
   {
          $sql = "INSERT INTO organise (`name`,`email`,`event`,`category`,`desc`,`date`,`from`,`to`,`venue`,`price`,`image`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
          $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
               header("Location: ../index.php?error=sqlerror");
               exit();

            }
             else 
             {
              mysqli_stmt_bind_param($stmt, "ssssssiisis", $name, $email, $event, $category, $desc, $date, $from, $to, $venue, $price, $image);
               mysqli_stmt_execute($stmt);
               //mysqli_stmt_store_result($stmt);
               header("Location: ../index.php?storage=success");
               
               exit();
             }
          /*$query_run = mysqli_query($conn,$query);

          if($query_run)
          {
              echo '<script> alert("Data Saved");</script>';
              header('Location: ../index.php');
          }
          else{
            echo '<script> alert("Data Not Saved");</script>';
          }*/

   }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);

        header("Location: ../organise.php?uploadsuccess");
      }
      else {
        echo "File is too big!";
      }
      
    }
    else {
      echo "There was an error!";
    }
  }
  else {
    echo "You cannot upload this type of file";
  }
}
 
else {
  header("Location: ../index.php");
  exit();
}
