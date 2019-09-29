<?php

if(isset($_POST['signup-submit'])){

require 'dbh.inc.php';

 $username = $_POST['uid'];
 $email = $_POST['mail'];
 $password = $_POST['pwd'];
 $passwordrepeat = $_POST['pwd-repeat'];

 if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat))
    {
        header("Location: ../index.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();

    }

   else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username )){
      header("Location: ../index.php?error=invalidemail&uid");
    exit();


   }
     
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  { 
    header("Location: ../index.php?error=invalidemail&uid=".$username);
    exit();
  }

   elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username ))
   { 
      header("Location: ../index.php?error=invaliduid&mail=".$email);
      exit();

   }
   else if($password !== $passwordrepeat ){
      header("Location: ../index.php?error=passwordcheckuid=".$username."&mail=".$email);
      exit();

   }
   else {

      $sql = "SELECT uidUsers FROM users WHERE uidUsers=? ";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
         header("Location: ../index.php?error=sqlerror");
         exit();
      }
      else
      {
         mysqli_stmt_bind_param($stmt, "s", $username);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_store_result($stmt);
         $resultcheck = mysqli_stmt_num_rows($stmt);
         if ($resultCheck > 0) {
            header("Location: ../index.php?error=usertaken&mail=".$email);
            exit();
            
         }
         else {
            $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?) ";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
               header("Location: ../index.php?error=sqlerror");
               exit();

            }
             else {
               $hashpwd = password_hash($password, PASSWORD_DEFAULT);

               mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashpwd);
               mysqli_stmt_execute($stmt);
               //mysqli_stmt_store_result($stmt);
               header("Location: ../index.php?signup=success");
               
               exit();

             }



         }

      }

   }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);


}
else{
   header("Location: ../header.php");
   exit();

}