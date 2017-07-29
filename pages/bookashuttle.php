<?php
  include "header.php";

?>

    <form class="box" action="../php/islem.php" method="POST">
      <h3 class="rezh">Book a Shuttle</h3>
      <div class="container">

        <h7 class="rezh">Name :</h7>
        <input type="text" placeholder="Name Surname" name="uname" required><br>

        <h7 class="rezh">E-Mail :</h7>
        <input type="email" placeholder="Email" name="email" required><br>

        <h7 class="rezh">Phone :</h7>
        <input type="tel" placeholder="Phone" name="phonenum" required><br>

        <h7 class="rezh">Transfer Date:</h7>
        <input type="date" name="transferdate" value="" style="margin-left:5px;width: 26%;" title="Choose your desired date" min="<?php echo date('Y-m-d'); ?>">

        <h7 class="rezh" style="margin-left : 70px;">Shuttle Times :</h7>
        <select class="transfer-type" id="shuttletime" name="shuttletime">
          
          
          <?php
            $sql = "SELECT times FROM shuttle_time ORDER BY id";
            if($result = mysqli_query($conn,$sql)){

              while ($row = mysqli_fetch_assoc($result)) {

                ?>
                 <option value="<?php echo $row['times']?>"><?php echo $row['times']?></option>
              <?php
              }
            }
          ?>


        </select>
        <br>

        <h7 class="rezh">Transfer Type :</h7>
        <select class="transfer-type" name="transfer_type">
          <option>Hotel to Airport</option>
          <option>Airport to Hotel</option>
        </select>

        <h7 class="rezh" style="margin-left : 75px;">Flight :</h7>
        <input type="text" name="flight" value="" required id="flight"><br>

        <h7 class="rezh" style="margin-left:20px;">Hotel :</h7>
        <input type="text" class="transfer-type" style="margin-left:33px;margin-top:10px;width:26%;" name="hotel_name">

        <h7 class="rezh" style="margin-left:75px;">Person :</h7>
        <input type="text" name="personnum" value="1" required id="person">

        <button name="bookashuttle" type="submit" class="btn primary-btn loginbtn" style="margin-left : 175px;width : 50%;">BOOK</button>

      </div>
    </form>


    <?php
      include "footer.php";
     ?>

