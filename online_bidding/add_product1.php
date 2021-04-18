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
            <li><a href="admin_profile1.php">MEMBERS</a></li>
            <li><a class= "active" href="add_product1.php">ADD PRODUCT</a></li>
            <li><a href="view_product1.php">PRODUCTS</a></li>
            <li><a href="bidding_details1.php">BIDDING DETAILS</a></li>
            <li><a href="report1.php">REPORTS</a></li>
            <li><a href="index2.html">LOGOUT</a></li>
        </ul>
    </nav>
    <br><br>
    <div>

     <h1 style="font-size: 2.5em; text-align:center; font-family: 'Poppins', sans-serif; color: #004094;">ADD PRODUCT</h1>
<br><br>
     <form action="add_product_code.php" method="post" enctype="multipart/form-data" name="form3" id="form3">
       <table width="100%" border="0" style="padding-left: 450px; font-size: 1.2em">
         <tr>
           <td>USERNAME</td>
           <td>:</td>
           <td><input name="p_name2" type="text" id="p_name2" size="30" /></td>
         </tr>
         <tr>
           <td width="26%">PRODUCT NAME</td>
           <td width="7%">:</td>
           <td width="67%"><label for="p_name"></label>
            <input name="p_name" type="text" id="p_name" size="30" /></td>
         </tr>
         <tr>
           <td>CATEGORIES</td>
           <td>:</td>
           <td><input name="catry" type="text" id="catry" size="30" /></td>
         </tr>
         <tr>
           <td>PRICE</td>
           <td>:</td>
           <td><input name="price" type="text" id="price" size="30" /></td>
         </tr>
         <tr>
           <td>UPLOAD IMAGE</td>
           <td>:</td>
           <td><label for="file"></label>
            <input type="file" name="file" id="file" /></td>
         </tr>
         <tr>
           <td>DESCRIPTION</td>
           <td>:</td>
           <td><label for="desp"></label>
            <textarea name="desp" id="desp" cols="24" rows="4"></textarea></td>
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
       </table>
     </form>
     <p>&nbsp;</p>
   </div>
  </div>
  <div class="wrapper-1" style="background-color: rgb(255, 236, 219);">
    <h1 style="padding-top: 20px;">We Make Bidding Easy</h1>
    <div class="image-area-1">
      <div class="single-image-1"><img src="hand.jpg" alt="">
      
      </div>
      <div class="single-image-1"><img src="trust.jpg" alt="">
      
      </div>
      <div class="single-image-1"><img src="auction1.jpg" alt="">
      
      </div>
    </div>
  </div>
</body>
</html>