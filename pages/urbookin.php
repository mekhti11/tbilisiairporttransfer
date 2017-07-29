<?php
  session_start(); 
  include 'header.php';
  ?>
  
  <div class="box">
    <table class="responstable">
      <tr>
        <th>Res. No</th>        
        <th>Name</th>
        <th>Person</th>
        <th>Date</th>
        <th>Time</th>
        <th>Hotel</th>        
        <th>Transfer Type</th>        
      </tr>
      <tr>

        <?php
          include '../php/connect.php';
          $sql = "SELECT * FROM `shuttle` WHERE `id` = ".$_SESSION['shuttle_id'];
          $result = mysqli_query($conn,$sql);
          $data = mysqli_fetch_array($result);
        ?>

        <td> <?php echo $data['id'];?> </td>
        <td> <?php echo $data['name'];?> </td>
        <td> <?php echo $data['personnum'];?> </td>
        <td> <?php echo $data['transferdate'];?> </td>
        <td> <?php echo $data['transfertime'];?> </td>
        <td> <?php echo $data['hotel_name'];?> </td>
        <td> <?php echo $data['transfertype'];?> </td>

      </tr>
    </table>
  </div>

<?php
  include 'footer.php';  
?>