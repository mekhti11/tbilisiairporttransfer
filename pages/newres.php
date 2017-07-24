<?php
  include "hotelheader.php";
 ?>

    <form class="box">
      <h3 class="rezh">New Reservation</h3>
      <div class="container">

        <h7 class="rezh">Name :</h7>
        <input type="text" placeholder="Name Surname" name="uname" required><br>

        <h7 class="rezh">E-Mail :</h7>
        <input type="email" placeholder="Email" name="email" required><br>

        <h7 class="rezh">Phone :</h7>
        <input type="tel" placeholder="Phone" name="phonenum" required><br>

        <h7 class="rezh">Transfer Date:</h7>
        <input type="date" name="transferdate" value="" style="margin-left:5px;width: 26%;">

        <h7 class="rezh" style="margin-left : 70px;">Time :</h7>
        <select class="transfer-type" style=" margin-left : 20px;width : 14%;">
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
        <select class="transfer-type" style="width : 14%;margin-left : 5px;">
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
        <select class="transfer-type" name="">
          <option>Hotel to Airport</option>
          <option>Airport to Hotel</option>
        </select>

        <h7 class="rezh" style="margin-left : 75px;">Flight :</h7>
        <input type="text" name="" value="" required style="width : 263px; margin-left : 10px;">
        <br>

        <h7 class="rezh" style="margin-left:20px;">Hotel :</h7>
        <select class="transfer-type" style="margin-left:33px;margin-top:10px;" name="">
          <option>Hotel A</option>
          <option>Hotel B</option>
        </select>

        <h7 class="rezh" style="margin-left:75px;">Person :</h7>
        <input type="text" name="" value="1" required style="width : 263px;">

        <button type="submit" class="btn primary-btn loginbtn" style="margin-left : 175px;width : 50%;">RESERVE</button>

      </div>
    </form>

    <?php
      include "footer.php";
     ?>
