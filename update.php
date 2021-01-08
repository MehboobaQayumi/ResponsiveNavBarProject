<?php
  require_once("db.php");
  if(isset($_POST['update'])){
      $User_ID = $_GET['ID'];
      $First_Name = $_POST['fname'];
      $Last_Name = $_POST['lname'];
      $Gender = $_POST['gender'];

      $query = "update tbl_sample set first_name = '".$First_Name ."',last_name = '".$Last_Name."',gender = '".$Gender."' where id = '".$User_ID."'";
      $result = mysqli_query($con,$query);

      if($result){
        header("location:view.php");
      }
      else {
        echo "Pleae check the update Query.";
      }
  }
  else {
    header("location:view.php");
  }

 ?>
