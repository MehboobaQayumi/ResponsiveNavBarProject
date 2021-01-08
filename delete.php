<?php
  require_once("db.php");

  if(isset($_GET['Del']))
  {
    $UserID = $_GET['Del'];
    $query = "delete from tbl_sample where id = '".$UserID ."'";
    $result = mysqli_query($con,$query);

    if($result){
      header("location:view.php");
    }
    else {
      echo "please chech the delete query.";
    }
  }
  else {
    header("location:view.php");
  }
 ?>
