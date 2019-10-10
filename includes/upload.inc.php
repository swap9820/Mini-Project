<?php
if(isset($_POST['upload']))
{
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
          $targetDestination = '../xampp/htdocs/Mini-Project/uploads/'.$fileNameNew;
          move_uploaded_file($targetTmpName,$targetDestination);
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