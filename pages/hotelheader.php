<?php
  session_start();
  include '../php/connect.php';
  ini_set('error_reporting', E_ALL|E_STRICT);
  ini_set('display_errors', 1);
  $sql = "SELECT * FROM ayarlar";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  if(! isset($_SESSION['hotel_name']))
    header("Location:../index.php")
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $row['title'];?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/mystyle.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.css" rel="stylesheet" />
    <link href="../font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="../js/myscript.js" ></script>
  </head>
  <body>

    <div class="navbar navbar-inverse main">
      <div class="navbar-brand " href="" style="color : white;width:85%;">TBILISI AIRPORT TRANSFER
      </div>
        <form method="POST" action="../php/islem.php" style="color : white;font-size:18px;"><?php echo $_SESSION['hotel_name'];?> <br>
          <button name="hotel_logout" class="btn btn-danger">Log out</button>
        </form>
      <cart-summary />
    </div>


    <div class="menu">
      <nav id="main-page-nav">
        <a href="reservations.php" ><div id="button-box">Reservations</div></a>
        <a href="newres.php" ><div id="button-box">New Reservation</div></a>
        <a href="detsearch.php" ><div id="button-box">Detailed Search</div></a>
      </nav>
    </div>
