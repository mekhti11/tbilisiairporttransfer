<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/mystyle.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.css" rel="stylesheet" />
  </head>
  <body>
    <div class="navbar navbar-inverse main">
      <div class="navbar-brand " href=""style="color : white;">TBILISI AIRPORT TRANSFER</div>
      <cart-summary />
    </div>
    <div class="menu">
      <nav id="main-page-nav">
          <a href="../index.php" ><div id="button-box">Home</div></a>
          <a href="bookashuttle.php"><div id="button-box">Book a Shuttle</div></a>
          <a href="mybooking.php"><div id="button-box">My Booking</div></a>
          <a href="aboutus.php"><div id="button-box">About Us</div></a>
          <a href="contactus.php"><div id="button-box">Contact Us</div></a>
          <a href="terms.php"><div id="button-box">Terms&Conditions</div></a>
          <button onclick="document.getElementById('id01').style.display='block'" id="button-box">
              Hotel Login
          </button>
        </nav>
    </div>

    <div id="id01" class="modal">

      <form class="modal-content animate" action="/action_page.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="../images/avatar.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <input type="text" placeholder="Enter Hotel Username" name="uname" required>
          <input type="password" placeholder="Enter Password" name="psw" required>
          <button type="submit" class="btn primary-btn loginbtn">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>