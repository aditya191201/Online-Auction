<?php
include 'database.php';
$pr_name=$_GET['name'];

  $a="DELETE FROM add_products where p_name='".$pr_name."'";
   $res=mysqli_query($con,$a);	

  if($res==1)
  {
  //echo ("file delete")
    } 
	
	  if($res==0)
  {
  } 
?>

<script >
   alert("data deletion success");
  window.location="view_product1.php";
  </script>

  <script >
  alert("data deletion failed");
  window.location="view_product1.php";
  </script>