<?php
session_start();
$ses=$_SESSION['name'];
include("database.php");
$id=$_GET['id'];

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
        <label class="logo">Bid Hub</label>
        <ul>
            <li style="font-size: 1.2em; color: white; padding-right: 150px;">Welcome <?php echo "$ses"; ?> </li>
            <li><a class="active" href="user_profile1.php" >HOME</a></li>
            <li><a href="my_bid1.php" >MY BIDDING</a></li>
            <li><a href="my_order1.php" >MY PURCHASES</a></li>
            <li><a href="index2.html">LOGOUT</a></li>
        </ul>
    </nav>
    <br><br>
    <div>

     <h1 style="text-align: center;">BIDDING FOR YOUR PRODUCT</h1>
<br><br>
     <form action="bidding_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3" style="padding-left: 400px">
       <table width="100%" border="0">
     <?php  
       $s=mysqli_query($con,"select * from add_products where p_id=$id ");
while($row=mysqli_fetch_array($s))
{
		 ?>
         <tr>
           <td>IMAGE</td>
           <td>:</td>
           <td><img name="file" src="upload/<?php echo $row['image']; ?>" alt="" width="200" height="200" /></td>
         </tr>
         <tr>
           <td>BIDDING DATE</td>
           <td>:</td>
           <td><label for="textfield"></label>
            <input type="date" name="date" id="date" /></td>
         </tr>
         <tr>
           <td width="26%">PRODUCT NAME</td>
           <td width="7%">:</td>
           <td width="67%"><label for="p_name"></label>
            <input name="p_name" type="text" id="p_name" value="<?php echo $row['p_name']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>CATEGORIES</td>
           <td>:</td>
           <td><input name="catry" type="text" id="catry" value="<?php echo $row['category']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>PRICE</td>
           <td>:</td>
           <td><input name="price" type="text" id="price" value="<?php echo $row['price']; ?>" size="30" readonly="readonly" /></td>
         </tr>
         <tr>
           <td>BIDDING COST</td>
           <td>:</td>
           <td><input name="bid_price" type="text" id="bid_price" size="30" required = "required" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td colspan="3"><h1>Personal Info</h1></td>
          </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>NAME</td>
           <td>:</td>
           <td><input name="name" type="text" id="name" size="30" required = "required" /></td>
         </tr>
         <tr>
           <td>E-MAIL</td>
           <td>:</td>
           <td><input name="mail" type="email" id="mail" size="30" required = "required" /></td>
         </tr>
         <tr>
           <td>ADDRESS</td>
           <td>:</td>
           <td><label for="add"></label>
            <textarea name="add" id="add" cols="24" rows="3"required = "required" ></textarea></td>
         </tr>
         <tr>
           <td>PHONE NO</td>
           <td>:</td>
           <td><input name="ph" type="text" id="ph" size="30" required pattern=".{9,11}"/></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td><input type="submit" name="button" id="button" value="Submit" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         
         <?php
}
?>		
       </table>
     </form>
     <p>&nbsp;</p>
   </div>

      <div class="wrapper-1"  style="background-color: rgb(255, 236, 219);">
    
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