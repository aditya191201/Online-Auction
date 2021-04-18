<?php
include 'database.php';
$bid_id=$_GET['id'];
					
$sel="SELECT * FROM bidding where bid_id='".$bid_id."'";
$ret=mysqli_query($con,$sel) or die(mysqli_connect_error());
   $i=0;
   $x=mysqli_num_rows($ret);
  
while($row=mysqli_fetch_array($ret)) 
{
    $productname = $row["product_name"];
    $baseprice = $row["price"];
    $sellprice = $row["bid_price"];
    $email = $row["email"];
    $insert = "INSERT INTO `sold_products`(`pr_name`, `base_price`, `sell_price`, `email`) VALUES ('$productname','$baseprice','$sellprice','$email')";
    $confirmpurchase = mysqli_query($con,$insert);
    $delete = "DELETE FROM add_products WHERE p_name='".$productname."'";
    $deleteproduct = mysqli_query($con,$delete);
?>  
    
    <?php
	$i++;
	}
?>

<script >
alert("Purchase is Confirmed");
window.location="view_product1.php";
</script>

<script >
alert("Purchase failed");
window.location="view_product1.php";
</script>