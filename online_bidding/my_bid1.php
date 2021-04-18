<?php
session_start();
$ses=$_SESSION['name'];
?>

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
<body style="background-color: rgb(255, 236, 219);">
    <nav>
        <label class="logo"><img src="auction2.jpg" alt="" style="width: 150px; height: 80px"></label>
        <ul>
            <li style="font-size: 1.2em; color: white; padding-right: 150px;">Welcome <?php echo "$ses"; ?> </li>
            <li><a href="user_profile1.php" >HOME</a></li>
            <li><a class="active" href="my_bid1.php" >MY BIDDING</a></li>
            <li><a href="my_order1.php" >MY PURCHASES</a></li>
            <li><a href="index2.html">LOGOUT</a></li>
        </ul>
    </nav>
    
    <div >
    <br><br>
     <h1 style="font-size: 2.5em; text-align:center; font-family: 'Poppins', sans-serif; color: #004094;">BIDDING DETAILS</h1>
<br><br>
     <form id="form3" name="form3" method="post" action="">
       <table width="100%" border="0" cellspacing="5" >
         <tr>
        
       </table>
     </form>
     <table width="90%" border="0" style="text-align: center; padding-left: 200px; ">
       <tr style="font-size: 1.8em; font-weight: bold;">
         <td width="26%" height="23">PRODUCT NAME</td>
         <td width="23%">BIDDER NAME</td>
         <td width="20%">BIDDING PRICE</td>
         <td width="31%">E-MAIL</td>
       </tr>
        <?php
		 include('database.php');
		$s=mysqli_query($con,"select * from bidding where email='$ses'");
while($row=mysqli_fetch_array($s))
{
		 ?>
         <tr style="font-size: 1.3em;">
          <td><a href="my_bid_details1.php?id=<?php echo $row['product_name']; ?>"><?php echo $row['product_name']; ?></a></td>
         <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['bid_price']; ?></td>
           <td><?php echo $row['email']; ?></td>
         </tr>
         <?php
}
?>
     </table>
     <p>&nbsp;</p>
   </div>



      <div class="wrapper-1" style="background-color: rgb(255, 236, 219);">
    <h1 style="padding-top: 20px;">We Make Bidding Easy</h1>
    <div class="image-area-1">
      <div class="single-image-1"><img src="trust.jpg" alt="">
     
      </div>
      <div class="single-image-1"><img src="choice.jpg" alt="">
      
      </div>
      <div class="single-image-1"><img src="auction1.jpg" alt="">

      </div>
    </div>
  </div>
</body>
</html>