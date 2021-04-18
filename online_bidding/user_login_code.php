<?php
ob_start();
session_start();
include 'database.php';

 $admin=$_POST['name'];
 $password=$_POST['pass']; 

 $password1 = md5($password);
 
  $a="SELECT * FROM `user_registration` WHERE  email='".$admin."' and pass='".$password1."'"; 
  $res=mysqli_num_rows(mysqli_query($con, $a));		 																																																													
  if($res)
  {
  //echo "ok";
  $_SESSION['name']=$admin;  
  header("location:user_profile1.php");
  } 
  
  else
  {
  echo "Invalid Username or Password";
  }
  ?>