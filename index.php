<?php
  include "indexheader.php";
?>

    <form class="box" action="php/islem.php" method="POST">
      <h3 class="rezh">Reserve a Private Transfer</h3>
      <div class="container">

        <h7 class="rezh">Name :</h7>
        <input type="text" placeholder="Name Surname" name="uname" required><br>

        <h7 class="rezh">E-Mail :</h7>
        <input type="email" placeholder="Email" name="email" required><br>

        <h7 class="rezh">Phone :</h7>
        <input type="tel" placeholder="Phone" name="phonenum" required><br>

        <h7 class="rezh">Transfer Date:</h7>
        <input type="date" name="transfer_date" id="shootdate" style="margin-left:5px;width: 26%;" title="Choose your desired date" min="<?php echo date('Y-m-d'); ?>">

        <h7 class="rezh" style="margin-left : 70px;">Time :</h7>
        <select class="transfer-type" name="hour" style=" margin-left : 20px;width : 14%;" >
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
        </select>
        <select class="transfer-type" name="minute" style="width : 14%;margin-left : 5px;">
          <option value="00">00</option>
          <option value="05">05</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="20">20</option>
          <option value="25">25</option>
          <option value="30">30</option>
          <option value="35">35</option>
          <option value="40">40</option>
          <option value="45">45</option>
          <option value="50">50</option>
          <option value="55">55</option>
        </select><br>

        <h7 class="rezh">Transfer Type :</h7>
        <select class="transfer-type" name="transfer_type">
          <option>Hotel to Airport</option>
          <option>Airport to Hotel</option>
        </select>

        <h7 class="rezh" style="margin-left : 75px;">Flight :</h7>
        <input type="text" name="flight" value="" id="flight" required >
        <br>

        <h7 class="rezh" style="margin-left:20px;">Hotel :</h7>
        <input type="text" class="transfer-type" style="margin-left:33px;margin-top:10px;width:26%;" name="hotel_name">

        <h7 class="rezh" style="margin-left:75px;">Person :</h7>
        <input type="number" name="personnum" value="1" id="person" required>

        <button type="submit" name="reserveprivateshuttle" class="btn primary-btn loginbtn" style="margin-left : 175px;width : 50%;">RESERVE</button>

      </div>
    </form>

    <div class="box">
      <p>
        Tbilisi Airport Transfer : Our transfer service operates private transfer for Tbilisi Airport  to Tbilisi city center hotels. Our cars take you in front of the hotels. Our service is available for 24 hours 365 days. Our drivers wait you inside the airport with a sign of your name. We also check flight times, delays and cancellations. You do not need to worry. All of our cars are air conditioned, non smoking, insuranced. Driving is 45 minutes for Tbilisi Airport.
      </p>
    </div>

    <div class="box">
      <p>
        Istanbul Airport Shuttle : Our airport shuttle service operates shuttle buses for Tbilisi Airport  to city center hotels. We take you to your hotels or streets. We have shuttle from airport every hour and shuttle from city center 10 times / a day. Our service is available everyday. Our drivers wait you inside the airport with a sign of your name. All of our shuttle minibuses are air conditioned, non smoking, insuranced. Driving is 1 hour for Tbilisi Airport.
      </p>
    </div>

    <?php 
      include "indexfooter.php";
     ?>

