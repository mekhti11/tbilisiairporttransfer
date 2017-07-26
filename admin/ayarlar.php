<?php
  include 'header.php';
  include 'sidebar.php';
  include '../php/connect.php';

/* 
*ini_set('error_reporting', E_ALL|E_STRICT);
*ini_set('display_errors', 1);
*/

  $sql = "SELECT * FROM ayarlar";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
?>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Site Genel Ayarlari</h1>

                        <?php 
                            if($_GET['ayarkaydet'] == "ok"){
                            ?>
                                <h1 class="page-subhead-line">Ayarlar Başarıyla Güncellendi ...</h1>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
                <form action="../php/islem.php" method="POST">
                    <div class="form-group">
                        <label>Title</label><br>
                        <input class="col-md-8" name="title" type="text" value="<?php echo $row['title'];?>"><br>
                    </div>  
                    <div class="form-group">
                        <label>Address</label><br>
                        <input class="col-md-8" name="address" type="text" value="<?php echo $row['address'];?>"><br>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label><br>
                        <input class="col-md-8" name="phonenum" type="text" value="<?php echo $row['phonenum'];?>"><br>
                    </div>
                    <div class="form-group">
                        <label>Mail</label><br>
                        <input class="col-md-8" name="mail" type="text" value="<?php echo $row['mail'];?>"><br>
                    </div>                          
                    <button type="submit" class="btn btn-info" name="ayarkaydet">ONAYLA </button>
                    
             </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        
    </div>
    <!-- /. WRAPPER  -->
    

<?php 
  include 'footer.php';
?>