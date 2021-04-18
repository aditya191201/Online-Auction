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
  <link rel="stylesheet" href="contact.css">
  <!-- Your custom styles (optional) -->
    <!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" /> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<nav>
        <label class="logo">Bid Hub</label>
        <ul>
            <li><a class= "active" href="admin_profile1.php">MEMBERS</a></li>
            <li><a href="add_product1.php">ADD PRODUCT</a></li>
            <li><a href="view_product1.php">PRODUCTS</a></li>
            <li><a href="bidding_details1.php">BIDDING DETAILS</a></li>
            <li><a href="report1.php">REPORTS</a></li>
            <li><a href="index.html">LOGOUT</a></li>
        </ul>
    </nav>
    <div class="banner"></div>

  <header>
    <section class="map">
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 70vh">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.2569125361074!2d73.77047201472132!3d18.562452687384603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bec9f49c83cd%3A0x4b34a99b708e98c8!2sVridhi%20Enterprises!5e0!3m2!1sen!2sin!4v1610462781177!5m2!1sen!2sin" frameborder="0" style="border:0"></iframe>
      </div>
    </section>

  </header>

<div class="cards">

<section class="disinfo">
  <div class="container">
    <h1 class="info">GET TO US AT...</h1>
    <div class="row">
      <div class="col-lg-4">
        <p class="image"><img id="one" src="img/images.jpg" alt=""></p>
        <p class="txt"> 601, Sierra Vista, Veerbhadhra Nagar, Lane No. 5 Shri Krishna Housing Society, Opposite Paranjape Yutika, Near Ganaraj Mangal Karyalay, Baner, Pune-411045, Maharashtra, India</p>
      </div>

      <div class="col-lg-4">
        <p class="image"><img id="two" src="img/download2.png" alt=""></p>
        <p class="txt"><a href="mailto:vridhibiz@gmail.com?subject=Mail" class="call">vridhibiz@gmail.com</a></p>
      </div>

      <div class="col-lg-4">
        <p class="image"><img id="three" src="img/download3.png" alt=""></p>
        <p class="txt"><a href="tel:+919527720097" class="call">+91 9527720097</a></p>
        <p class="txt"><a href="tel:+919767148118" class="call">+91 9767148118</a></p>
        <p class="txt"><a href="tel:+917722040917" class="call">+91 7722040917</a></p>
      </div>
    </div>
</section>

</div>

<div>
<section class="bg" style="background: linear-gradient(rgba(255,255,255,.1), rgba(255,255,255,.1)),url(./img/newspices3.jpg)">
  <div class="container" id="forms">
    <div class="text">Leave Us A Message</div>
    <form method="post">
      <div class="xxx"><?php echo $error; ?></div>
      <div class="form-row">
        <div class="input-data">
          <input type="text" name="name" value="<?php echo $name; ?>" />
          <div class="underline">
          </div>
          <label for="">Name</label>
        </div>
      </div>

      <div class="form-row">
        <div class="input-data">
          <input type="text" name="email" value="<?php echo $email; ?>" />
          <div class="underline">
          </div>
          <label for="">Email Address</label>
        </div>
      </div>

      <div class="form-row">
        <div class="input-data textarea">
          <textarea name="message" required><?php echo $message; ?></textarea>
          <br />
          <div class="underline">
          </div>
          <label for="">Write your message</label>
          <br />
        </div>
      </div>

      <div class="form-row submit-btn">
        <div class="input-data">
          <div class="inner"></div>
          <input type="submit" name="submit" value="submit">
        </div>
      </div>
    </form>
  </div>

</section>
</div>
    


  
</body>
</html>