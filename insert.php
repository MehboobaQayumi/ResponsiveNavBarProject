<?php

  require_once("db.php");

  if(isset($_POST['submit']))
  {
    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['gender']))
    {
      echo "Please fill all fields.";
    }
    else {
      $FirstName = $_POST['fname'];
      $LastName = $_POST['lname'];
      $Gender = $_POST['gender'];

      $query = "insert into tbl_sample(first_name, last_name, gender) values('$FirstName','$LastName','$Gender')";
      $result = mysqli_query($con,$query);

      if($result)
      {
        header("location:view.php");
      }
      else {
        echo "Please check the Query.";
      }
    }
  }
  else {
    header("location:index.php");
  }

 ?>
