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
<body style="background-image: url('wallpaper.jpg'); background-size:cover; background-repeat: no-repeat;">
<nav>
        <label class="logo">Bid Hub</label>
        <ul>
            <li><a href="index2.html">HOME</a></li>
            <li><a class="active" href="user1.php">SIGNUP</a></li>
            <li><a href="admin1.php">ADMIN LOGIN</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>
            
        </ul>
    </nav>
    <br><br>
    <div  style="padding-left: 1000px; padding-top: 150px;">

     <h1 style="text-align: center; font-weight: bold; color: white;">MEMBER SIGN UP</h1>
<br><br>
     <form id="form3" name="form3" method="post" action="user_register_code.php">
       <table width="100%" border="0" cellspacing="5">
         <tr>
           <td width="24%" style="color: white;">FIRST NAME</td>
           <td width="7%">:</td>
           <td colspan="3"><label for="f_name"></label>
            <input name="f_name" type="text" id="f_name" size="30" required pattern="[a-zA-Z ]+"/></td>
         </tr>
         <tr>
           <td style="color: white;">LAST NAME</td>
           <td>:</td>
           <td colspan="3"><input name="l_name" type="text" id="l_name" size="30" required pattern=".{3,15}[a-zA-Z ]"/></td>
         </tr>
         <tr>
           <td style="color: white;">E-MAIL ID</td>
           <td>:</td>
           <td colspan="3"><input name="mail" type="email" id="mail" size="30" required="required" /></td>
         </tr>
         <tr>
           <td style="color: white;">PASSWORD</td>
           <td>:</td>
           <td colspan="3"><input name="pwd" type="password" id="pwd" size="15" required pattern="{6,15}"/></td>
         </tr>
         <tr>
           <td style="color: white;">DATE OF BIRTH</td>
           <td>:</td>
           <td colspan="3"><input name="dob" type="date" id="dob" size="30" required="required"/></td>
         </tr>
         <tr>
           <td style="color: white;">GENDER</td>
           <td>:</td>
           <td colspan="3" style="color: white;"><input type="radio" name="gen" required id="radio" value="male"  />
            <label for="gen">MALE 
              <input type="radio" name="gen" required="required" id="radio2" value="female" style="color: white;"/>
            FEMALE</label></td>
         </tr>
         <tr>
           <td style="color: white;">ADDRESS</td>
           <td>:</td>
           <td colspan="3"><label for="add"></label>
            <textarea name="add" id="add" cols="24" rows="4"></textarea></td>
         </tr>
         <tr>
           <td style="color: white;">PHONE NO</td>
           <td>:</td>
           <td colspan="3"><input name="ph" type="text" id="ph" size="10" required pattern=".{9,11}"/></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td width="9%">&nbsp;</td>
           <td width="36%"><input type="submit" name="button" id="button" value="Submit" />
            <input type="reset" name="button2" id="button2" value="Reset" /></td>
           <td width="24%">&nbsp;</td>
         </tr>
       </table>
     </form>
     <p>&nbsp;</p>
   </div>
   <!--<div class="wrapper-1">
    <h1 style="padding-top: 20px;">We Make Beeding Easy</h1>
    <div class="image-area-1">
      <div class="single-image-1"><img src="trust.jpg" alt="">
       
      </div>
      <div class="single-image-1"><img src="choice.jpg" alt="">
       
      </div>
      <div class="single-image-1"><img src="auction1.jpg" alt="">
       
      </div>
    </div>
  </div> -->
</body>
</html>