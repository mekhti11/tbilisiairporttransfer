<?php
  include "php/islem.php";
  include "php/connect.php";
  ini_set('error_reporting', E_ALL|E_STRICT);
  ini_set('display_errors', 1);
  $sql = "SELECT * FROM ayarlar";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $row['title'];?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/mystyle.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="js/myscript.js" ></script>
  </head>
  <body>
    <div class="navbar navbar-inverse main">
      <div class="navbar-brand " href="" style="color : white;">TBILISI AIRPORT TRANSFER</div>
      <cart-summary />
    </div>
    <div class="menu">
      <nav id="main-page-nav">
          <a href="index.php" ><div id="button-box"><i class="fa fa-home" aria-hidden="true"></i>Home</div></a>
          <a href="pages/bookashuttle.php"><div id="button-box">Book a Shuttle</div></a>
          <a href="pages/mybooking.php"><div id="button-box">My Booking</div></a>
          <a href="pages/aboutus.php"><div id="button-box">About Us</div></a>
          <a href="pages/contactus.php"><div id="button-box">Contact Us</div></a>
          <a href="pages/terms.php"><div id="button-box">Terms&Conditions</div></a>
          <button onclick="document.getElementById('id01').style.display='block'" id="button-box">
              Hotel Login
          </button>
        </nav>
    </div>

    <div id="id01" class="modal">

      <form class="modal-content animate" action="php/islem.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images/avatar.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <input type="text" placeholder="Enter Hotel Username" name="uname" required>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <button type="submit" class="btn primary-btn loginbtn" name = "hotellogin">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
