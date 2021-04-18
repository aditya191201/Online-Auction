<?php
include 'database.php';
$bid_id=$_GET['id'];

  $a="DELETE FROM bidding where bid_id='".$bid_id."'";
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
window.location="bidding_details1.php";
</script>

<script >
alert("data deletion failed");
window.location="bidding_details1.php";
</script>