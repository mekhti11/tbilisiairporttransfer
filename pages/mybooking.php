<?php
  include "header.php";
?>

      
    <form class="box" action="../php/islem.php" method="POST">
      <h3 class="rezh"> Find Your Booking </h3>

      <h7 class="rezh">Name :</h7>
      <input type="text" placeholder="Name Surname" name="uname" id="mybookingasd" required><br>

      <h7 class="rezh">E-Mail :</h7>
      <input type="email" placeholder="Email" name="email" id="mybookingasd"  required><br>

      <h7 class="rezh">Reservation Number :</h7>
      <input type="text" placeholder="Reservation Number" id="rezervationnum" name="resnum" required><br>

      <button type="submit" name="searchshuttle" class="btn primary-btn loginbtn" id="rezervationnum" style="margin-left : 250px;width : 50%;" > SEARCH </button>
    </form>


    <?php
      include "footer.php";
     ?>

