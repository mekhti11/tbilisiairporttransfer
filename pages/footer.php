<?php
  include '../php/connect.php';

/* 
*ini_set('error_reporting', E_ALL|E_STRICT);
*ini_set('display_errors', 1);
*/

  $sql = "SELECT * FROM ayarlar";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
?>
<footer>
  <div style ="margin-left : 15px;">
    Address : <?php echo $row['address'];?> <br>
    Phone   : <?php echo $row['phonenum'];?> <br>
    E-Mail  : <?php echo $row['mail'];?> <br>
    <?php echo $row['footer'];?>
    <br><br><br>
  </div>
</footer>
