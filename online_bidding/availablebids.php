<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Rochester&display=swap" rel="stylesheet">
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="trial2.css">
  <!-- Your custom styles (optional) -->
    <!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" /> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav>
        <label class="logo">Bid Hub</label>
        <ul>
            <li><a href="admin_profile1.php">MEMBERS</a></li>
            <li><a href="add_product1.php">ADD PRODUCT</a></li>
            <li><a class = "active" href="view_product1.php">PRODUCTS</a></li>
            <li><a href="bidding_details1.php">BIDDING DETAILS</a></li>
            <li><a href="report.php">REPORTS</a></li>
            <li><a href="index.html">LOGOUT</a></li>
        </ul>
    </nav>
    <br><br>
    <div id="templatemo_left_content">

     <h1 style="text-align: center;">AVAILABLE BIDS</h1>
<br><br>
     <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0">
         <tr>
           
           <td width="107"><a href="a">PRODUCT NAME</a></td>
           <td width="50"><a href="a">PRICE</a></td>
           <td width="54"><a href="a">BIDDING PRICE</a></td>
           <td width="54"><a href="a">EMAIL</a></td>
           <td width="50"><a href="a">DELETE</a></td>
           <td width="50"><a href="a">Confirm Purchase</a></td>
          </tr>
           <?php
include 'database.php';
$product_name=$_GET['name'];
					
$ress="SELECT * FROM bidding where product_name='".$product_name."'";
$ret=mysqli_query($con,$ress) or die(mysqli_connect_error());
   $i=0;
   $x=mysqli_num_rows($ret);
  
while($row=mysqli_fetch_array($ret)) 
{
    $productname = $row['product_name'];
    $price = $row['price'];
    $bid_price = $row['bid_price'];
    $email = $row['email'];
    $id = $row['bid_id'];
?>
    <tr>
   
    <?php echo "
	<td>$productname</td>
    <td>$price</td>
    <td>$bid_price</td>
    <td>$email</td>
	<td><a href='delete_bid.php?id=$id'>DELETE</a></td>
    <td><a href='confirm_purchase.php?id=$id'>Confirm</a></td>
   	";?>
   	
    </tr>
    
    <?php
	$i++;
	}
	?>
       </table>
     </form>
     <p>&nbsp;</p>
   </div>


      <div class="wrapper-1">
    <h1 style="padding-top: 20px;">We Make Cooking Easy</h1>
    <div class="image-area-1">
      <div class="single-image-1"><img src="Cheese Pav Bhaji – Easy Winter Warming Recipe.png" alt="">
        <div class="img-name-1"><h2>Homely Taste</h2></div>
      </div>
      <div class="single-image-1"><img src="Chef Girl.jfif" alt="">
        <div class="img-name-1"><h2>Easy to Make</h2></div>
      </div>
      <div class="single-image-1"><img src="serveithot1.jpg" alt="">
        <div class="img-name-1"><h2>Serve it Hot</h2></div>
      </div>
    </div>
  </div>
</body>
</html>