<?php
  include "php/connect.php";
  include "header.php";
?>

    <form class="box">
      <h3 class="rezh">Book a Shuttle</h3>
      <div class="container">

        <h7 class="rezh">Name :</h7>
        <input type="text" placeholder="Name Surname" name="uname" required><br>

        <h7 class="rezh">E-Mail :</h7>
        <input type="email" placeholder="Email" name="email" required><br>

        <h7 class="rezh">Phone :</h7>
        <input type="tel" placeholder="Phone" name="phonenum" required><br>

        <h7 class="rezh">Transfer Date:</h7>
        <input type="date" name="transferdate" value="" style="margin-left:5px;width: 26%;">

        <h7 class="rezh" style="margin-left : 70px;">Shuttle Times :</h7>
        <select class="transfer-type" style="width : 25%; ">
          <option value="00">10 : 00</option>
          <option value="01">12 : 30</option>
          <option value="02">16 : 00</option>
          <option value="03">18 : 30</option>
        </select>
        <br>

        <h7 class="rezh">Transfer Type :</h7>
        <select class="transfer-type" name="">
          <option>Hotel to Airport</option>
          <option>Airport to Hotel</option>
        </select>

        <h7 class="rezh" style="margin-left : 75px;">Flight :</h7>
        <input type="text" name="" value="" required style="width : 263px; margin-left : 10px;"><br>

        <h7 class="rezh" style="margin-left:20px;">Hotel :</h7>
        <select class="transfer-type" style="margin-left:33px;margin-top:10px;" name="">
          <option>Hotel A</option>
          <option>Hotel B</option>
        </select>

        <h7 class="rezh" style="margin-left:75px;">Person :</h7>
        <input type="text" name="" value="1" required style="width : 263px;">

        <button type="submit" class="btn primary-btn loginbtn" style="margin-left : 175px;width : 50%;">BOOK</button>

      </div>
    </form>


    <?php
      include "footer.php";
     ?>

  </body>
</html>
